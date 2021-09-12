<?php
    class Admin{
        private $conn;

        #department properties
        public $id_admin;
        public $admin_name;
        public $admin_department;
        public $birth_day;
        public $admin_email;
        public $password;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function show(){
            $query = "SELECT * FROM `admin` WHERE id_admin=? and password LIMIT 1";
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
    }
?>