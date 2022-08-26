<?php  

session_start();
include 'header.php';
include '../file/dbconnation.php';
include '../vender/massage.php';

?>
<div class= "main">
<div class= "wrapper">
    <h1>Manage Food</h1>
</br>
    <a href="foodUpload.php" class="primarybtn">Add Food</a>
</br></br>


<table class="tblfull">
    <tr> 
        <th>S.N</th>
        <th>Food Name</th>
        <th>image</th>
        <th>Price</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>
    <?php  
     $id= $_SESSION['user_id'];             
        $i=1;
           $sql = "SELECT * FROM foods Where id= $id";
            $res = mysqli_query($conn, $sql);
                if($res == TRUE) {
                $count = mysqli_num_rows($res);
                    if ($count > 0) {
                       
                    while ($fetch = mysqli_fetch_assoc($res)) {

                        $id = $fetch['id'];
                        $name = $fetch['foodname'];
                        $image = $fetch['foodimage'];
                        $price = $fetch['foodprice'];
                        $category = $fetch['category']; 
                        $category_name = "select name from category where id = '$category'";
                        $cat_name = mysqli_query($conn, $category_name);
                        $fetch1 = mysqli_fetch_assoc($cat_name)
                     ?>
    <tr> 
        <td><?php echo $i ?></td>
        <td><?php echo $name ?></td>
        <td><img src="../assets/uploadedimage/foodimage/<?php echo $image ?>" alt="" width="150px" height="100px" style="  border-radius:10px;" > </td>
        <td><?php echo $price ?> </td>

        <?php if($fetch1){ ?>
        <td><?php echo $fetch1['name'] ?> </td>
        <?php }else{ ?>
            <td>-</td>
        <?php } ?>

        <td><a href="updatefood.php?id=<?= $id ?>" class="secondarybtn"> Edit </a>
            <a href="deletefood.php?id=<?= $id ?>"class="dangerbtn">Delete</a></td>
    </tr>    
    <?php
    $i++;
                    }
                }
            }
            ?>
</table>

</div>
</div> 

<?php include 'footer.php'; ?>