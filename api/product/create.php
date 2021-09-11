<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/product.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $product = new Product($connect);

    $data = json_decode(file_get_contents("php://input"));
    $product->id_product = $data->id_product;
    $product->product_img = $data->product_img;
    $product->product_group = $data->product_group;
    $product->product_value = $data->product_value;
    $product->product_total = $data->product_total;
    $product->product_sold = $data->product_sold;
    $product->product_inventory = $data->product_inventory;
    $product->status = $data->status;
  

    if($product->create()){
        echo json_encode(array('message','Product Created'));
    }
    else{
        echo json_encode(array('message','Product Not Created'));
    }

?>