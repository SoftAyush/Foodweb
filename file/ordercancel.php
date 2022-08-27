<?php
include '../file/dbconnation.php';

$id=$_GET['id'];
$sql="DELETE FROM orders where id=$id";
$del=mysqli_query($conn,$sql);
if ($del==TRUE){
// echo "<script> alert('Oreder is canacel successfully');</script>";
header("location: profile.php");
}
else{
    echo "<script> alert('Oreder is Not canacel successfully');</script>";
}
?>