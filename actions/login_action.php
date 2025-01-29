<?php
include "../config/connect.php";

if (isset($_POST['login_account'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = $connect->query("select * from users where email='$email' and password='$password'");

    $count = $query->num_rows;

    if ($count) {
        $_SESSION['user'] = $email;
        redirect("../index.php");
    } 
     else{
        message("invalid email or password");
        redirect("../login.php");
     }
}

?>