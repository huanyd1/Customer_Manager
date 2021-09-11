<?php
    class db{
            //connect datatabase by DBO
            private $servername = "localhost";
            private $username = "root";
            private $password = "";
            private $db = "customer_manager";
            private $conn;

            public function connect(){
                $this->conn = null;
                try {
                    $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->db."", $this->username, $this->password);
                    // set the PDO error mode to exception
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    #echo "Successfully";
                } 
                catch(PDOException $e) 
                {
                    echo "Failed: " . $e->getMessage();
                }
                
                return $this->conn;
            }
    }
?>