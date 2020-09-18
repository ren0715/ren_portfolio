<?php


    include "../action/userAction.php";

    $order_id = $_GET['order_id'];
    $user_id= $_SESSION['id'];

    $result=$user->deleteOrder($_GET['order_id']);
    
?>