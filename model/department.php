<?php
    class Department{
        private $conn;

        #department properties
        public $id_department;
        public $department_name;
        public $department_status;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function read(){
            #Sắp xếp câu hỏi giảm dần
            $query = "SELECT * FROM department ORDER BY id_department ASC";
            #statement
            $stmt = $this->conn->prepare($query);
            #Thực hiện
            $stmt->execute();
            return $stmt;
        }

        public function show(){
            $query = "SELECT * FROM department WHERE id_department=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_department);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_department = $row['id_department'];
            $this->department_name = $row['department_name'];
            $this->department_status = $row['department_status'];
            return $stmt;
        }

        public function create(){
            $query = "INSERT INTO department SET id_department=:id_department, department_name=:department_name, department_status=:department_status ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_department = htmlspecialchars(strip_tags($this->id_department));
            $this->department_name = htmlspecialchars(strip_tags($this->department_name));
            $this->department_status = htmlspecialchars(strip_tags($this->department_status));            

            $stmt->bindParam(':id_department', $this->id_department);
            $stmt->bindParam(':department_name', $this->department_name);
            $stmt->bindParam(':department_status', $this->department_status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function update(){
            $query = "UPDATE department SET id_department=:id_department, department_name=:department_name, department_status=:department_status WHERE id_department=:id_department ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_department = htmlspecialchars(strip_tags($this->id_department));
            $this->department_name = htmlspecialchars(strip_tags($this->department_name));            
            $this->department_status = htmlspecialchars(strip_tags($this->department_status));            

            $stmt->bindParam(':id_department', $this->id_department);
            $stmt->bindParam(':department_name', $this->department_name);
            $stmt->bindParam(':department_status', $this->department_status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function delete(){
            $query = "DELETE FROM department WHERE id_department=:id_department ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_department = htmlspecialchars(strip_tags($this->id_department));

            $stmt->bindParam(':id_department', $this->id_department);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }
    }
?>