<?php
include "../config/connect.php";

if(isset($_FILES['dp_image']['name'])){
    $dp = $_FILES['dp_image']['name'];
    $tmp_dp = $_FILES['dp_image']['tmp_name'];

    move_uploaded_file($tmp_dp,"../assets/images/dp/$dp");
    $user = getUser();
    $user_id = $user['id'];
    $query = $connect->query("update users SET dp='$dp' where id='$user_id'");

    redirect("../profile.php");
}

?>