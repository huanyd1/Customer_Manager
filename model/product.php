<?php
    class Product{
        private $conn;

        #product properties
        public $id_product;
        public $product_img;
        public $product_group;
        public $product_value;
        public $product_total;
        public $product_sold;
        public $product_inventory;
        public $status;

        #connect database
        public function __construct($db)
        {
            $this->conn = $db;
        }          

        public function read(){
            #Sắp xếp câu hỏi giảm dần
            $query = "SELECT * FROM product ORDER BY id_product ASC";
            #statement
            $stmt = $this->conn->prepare($query);
            #Thực hiện
            $stmt->execute();
            return $stmt;
        }

        public function show(){
            $query = "SELECT * FROM product WHERE id_product=? LIMIT 1";
            #statement
            $stmt = $this->conn->prepare($query);
            #Kết hợp tham số
            $stmt->bindParam(1, $this->id_product);
            #Thực hiện
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_product = $row['id_product'];
            $this->product_img = $row['product_img'];
            $this->product_group = $row['product_group'];
            $this->product_value = $row['product_value'];
            $this->id_product = $row['product_total'];
            $this->product_sold = $row['product_sold'];
            $this->product_inventory = $row['product_inventory'];
            $this->status = $row['status'];
            return $stmt;
        }

        public function create(){
            $query = "INSERT INTO product SET id_product=:id_product, product_img=:product_img, product_group=:product_group, product_value=:product_value, product_total=:product_total, product_sold=:product_sold, product_inventory=:product_inventory, status=:status ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_product = htmlspecialchars(strip_tags($this->id_product));
            $this->product_img = htmlspecialchars(strip_tags($this->product_img));
            $this->product_group = htmlspecialchars(strip_tags($this->product_group));
            $this->product_value = htmlspecialchars(strip_tags($this->product_value));
            $this->product_total = htmlspecialchars(strip_tags($this->product_total));
            $this->product_sold = htmlspecialchars(strip_tags($this->product_sold));
            $this->product_inventory = htmlspecialchars(strip_tags($this->product_inventory));
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_product', $this->id_product);
            $stmt->bindParam(':product_img', $this->product_img);
            $stmt->bindParam(':product_group', $this->product_group);
            $stmt->bindParam(':product_value', $this->product_value);
            $stmt->bindParam(':product_total', $this->product_total);
            $stmt->bindParam(':product_sold', $this->product_sold);
            $stmt->bindParam(':product_inventory', $this->product_inventory);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function update(){
            $query = "UPDATE product SET id_product=:id_product, product_img=:product_img, product_group=:product_group, product_value=:product_value, product_total=:product_total, product_sold=:product_sold, product_inventory=:product_inventory, status=:status WHERE id_department=:id_department ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_product = htmlspecialchars(strip_tags($this->id_product));
            $this->product_img = htmlspecialchars(strip_tags($this->product_img));            
            $this->product_group = htmlspecialchars(strip_tags($this->product_group));
            $this->product_value = htmlspecialchars(strip_tags($this->product_value));
            $this->product_total = htmlspecialchars(strip_tags($this->product_total));
            $this->product_sold = htmlspecialchars(strip_tags($this->product_sold));
            $this->product_inventory = htmlspecialchars(strip_tags($this->product_inventory));
            $this->status = htmlspecialchars(strip_tags($this->status));            

            $stmt->bindParam(':id_product', $this->id_product);
            $stmt->bindParam(':product_img', $this->product_img);
            $stmt->bindParam(':product_group', $this->product_group);
            $stmt->bindParam(':product_value', $this->product_value);
            $stmt->bindParam(':product_total', $this->product_total);
            $stmt->bindParam(':product_sold', $this->product_sold);
            $stmt->bindParam(':product_inventory', $this->product_inventory);
            $stmt->bindParam(':status', $this->status);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }

        public function delete(){
            $query = "DELETE FROM product WHERE id_product=:id_product ";
            $stmt = $this->conn->prepare($query);
            //clean data
            $this->id_product = htmlspecialchars(strip_tags($this->id_product));

            $stmt->bindParam(':id_product', $this->id_product);

            if($stmt->execute()){
                return true;
            }
            printf("Error %s. \n" ,$stmt->error);
            return false;
        }
    }
?>