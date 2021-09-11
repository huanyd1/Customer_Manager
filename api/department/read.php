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
    $read = $department->read();

    #Đếm số cột
    $num = $read->rowCount();

    if($num > 0){
        $question_array = [];
        $question_array['department'] = [];

        while($row = $read->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $question_item = array(
                'id_department' => $id_department,
                'department_name' => $department_name,
                'department_status' => $department_status
            );
            #Đẩy mảng
            array_push($question_array['department'], $question_item);
        }
        #Giải mã
        echo json_encode($question_array);
    }
?>