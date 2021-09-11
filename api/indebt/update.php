<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/indebt.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $indebt = new Indebt($connect);

    $data = json_decode(file_get_contents("php://input"));
    $indebt->id_debt = $data->id_debt;
    $indebt->id_customer = $data->id_customer;
    $indebt->phone_number = $data->phone_number;
    $indebt->total_money = $data->total_money;
    $indebt->contact = $data->contact;
    $indebt->note = $data->note;
    $indebt->status = $data->status;

    if($indebt->update()){
        echo json_encode(array('message','Indebt Updated'));
    }
    else{
        echo json_encode(array('message','Indebt Not Updated'));
    }

?>