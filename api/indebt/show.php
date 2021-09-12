<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/indebt.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $indebt = new Indebt($connect);

    $indebt->id_debt = isset($_GET['id']) ? $_GET['id'] : die();

    $indebt->show();

    $department_item = array(
        'id_debt' => $indebt->id_debt,
        'id_customer' => $indebt->id_customer,
        'phone_number' => $indebt->phone_number,
        'total_money' => $indebt->total_money,
        'contract' => $indebt->contract,
        'note' => $indebt->note,
        'status' => $indebt->status
    );
    print_r(json_encode($department_item));

?>