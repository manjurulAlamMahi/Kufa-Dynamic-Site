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
                    <form action="../edit_user_post/edit_profile_photo_post.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                        <div class="card" style="border-radius: 5px;">
                            <div class="card-header text-center">
                                <h4>Change Profile Picture</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <img  
                                    class="mt-4" 
                                    src="../../assets/photos/upload/user_profile_photos/<?= $after_assoc['profile_photo'] ?>" 
                                    id="pic" 
                                    style="width:200px; height:200px; border-radius:50%;"
                                    />
                                </div>
                                <div class="mb-3">
                                    <!-- Image Error -->
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
                                    <!-- Image Error -->
                                </div>
                                <div class="mb-3">
                                    <label for="file" class="chng_phto" name="photo">Choose Photo</label>
                                    <input type="file" name="profile_photo" id="file" class="chng_phto_input"
                                        oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    <!-- ID INPUT -->
                                        <input class="form-control" type="hidden" value="<?= $id ?>" name="id">
                                    <!-- ID INPUT -->
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Change Photo</button>
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