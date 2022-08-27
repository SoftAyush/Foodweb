<?php
include '../file/dbconnation.php';
session_start();


if(isset($_SESSION['islogin']) && ($_SESSION['islogin'] == true)){ //if login in session is not set
    // header("Location:index.php");

}else{
   
    // die;
    // header("Location:venderLogin.php");
}


?>




<?php 
include '../layout/heading.php';
require '../vender/massage.php';

// print_r($_SESSION['']);
 ?>
            <section>
            <div class="block">
                <div style="background-image: url(../assets/images/bgi.jpg); background-size: 100%;" class="fixed-bg"></div>
                <div class="restaurant-searching text-center">
                    <div class="restaurant-searching-inner">
                        <h2 itemprop="headline">Order <span>Food Online From</span> the Best Restaurants</h2>
                        <form class="restaurant-search-form brd-rd2">
                            <div class="row mrg10">
                                <div class="col-md-6 col-sm-5 col-lg-5 col-xs-12">
                                    <div class="input-field brd-rd2"><input class="brd-rd2" type="text" placeholder="Restaurant Name"></div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                    <div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input class="brd-rd2" type="text" placeholder="Search Location"><i class="fa fa-location-arrow"></i></div>
                                </div>
                                <div class="col-md-2 col-sm-3 col-lg-3 col-xs-12">
                                    <button class="brd-rd2 red-bg" type="submit">SEARCH</button>
                                </div>
                            </div>
                        </form>
                        <div class="funfacts">
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="../assets/images/resource/fact-icon1.png" alt="fact-icon1" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">137</span></strong>
                                            <h5>Restaurant</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="../assets/images/resource/fact-icon2.png" alt="fact-icon2" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">158</span></strong>
                                            <h5>People Served</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="../assets/images/resource/fact-icon3.png" alt="fact-icon3" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">659</span>K</strong>
                                            <h5>Happy Service</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="../assets/images/resource/fact-icon4.png" alt="fact-icon4" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">235</span></strong>
                                            <h5>Regular users</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                        </div><!-- Fun Facts -->
                    </div>
                    <img class="left-scooty-mockup" src="../assets/images/resource/restaurant-mockup1.png" alt="restaurant-mockup1.png" itemprop="image">
                    <img class="bottom-clouds-mockup" src="../assets/images/resource/clouds.png" alt="clouds.png" itemprop="image">
                </div><!-- Restaurant Searching -->
            </div>
        </section>
        

        <section>
            <div class="block remove-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Website for Restaurant and Cafe</span>
                                    <h2 itemprop="headline">Top Restaurants</h2>
                                    <p itemprop="description">Want a delicious meal, but no time we will deliver it hot and yummy.</p>
                                </div>
                            </div>
                            <div class="centeret">
                            <?php  
                                 $sql = "SELECT * FROM vendor Limit 6";
                                 $res = mysqli_query($conn, $sql);
                                                                 
                                 if ($res == TRUE) {
                                     $count = mysqli_num_rows($res);
                                         if ($count > 0) {
                                            
                                         while ($fetch = mysqli_fetch_assoc($res)) {
                     
                                             $id = $fetch['id'];                                             
                                             $logo = $fetch['reslogo'];  
                                             ?>                         
                                <div class="top-restaurants-wrapper">
                                <ul class="restaurants-wrapper style2">                                                            
                                <li class="wow bounceIn" data-wow-delay="0.2s"><div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant " itemprop="url"><img src="../assets/uploadedimage/reslogo/<?php echo $logo ?>" alt="resturant logo" itemprop="image"></a></div></li>                                            
                                 
                                   
                                </ul>
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
        </section><!-- top resturents -->
      

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Your Favourite Food</span>
                                    <h2 itemprop="headline">Choose & Enjoy</h2>
                                </div>
                                <?php  
                                 $sql = "SELECT * FROM foods LIMIT 3 ";
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
                            </div>
                                <div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                            <div class="popular-dish-thumb">
                                                <a href="#" title="" itemprop="url"><img src="../assets/uploadedimage/foodimage/<?php echo $image ?>" alt="popular-dish-img1.jpg" itemprop="image" height="300px" width="400px"></a>
                                            
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline">
                                                    <?=$name;?>
												</h4>
                                            
                                                <span class="price">Rs.<?=$price?></span>
                                                <a class="brd-rd2" href="food-detail.html" title="Order Now" itemprop="url">Order Now</a>
                                                <div class="restaurant-info">
                                                    <img src="../assets/uploadedimage/reslogo/<?php echo $fetch1['reslogo'] ?>" alt="restaurant-logo1.png" itemprop="image" height=50px; width= 50px; style="border-radius: 50px;">
                                                    <div class="restaurant-info-inner">
                                                        <h6 itemprop="headline"><a href="restaurant-detail.html" title="" itemprop="url"><?php echo $fetch1['resname']?></a></h6>
                                                        <span class="red-clr"><?=$fetch1['city']?>,<?=$fetch1['country']?></span>
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
                                    
                                            
                                        </div><!-- Popular Dish Box -->
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->
		
		<section>
            <div class="block grayish low-opacity">
				<div class="fixed-bg" style="background-image: url(../assets/images/pattern.png)"></div>
				<div class="top-mockup"><img src="../assets/images/resource/mockup2.png" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="filters-wrapper">
                                <div class="title1-wrapper text-center">
									<div class="title1-inner">
										<span>Your Favourite Food</span>
										<h2 itemprop="headline">Popular This Month</h2>
										<b>In Your City</b>
									</div>
								</div>
                            </div>
                        </div>
                      
						<div class="col-md-8 col-xs-12"> 
                                            
							<div class="popular-of-month" style="margin-left:200px; ">
                                
                        <?php  
                                 $sql = "SELECT * FROM foods Limit 4 ";
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
                            
								<div class="pop-dish wow fadeIn" data-wow-delay="0.1s">
                              
									<div class="poplr-dish" style="margin-top:10px;">   
                                                                        
										<img src="../assets/uploadedimage/foodimage/<?php echo $image ?>" alt="" height="100px">
										<div class="dish-meta">
											<span>Rs.<?=$price?></span>
											<h4><a href="#" title=""><?=$name?></a></h4>
										</div>
									</div>
									<div class="item-meta">
										<img alt="" src="../assets/uploadedimage/reslogo/<?php echo $fetch1['reslogo']?>" style="border-radius: 50px;" >
										<div>
											<span><?=$fetch1['resname']?></span>
											<p><?=$fetch1['city']?>,<?=$fetch1['country']?> </p>
										</div>
                                       	
									</div>
                                    <?php 
                                         }
                                             }
                                                 }
                                    ?>
                                   
							</div>                               
                        </div>                         				
							<div class="rite-meta">
                                <a href="../file/menu.php" title="" class="view-more">view more food</a>
                            </div>
                              
						</div>
                      
                    </div>
                    
                </div>
              
				<div class="bottom-mockup"><img src="../assets/images/resource/mockup1.png" alt=""></div>
            </div>
        </section>

       

        

        <section>
            <div class="block grayish low-opacity ">
                <div class="fixed-bg" style="background-image: url(../assets/images/pattern.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="filters-wrapper">
                                <div class="title1-wrapper text-center">
                                    <div class="title1-inner">
                                        <span>Your Favourite Food</span>
                                        <h2 itemprop="headline">choose your food</h2>
                                    </div>
                                </div>
                               
                                <div class="filters-inner">
                                    <div class="row">
                                        <div class="masonry">
                                        <?php  
                                         $sql = "SELECT * FROM foods Limit 4 ";
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
                                            <div class="col-md-6 col-sm-6 col-lg-6  ">
                                                <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.1s">
                                                    <div class="featured-restaurant-thumb">
                                                        <a href="restaurant-detail.html" title="" itemprop="url"><img src="../assets/uploadedimage/reslogo/<?php echo $fetch1['reslogo']?>" alt="most-popular-img" itemprop="image" style="border-radius: 50px;"></a>
                                                    </div>
                                                    <div class="featured-restaurant-info">
                                                        <span class="red-clr"><?=$fetch1['city']?>,<?=$fetch1['country']?></span>
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url"><?=$fetch1['resname']?></a></h4>
                                                        <span class="food-types">Type of food: <a href="#" title="" itemprop="url"><?=$name?></a></span>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-check-circle-o"></i>  Rs.<?=$price?></li>
                                                            
                                                            <li><i class="flaticon-money"></i> Accepts cash payments</li>
                                                        </ul>
                                                        
                                                        <a class="brd-rd5" href="#" title="Order Online">Order Now</a>
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
                            </div><!-- Filters Wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		


 <?php 
 include '../layout/footer.php';
 ?>