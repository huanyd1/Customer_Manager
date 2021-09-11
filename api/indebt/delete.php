<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
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

    if($indebt->delete()){
        echo json_encode(array('message','Indebt Deleted'));
    }
    else{
        echo json_encode(array('message','Indebt Not Deleted'));
    }

?>