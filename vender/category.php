<?php 
session_start();
include 'header.php';
include '../file/dbconnation.php';
include '../vender/massage.php';
 ?>
    
<div class= "main">
<div class= "wrapper">
    <h1>Manage Category</h1>
</br>
    <a href="categoryupload.php" class="primarybtn">Add category</a>
</br></br>


<table class="tblfull">
    <tr> 
        <th>S.N</th>
        <th>Category Name</th>
        <!-- <th>slug</th> -->
        <th>status</th>
        <th>Actions</th>
    </tr>
    <?php   
    $id= $_SESSION['user_id'];           
        $i=1;
           $sql = "SELECT * FROM category Where id= $id";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                    if ($count > 0) {
                       
                    while ($fetch = mysqli_fetch_assoc($res)) {

                        $id = $fetch['id'];
                        $name = $fetch['name'];
                        $status = $fetch['status'];
                        // $price = $fetch['foodprice'];
                       
                     ?>
    <tr> 
        <td><?php echo $i ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $status ?> </td>
        <td><a href="categoryupdate.php?id=<?= $id ?>" class="secondarybtn"> Edit </a>
            <a href="categorydelete.php?id=<?= $id ?>"class="dangerbtn">Delete</a></td>
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