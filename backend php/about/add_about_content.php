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
                    <form action="about_content_post.php" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add About Contents</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card-header bg-primary text-white">
                                            <h4>Add About Details</h4>
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
                                                <textarea name="desc" id="description" cols="20" rows="5"
                                                    class="form-control" style="resize: none;" value="<?= 
                                            (isset($_SESSION["prv_desc"])?$_SESSION["prv_desc"]:"");
                                            unset($_SESSION["prv_desc"]);?>"></textarea>
                                            </div>

                                            <!-- ERROR -->
                                            <?php if(isset($_SESSION['about_empty_err'])){ ?>
                                            <div class="alert alert-danger"><?= $_SESSION["about_empty_err"]; ?></div>
                                            <?php } unset($_SESSION['about_empty_err']); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card-header bg-primary text-white">
                                            <h4>Add About Image</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3 m-auto">
                                                <img style="height:325px; width:60px; border:none;" class="image-fluid w-100"
                                                    id="pic" />
                                            </div>
                                            <div class="mt-2">
                                                <label
                                                    style="cursor: pointer; font-size:18px; color: #000; font-weight:700;"
                                                    for="file" class="form-label"><i style="margin-right: 5px;"
                                                        class="fa-solid fa-arrow-right"></i>Insert Image</label>
                                                <!-- Add Input -->
                                                <input name="about_image" style="display: none;" type="file" class="form-control" id="file"
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