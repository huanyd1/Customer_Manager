<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/customer.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $customer = new Customer($connect);

    $customer->id_customer = isset($_GET['id']) ? $_GET['id'] : die();

    $customer->show();

    $customer_item = array(
        'id_customer' => $customer->id_customer,
        'customer_name' => $customer->customer_name,
        'customer_img' => $customer->customer_img,
        'customer_address' => $customer->customer_address,
        'total_order_value' => $customer->total_order_value,
        'contract' => $customer->contract,
        'phone_number' => $customer->phone_number,
        'customer_email' => $customer->customer_email,
        'status' => $customer->status
    );
    print_r(json_encode($customer_item));

?>