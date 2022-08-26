<?php
include '../file/dbconnation.php';
SESSION_start();
// unset($_SESSION["id"]);
// unset($_SESSION["username"]);
session_destroy();

header('location:venderLogin.php');

?>