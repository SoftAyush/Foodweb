<?php
include '../layout/heading.php';
include '../file/dbconnation.php';
?>
<section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(../assets/images/bgi.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">North Indian Foods</h1>
                                <span>A Greate Restaurant Website</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../file/index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="../file/restaurent.php" title="" itemprop="url">Restaurant</a></li> 
                    <li class="breadcrumb-item active">North Indian</li>
                </ol>
            </div>
        </div> 
        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="remove-ext">
                                    <div class="row">
                                    <?php  
                                         $sql =" SELECT category.name, foods.foodname,foods.foodimage,foods.foodprice,foods.resid FROM category CROSS JOIN foods WHERE category.id = foods.category AND category.name='North Indian'";
                                            $res = mysqli_query($conn, $sql);
                                                                 
                                        if ($res == TRUE) {
                                         $count = mysqli_num_rows($res);
                                         if ($count > 0) {
                                            
                                         while ($fetch = mysqli_fetch_assoc($res)) {
                     
                                             
                                             $name = $fetch['foodname']; 
                                             $image =$fetch['foodimage'];
                                             $price = $fetch['foodprice'];                                   
                                             $resid = $fetch['resid']; 
                                             $res_all = "select * from vendor where id = '$resid'";
                                             $res_name = mysqli_query($conn, $res_all);
                                             $fetch1 = mysqli_fetch_assoc($res_name)                       
                                        ?>
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="#" title="" itemprop="url">
                                                    <img src="../assets/uploadedimage/foodimage/<?=$image ?>" alt="popular-dish-img1.jpg" itemprop="image" height="300px" width="400px">
                                                </a>                                               
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url"><?=$name?></a></h4>
                                                <span class="price">Rs.<?=$price?></span>
                                                <a class="brd-rd4 " href="food-detail.html" title="Order Now" itemprop="url">Order Now</a>
                                                <div class="restaurant-info">
                                                    <img src="../assets/uploadedimage/reslogo/<?php echo $fetch1['reslogo']?>" alt="restaurant-logo1.png" itemprop="image" height="50px" width="50px"  style="border-radius: 50px;">  
                                                    <div class="restaurant-info-inner">
                                                        <h6 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url"><?=$fetch1['resname']?></a></h6>
                                                        <span class="red-clr"><?=$fetch1['city']?>,<?=$fetch1['country']?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                    <?php
                                         }
                                    }
                                }

                                ?>                               
                                        </div>
                                    </div>
                                <div class="pagination-wrapper text-center">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREVIOUS</a></li>
                                        <li class="page-item active"><span class="page-link brd-rd2">1</span></li>
                                        <!-- <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">3</a></li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                        <li class="page-item">........</li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li> -->
                                        <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                    </ul>
                                </div><!-- Pagination Wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>               
<?php
include '../layout/footer.php';
?>        