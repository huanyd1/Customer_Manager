<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/staff.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $staff = new Staff($connect);

    $data = json_decode(file_get_contents("php://input"));
    $staff->id_staff = $data->id_staff;
    $staff->staff_name = $data->staff_name;
    $staff->phone_number = $data->phone_number;
    $staff->status = $data->status;
    $staff->id_department = $data->id_department;
    $staff->card_number = $data->card_number;
    $staff->birdth_day = $data->birdth_day;
    $staff->staff_address = $data->staff_address;

    if($staff->update()){
        echo json_encode(array('message','Staff Updated'));
    }
    else{
        echo json_encode(array('message','Staff Not Updated'));
    }

?>