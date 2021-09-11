<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/product.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $product = new Product($connect);
    $read = $product->read();

    #Đếm số cột
    $num = $read->rowCount();

    if($num > 0){
        $question_array = [];
        $question_array['product'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $question_item = array(
                'id_product' => $id_product,
                'product_img' => $product_img,
                'product_group' => $product_group,
                'product_value' => $product_value,
                'product_total' => $product_total,
                'product_sold' => $product_sold,
                'product_inventory' => $product_inventory,
                'status' => $status
            );
            #Đẩy mảng
            array_push($question_array['product'], $question_item);
        }
        #Giải mã
        echo json_encode($question_array);
    }
?>