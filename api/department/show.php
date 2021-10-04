<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/department.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $department = new Department($connect);

    $department->id_department = isset($_GET['id']) ? $_GET['id'] : die();

    $department->show();

    $department_item = array(
        'id_department' => $department->id_department,
        'department_name' => $department->department_name,
        'status' => $department->status
    );
    print_r(json_encode($department_item));

?>