<?php 
    session_start();
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
                <div class="col-lg-6 m-auto align-self-center">
                    <!-- Add Banner Content -->
                    <form action="banner_content_post.php" method="POST">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4>Add Banner Content</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" value="<?= 
                                        (isset($_SESSION["prv_sub_title"])?$_SESSION["prv_sub_title"]:"");
                                        unset($_SESSION["prv_sub_title"]); ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="<?= 
                                        (isset($_SESSION["prv_title"])?$_SESSION["prv_title"]:"");
                                        unset($_SESSION["prv_title"]); ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="desc" id="description" cols="20" rows="5" class="form-control"
                                        style="resize: none;" value="<?= 
                                        (isset($_SESSION["prv_desc"])?$_SESSION["prv_desc"]:"");
                                        unset($_SESSION["prv_desc"]);?>"></textarea>
                                </div>
                                <!-- ERROR -->
                                <?php if(isset($_SESSION['banner_empty_err'])){ ?>
                                <div class="alert alert-danger"><?= $_SESSION["banner_empty_err"]; ?></div>
                                <?php } unset($_SESSION['banner_empty_err']); ?>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary my_btn" type="submit">ADD CONTENT</button>
                            </div>
                        </div>
                    </form>
                    <!-- Add Banner Content -->
                </div>
            </div>

        </div><!-- sl-page-title -->
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<!-- Dashboard Footer HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->

<!-- banner content added  Success -->
<?php if(isset($_SESSION['banner_content_added'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['banner_content_added']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['banner_content_added']); ?>
<!-- banner content added  Success -->