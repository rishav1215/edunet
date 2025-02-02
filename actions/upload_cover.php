<?php
include "../config/connect.php";

if(isset($_FILES['cover_image']['name'])){
    $cover = $_FILES['cover_image']['name'];
    $tmp_cover = $_FILES['cover_image']['tmp_name'];

    move_uploaded_file($tmp_cover,"../assets/images/cover/$cover");
    $user = getUser();
    $user_id = $user['id'];
    $query = $connect->query("update users SET cover_image='$cover' where id='$user_id'");

    redirect("../profile.php");
}

?>