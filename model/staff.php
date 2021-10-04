<?php
    class Staff{
        private $conn;

        #staff properties
        public $id_staff;
        public $staff_name;
        public $phone_number;
        public $status;
        public $id_department;
        public $card_number;
        public $birth_day;
        public $staff_address;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function read(){
            #Sắp xếp câu hỏi giảm dần
            $query = "SELECT * FROM staff ORDER BY id_staff ASC";
            #statement
            $stmt = $this->conn->prepare($query);
            #Thực hiện
            $stmt->execute();
            return $stmt;
        }

        public function show(){
            $query = "SELECT * FROM staff WHERE id_staff=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_staff);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_staff = $row['id_staff'];
            $this->staff_name = $row['staff_name'];
            $this->phone_number = $row['phone_number'];
            $this->status = $row['status'];
            $this->id_department = $row['id_department'];
            $this->card_number = $row['card_number'];
            $this->birth_day = $row['birth_day'];
            $this->staff_address = $row['staff_address'];
            return $stmt;
        }

        public function create(){
            $query = "INSERT INTO staff SET id_staff=:id_staff, staff_name=:staff_name, phone_number=:phone_number, status=:status, id_department=:id_department, card_number=:card_number, birth_day=:birth_day, staff_address=:staff_address ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_staff = htmlspecialchars(strip_tags($this->id_staff));
            $this->staff_name = htmlspecialchars(strip_tags($this->staff_name));
            $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
            $this->status = htmlspecialchars(strip_tags($this->status));
            $this->id_department = htmlspecialchars(strip_tags($this->id_department));
            $this->card_number = htmlspecialchars(strip_tags($this->card_number));
            $this->birth_day = htmlspecialchars(strip_tags($this->birth_day));
            $this->staff_address = htmlspecialchars(strip_tags($this->staff_address));            

            $stmt->bindParam(':id_staff', $this->id_staff);
            $stmt->bindParam(':staff_name', $this->staff_name);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':id_department', $this->id_department);
            $stmt->bindParam(':card_number', $this->card_number);
            $stmt->bindParam(':birth_day', $this->birth_day);
            $stmt->bindParam(':staff_address', $this->staff_address);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function update(){
            $query = "UPDATE staff SET id_staff=:id_staff, staff_name=:staff_name, phone_number=:phone_number, status=:status, id_department=:id_department, card_number=:card_number, birth_day=:birth_day, staff_address=:staff_address WHERE id_staff=:id_staff ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_staff = htmlspecialchars(strip_tags($this->id_staff));
            $this->staff_name = htmlspecialchars(strip_tags($this->staff_name));            
            $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
            $this->status = htmlspecialchars(strip_tags($this->status));
            $this->id_department = htmlspecialchars(strip_tags($this->id_department));
            $this->card_number = htmlspecialchars(strip_tags($this->card_number));
            $this->birth_day = htmlspecialchars(strip_tags($this->birth_day));
            $this->staff_address = htmlspecialchars(strip_tags($this->staff_address));            

            $stmt->bindParam(':id_staff', $this->id_staff);
            $stmt->bindParam(':staff_name', $this->staff_name);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':id_department', $this->id_department);
            $stmt->bindParam(':card_number', $this->card_number);
            $stmt->bindParam(':birth_day', $this->birth_day);
            $stmt->bindParam(':staff_address', $this->staff_address);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function delete(){
            $query = "DELETE FROM staff WHERE id_staff=:id_staff ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_staff = htmlspecialchars(strip_tags($this->id_staff));

            $stmt->bindParam(':id_staff', $this->id_staff);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }
    }
?>