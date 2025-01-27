<?php

$connect = new mysqli("localhost", "root", "", "edunet");

session_start();
if($connect->connect_error){
    die ("db connecton failed" . $connect->connect_error);
}

//insert to database

function redirect($page): void{
echo "<script>window.open('$page', '_self')<script>";
}
function message($msg): void{
    echo "<script>alert('$msg')<script>";
}

function redirectIfNotAuth(): void{
    if(!isset($_SESSION['user'])){
        redirect("login.php");
    }
}
function getUser():array{
    $email = $_SESSION['user'];
    global $connect;
    $query = $connect->query("select * from users where email='$email'");
    $userdata =  $query->fetch_assoc();
    
     return $userdata;
}
?>