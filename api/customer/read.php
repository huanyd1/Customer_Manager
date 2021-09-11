<?php
    #Convert json  
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../../config/db.php');
    include_once('../../model/customer.php');

    #class in db.php
    $db = new db();
    #call funcion
    $connect = $db->connect();

    $department = new Customer($connect);
    $read = $customer->read();

    #Đếm số cột
    $num = $read->rowCount();

    if($num > 0){
        $question_array = [];
        $question_array['customer'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $question_item = array(
                'id_customer' => $id_customer,
                'customer_name' => $customer_name,
                'customer_img' => $customer_img,
                'customer_address' => $customer_address,
                'total_order_value' => $total_order_value,
                'contact' => $contact,
                'phone_number' => $phone_number,
                'customer_email' => $customer_email,
                'status' => $status
            );
            #Đẩy mảng
            array_push($question_array['customer'], $question_item);
        }
        #Giải mã
        echo json_encode($question_array);
    }
?>