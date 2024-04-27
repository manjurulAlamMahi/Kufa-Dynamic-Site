<?php 
    session_start();
    if(!isset($_SESSION["verify"])){
        $_SESSION['login_frst'] = "Please Login First!";
        header('location:admin_login.php');
    }
?>
<!-- Dashboard Header HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Edit Profile</a>
        <span class="breadcrumb-item active">Change Name</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title text-center">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form action="../edit_user_post/edit_email_pass_post.php?id=<?= $id ?>" method="POST">
                        <div class="card" style="border-radius: 5px;">
                            <div class="card-header text-center">
                                <h4>Change Email/Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <!-- ID INPUT -->
                                    <input class="form-control" type="hidden" value="<?= $id ?>" name="id">
                                    <!-- ID INPUT -->
                                    <label class="form-label" for="">Email</label>
                                    <input class="form-control" type="text" name="email" value="<?= $after_assoc["email"]; ?>">
                                    <?php if(isset($_SESSION['email'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['email']; ?></strong>
                                    <?php } unset($_SESSION['email']); ?>
                                    <?php if(isset($_SESSION['valid_email_err'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['valid_email_err']; ?></strong>
                                    <?php } unset($_SESSION['valid_email_err']); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Old Password</label>
                                    <input class="form-control" type="password" name="old_pass">
                                    <?php if(isset($_SESSION['old_pass_err'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['old_pass_err']; ?></strong>
                                    <?php } unset($_SESSION['old_pass_err']); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">New Password</label>
                                    <input class="form-control" type="password" name="new_pass">
                                    <?php if(isset($_SESSION['lname_err'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['lname_err']; ?></strong>
                                    <?php } unset($_SESSION['lname_err']); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Confirm Password</label>
                                    <input class="form-control" type="password" name="con_pass">
                                    <?php if(isset($_SESSION['lname_err'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['lname_err']; ?></strong>
                                    <?php } unset($_SESSION['lname_err']); ?>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary"  style="border-radius: 5px; cursor:pointer;" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<!-- Dashboard Footer HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->