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
    $read = $staff->read();

    #Đếm số cột
    $num = $read->rowCount();

    if($num > 0){
        $question_array = [];
        $question_array['staff'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $question_item = array(
                'id_staff' => $id_staff,
                'staff_name' => $staff_name,
                'phone_number' => $phone_number,
                'status' => $status,
                'id_department' => $id_department,
                'card_number' => $card_number,
                'birdth_day' => $birdth_day,
                'staff_address' => $staff_address
            );
            #Đẩy mảng
            array_push($question_array['staff'], $question_item);
        }
        #Giải mã
        echo json_encode($question_array);
    }
?>