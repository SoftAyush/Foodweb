<?php 
    session_start();
include 'header.php'; 
include '../vender/massage.php';
include '../file/dbconnation.php';

// echo $_SERVER['PHP_SELF'];
$resid =$_SESSION['admin_id'];
$cat = "SELECT * from category where resid = $resid";
$categories = mysqli_query($conn, $cat);
// print_r($res);

if(isset($_POST["btnSubmit"]))
{

$resid =$_SESSION['admin_id'];
$name =$_POST['foodname'];
$category =$_POST['category'];
// $image=$_POST['foodimage'];
$price=$_POST['foodprice'];
$time=time();
$filename =$time.'_'.$_FILES["foodimage"]["name"];
$tempname= $_FILES['foodimage']['tmp_name'];
$folder = "../assets/uploadedimage/foodimage/".$filename;


$sql = "INSERT INTO foods (resid,foodname,foodimage,foodprice ,category) VALUES ('$resid','$name','$filename','$price','$category')";

if(move_uploaded_file($tempname,$folder))
 {
//   echo "image upload <br>";
//  }else{
//   echo "failed <br>";
 }

 if($conn->query($sql)== true){
  $status = "success";
  $msg = 'Data inserted successfully';
  header('Location: '.$_SERVER['PHP_SELF']."?msg=".$msg."&&status=".$status);
  // $_SESSION['success'] = "Data inserted successfully";

} else{
  $status = 'error';
  $msg = "error";
  header('Location: '.$_SERVER['PHP_SELF']."?msg=".$msg."&&status=".$status);
  // $_SESSION['error'] = "Error Data inserting Failed <br>";
  }
}
?>

<center>
    <h1> Food Uploads</h1>
</center>
<div style="margin-left: 30%;margin-right: 30%; margin-bottom:10px;">
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput">Food Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="foodname"  placeholder="Food Name">
  </div>
  <div class="form-group">
   <label for="">Food Image</label> <br>
   <input type="file" name="foodimage">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" >Food price</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="foodprice" placeholder="Food Price">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" >Category</label>
    <select name="category" id="" class="form-control">
      <option value="">Select Category</option>
      <?php 
      foreach ($categories as $key => $category) {
        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
      }
      ?>
    </select>
  </div>
  <input class="btn btn-primary" type="submit" name="btnSubmit" value="Upload"> </form>
</div>


<?php include 'footer.php'; ?>