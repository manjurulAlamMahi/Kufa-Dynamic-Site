<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // ########### Perosonal Information Start ##############
    $select_info = "SELECT * FROM information WHERE status=1";
    $select_info_rslt = mysqli_query($db_connect,$select_info);
    $information = mysqli_fetch_assoc($select_info_rslt);
    // Information Variables Start
    $address_info = $information["address"];
    $number_info = $information["number"];
    $email_info = $information["email"];
    // Information Variables End
    // ########### Perosonal Information Start ##############

    // ############## Banner Contents Start ##############
    $select_banner_contents = "SELECT * FROM banner_content WHERE status=1";
    $select_banner_contents_rslt = mysqli_query($db_connect,$select_banner_contents);
    $assoc_select_banner_contents = mysqli_fetch_assoc($select_banner_contents_rslt);
    // Banner Contents Variables
    $banner_description = $assoc_select_banner_contents["description"];
    // Banner Contents End
    // ############## Banner Contents Start ##############

    // ########### Project Contents Start ##############
    $select_project_contents = "SELECT * FROM projects WHERE status=1";
    $select_project_contents_rslt = mysqli_query($db_connect,$select_project_contents);
    $after_project_assoc = mysqli_fetch_assoc($select_project_contents_rslt);
    // Project Variable
    $user_id = $after_project_assoc['user_id'];
    $project_name = $after_project_assoc['project_name'];
    $project_image = $after_project_assoc['project_img'];
    $project_details = $after_project_assoc['project_details'];
    // ########### ProjectContents End ##############

    // ########### User Contents Start ##############
    $select_user= "SELECT * FROM users WHERE id=$user_id";
    $select_user_rslt = mysqli_query($db_connect,$select_user);
    $after_user_assoc = mysqli_fetch_assoc($select_user_rslt);
    // user variable 
    $name = $after_user_assoc['firstname'] . " " . $after_user_assoc['lastname'];
    $user_dp = $after_user_assoc['profile_photo'];
    // ########### User Contents End ##############
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="/L/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/L/assets/css/animate.min.css">
        <link rel="stylesheet" href="/L/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/L/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/L/assets/css/flaticon.css">
        <link rel="stylesheet" href="/L/assets/css/slick.css">
        <link rel="stylesheet" href="/L/assets/css/aos.css">
        <link rel="stylesheet" href="/L/assets/css/default.css">
        <link rel="stylesheet" href="/L/assets/css/style.css">
        <link rel="stylesheet" href="/L/assets/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="/L/assets/photos/index/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="/L/assets/photos/index/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?= $address_info ?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p><?= $number_info ?></p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p><?= $email_info ?></p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="/L/assets/photos/index/project/main/<?= $project_image ?>" alt="<?= $project_image ?>">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2><?= $project_name ?></h2>
                                    <p><?= $project_details ?></p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img width="150px" height="150px" src="/L/assets/photos/upload/user_profile_photos/<?= $user_dp; ?>" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5><?= $name ?></h5>
                                                <p><?= $banner_description ?></p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script src="/L/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/L/assets/js/popper.min.js"></script>
        <script src="/L/assets/js/bootstrap.min.js"></script>
        <script src="/L/assets/js/isotope.pkgd.min.js"></script>
        <script src="/L/assets/js/one-page-nav-min.js"></script>
        <script src="/L/assets/js/slick.min.js"></script>
        <script src="/L/assets/js/ajax-form.js"></script>
        <script src="/L/assets/js/wow.min.js"></script>
        <script src="/L/assets/js/aos.js"></script>
        <script src="/L/assets/js/jquery.waypoints.min.js"></script>
        <script src="/L/assets/js/jquery.counterup.min.js"></script>
        <script src="/L/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/L/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/L/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/L/assets/js/plugins.js"></script>
        <script src="/L/assets/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>
