<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/order.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $order = new Order($connect);
    
    $data = json_decode(file_get_contents("php://input"));

    $order->id_order = $data->id_order;

    if($order->delete()){
        echo json_encode(array('message','Order Deleted'));
    }
    else{
        echo json_encode(array('message','Order Not Deleted'));
    }

?>