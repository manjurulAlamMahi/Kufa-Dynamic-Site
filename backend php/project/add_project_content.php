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
                <div class="col-lg-12 m-auto align-self-center">
                    <!-- Add about Content -->
                    <form action="project_content_post.php" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Projects</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Category</label>
                                                    <input type="text" class="form-control" name="category" value="<?= 
                                                    (isset($_SESSION["prv_category"])?$_SESSION["prv_category"]:"");
                                                    unset($_SESSION["prv_category"]); ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Project Name</label>
                                                    <input type="text" class="form-control" name="project_name" value="<?= 
                                                    (isset($_SESSION["prv_project_name"])?$_SESSION["prv_project_name"]:"");
                                                    unset($_SESSION["prv_project_name"]); ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label class="form-label">Description</label>
                                                    <textarea name="desc" id="description" cols="20" rows="5"
                                                    class="form-control" style="resize: none;" value="<?= 
                                                    (isset($_SESSION["prv_desc"])?$_SESSION["prv_desc"]:"");
                                                    unset($_SESSION["prv_desc"]);?>"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label style="font-size:18px; color: #868ba1;; font-weight:700;"
                                                    class="form-label">Add Cover Image</label>
                                                    <!-- Add Input -->
                                                    <input name="cover_img" type="file" class="form-control" id="file"
                                                        oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label style="font-size:18px; color: #868ba1;; font-weight:700;" class="form-label">Add Project Image</label>
                                                    <!-- Add Input -->
                                                    <input name="project_img" type="file" class="form-control" id="file"
                                                        oninput="c_pic.src=window.URL.createObjectURL(this.files[0])">
                                                </div>
                                            </div>
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

                                            <!-- ERROR -->
                                            <?php if(isset($_SESSION['about_empty_err'])){ ?>
                                            <div class="alert alert-danger"><?= $_SESSION["about_empty_err"]; ?></div>
                                            <?php } unset($_SESSION['about_empty_err']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary my_btn" type="submit">ADD CONTENT</button>
                            </div>
                        </div>
                    </form>
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
<?php if(isset($_SESSION['successful'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['successful']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['successful']); ?>
<!-- banner content added  Success -->