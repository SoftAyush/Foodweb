<?php 
include '../layout/heading.php';
?>

<section>
            <div class="block">
                
                <div class="fixed-bg" style="background-image: url(../assets/images/bgi.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Register Restaurant</h1>
                                <span>A Create Restaurant Website</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../file/index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Register Restaurant</li>
                </ol>
            </div>
        </div>
        <section>
            <div class="block top-padd30 gray-bg">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box">
                                <div class="reservation-tabs-wrapper">
                                    <div class="row">
                                        
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="reservation-tab-content">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="reservation-tab1">
                                                        <form class="restaurant-info-form brd-rd5" method="post" action="res_register_upload.php" enctype="multipart/form-data">
                                                            <div class="row mrg20">
                                                            <div class="text-center">
                                                                <img src="" class="rounded" alt="." id="img"  style="height: 200px; width: 200px; border-radius:10px;">                                                               
                                                            </div>
                                                            <div class="custom-file">
                                                                    <label>Restaurant logo <sup>*</sup></label>
                                                                    <input type="file" name="image" accept="image/*" id="fileinput" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">                                                                 
                                                                </div>
                                                               <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Restaurant name <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="resname">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Restaurant Phone <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="resphone">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Manager Name <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="managername">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Manager Contact phone <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="managerContact">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Contact Email <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="email" name="contactemail">
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <h4 itemprop="headline">LOCATION</h4>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <label>Country <sup>*</sup></label>
                                                                    <div class="select-wrp">
                                                                        <select name="country">
                                                                            <option value="nepal">Nepal</option>
                                                                            <!-- <option>Pakistan</option> -->
                                                                            <option value="india">India</option>
                                                                            <option value="usa">USA</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>State <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="state">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>City <sup>*</sup></label>
                                                                    <div class="select-wrp">
                                                                        <select name="city">
                                                                            <option value="kathmandu">Kathmandu</option>
                                                                            <option value="lalitpur">Lalitpur</option>
                                                                            <option value="Mumbai">Mumbai</option>
                                                                            <option value="new york">New York</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="loc-map2">
                                                                        <div class="loc-map" id="loc-map">
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.946795029693!2d85.34463115!3d27.694531700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1655105884758!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>     
                                                                        </div>
                                                                        <div class="loc-srch">
                                                                            <input class="brd-rd3" type="text" placeholder="Type Your Address">
                                                                            <button class="brd-rd3 red-bg" type="submit">Search Now</button>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <h4 itemprop="headline">SIGNUP FIELDS</h4>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label>Username <sup>*</sup></label>
                                                                    <input class="brd-rd3" type="text" name="username">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label> <sup>Password*</sup></label>
                                                                    <input class="brd-rd3" type="password" name="password">
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <label> <sup> Conform Password*</sup></label>
                                                                    <input class="brd-rd3" type="password" name="confirm_password">
                                                                        </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="check-box">
                                                                        <input type="checkbox" id="agrement">
                                                                        <label for="agrement">Accept Terms and conditions</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                                    <div class="step-buttons">
                                                                        <button class="brd-rd3 red-bg" >SignUp</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Section Box -->
                        </div>
                     </div>
                </div>              
            </div>
        </section>

<?php 
include '../layout/footer.php';
?>