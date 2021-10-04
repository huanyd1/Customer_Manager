<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/customer.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $customer = new Customer($connect);

    $data = json_decode(file_get_contents("php://input"));
    $customer->id_customer = $data->id_customer;
    $customer->customer_name = $data->customer_name;
    $customer->customer_img = $data->customer_img;
    $customer->customer_address = $data->customer_address;
    $customer->total_order_value = $data->total_order_value;
    $customer->contract = $data->contract;
    $customer->phone_number = $data->phone_number;
    $customer->customer_email = $data->customer_email;
    $customer->status = $data->status;


    if($customer->create()){
        echo json_encode(array('message','Customer Created'));
    }
    else{
        echo json_encode(array('message','Customer Not Created'));
    }

?>