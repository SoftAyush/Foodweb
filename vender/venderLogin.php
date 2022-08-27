
<?php
include '../file/dbconnation.php';

if(isset($_POST['Signin']))
{
    $query="SELECT * FROM vendor WHERE username='$_POST[username]' AND passwords='$_POST[password]'";

   $result=mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);
//    print_r($row);
    // error_log($result);
//    die();

   if(mysqli_num_rows($result)==1)
   {

       session_start();
       $_SESSION['admin_name']=$row['username'];
       $_SESSION['admin_id']=$row['id'];
       $_SESSION['islogin'] = True;
       
        // $_SESSION['success'] = "User Logged In Successfully";
        $msg = 'User Logged In Successfully';
        // echo "index.php?msg=".$msg;die;
        $status='success';
       header("location: index.php?msg=".$msg."&&status=".$status);
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

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Admin login </title>
</head>
<body>
   

<div class="login-form">
    <h2>Vendor Login</h2>
    <form method="post">
<div class="input-field">
<i class="fa fa-user" aria-hidden="true"></i>
    <input type="text" placeholder="vender Name" name="username">
</div>

<div class="input-field">
<i class="fa fa-lock" aria-hidden="true"></i>
    <input type="password" placeholder="Password" name="password" >
</div>

<button type="submit" name="Signin">Sign In</button>

<!-- <div class="forgetpass">
    <a href="">forget Password ?</a>
    <div> -->
</form>
</div>


    

    
</body>
</html>