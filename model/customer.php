<?php
    class Customer{
        private $conn;

        #customer properties
        public $id_customert;
        public $customer_name;
        public $customer_img;
        public $customer_address;
        public $total_order_value;
        public $contact;
        public $phone_number;
        public $customer_email;
        public $status;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function read(){
            #Sắp xếp câu hỏi giảm dần
            $query = "SELECT * FROM customer ORDER BY id_customer ASC";
            #statement
            $stmt = $this->conn->prepare($query);
            #Thực hiện
            $stmt->execute();
            return $stmt;
        }

        public function show(){
            $query = "SELECT * FROM customer WHERE id_customer=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_customer);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_customer = $row['id_customer'];
            $this->customer_name = $row['customer_name'];
            $this->customer_img = $row['customer_img'];
            $this->customer_address = $row['customer_address'];
            $this->total_order_value = $row['total_order_value'];
            $this->contact = $row['contact'];
            $this->phone_number = $row['phone_number'];
            $this->customer_email = $row['customer_email'];
            $this->status = $row['status'];
            return $stmt;
        }

        public function create(){
            $query = "INSERT INTO customer SET id_customer=:id_customer, customer_name=:customer_name, customer_img=:customer_img, customer_address=:customer_address, total_order_value=:total_order_value, contact=:contact, phone_number=:phone_number, customer_email=:customer_email, status=:status ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));
            $this->customer_name = htmlspecialchars(strip_tags($this->customer_name));
            $this->customer_img = htmlspecialchars(strip_tags($this->customer_img));
            $this->customer_address = htmlspecialchars(strip_tags($this->customer_address));
            $this->total_order_value = htmlspecialchars(strip_tags($this->total_order_value));
            $this->contact = htmlspecialchars(strip_tags($this->contact));
            $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
            $this->customer_email = htmlspecialchars(strip_tags($this->customer_email));
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_customer', $this->id_customer);
            $stmt->bindParam(':customer_name', $this->customer_name);
            $stmt->bindParam(':customer_img', $this->customer_img);
            $stmt->bindParam(':customer_address', $this->customer_address);
            $stmt->bindParam(':total_order_value', $this->total_order_value);
            $stmt->bindParam(':contact', $this->contact);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':customer_email', $this->customer_email);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function update(){
            $query = "UPDATE customer SET id_customer=:id_customer, customer_name=:customer_name, customer_img=:customer_img, customer_address=:customer_address, total_order_value=:total_order_value, contact=:contact, phone_number=:phone_number, customer_email=:customer_email, status=:status WHERE id_department=:id_department ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));
            $this->customer_name = htmlspecialchars(strip_tags($this->customer_name));            
            $this->customer_img = htmlspecialchars(strip_tags($this->customer_img));
            $this->customer_address = htmlspecialchars(strip_tags($this->customer_address));
            $this->total_order_value = htmlspecialchars(strip_tags($this->total_order_value));
            $this->contact = htmlspecialchars(strip_tags($this->contact));
            $this->phone_number = htmlspecialchars(strip_tags($this->phone_number));
            $this->customer_email = htmlspecialchars(strip_tags($this->customer_email));
            $this->dstatus = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_customer', $this->id_customer);
            $stmt->bindParam(':customer_name', $this->customer_name);
            $stmt->bindParam(':customer_img', $this->customer_img);
            $stmt->bindParam(':customer_address', $this->customer_address);
            $stmt->bindParam(':total_order_value', $this->total_order_value);
            $stmt->bindParam(':contact', $this->contact);
            $stmt->bindParam(':phone_number', $this->phone_number);
            $stmt->bindParam(':customer_email', $this->customer_email);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function delete(){
            $query = "DELETE FROM customer WHERE id_customer=:id_customer ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));

            $stmt->bindParam(':id_customer', $this->id_customer);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }
    }
?>