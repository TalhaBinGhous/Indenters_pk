<?php
if (isset($_POST['subBtn'])) {
include("Indenter_Admin_Panel/conn.php");




$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phonenumber = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$sql = "INSERT INTO contact_us(first_name, last_name, phone_number, email, subject, Message) VALUES ('$fname','$lname','$phonenumber','$email','$subject','$message')";

$result = mysqli_query($conn,$sql) or die ("Query not successful");


mysqli_close($conn);

header('Location :index.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Get In Touch,Customer Service,Support,Inquiry" />
<meta name="description" content="Get in touch with Indenters for reliable solutions and expert services. Fill out our contact form or reach us via phone or email for inquiries and support." />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Indenters-Contact Us </title>
<link rel="shortcut icon" href="images/watermark-removebg-preview.png" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<link rel="stylesheet" type="text/css" href="css/megamenu.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<style>
    .site-main::after{
        content:'';
        position:absolute;

        background: url(images/watermark.png) no-repeat center;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background-attachment:fixed;
        z-index: -1;
        opacity:0.3;
    }

</style>

<body>

    <!--page start-->
    <div class="page">
       

         <!--header start-->
         <header id="masthead" class="header ttm-header-style-03";>
            <!-- topbar -->
           
            <!-- topbar end -->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                                    <!-- site-branding -->
                                    <div class="site-branding ">
                                        <a class="home-link" href="index.php" title="Indenters" rel="home">
                                            <img id="logo-img" height="45" width="160" class="img-fluid auto_size" src="images/Opacity-removebg-preview.png" alt="logo-img">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <div class="d-flex flex-row m-auto">
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <!-- menu -->
                                        <nav class="main-menu menu-mobile" id="menu">
                                            <ul class="menu">
                                                <li class="mega-menu-item ">
                                                    <a href="index.php" class=" "><b>Home</b></a>
                                                    
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="about_us.php" class=" "><b>About Us</b></a>
                                                    
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="services.php" class=" "><b>Services</b></a>
                                                    
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="Clientele.php" class=" "><b>Clientele</b></a>
                                                    
                                                </li>
                                                <li class="mega-menu-item">
                                                    <a href="technology_partners.php" class=" "><b>Partners</b></a>
                                                    
                                                </li>
                                                <li class="mega-menu-item  active">
                                                    <a href="contact_us.php" class=" "><b>Contact us</b></a>
                                                </li>
                                            </ul>
                                        </nav><!-- menu end -->
                                        <!-- header_extra -->
                                        <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                            <div class="header_search">
                                                <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                                <div class="header_search_content">
                                                    <div class="header_search_content_inner">
                                                        <a href="#" class="close_btn"><i class="ti ti-close"></i></a>
                                                        <form id="searchbox" method="get" action="#">
                                                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="What are you searching for ?" value="">
                                                            <button type="submit" class="btn close-search"><i class="ti ti-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- header_extra end -->

                                        
                                </div><!-- site-navigation end-->


                                <!--Chat--> 
                                <div class="widget_info d-flex flex-row align-items-center">
                                    <div class="widget_icon ttm-textcolor-skincolor"><i class="flaticon flaticon-phone-call"></i></div>
                                    <div class="widget_content">
                                        <h3 class="widget_title"><a href="tel:03197601304"> 0319-7601304</a></h3>
                                        <p class="widget_desc"><b>Have any Questions?</b></p>
                                    </div>
                                </div>
                                <!--Chat end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header><!--header end-->


        <!-- page-title -->
        <div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="ttm-page-title-row-inner">
                            <div class="page-title-heading">
                                <h2 class="title">Contact Us</h2>
                            </div>
                           <!-- <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Contact Us</span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->


    <!--site-main start-->
    <div class="site-main">


        <!-- padding_bottom_zero-section -->
        <section class="ttm-row padding_bottom_zero-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="ttm-bgcolor-white box-shadow p-50">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h2 class="title">Contact <b>Form</b></h2>
                                </div>
                                <div class="title-desc">
                                    <p>Feel free to contact us through <a class="ttm-textcolor-skincolor" href="https://www.facebook.com/profile.php?id=61566613095269&mibextid=ZbWKwL">Facebook</a> or <a class="ttm-textcolor-skincolor" href="#">Instagram</a> if you prefer.</p>
                                </div>
                            </div><!-- section title end -->
                            <form id="request_qoute_form" class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate" action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <span class="text-input"><input name="fname" type="text" value="" placeholder="First Name" required="required"></span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="text-input"><input name="lname" type="text" value="" placeholder="Last Name" required="required"></span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input"><input name="email" type="text" value="" placeholder="Email Address" required="required"></span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-input"><input name="subject" type="text" value="" placeholder="Subject" required="required"></span>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="text-input"><textarea name="message" rows="5" placeholder="Message" required="required"></textarea></span>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="pt-15 text-center">
                                            <p class="cookies padding_bottom20">
                                                
                                            </p>
                                            <button  name="subBtn" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"type="submit" >Send now!</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->                
            </div>
        </section>
        <!-- padding_bottom_zero-section end -->


        <!--- conatact-section -->
        <section class="ttm-row conatact-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1029940585054!2d67.10999707443206!3d24.928561042530898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338c0c7c28da1%3A0xf6ee956489bba701!2sR.B.S%20Mall!5e0!3m2!1sen!2s!4v1727173457229!5m2!1sen!2s" width="100" height="558" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-xl-7">
                        <div class="padding_left15 res-1199-padding_left0 padding_top20 res-1199-padding_top40">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <!-- <h3>CONTACT US</h3> -->
                                    <h2 class="title">Get In <b>Touch!</b></h2>
                                </div>
                                <div class="title-desc">
                                    <p>Discover how INDENTERS can enhance your operations with our reliable solutions and expert services. Contact us today to discuss your specific needs or to learn more about our capabilities</p>
                                </div>
                            </div><!-- section title end -->
                            <h2 class="fs-24 padding_top10">Head Office</h2>
                            <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom5"></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                                <i class="themifyicon ti-location-pin ttm-textcolor-skincolor"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3 class="margin_bottom0 fs-18">Address</h3>
                                            </div>
                                            <div class="featured-desc">Suit 603, 6th Floor R.B.S Mall, Main University, Road Karachi, Pakistan</div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                                <i class="themifyicon ti-email ttm-textcolor-skincolor"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3 class="margin_bottom0 fs-18">Call Us / Email</h3>
                                            </div>
                                            <div class="featured-desc"> 0319-7601304<br>  +92-21-348-309-97   <br>  sales@indenters.com.pk </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                            <h2 class="fs-24 padding_top20">Branch Office</h2>
                            <div class="ttm-horizontal_sep width-100 margin_top20 margin_bottom5"></div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                                <i class="themifyicon ti-location-pin ttm-textcolor-skincolor"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3 class="margin_bottom0 fs-18">Address</h3>
                                            </div>
                                            <div class="featured-desc">C-292 #35-A Zaman Town, Korangi Industrial Area, Karachi, Pakistan</div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-grey ttm-icon_element-size-md ttm-icon_element-style-rounded"> 
                                                <i class="themifyicon ti-location-pin ttm-textcolor-skincolor"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3 class="margin_bottom0 fs-18">Address</h3>
                                            </div>
                                            <div class="featured-desc">P-1, Ghulam Farid Road,Kehkashan Road,Faisalabad, Pakistan</div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->                
            </div>
        </section>
        <!-- conatact-section end -->


        <!--client-section-->
       
        <!--client-section end-->


    </div><!--site-main end-->


         <!--footer start-->
        <?php
        include("footer.php")
        ?>
        <!--footer end-->

    <!--back-to-top start-->
    
    <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <!-- Javascript end-->

</body>


</html>