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

    $product->id_product = isset($_GET['id']) ? $_GET['id'] : die();

    $product->show();

    $product_item = array(
        'id_product' => $product->id_product,
        'product_name' => $product->product_name,
        'product_img' => $product->product_img,
        'product_group' => $product->product_group,
        'product_value' => $product->product_value,
        'product_total' => $product->product_total,
        'product_sold' => $product->product_sold,
        'product_inventory' => $product->product_inventory,
        'status' => $product->status
    );
    print_r(json_encode($product_item));

?>