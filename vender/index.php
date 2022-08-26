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


<?php include 'header.php'; ?>
<?php
    require '../vender/massage.php';
    ?>
<div class= "main">
<div class= "wrapper">
   
    
        <h1>Order list</h1>
     <table>
        <tr>
            <th>S.N</th>
            <th>User Name</th>
            <th>User contact number</th>
            <th>User Location</th>
            <th>Food Name</th>
            <th>Food Image</th>
            <th>Food Price</th>
            <th>Resturent Name</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Ram sharma</td>
            <td>9865329467</td>
            <td>Imadol, Lalitpur</td>
            <td>MoMo</td>
            <td>momo.png</td>
            <td>Rs.110</td>
            <td>Xyz.pvt.ltd.</td>
        </tr>
     </table>
   
    
</div>
</div>

<?php include 'footer.php'; ?>
