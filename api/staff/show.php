<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/staff.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $staff = new Staff($connect);

    $staff->staff = isset($_GET['id']) ? $_GET['id'] : die();

    $staff->show();

    $staff = array(
        'id_staff' => $staff->id_staff,
        'staff_name' => $staff->staff_name,
        'phone_number' => $staff->phone_number,
        'status' => $staff->status,
        'id_department' => $staff->id_department,
        'card_number' => $staff->card_number,
        'birdth_day' => $staff->birdth_day,
        'staff_address' => $staff->staff_address
    );
    print_r(json_encode($staff_item));

?>