<?php
include "User.php";
if (isset($_POST)){
    $user = $_POST['username'];
    $psw = $_POST['password'];
    if (User::verify_login($user,$psw)){
        echo json_encode(array('isValid'=>true, 'user'=>$user));
        return;
    }
    echo json_encode(array('isValid'=>false));
}









