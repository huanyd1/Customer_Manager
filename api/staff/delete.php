<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
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

    if($staff->delete()){
        echo json_encode(array('message','Staff Deleted'));
    }
    else{
        echo json_encode(array('message','Staff Not Deleted'));
    }

?>