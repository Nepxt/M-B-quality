<?php
$page = "";
$page = (isset($_GET['id'])) ? $_GET['id'] : 'home';
if (!in_array($page, array('home', 'about', 'services', 'gallery', 'testimonials', 'testimonials-send', 'contact', 'contact-send', 'free-estimate', 'free-estimate-send', 'home-free-estimate-send', 'request-quote-send'))) {
    include("404.php");
    exit;
}


$phone = '(503) 750-7568';
$email = 'Moqualityconstructionllc@gmail.com';
$address = 'Beaverton, OR 97003 ';


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <title>  M&B Quality Drywall & Painting</title>
    <meta name="author" content="Nepxt">
    <link rel="icon" href="images/fav.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon" />
    <!-- Meta SEO -->
    <meta name="description" content="   M&B Quality Drywall & Painting">
    <meta name="keywords" content="   M&B Quality Drywall & Painting">
    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/css/unite-gallery.min.css" integrity="sha512-EViDct/SXnZMMG2ZDK7E2r3o/rDIwocOkVYpEvbMM/4Mr3on8V70n7dLcLdOrVyPuvEFyqQzya1YPNV1DFlf0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Hcaptcha -->
    <!-- <script src="https://js.hcaptcha.com/1/api.js" async defer></script> -->
</head>

<body>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Sections -->
        <header class="header <?php echo ($page == 'home' ? 'home' : ''); ?>">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 ms-auto mb-0">
                            <div class="row align-items-center">
                                <div class="col-md-6 me-auto mb-0">
                                    <p>Delivering Quality Construction Services You Can Trust.</p>
                                </div>
                                <div class="col-md-2 mt-lg-0 mt-3 mb-0">
                                    <ul class="list-unstyled d-flex w-100 justify-content-between">
                                        <li><iconify-icon icon="uil:facebook"></iconify-icon></li>
                                        <li><iconify-icon icon="streamline:instagram-solid"></iconify-icon></li>
                                        <li><iconify-icon icon="mdi:youtube"></iconify-icon></li>
                                        <li><iconify-icon icon="prime:twitter"></iconify-icon></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 logo-col mb-0">
                            <div class="logo">
                                <a href="./" title=" M&B Quality Drywall & Painting">
                                    <img src="images/logo.webp" alt=" M&B Quality Drywall & Painting"
                                        title=" M&B Quality Drywall & Painting" class="img-responsive" loading="lazy">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-10 ms-auto mb-0">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                                <div class="container-fluid p-0">
                                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="<?php if ($page == 'home') {
                                                            echo 'active';
                                                        } ?>">
                                                <a href="./home" class="ps-0" title="Home">Home</a>
                                            </li>
                                            <li class="<?php if ($page == 'about') {
                                                            echo 'active';
                                                        } ?>">
                                                <a href="./about" title="About">About Us</a>
                                            </li>
                                            <li class="<?php if ($page == 'services') {
                                                            echo 'active';
                                                        } ?>">
                                                <a href="./services" title="Services">Services</a>
                                            </li>
                                            <li class="<?php if ($page == 'gallery') {
                                                            echo 'active';
                                                        } ?>">
                                                <a href="./gallery" title="Gallery">Gallery</a>
                                            </li>
                                            <li class="<?php if ($page == 'testimonials') {
                                                            echo 'active';
                                                        } ?>">
                                                <a href="./testimonials" title="Testimonials">Testimonials</a>
                                            </li>
                                            <li class="<?php if ($page == 'contact') {
                                                            echo 'active';
                                                        } ?>">
                                                <a href="./contact" title="contact">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="./free-estimate" class="btn btn-custom">
                                                    Free Estimate
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navigatio for Mobile or Small Devices -->
        <div class="mobile_menu d-lg-none">
            <div class="menu_icon_box">
                <div class="tab_button">
                    <a class="tab_button1" href="tel:<?php echo $phone; ?>" title="Click To Call"><i
                            class="fa fa-phone"></i>
                        Click To Call</a>
                    <a class="tab_button2" href="sms:<?php echo $phone; ?>" title="Tap To Text"><i
                            class="fa fa-comments"></i> Tap To Text</a>
                </div>
                <div class="menu_icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar">
                <div class="tab_section">
                    <div class="mobile_slideLogo">
                        <a href="." title="  M&B Quality Drywall & Painting">
                            <img src="images/foot-logo.webp" alt="   M&B Quality Drywall & Painting"
                                title="  M&B Quality Drywall & Painting" class="img-responsive">
                        </a>
                    </div>
                    <ul class="accordion">
                        <li class="<?php if ($page == 'home') {
                                        echo 'active';
                                    } ?>">
                            <a href="./home" title="Home">Home</a>
                        </li>
                        <li class="<?php if ($page == 'about') {
                                        echo 'active';
                                    } ?>">
                            <a href="./about" title="About">About Us</a>
                        </li>
                        <li class="<?php if ($page == 'services') {
                                        echo 'active';
                                    } ?>">
                            <a href="./services" title="Services">Services</a>
                        </li>
                        <li class="<?php if ($page == 'testimonials') {
                                        echo 'active';
                                    } ?>">
                            <a href="./testimonials" title="Testimonials">Testimonials</a>
                        </li>
                        <li class="<?php if ($page == 'gallery') {
                                        echo 'active';
                                    } ?>">
                            <a href="./gallery" title="gallery">Gallery</a>
                        </li>

                        <li class="<?php if ($page == 'contact') {
                                        echo 'active';
                                    } ?>">
                            <a href="./contact" title="contact">Contact Us</a>
                        </li>
                        <li>
                            <a href="./free-estimate" class="btn btn-custom text-light">
                                Free Estimate
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Modern Social Media Icon Display -->
        <div class=social_media_block>
            <div class="share_icon">
                <i class="fa fa-share-alt"></i>
                <div class="social_icon">
                    <ul>
                        <li>
                            <a href="#" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>