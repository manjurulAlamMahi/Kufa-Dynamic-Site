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
        <span class="breadcrumb-item active">Banner - Add Banner Image</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title text-center">

            <div class="row">
                <div class="col-lg-6 m-auto align-self-center">
                    <!-- Add Banner Image -->
                    <form action="banner_image_post.php" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4>ADD BANNER IMAGE</h4>
                            </div>
                            <div class="card-body">
                                <?php if(isset($_SESSION['successful'])){ ?>
                                <div class="alert alert-success">
                                    <?= $_SESSION['successful']; ?>
                                </div>
                                <?php } unset($_SESSION['successful']); ?>
                                <div class="row" style="background-color: #152136; height:300px">
                                    <div class="col-lg-6 m-auto">
                                        <img style="height: 300px; border:none;" class="image-fluid w-100" id="pic" />
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <label style="cursor: pointer; font-size:18px; color: #000; font-weight:700; " for="file" class="form-label"><i style="margin-right: 5px;" class="fa-solid fa-arrow-right"></i>Insert Image</label>
                                    
                                    <!-- Add Input -->
                                    <input style="display: none;" type="file" class="form-control" id="file" name="banner_image"
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
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary my_btn">ADD BANNER IMAGE</button>
                            </div>
                        </div>
                    </form>
                    <!-- Add Banner Image -->
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