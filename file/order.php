<link rel="shortcut icon" href="../assets/images/3.jpg" type="image/x-icon" >

<?php
 

include '../file/dbconnation.php';
$id=$_GET["id"];
$sql = "select * from foods where id = $id ";
$res = mysqli_query($conn, $sql);
                                                                 
     if ($res == TRUE) {
        $count = mysqli_num_rows($res);
            if ($count > 0) {
                                            
            while ($fetch = mysqli_fetch_assoc($res)) {

                $name = $fetch['foodname']; 
                $image =$fetch['foodimage'];
                $price = $fetch['foodprice'];
                $resid = $fetch['resid'];                               
                                            
            }       
           
           
        }       
        
    }
        $res_all = "select * from vendor where id = '$resid'";
        $res_name = mysqli_query($conn, $res_all);                            
        $fetch1 = mysqli_fetch_assoc($res_name) 


     
        
?>
<?php 
 session_start();
 $id= $_SESSION['user_id'];
$sql = "select * from users where id = $id ";
$res = mysqli_query($conn, $sql);
                                                                 
     if ($res == TRUE) {
        $count = mysqli_num_rows($res);
            if ($count > 0) {
                                            
            while ($fetch = mysqli_fetch_assoc($res)) {
                $uname= $fetch['Name']; 
                $ucity= $fetch['city']; 
                 $unumber= $fetch['phone']; 
                
                
            }
        }
    }

?>


 
<form action=""  method="post" enctype="multipart/form-data" >
    <div>
        <img src="../assets/uploadedimage/foodimage/<?=$image ?>" alt="foodimage" height="300px" width="300px" >
    </div>
    <input type="hidden" name="image" value="<?= $image ?>">
    <input type="hidden" name="uname" value="<?=$uname?>"><br>
    <input type="hidden" name="ucity" value="<?=$ucity?>"><br>
    <input type="hidden" name="unumber" value="<?=$unumber?>"><br>
    FoodName:<input type="text"  name="fname" value ="<?= $name; ?>"> <br>
    FoodPrice:<input type="text" name="fprice" value="<?=$price?>" ><br>
    Resturent Name: <input type="text" name="resname" value="<?=$fetch1['resname']?>"> <br>
    Quantity: <input type="text" name="qty">   <br>
    
    <input type="submit" name="submit" value="order"> 


</form>

<?php
if(isset($_POST["submit"]))
{
$uname=$_POST['uname'];
$ucity=$_POST['ucity'];
$unumber=$_POST['unumber'];
$oimage=$_POST['image'];
$oname=$_POST['fname'];
$price=$_POST['fprice'];
$resname=$_POST['resname'];
$qty=$_POST['qty'];
$oprice= $price*$qty;

$sql = "INSERT INTO `orders` (Username, usercity, usernumber, foodimage, foodname, resname, foodprice) VALUES ('$uname','$ucity','$unumber','$oimage','$oname','$resname','$oprice')";

if($conn->query($sql)== true){
  
    header("location: menu.php");
    echo "<script> alert('Your Order Is Placed');</script>";
}

}
?>









  