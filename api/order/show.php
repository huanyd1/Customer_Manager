<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/order.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $order = new Order($connect);

    $order->id_order = isset($_GET['id']) ? $_GET['id'] : die();

    $order->show();

    $order_item = array(
        'id_order' => $order->id_order,
        'number_order' => $order->number_order,
        'date_order' => $order->date_order,
        'id_customer' => $order->id_customer,
        'id_product' => $order->id_product,
        'order_value' => $order->order_value,
        'id_staff' => $order->id_staff,
        'status' => $order->status
    );
    print_r(json_encode($order_item));

?>