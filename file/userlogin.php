<?php
include '../file/dbconnation.php';

if(isset($_POST['submit']))
{
    $query="SELECT * FROM `users` WHERE Email='$_POST[email]' AND Password='$_POST[password]'";

   $result=mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);
//    print_r($row);
    // error_log($result);
//    die();

   if(mysqli_num_rows($result)==1)
   {

       session_start();
       $_SESSION['user_name']=$row['name'];
       $_SESSION['email']=$row['email'];
       $_SESSION['user_id']=$row['id'];
       $_SESSION['islogin'] = True;
       
        // $_SESSION['success'] = "User Logged In Successfully";
        $msg = 'User Logged In Successfully';
        // echo "index.php?msg=".$msg;die;
        $status='success';
       header("location: ../file/index.php?msg=".$msg."&&status=".$status);
   }else{
       echo "<script> alert('Incorrect Password');</script>";
   }


}
?>
<?php
session_Start();
if(isset($_SESSION['islogin']) && ($_SESSION['islogin'] == true)){ //if login in session is not set
    
    // header("Location:index.php");
}else{

}
    

?>