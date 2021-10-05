<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/admin.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $admin = new Admin($connect);

    $admin->id_admin = isset($_GET['id']) ? $_GET['id'] : die();

    $admin->show();

    $admin_item = array(
        'id_admin' => $admin->id_admin,
        'admin_name' => $admin->admin_name,
        'admin_department' => $admin->admin_department,
        'position' => $admin->position,
        'birth_day' => $admin->birth_day,
        'admin_email' => $admin->admin_email,
    );
    print_r(json_encode($admin_item));

?>