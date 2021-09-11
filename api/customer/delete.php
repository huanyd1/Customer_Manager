<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/customer.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $department = new Customer($connect);
    
    $data = json_decode(file_get_contents("php://input"));

    $customer->id_customer = $data->id_customer;

    if($customer->delete()){
        echo json_encode(array('message','Customer Deleted'));
    }
    else{
        echo json_encode(array('message','Customer Not Deleted'));
    }

?>