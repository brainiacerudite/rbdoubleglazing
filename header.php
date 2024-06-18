<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php echo $sitename; ?></title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="assets/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
</head>

<body>

    <!-- page wrapper -->
    <div class="boxed_wrapper">

        <!-- preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader about-page-2">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- preloader end -->

        <!-- main header -->
        <header class="main-header header-style-two">
            <div class="header-lower">
                <div class="outer-box">
                    <div class="menu-area">
                        <div class="logo-box">
                            <figure class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo-2.png" alt="logo">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="menu-right-content">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="index.php">Home</a></li>
                                    <li class="dropdown">
                                        <a href="about.php">
                                            Pages
                                            <span class="dropdown-arrow fas fa-angle-down"></span>
                                        </a>
                                        <ul>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="gallery.php">Our Gallery</a></li>
                                            <li><a href="testimonial.php">Reviews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="products/windows">
                                            Windows
                                            <span class="dropdown-arrow fas fa-angle-down"></span>
                                        </a>
                                        <ul>
                                            <li><a href="products/windows/upvc-casement-windows.php">UPVC Casement
                                                    Windows</a>
                                            </li>
                                            <li><a href="products/windows/upvc-wood-effect-windows.php">UPVC Wood Effect
                                                    Windows</a></li>
                                            <li><a href="products/windows/aluminium-windows.php">Aluminium Windows</a>
                                            </li>
                                            <li><a href="products/windows/sash-windows.php">Sash Windows</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="products/doors">
                                            Doors
                                            <span class="dropdown-arrow fas fa-angle-down"></span></a>
                                        <ul>
                                            <li><a href="products/doors/upvc-doors.php">UPVC Doors</a></li>
                                            <li><a href="products/doors/solidcore-doors.php">Solidcore Doors</a></li>
                                            <li><a href="products/doors/composite-doors.php">Composite Doors</a></li>
                                            <li><a href="products/doors/bifold-doors.php">Bifold Doors</a></li>
                                            <li><a href="products/doors/patio-doors.php">Patio Doors</a></li>
                                            <li><a href="products/doors/garage-doors.php">Garage Doors</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="products/conservatories">
                                            Conservatories
                                            <span class="dropdown-arrow fas fa-angle-down"></span></a>
                                        <ul>
                                            <li><a href="products/conservatories/conservatories-styles.php">Conservatories
                                                    Styles</a>
                                            </li>
                                            <li><a href="products/conservatories/roof-options.php">Roof Options
                                                    Doors</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="trade.php">Trade</a></li> -->
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo">
                            <a href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
                        </figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content">
                        <div class="support-box">
                            <div class="icon"><i class="flaticon-phone-ringing"></i></div>
                            <span>Have Questions?</span>
                            <h6><a href="tel:<?php echo $contactNumber; ?>"><?php echo $formatedContactNumber; ?></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-2.png" alt="logo" title=""></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><?php echo $contactAddress; ?></li>
                        <li><a href="tel:<?php echo $contactNumber; ?>"><?php echo $formatedContactNumber; ?></a></li>
                        <li><a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a></li>
                    </ul>
                </div>
                <!-- <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div> -->
            </nav>
        </div>
        <!-- End Mobile Menu -->