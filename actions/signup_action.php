<?php
include_once "../config/connect.php";

if(isset($_POST['create_account'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $day = $_POST['day'];
    $months = $_POST['months'];
    $years = $_POST['years'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact =$_POST['contact'];
    $password = md5($_POST['password']);

    $query = $connect->prepare("insert into users (firstname,lastname,day,months,years,gender,email,contact,password) 
    value (?,?,?,?,?,?,?,?,?)");

    $query->bind_param("sssssssss", $firstname,$lastname,$day,$months,$years,$gender,$email,$contact,$password);


    if($query->execute()){
        redirect("../login.php");
    }
    else{
        message("something went wrong");
    }
}
?>