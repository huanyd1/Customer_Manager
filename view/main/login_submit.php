<?php
session_start();
include("../../config/login_db.php");
    $admin_email = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    if($admin_email != "" && $password != ""){
        try {
            $query = "SELECT * FROM `admin` WHERE `admin_email`=:admin_email and `password`=:password";
            $stmt = $db->prepare($query);            
            $stmt -> bindParam('admin_email', $admin_email, PDO::PARAM_STR);
            $stmt -> bindParam('password', $password, PDO::PARAM_STR);
            $stmt -> execute();
            $count = $stmt->rowCount();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
                /******************** Your code ***********************/
                $_SESSION['sess_user_id']   = $row['id_admin'];
                $_SESSION['sess_user_name'] = $row['admin_email'];
                $_SESSION['sess_name'] = $row['admin_name'];
                header('location:../../index.php');
            } 
            else {
                $msg = "Invalid username and password!";
                header('location:login.php');
            }
        }
        catch (PDOException $e){
            echo "Error : ".$e->getMessage();
            header('location:login.php');
        }
    }
    else{
        $msg = "Both fields are required!";
        header('location:login.php');
    }
?>