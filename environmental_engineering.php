<?php
include("Indenter_Admin_Panel/conn.php");
$sql = "SELECT * FROM green_engineering";
$result = mysqli_query($conn, $sql);

$row_count = mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Green Engineering,environmental engineering, industrial fabrication solutions, environmental engineering services, sustainable industrial practices, chemical recovery plants, custom-built fabricated sheds, solar steel fabrication, piping solutions" />
<meta name="description" content="Explore Green Engineering's commitment to delivering top-quality industrial solutions, including chemical recovery plants, fabricated sheds, solar steel fabrication, piping solutions, and structural fabrication for sustainable practices." />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Indenters-OurPartners</title>
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
                                                <li class="mega-menu-item">
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
                                <h2 class="title">Green Engineering</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- page-title end -->


        <!--site-main start-->
        <div class="site-main">
            <!-- grid-section -->
            <section class="ttm-row blog-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="section-title style2">
                                <div class="title-header">
                                    <h2>Green Engineering</h2>

                                </div>
                                <div class="title-desc">
                                    <p>At Green Engineering, we are committed to delivering top-quality fabrication and industrial solutions to meet the unique needs of our clients. From chemical recovery plants to fabricated sheds, solar steel fabrication, piping, and structural fabrication, our comprehensive services are designed to ensure durability, operational efficiency, and cost-effectiveness for your projects.
                                    </p>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
        
                    <!-- Partners grid -->
                   <!-- First Row End -->
        
                    <!-- Second Row - 2 Centered Partners -->
                    <!-- Second Row End -->

<!----> 

 <!-- row -->
 <div class="row">

 <?php
        if ($row_count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
      ?>

    <div class="col-md-6 col-sm-6">
        <!-- featured-imagebox -->
        <div class="featured-imagebox featured-imagebox-services style1" style="border-radius: 10px;">
            <!-- featured-thumbnail -->
            <div class="featured-thumbnail">
                <img class="img-fluid" src="<?php echo "Indenter_Admin_Panel/green_engineering/" . $row["image"]?>" alt="chemical recovery plant" style="border-radius: 10px;">
            </div><!-- featured-thumbnail end-->
            <div class="featured-content">
                <div class="featured-title">
                    <h3 class="text-center"><b><?php echo $row['name']?></b></h3>
                    
                </div>
                <div class="featured-desc">
                    <p><?php echo $row['description']?>
                    </p>
                </div>
            </div>
        </div><!-- featured-imagebox end-->
    </div>

    <?php } }?>

  

                </div>
            </section><!-- grid-section end -->
        </div><!-- site-main end -->
        
        

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