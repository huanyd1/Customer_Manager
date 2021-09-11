<?php
    class Order{
        private $conn;

        #order properties
        public $id_order;
        public $number_order;
        public $date_order;
        public $id_customer;
        public $id_product;
        public $order_value;
        public $id_staff;
        public $status;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function read(){
            #Sắp xếp câu hỏi giảm dần
            $query = "SELECT * FROM order ORDER BY id_order ASC";
            #statement
            $stmt = $this->conn->prepare($query);
            #Thực hiện
            $stmt->execute();
            return $stmt;
        }

        public function show(){
            $query = "SELECT * FROM order WHERE id_order=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_order);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_order = $row['id_order'];
            $this->number_order = $row['number_order'];
            $this->date_order = $row['date_order'];
            $this->id_customer = $row['id_customer'];
            $this->id_product = $row['id_product'];
            $this->order_value = $row['order_value'];
            $this->id_staff = $row['id_staff'];
            $this->status = $row['status'];
            return $stmt;
        }

        public function create(){
            $query = "INSERT INTO order SET id_order=:id_order, number_order=:number_order, date_order=:date_order, id_customer=:id_customer, id_product=:id_product, order_value=:order_value, id_staff=:id_staff, status=:status ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_order = htmlspecialchars(strip_tags($this->id_order));
            $this->number_order = htmlspecialchars(strip_tags($this->number_order));
            $this->date_order = htmlspecialchars(strip_tags($this->date_order));
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));
            $this->id_product = htmlspecialchars(strip_tags($this->id_product));
            $this->order_value = htmlspecialchars(strip_tags($this->order_value));
            $this->id_staff = htmlspecialchars(strip_tags($this->id_staff));
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_order', $this->id_order);
            $stmt->bindParam(':number_order', $this->number_order);
            $stmt->bindParam(':date_order', $this->date_order);
            $stmt->bindParam(':id_customer', $this->id_customer);
            $stmt->bindParam(':id_product', $this->id_product);
            $stmt->bindParam(':order_value', $this->order_value);
            $stmt->bindParam(':id_staff', $this->id_staff);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function update(){
            $query = "UPDATE order SET id_order=:id_order, number_order=:number_order, date_order=:date_order, id_customer=:id_customer, id_product=:id_product, order_value=:order_value, id_staff=:id_staff, status=:status WHERE id_department=:id_department ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_order = htmlspecialchars(strip_tags($this->id_order));
            $this->number_order = htmlspecialchars(strip_tags($this->number_order));            
            $this->date_order = htmlspecialchars(strip_tags($this->date_order));
            $this->id_customer = htmlspecialchars(strip_tags($this->id_customer));
            $this->id_product = htmlspecialchars(strip_tags($this->id_product));
            $this->order_value = htmlspecialchars(strip_tags($this->order_value));
            $this->id_staff = htmlspecialchars(strip_tags($this->id_staff));
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_order', $this->id_order);
            $stmt->bindParam(':number_order', $this->number_order);
            $stmt->bindParam(':date_order', $this->date_order);
            $stmt->bindParam(':id_customer', $this->id_customer);
            $stmt->bindParam(':id_product', $this->id_product);
            $stmt->bindParam(':order_value', $this->order_value);
            $stmt->bindParam(':id_staff', $this->id_staff);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function delete(){
            $query = "DELETE FROM order WHERE id_order=:id_order ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_order = htmlspecialchars(strip_tags($this->id_order));

            $stmt->bindParam(':id_order', $this->id_order);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }
    }
?>