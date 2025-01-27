<?php
include "../config/connect.php";

if(isset($_POST['login_action.php'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = $connect->query("select * from where email='$email' and password='$password'");

    $count = $query->num_rows;

    if($count){
        $_SESSION['user'] = $email;
        redirect("../index.php");
    }
    else{
        message("ivalid email or password");
        redirect("../login.php");
    }
}

?>