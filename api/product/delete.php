<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
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

    if($product->delete()){
        echo json_encode(array('message','Product Deleted'));
    }
    else{
        echo json_encode(array('message','Product Not Deleted'));
    }

?>