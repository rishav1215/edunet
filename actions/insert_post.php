<?php
include "../config/connect.php";

$user = getUser();

if(isset($_POST['send_post'])){
    $content = $_POST['content'] ?? null;
    $image = null;

    if($_FILES['image']['name'] !=""){
      $image = $_FILES['image']['name'];
      $temp_image = $_FILES['image']['tmp_name'];

      move_uploaded_file($temp_image, "../assets/post_image/$image");

    }

    $user_id = $user['id'];

    $query = $connect->query("insert into posts(content, image, user_id) value ('$content','$image','$user_id')");

    if(!$query){
        redirect("../index.php");
        message("post insertion failed try again");
    }
   redirect("../index.php");
   
}

?>