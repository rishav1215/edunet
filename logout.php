<?php
include "config/connect.php";

session_destroy();

redirect("login.php");
?>