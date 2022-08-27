<?php
 include '../layout/heading.php';
 include '../file/dbconnation.php';
 ?>

    <section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url(../assets/images/bgi.jpg); background-size: 100%;"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline">Choose Your Favourite Food</h1>
							
						</div>
					</div>
                </div>
            </div>
        </section>
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../file/index.php" title="" itemprop="url">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Search</a></li> -->
                    <li class="breadcrumb-item active">Restaurants Found</li>
                </ol>
            </div>
        </div>
        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <div class="sidebar left">
                                                <div class="widget style2 Search_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                           
                                                            <li><a href="../file/north-indian.php" title="" itemprop="url">North Indian</a> </li>
                                                            <li><a href="../file/chinese.php" title="" itemprop="url">Chinese</a> </li>                                                            
                                                            <li><a href="../file/pizza.php" title="" itemprop="url">Thakali</a> </li>                                                          
                                                            <li><a href="../file/italian.php" title="" itemprop="url">Italian</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div><!--Sidebar -->
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="title2-wrapper">
                                                <h3 class="marginb-0" itemprop="headline">Order food online in Nepal</h3>
                                            </div>
                                            <div class="remove-ext">
                                                <div class="row">
                                                <?php  
                                         $sql = "SELECT * FROM foods ";
                                            $res = mysqli_query($conn, $sql);
                                                                 
                                        if ($res == TRUE) {
                                         $count = mysqli_num_rows($res);
                                         if ($count > 0) {
                                            
                                         while ($fetch = mysqli_fetch_assoc($res)) {
                     
                                             $id = $fetch['id'];
                                             $name = $fetch['foodname']; 
                                             $image =$fetch['foodimage'];
                                             $price = $fetch['foodprice'];                                   
                                             $resid = $fetch['resid']; 
                                             $res_all = "select * from vendor where id = '$resid'";
                                             $res_name = mysqli_query($conn, $res_all);
                                             $fetch1 = mysqli_fetch_assoc($res_name)                       
                                        ?>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.2s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/uploadedimage/reslogo/<?php echo $fetch1['reslogo']?>" alt="most-popular-img" itemprop="image" style="border-radius: 50px;"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr"><?=$fetch1['city']?>,<?=$fetch1['country']?></span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url"><?=$fetch1['resname']?></a></h4>
                                                                <span class="food-types">Type of food: <a href="#" title="" itemprop="url"><?=$name?></a></span>
                                                                <ul class="post-meta">
                                                                    <li><i class="fa fa-check-circle-o"></i> Rs.<?=$price?></li>
                                                                    <li><i class="flaticon-money"></i> Accepts cash payments</li>
                                                                </ul>
                                                                <a class="brd-rd30" href="../file/menu.php" title="Order Online"><i class="fa fa-angle-double-right"></i> Order Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <?php 
                                         }
                                             }
                                                 }
                                                    ?>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
<?php 
include '../layout/footer.php';
?>