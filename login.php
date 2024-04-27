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
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body class="common_bg" style="background: url(assets/photos/background.jpg);">

    <section id="signin" style="padding:150px 0">
        <div class="container">
            <form action="post/login_post.php" method="POST">
                <div class="col-lg-5 m-auto">
                    <div class="card signin_form">
                        <div class="card-header sign_card_head text-center">
                            <h6>LOG IN</h6>
                        </div>
                        <div class="card-body sign_card_body">
                            <div class="row">
                                <!-- Login first Error -->
                                <?php if(isset($_SESSION['verify'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['verify']; ?></strong>
                                <?php } unset($_SESSION['verify']); ?>
                                <div class="col-lg-12">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input class="form-control" type="text" id="email" name="email">
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['email_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['email_err']; ?></strong>
                                    <?php } unset($_SESSION['email_err']); ?>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['email_exist'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['email_exist']; ?></strong>
                                    <?php } unset($_SESSION['email_exist']); ?>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control" type="password" id="password" name="password">
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['pass_err'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['pass_err']; ?></strong>
                                    <?php } unset($_SESSION['pass_err']); ?>
                                    <!-- Input Error -->
                                    <?php if(isset($_SESSION['pass_verify'])){ ?>
                                    <strong class="text-danger"><?= $_SESSION['pass_verify']; ?></strong>
                                    <?php } unset($_SESSION['pass_verify']); ?>
                                    <br>
                                    <a href="#" class="forget_pass mt-2">Forgotten password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer sign_card_footer text-center">
                            <div class="row mt-4">
                                <div class="col-lg-8 m-auto">
                                    <button type="submit" class="btn">LogIn</button>
                                    <p>Don't have an account?<a href="signup.php">Sign Up here</a></p>
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
<!-- Bootstrap LINK -->
<script src="assets/js/bootstrap.bundle.min.css"></script>

</body>
</html>