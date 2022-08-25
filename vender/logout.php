<?php
include '../file/dbconnation.php';
SESSION_start();
unset($_SESSION["id"]);
unset($_SESSION["username"]);

header('location:venderLogin.php');

?>