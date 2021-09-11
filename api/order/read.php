<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/order.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $order = new Order($connect);
    $read = $order->read();

    #Đếm số cột
    $num = $read->rowCount();

    if($num > 0){
        $question_array = [];
        $question_array['order'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $question_item = array(
                'id_order' => $id_order,
                'number_order' => $number_order,
                'date_order' => $date_order,
                'id_customer' => $id_customer,
                'id_product' => $id_product,
                'order_value' => $order_value,
                'id_staff' => $id_staff,
                'status' => $status
            );
            #Đẩy mảng
            array_push($question_array['order'], $question_item);
        }
        #Giải mã
        echo json_encode($question_array);
    }
?>