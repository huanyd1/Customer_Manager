<?php
    session_start();
    $_SESSION['sess_user_id'] = "";
    if(empty($_SESSION['sess_user_id'])) header("location:login.php");
?>