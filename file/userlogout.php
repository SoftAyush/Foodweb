<?php
session_start();
// unset($_SESSION["user_id"]);
// unset($_SESSION["user_name"]);
// unset($_SESSION["email"]);
session_destroy();
header("Location:../file/index.php");
?>