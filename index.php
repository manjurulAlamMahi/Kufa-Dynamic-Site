<?php 
    session_start();
    // Database Require
    require '/xampp/htdocs/L/database/database.php';

    // ########### Logo  Contents Start ##############
    $select_logo_contents = "SELECT * FROM logo WHERE status=1";
    $select_logo_contents_rslt = mysqli_query($db_connect,$select_logo_contents);
    $assoc_select_logo_content = mysqli_fetch_assoc($select_logo_contents_rslt);
    $logo_img = $assoc_select_logo_content['logo'];
    // ########### Logo Contents End ##############

    // ############## Banner Contents Start ##############
    $select_banner_contents = "SELECT * FROM banner_content WHERE status=1";
    $select_banner_contents_rslt = mysqli_query($db_connect,$select_banner_contents);
    $assoc_select_banner_contents = mysqli_fetch_assoc($select_banner_contents_rslt);
    // Banner Contents Variables 
    $banner_sub_title = $assoc_select_banner_contents["sub_title"];
    $banner_title = $assoc_select_banner_contents["title"];
    $banner_description = $assoc_select_banner_contents["description"];
    // Banner Contents End
    // Banner Images Start
    $select_bannner_images = "SELECT * FROM banner_image WHERE status=1";
    $select_bannner_images_rslt = mysqli_query($db_connect,$select_bannner_images);
    $assoc_select_bannner_images = mysqli_fetch_assoc($select_bannner_images_rslt);
    // Banner Images Variables 
    $banner_image = $assoc_select_bannner_images["image"];
    // Banner Images End
    // ########### Banner Contents End ##############

    // ########### Social Contents Start ##############
    $select_social_contents = "SELECT * FROM social_content WHERE status=1";
    $select_social_contents_rslt = mysqli_query($db_connect,$select_social_contents);
    // ########### Social Contents End ##############

    // ########### Perosonal Information Start ##############
    $select_info = "SELECT * FROM information WHERE status=1";
    $select_info_rslt = mysqli_query($db_connect,$select_info);
    $information = mysqli_fetch_assoc($select_info_rslt);
    // Information Variables Start
    $address_info = $information["address"];
    $number_info = $information["number"];
    $email_info = $information["email"];
    $contact_details = $information["details"];
    $office_at = $information["office_at"];
    // Information Variables End
    // ########### Perosonal Information Start ##############

    // ############## About Contents Start ##############
    $select_about_contents = "SELECT * FROM about_content WHERE status=1";
    $select_about_contents_rslt = mysqli_query($db_connect,$select_about_contents);
    $assoc_select_about_contents = mysqli_fetch_assoc($select_about_contents_rslt);
    // About Contents Variables 
    $about_sub_title = $assoc_select_about_contents["sub_title"];
    $about_title = $assoc_select_about_contents["title"];
    $about_description = $assoc_select_about_contents["description"];
    $about_image = $assoc_select_about_contents["about_image"];
    // ########### About Contents End ##############

    // ########### Skills Start ##############
    $select_skills_contents = "SELECT * FROM skills WHERE status=1";
    $select_skills_contents_rslt = mysqli_query($db_connect,$select_skills_contents);
    // ########### Skills End ##############

    // ########### Services Contents Start ##############
    $select_service_contents = "SELECT * FROM service_content WHERE status=1";
    $select_service_contents_rslt = mysqli_query($db_connect,$select_service_contents);
    // ########### Services Contents End ##############

    // ########### Fact area Contents Start ##############
    $select_fact_contents = "SELECT * FROM fact_area WHERE status=1";
    $select_fact_contents_rslt = mysqli_query($db_connect,$select_fact_contents);
    // ########### Fact area Contents End ##############

    // ########### Project Contents Start ##############
    $select_project_contents = "SELECT * FROM projects WHERE status=1";
    $select_project_contents_rslt = mysqli_query($db_connect,$select_project_contents);
    // ########### ProjectContents End ##############

    // ########### Customer Quotes Start ##############
    $select_customer_contents = "SELECT * FROM customer WHERE status=1";
    $select_customer_contents_rslt = mysqli_query($db_connect,$select_customer_contents);
    // ########### Customer Quotes End ##############

    // ########### brand  Contents Start ##############
    $select_brand_contents = "SELECT * FROM brand WHERE status=1";
    $select_brand_contents_rslt = mysqli_query($db_connect,$select_brand_contents);
    // ########### brand Contents End ##############
    
    ?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="assets/photos/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <!-- Font Awesome  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

        <!-- vendor css -->
        <link href="/L/dashboard_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="/L/dashboard_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link href="/L/dashboard_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
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
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img width="100px" src="assets/photos/index/logo/<?= $logo_img ?>" alt="<?= $logo_img ?>"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="assets/photos/index/logo/s_logo.png" alt="Logo"></a>
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
                        <img src="assets/photos/index/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p><?= $address_info; ?></p>
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
                    <?php foreach( $select_social_contents_rslt as $social_icon){ ?>
                    <a href="<?= $social_icon['link']; ?>" target="_blank"><i class="fa <?= $social_icon['icon']; ?>"></i></a>
                    <?php } ?>
                </div>
                <div class="mt-20 login_dashboard">
                    <a href="login.php" target="_blank" class="btn" style="background: transparent; width:80%;">LOGIN</a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?= $banner_sub_title ?></h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $banner_title ?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $banner_description ?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php foreach( $select_social_contents_rslt as $social_icon){ ?>
                                            <li><a href="<?= $social_icon['link']; ?>" target="_blank"><i class="fa <?= $social_icon['icon']; ?>"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img class="image-fluid w-100" src="assets/photos/index/banner/<?= $banner_image ?>" alt="<?= $banner_image ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="assets/photos/index/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img 
                                src="/L/assets/photos/index/about/<?= $about_image; ?>" 
                                title="<?= $about_image; ?>" 
                                alt="<?= $about_image; ?>"
                                width="500"
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span><?= $about_sub_title; ?></span>
                                <h2><?= $about_title; ?></h2>
                            </div>
                            <div class="about-content">
                                <p><?= $about_description; ?></p>
                                <h3>Skill:</h3>
                            </div>
                            <!-- Skill Item -->
                            <?php foreach($select_skills_contents_rslt as $skill): ?>
                            <div class="education">
                                <div class="year"><?= $skill['name']; ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?= $skill['details']; ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $skill['percentage']; ?>%;" aria-valuenow="<?= $skill['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <!-- End Skill Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php foreach($select_service_contents_rslt as $service): ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fa <?= $service['icon'] ?>"></i>
								<h3><?= $service['title'] ?></h3>
								<p>
									<?= $service['description'] ?>
								</p>
							</div>
						</div>
                        <?php endforeach ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach($select_project_contents_rslt as $project): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img class="img-fluid w-100 h-100" src="assets/photos/index/project/cover/<?= $project['project_cover_img'] ?>" alt="<?= $project['project_cover_img'] ?>">
								</div>
								<div class="speaker-overlay">
                                    <span><?= $project['category'] ?></span>
									<h4><a href="portfolio-single.php"><?= $project['project_name'] ?></a></h4>
									<a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php foreach($select_fact_contents_rslt as $fact): ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fa <?= $fact['icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $fact['number'] ?></span></h2>
                                        <span><?= $fact['content'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <?php foreach($select_customer_contents_rslt as $customer ): ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img width="100" src="/L/assets/photos/index/customer/<?= $customer['customer_img'] ?>" alt="<?= $customer['customer_img'] ?>">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?= $customer['quotes'] ?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?= $customer['name'] ?></h5>
                                            <span><?= $customer['title'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php foreach($select_brand_contents_rslt as $brand): ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="assets/photos/index/brand/<?= $brand['brand'] ?>" alt="img">
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p><?= $contact_details ?></p>
                                <h5>OFFICE IN <span><?= $office_at ?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $address_info ?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $number_info ?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $email_info ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="form" class="col-lg-6">
                            <div class="contact-form">
                                <form action="post/messeges.php" method="POST">
                                    <input name="name" type="text" placeholder="your name *">
                                    <input name="email" type="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <?php if(isset($_SESSION['msg_err'])){ ?>
                                        <strong style="display: block; margin:-30px 0 10px 0;" class="text-danger"><?= $_SESSION['msg_err']; ?></strong>
                                    <?php } unset($_SESSION['msg_err']); ?>
                                    <button type="submit" class="btn">BUY TICKET</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
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
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/one-page-nav-min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
