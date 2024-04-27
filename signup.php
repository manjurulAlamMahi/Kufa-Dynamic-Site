<!-- PHP CODE START -->
<?php 
    session_start();
?>
<!-- PHP CODE END -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello || World</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="common_bg" style="background: url(assets/photos/background.jpg);">

    <section id="signin">
        <div class="container">
            <form action="post/signup_post.php" method="POST" enctype="multipart/form-data">
                <div class="col-lg-6 m-auto">
                    <div class="card signin_form">
                        <div class="card-header sign_card_head text-center">
                            <h6>SIGN UP</h6>
                        </div>
                        <div class="card-body sign_card_body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="form-label" for="first_name">First Name</label>
                                    <input class="form-control" type="text" id="first_name" name="f_name" value="<?= 
                                        (isset($_SESSION["prv_f_name"])?$_SESSION["prv_f_name"]:"");
                                        unset($_SESSION["prv_f_name"]);
                                    ?>">
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['f_name_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['f_name_err']; ?></strong>
                                    <?php } unset($_SESSION['f_name_err']); ?>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="last_name">Last Name</label>
                                    <input class="form-control" type="text" id="last_name" name="l_name" value="<?= 
                                        (isset($_SESSION["prv_l_name"])?$_SESSION["prv_l_name"]:"");
                                        unset($_SESSION["prv_l_name"]);
                                    ?>">
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['l_name_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['l_name_err']; ?></strong>
                                    <?php } unset($_SESSION['l_name_err']); ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input class="form-control" type="text" id="email" name="email" value="<?= 
                                        (isset($_SESSION["prv_email"])?$_SESSION["prv_email"]:"");
                                        unset($_SESSION["prv_email"]);
                                    ?>">
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['email_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['email_err']; ?></strong>
                                    <?php } unset($_SESSION['email_err']); ?>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['valid_email_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['valid_email_err']; ?></strong>
                                    <?php } unset($_SESSION['valid_email_err']); ?>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['email_exist'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['email_exist']; ?></strong>
                                    <?php } unset($_SESSION['email_exist']); ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 pass_index">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" value="<?= 
                                        (isset($_SESSION["prv_password"])?$_SESSION["prv_password"]:"");
                                        unset($_SESSION["prv_password"]);
                                    ?>">
                                    <i class="fa fa-eye" onclick="show_pass()"></i>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['password_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['password_err']; ?></strong>
                                    <?php } unset($_SESSION['password_err']); ?>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['password_mtch_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['password_mtch_err']; ?></strong>
                                    <?php } unset($_SESSION['password_mtch_err']); ?>
                                </div>
                                <div class="col-lg-6 pass_index">
                                    <label class="form-label" for="c_password">Confirm Password</label>
                                    <input class="form-control" type="password" id="c_password" name="c_password" value="<?= 
                                        (isset($_SESSION["prv_c_password"])?$_SESSION["prv_c_password"]:"");
                                        unset($_SESSION["prv_c_password"]);
                                    ?>">
                                    <i class="fa fa-eye" onclick="show_c_pass()"></i>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['c_password_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['c_password_err']; ?></strong>
                                    <?php } unset($_SESSION['c_password_err']); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 align-self-center">
                                    <label class="form-label profile_upload" for="file">Upload Profile Photo</label>
                                    <input class="form-control" type="file" id="file" name="profile_photo"
                                        oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    <!-- Input Empty Error -->
                                    <?php if(isset($_SESSION['file_err'])){ ?>
                                    <br>
                                    <strong class="text-danger"><?= $_SESSION['file_err']; ?></strong>
                                    <?php } unset($_SESSION['file_err']); ?>
                                    <!-- Input Size Error -->
                                    <?php if(isset($_SESSION['size_err'])){ ?>
                                    <br>
                                    <strong class="text-danger"><?= $_SESSION['size_err']; ?></strong>
                                    <?php } unset($_SESSION['size_err']); ?>
                                    <!-- Input Extension Error -->
                                    <?php if(isset($_SESSION['extension_err'])){ ?>
                                    <br>
                                    <strong class="text-danger"><?= $_SESSION['extension_err']; ?></strong>
                                    <?php } unset($_SESSION['extension_err']); ?>
                                </div>
                                <div class="col-lg-5">
                                    <div class="upload_img_preview text-center mt-4">
                                        <img src="assets/photos/user.png" class="image-fluid w-100" id="pic" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer sign_card_footer text-center">
                            <div class="row mt-4">
                                <div class="col-lg-8 m-auto">
                                    <button type="submit" class="btn">SIgnup</button>
                                    <p>Already have an account?<a href="login.php">Log in here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>




    <!-- jQery LINK -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- Sweet Alert LINK -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap LINK -->
    <script src="assets/js/bootstrap.bundle.min.css"></script>

    <!-- ############## Sweet Alert Javascript start ############## -->
    <!-- Success Alert -->
    <?php if(isset($_SESSION['successful'])){ ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
        })
    </script>
    <?php } unset($_SESSION['successful']); ?>
    <!-- Success Alert -->
    <!-- ############## Sweet Alert Javascript end ############## -->

    <!-- Show Password Script  -->
    <script>
        function show_pass() {
            var pass_input = document.getElementById("password");
            if (pass_input.type == "password") {
                pass_input.type = "text";
            } else {
                pass_input.type = "password";
            }
        }
    </script>
    <!-- Show Password Script  -->
    <script>
        function show_c_pass() {
            var pass_input = document.getElementById("c_password");
            if (pass_input.type == "password") {
                pass_input.type = "text";
            } else {
                pass_input.type = "password";
            }
        }
    </script>

</body>

</html>