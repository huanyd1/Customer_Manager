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
    $read = $indebt->read();

    #Đếm số cột
    $num = $read->rowCount();

    if($num > 0){
        $question_array = [];
        $question_array['indebt'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $question_item = array(
                'id_debt' => $id_debt,
                'id_customer' => $id_customer,
                'phone_number' => $phone_number,
                'total_money' => $total_money,
                'contact' => $contact,
                'note' => $note,
                'status' => $status
            );
            #Đẩy mảng
            array_push($question_array['indebt'], $question_item);
        }
        #Giải mã
        echo json_encode($question_array);
    }
?>