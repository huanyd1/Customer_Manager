<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
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
    $order->number_order = $data->number_order;
    $order->date_order = $data->date_order;
    $order->id_customer = $data->id_customer;
    $order->id_product = $data->id_product;
    $order->order_value = $data->order_value;
    $order->id_staff = $data->id_staff;
    $order->status = $data->status;
  

    if($order->create()){
        echo json_encode(array('message','Order Created'));
    }
    else{
        echo json_encode(array('message','Order Not Created'));
    }

?>