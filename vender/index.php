<?php
session_start();
    // echo $_SESSION['islogin'];

if(isset($_SESSION['islogin']) && ($_SESSION['islogin'] == true)){ //if login in session is not set
    // header("Location:index.php");

}else{
   
    // die;
    header("Location:venderLogin.php");
}
?>


<?php include 'header.php';
include '../file/dbconnation.php';
 ?>
<?php
    require '../vender/massage.php';
    ?>
<!-- <div class= "main"> -->
<div class= "wrapper" >
   
    
        <h1>Order list</h1>
        <table class="tblfull" >
    <tr> 
        <th>S.N</th>
        <th>User Name</th>
        <th>User Contact Number</th>
        <th>User Location</th>
        <th>Food Name</th>
        <th>Food Image</th>
        <th>Price</th>
        <th>Resturents Name</th>
        
    </tr>
    <?php  
               
        $i=1;
           $sql = "SELECT * FROM orders ";
            $res = mysqli_query($conn, $sql);
                if($res == TRUE) {
                $count = mysqli_num_rows($res);
                    if ($count > 0) {
                       
                    while ($fetch = mysqli_fetch_assoc($res)) {

                        
                        $name = $fetch['foodname'];
                        $image = $fetch['foodimage'];
                        $price = $fetch['foodprice'];
                        $ucity = $fetch['usercity']; 
                        $uname = $fetch['Username']; 
                        $unumber = $fetch['usernumber']; 
                        $resname = $fetch['resname']; 
                        
                     ?>
                     
    <tr> 
        <td><?php echo $i ?></td>
        <td><?php echo $uname ?></td>
        <td><?php echo $unumber ?></td>
        <td><?php echo $ucity ?></td>
        <td><?php echo $name ?></td>
        <td><img src="../assets/uploadedimage/foodimage/<?php echo $image ?>" alt="" width="150px" height="100px" style="  border-radius:10px;" > </td>
        <td><?php echo $price ?> </td>       
        <td><?php echo $resname?> </td>     
        

    </tr>    
    <?php
    $i++;
                    }
                }
            }
            ?>
</table>
    
<!-- </div> -->
</div>

<?php include 'footer.php'; ?>
