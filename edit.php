<!-- PHP CODE START -->
<?php 
session_start();
// Login Verification
if(!isset($_SESSION["verify"])){
    $_SESSION['login_frst'] = "Please Login First!";
    header('location:admin_login.php');
}
// Database Require
require 'database/database.php';
// Get Login User ID
$id = $_GET['id'];
// Get User Information 
$select= "SELECT * FROM users WHERE id=$id";
$select_rslt = mysqli_query($db_connect,$select);
$after_assoc = mysqli_fetch_assoc($select_rslt);

?>
<!-- PHP CODE END -->
<!-- Dashboard Header HTML -->
<?php require_once 'includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title text-center">
            <!-- ===========================
                    User Edit Start
            ============================ -->
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Registration Form</h4>
                        </div>
                        <div class="card-body">
                            <form action="post/update.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Input First Name -->
                                    <div class="col-lg-6">
                                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?= $after_assoc["id"] ?>">
                                        <input type="text" class="form-control" name="firstname"
                                            value="<?= $after_assoc["firstname"] ?>">
                                    </div>

                                    <!-- Input Last Name -->
                                    <div class="col-lg-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?= $after_assoc["id"] ?>">
                                        <input type="text" class="form-control" name="lastname"
                                            value="<?= $after_assoc["lastname"] ?>">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <!-- Input Email -->
                                    <div class="col-lg-6">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?= $after_assoc["id"] ?>">
                                        <input type="text" class="form-control" name="email"
                                            value="<?= $after_assoc["email"] ?>">
                                    </div>

                                    <!-- Input Password -->
                                    <div class="col-lg-6 pass">
                                        <label class="form-label">Password</label>
                                        <input type="hidden" class="form-control" name="id"
                                            value="<?= $after_assoc["id"] ?>">
                                        <input type="password" class="form-control" id="password" name="password">
                                        <i class="fa fa-eye" onclick="show_pass()"></i>
                                    </div>
                                </div>

                                <!-- Input File -->
                                <div class="mb-3">
                                    <!-- Extension Error -->
                                    <?php if(isset( $_SESSION["extension_err"])){ ?>
                                    <br>
                                    <strong class="text-danger"><?= $_SESSION["extension_err"]; ?></strong>
                                    <br>
                                    <?php } unset($_SESSION["extension_err"]); ?>
                                    <!-- Size Error -->
                                    <?php if(isset( $_SESSION["size_err"])){ ?>
                                    <br>
                                    <strong class="text-danger"><?= $_SESSION["size_err"]; ?></strong>
                                    <br>
                                    <?php } unset($_SESSION["size_err"]); ?>
                                    <!-- Size Error -->
                                    <img width="200" class="mt-4"
                                        src="assets/photos/upload/user_profile_photos/<?= $after_assoc["profile_photo"] ?>"
                                        id="pic" />
                                    <br>
                                    <label for="file" class="chng_phto">Change Photo</label>
                                    <input type="file" name="profile_photo" id="file" class="chng_phto_input"
                                        oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                </div>


                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===========================
                    User Edit End
            ============================ -->
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<!-- Sweet Alert LINK -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

<!-- Dashboard Footer HTML -->
<?php require_once 'includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->