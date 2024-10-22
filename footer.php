<?php

if (isset($_POST["sub"])) {

    include("Indenter_Admin_Panel/conn.php");



    $sname = $_POST['S_NAME'];
    $semail = $_POST['S_EMAIL'];


    $sql = "INSERT INTO subscription (s_name,s_email) VALUES ('$sname','$semail')";
    $result = mysqli_query($conn,$sql) or die ("Query not successful");

    mysqli_close($conn);


    // echo "<script>
    //     alert('Thank you for subscribing!');
    // </script>";


    // echo "<script>
    //     document.addEventListener('DOMContentLoaded', function() {
    //         showAlert();
    //     });
    // </script>";



  



echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            showSlideDownAlert();
        });
    </script>";
   
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>

/* Alert box styles */
.slide-down-alert {
    position: fixed;
    top: -200px; /* Start off-screen */
    left: 50%;
    transform: translateX(-50%);
    background-color: white;
   /* background-image: url('images/watermark-removebg-preview.png');  Replace with your watermark image path */
    background-size: 150px; /* Adjust watermark size */
    background-repeat: no-repeat;
    background-position: center;
    width: 300px; /* Width of the alert box */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    transition: top 0.5s ease;
    text-align: center; /* Center the text and button */
}

/* Alert message text */
.slide-down-alert p {
    margin: 0 0 20px; /* Margin below the text */
    font-size: 18px;
}

/* Button styles */
.slide-down-alert button {
    padding: 10px 20px;
    background-color: #0047AB;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    margin: 0 auto; /* Center the button horizontally */
}

.slide-down-alert button:hover {
    background-color: #0056b3;
}


</style>
<body>
    

 <!--footer start-->
 <footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-textcolor-white clearfix" style="background-color: #696969;">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 widget-area">
                            <div class="widget widget_text clearfix">
                                <div class="d-sm-flex align-items-center">
                                    <div class="footer-logo">
                                        <img id="footer-logo-img" class="img-fluid auto_size" height="100" width="100" src="images/watermark-removebg-preview.png" alt="indenters">
                                    </div>
                                    <div class="textwidget widget-text">
                                        <p>Indenters is a leading provider of innovative solutions for the textile and general industry
                                            sectors in Pakistan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 widget-area">
                            <div class="widget widget_social clearfix">
                                <div class="social-icons text-lg-right">
                                    <ul class="social-icons list-inline">
                                        <li><a class="tooltip-top" href="https://www.facebook.com/profile.php?id=61566613095269&mibextid=ZbWKwL" rel="noopener" aria-label="facebook" data-tooltip="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="tooltip-top" href="https://wa.me/03197601304" rel="noopener" aria-label="WhatsApp" data-tooltip="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a class="tooltip-top" href="https://www.linkedin.com/company/105166554" rel="noopener" aria-label="linkedin" data-tooltip="Linkedin" target="_blank"><i class="fab fa-linkedin"></i>
                                        </a></li>
                                        <li><a class="tooltip-top" href="#" rel="noopener" aria-label="instagram" data-tooltip="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
    <div class="container">
        <div class="row">
            <!-- Removed the "Get Free Estimate" section -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                <div class="widget widget_nav_menu clearfix">
                    <h3 class="widget-title">Our Services</h3>
                    <ul id="menu-footer-quick-links" class="menu">
                        <li><a href="services.php">Mann+Hummel filters</a></li>
                        <li><a href="services.php">Weaving Solutions</a></li>
                        <li><a href="services.php">Oil Separation</a></li>
                        <li><a href="services.php">Chemical Solutions</a></li>
                        <li><a href="services.php">Environment Engineering</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                <div class="widget widget-recent-post clearfix">
                    <h3 class="widget-title">About Us</h3>
                    <ul class="widget-post ttm-recent-post-list">
                        <li>
                            <a href="about_us.php"><img class="img-fluid" src="images/our_expertise.jpg" alt="post-img"></a>
                            <div class="post-detail">
                                <a href="about_us.php">Innovative Solutions</a>
                            </div>
                        </li>
                        <li>
                            <a href="about_us.php"><img class="img-fluid" src="images/co.jpg" alt="post-img"></a>
                            <div class="post-detail">
                                <a href="about_us.php">Committed To Quality</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                <div class="widget widget-latest-tweets clearfix">
                    <h3 class="widget-title">Contact Us</h3>
                    <ul class="widget_contact_wrapper">
                        <li><i class="themifyicon ti-location-pin "></i>Suit 603, 6th Floor R.B.S Mall, Main University, Road Karachi, Pakistan</li>
                        <li><i class="flaticon flaticon-phone-call"></i>0319-7601304</li>
                        <li><i class=" themifyicon ti-email"></i><a href="mailto:sales@indenters.com.pk">sales@indenters.com.pk</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 widget-area">
                <div class="widget newsletter_widget clearfix">
                    <form id="subscribe-form" class="newsletter-form" method="post" action="" data-mailchimp="true">
                        <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                            <input type="text" name="S_NAME" id="txtname" placeholder="Your Name *" required="" style="background-color: rgb(150, 147, 147);
                            ">
                            <input type="email" name="S_EMAIL" id="txtemail" placeholder="Your Email *" required="" style="background-color: rgb(150, 147, 147);
                            ">
                            <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-color-skincolor" type="submit" name="sub">Subscribe us<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="bottom-footer-text copyright"  style="background-color: #5e5d5d;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <span class="cpy-text">Copyright © <span id="year"></span> <a href="index.php" class="ttm-textcolor-skincolor font-weight-500"><b>Indenters</b> </a> All rights reserved.</span>
                                <ul class="footer-nav-menu">
                                    <li><a href="about_us.php">About Us</a></li>
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->



    <!-- Custom Alert Modal -->
<!-- Slide-Down Alert -->
<!-- Slide-Down Alert -->
<div id="slideDownAlert" class="slide-down-alert" style="display: none;">
    <p>Thank you for subscribing!</p>
    <button onclick="closeSlideDownAlert()">OK</button>
</div>





    <script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
   
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script> 
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/numinate.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/main.js"></script>
    <script src="js/searchbar.js"></script>
<script>function showSlideDownAlert() {
    var alertBox = document.getElementById('slideDownAlert');
    alertBox.style.display = 'block';
    // Slide down the alert by changing its top position
    setTimeout(function() {
        alertBox.style.top = '20px';
    }, 100);
}

function closeSlideDownAlert() {
    var alertBox = document.getElementById('slideDownAlert');
    // Slide up the alert by resetting its top position
    alertBox.style.top = '-200px';
    setTimeout(function() {
        alertBox.style.display = 'none';
    }, 500); // Wait for the slide-up animation to finish
}


</script>



</body>
</html>