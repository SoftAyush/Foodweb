<?php
session_start();
include '../vender/header.php';
    include '../file/dbconnation.php';
    $id= $_SESSION['admin_id'];

    
    $sql = "SELECT * FROM vendor Where id= $id";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                // $ad_id = 1;
                if ($count > 0) {
                    while ($fetch = mysqli_fetch_assoc($res)) {
                        $id=$fetch['id'];
                        $resname = $fetch['resname'];
                        $rescontact = $fetch['resphone'];
                        $managername = $fetch['managername'];
                        $managercontact = $fetch['managercontact'];
                        $contactemail = $fetch['contactemail'];
                        $country = $fetch['country'];
                        $state = $fetch['states'];
                        $city = $fetch['city'];
                        $username = $fetch['username'];
                        $logo =$fetch['reslogo'];
                      }
                    }
                  }
                    ?>

<div class="container">      
<form class="needs-validation" novalidate class="ml-5" method="POST" action="" enctype="multipart/form-data">
    <h1> Profile Information</h1>
    <hr>
     <div class="text-center float-left">
      <label for="" class="p-3 mb-2 bg-primary text-white">New Logo</label><br>
    <img src="../assets/uploadedimage/reslogo/<?php echo $logo; ?>" class="rounded " id="img" alt="..." style="height: 200px; width: 200px; border-radius:10px;">
    </div>
    <div class="text-center ">
    <label for="" class="p-3 mb-2 bg-info text-black font-weight-bold">Old Logo</label> <br>
    <img src="../assets/uploadedimage/reslogo/<?php echo $logo; ?>" class="rounded " alt="..." style="height: 200px; width: 200px; border-radius:10px;">
    </div>
    <!-- Upload logo -->
    <div class="form-group float-left">
    <label for="formGroupExampleInput">Restaurant Logo</label>
    <input type="file" name="image" accept="image/*" id="fileinput" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="formGroupExampleInput">                                                                 
    </div>
    
    <!-- username --> 
    <div class="form-group float-left">
    <label for="formGroupExampleInput">Username</label>
    <input type="text" name="username" class="form-control" id="formGroupExampleInput" value=" <?php echo $username; ?>" >
  </div>
    
    <!-- Restaurant Name -->
    <div class="form-row">      
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Restaurant Name</label>
      <input type="text" name="resname" class="form-control" id="validationTooltip01" value=" <?php echo $resname; ?>" required>
    </div>
    <!-- Restaurant Number -->
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Restaurant Number </label>
      <input type="text" name="resphone" class="form-control" id="validationTooltip02" value=" <?php echo $rescontact; ?> " required>
    </div>
  </div>
        <!-- Manager Name -->
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Manager Name</label>
      <input type="text" name="managername" class="form-control" id="validationTooltip01" value="<?php echo $managername; ?>" required>      
    </div>
    <!-- Manager Contact People -->
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Manager Contact </label>
      <input type="text" name="managerContact" class="form-control" id="validationTooltip02" value="<?php echo $managercontact; ?>" required>
      </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Email</label>
    <input type="email" name="contactemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $contactemail; ?>" required >
  </div>
  <!-- country -->
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">Country</label>
      <input type="text" name="country" class="form-control" id="validationTooltip03" value="<?php echo $country; ?>" required>
    </div>
    <!-- state -->
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" name="state" class="form-control" id="validationTooltip03" value="<?php echo $state; ?>" required>      
      </div>
      <!-- city -->
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">City</label>
      <input type="text" name="city" class="form-control" id="validationTooltip05" value="<?php echo $city; ?>" required>
     </div>
  </div>
  <input type="hidden" name="id" value="<?= $id ?>">
  <input type="hidden" name="old_filename" value="<?= $logo ?>">
  <button class="btn btn-primary" type="submit" name="submit">Update</button>
</form>
<hr>
<h1> Update Password</h1>
<form method="POST">
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Current Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Conform Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Update</button>
  <!-- <button class=" btn btn-dark " ><a href="logout.php">Logout</a></button> -->

</form>
 </div>

 <br>
 

<?php

  // profile update code

if(isset($_POST['submit'])){  
 $time=time();
        if(isset( $_FILES["image"] ) && !empty( $_FILES["image"]["name"] )){
            $filename =$time.'_'.$_FILES["image"]["name"];
            $tempname= $_FILES['image']['tmp_name'];
            $folder = "../assets/uploadedimage/reslogo/".$filename;
        }else{
            if(isset( $_POST['old_filename']) ){
                $filename = $_POST['old_filename'];
            }
        }
$id=$_POST['id'];
$resname= $_POST['resname'];
$resphone=$_POST['resphone'];
$managername=$_POST['managername'];
$managercontact=$_POST['managerContact'];
$contactemail =$_POST['contactemail'];
$country =$_POST['country'];
$states =$_POST['state'];
$city =$_POST['city'];
$username =$_POST['username'];

// $time=time();
// $filename =$time.'_'.$_FILES["image"]["name"];
// $tempname= $_FILES['image']['tmp_name'];
// $folder = "../assets/uploadedimage/reslogo/".$filename;   

  $update="UPDATE vendor set
    resname = '$resname',
    resphone = '$resphone',
    managername ='$managername',
    managercontact ='$managercontact',
    contactemail ='$contactemail',
    country ='$country',
    states = '$state',
    city ='$city',
    username='$username',
    reslogo ='$filename'
    where id = '$id'
    ";

    //image move to the folder
    if(move_uploaded_file($tempname,$folder))
 {
        //code
 }

 //execute the query
$res1= mysqli_query($conn, $update);

//checking whether the query is executed successfully or not
if($res1 == true){
    $status = "success";
    $msg = 'Data Update successfully';
    header("location:profile.php?msg=".$msg."&&status=".$status);
}else{
    $status = "error";
    $msg = 'oops Error';
    header("location:profile.php?msg=".$msg."&&status=".$status);
    }
}


 include '../vender/footer.php';
?>