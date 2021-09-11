<?php
    class Indebt{
        private $conn;

        #indebt properties
        public $id_debt;
        public $id_customer;
        public $phone_number;
        public $total_money;
        public $contact;
        public $note;
        public $status;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function read(){
            #Sắp xếp câu hỏi giảm dần
            $query = "SELECT * FROM indebt ORDER BY id_debt ASC";
            #statement
            $stmt = $this->conn->prepare($query);
            #Thực hiện
            $stmt->execute();
            return $stmt;
        }

        public function show(){
            $query = "SELECT * FROM indebt WHERE id_debt=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_debt);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_debt = $row['id_debt'];
            $this->id_customer = $row['id_customer'];
            $this->phone_number = $row['phone_number'];
            $this->total_money = $row['total_money'];
            $this->contact = $row['contact'];
            $this->note = $row['note'];
            $this->status = $row['status'];
            return $stmt;
        }

        public function create(){
            $query = "INSERT INTO indebt SET id_debt=:id_debt, id_customer=:id_customer, phone_number=:phone_number, total_money=:total_money, contact=:contact, note=:note, status=:status";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_debt = htmlspecialchars(strip_tags($this->id_debt));
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));
            $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
            $this->total_money = htmlspecialchars(strip_tags($this->total_money));
            $this->contact = htmlspecialchars(strip_tags($this->contact));
            $this->note = htmlspecialchars(strip_tags($this->note));
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_debt', $this->id_debt);
            $stmt->bindParam(':id_customer', $this->id_customer);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':total_money', $this->total_money);
            $stmt->bindParam(':contact', $this->contact);
            $stmt->bindParam(':note', $this->note);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function update(){
            $query = "UPDATE indebt SET id_debt=:id_debt, id_customer=:id_customer, phone_number=:phone_number, total_money=:total_money, contact=:contact, note=:note, status=:status WHERE id_debt=:id_debt ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_debt = htmlspecialchars(strip_tags($this->id_debt));
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));
            $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
            $this->total_money = htmlspecialchars(strip_tags($this->total_money));
            $this->contact = htmlspecialchars(strip_tags($this->contact));
            $this->note = htmlspecialchars(strip_tags($this->note));            
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_debt', $this->id_debt);
            $stmt->bindParam(':id_customer', $this->id_customer);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':total_money', $this->total_money);
            $stmt->bindParam(':contact', $this->contact);
            $stmt->bindParam(':note', $this->note);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function delete(){
            $query = "DELETE FROM indebt WHERE id_debt=:id_debt ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_debt = htmlspecialchars(strip_tags($this->id_debt));

            $stmt->bindParam(':id_debt', $this->id_debt);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }
    }
?>