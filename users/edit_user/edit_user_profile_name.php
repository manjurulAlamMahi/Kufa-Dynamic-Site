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
                    <form action="../edit_user_post/edit_name_post.php?id=<?= $id ?>" method="POST">
                        <div class="card" style="border-radius: 5px;">
                            <div class="card-header text-center">
                                <h4>Change Profile Name</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="">First Name</label>
                                    <input class="form-control" type="text" name="f_name" value="<?= $after_assoc["firstname"]; ?>">
                                    <input class="form-control" type="hidden" value="<?= $id ?>" name="id">
                                    <?php if(isset($_SESSION['fname_err'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['fname_err']; ?></strong>
                                    <?php } unset($_SESSION['fname_err']); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="">Last Name</label>
                                    <input class="form-control" type="text" name="l_name" value="<?= $after_assoc["lastname"]; ?>">
                                    <?php if(isset($_SESSION['lname_err'])){ ?>
                                        <strong class="text-danger"><?= $_SESSION['lname_err']; ?></strong>
                                    <?php } unset($_SESSION['lname_err']); ?>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary"  style="border-radius: 5px; cursor:pointer;" type="submit">Change Name</button>
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