<?php
include '../file/dbconnation.php';
SESSION_start();
SESSION_destroy();

header('location:venderLogin.php');

?>