<?php
include '../layout/heading.php';
?>
<section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url(../assets/images/bgi.jpg);"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline">Contact Us</h1>
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
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>
        <section>
            <div class="block less-spacing gray-bg top-padd30">
                
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box">
                                 <div class="loc-map" id="loc-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7066.250543182866!2d85.33622177447866!3d27.68252282782198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1907e0b33dc7%3A0xcc7a1b0bf165ee6e!2sRever%20Hub%20pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1655105615105!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                                </div> 
                                <div class="contact-info-sec text-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-phone-square"></i>
                                                <h5 itemprop="headline">PHONE</h5>
                                                <!-- <p itemprop="description">Phone 01: (+01) 8547 6325</p> -->
                                                <p itemprop="description">Phone 02: (+01) 965 4788</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-map-marker"></i>
                                                <h5 itemprop="headline">ADDRESS</h5>
                                                <p itemprop="description">5Tth Floor, AH Building, Kathmandu, Nepal.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-envelope"></i>
                                                <h5 itemprop="headline">EMAIL</h5>
                                                <p itemprop="description">foodweb@gmail.com</p>
                                                <!-- <p itemprop="description">hello@yourdomain.com</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-form-wrapper text-center">
                                    <div class="contact-form-inner">
                                        <h3 itemprop="headline">If You Got Any Questions <br> Please Do Not Hesitate to Send us a Message.</h3>
                                        <div id="message"></div>
                                        <form method="post" action="https://html.webinane.com/food-chow/contact.php" id="contactform">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-lg-12">
                                                    <input id="name" type="text" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-lg-12">
                                                    <input id="email" type="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input type="text" placeholder="Subject">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea id="comments" placeholder="Message"></textarea>
                                                </div>
                                                <!--<div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div> 
                                                </div>-->
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <button class="brd-rd2" id="submit" type="submit">SEND MESSAGE</button>
                                                    <img src="../assets/images/ajax-loader.gif" class="loader" alt="ajax-loader.gif" itemprop="image">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- Contact Form Wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include '../layout/footer.php';
?>
