<?php
    class Admin{
        private $conn;

        #department properties
        public $id_admin;
        public $admin_name;
        public $admin_department;
        public $position;
        public $birth_day;
        public $admin_email;
        public $password;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function show(){
            $query = "SELECT * FROM `admin` WHERE id_admin=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_admin);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_admin = $row['id_admin'];
            $this->admin_name = $row['admin_name'];
            $this->admin_department = $row['admin_department'];
            $this->position = $row['position'];
            $this->birth_day = $row['birth_day'];
            $this->admin_email = $row['admin_email'];

            return $stmt;
        }
    }
?>