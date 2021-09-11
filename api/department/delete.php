<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers, Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');

    include_once('../../config/db.php');
    include_once('../../model/department.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $department = new Department($connect);
    
    $data = json_decode(file_get_contents("php://input"));

    $department->id_department = $data->id_department;

    if($department->delete()){
        echo json_encode(array('message','Department Deleted'));
    }
    else{
        echo json_encode(array('message','Department Not Deleted'));
    }

?>