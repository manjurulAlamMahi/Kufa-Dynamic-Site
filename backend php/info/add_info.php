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
        <div class="sl-page-title">
            <div class="row">
                <div class="col-lg-6 m-auto align-self-center">
                    <!-- Add Social Content -->
                    <form action="add_info_post.php" method="POST">
                        <div class="card">
                            <div class="card-header bg-primary text-white text-center">
                                <h4>Add Information</h4>
                            </div>
                            <div class="card-body">
                                 <!-- Show Icon  -->
                                <div class="mb-3">
                                    <label class="form-label">Office Address</label>
                                    <input type="text" class="form-control" name="adress">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Office At (city*)</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="number">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Short Details</label>
                                    <textarea class="form-control" name="details" style="resize: none;" cols="10" rows="4"></textarea>
                                </div>
                                <!-- ERROR -->
                                <?php if(isset($_SESSION['icon_empty_err'])){ ?>
                                <div class="alert alert-danger"><?= $_SESSION["icon_empty_err"]; ?></div>
                                <?php } unset($_SESSION['icon_empty_err']); ?>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary my_btn" type="submit">ADD INFORMATION</button>
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

<!-- Information added  Success -->
<?php if(isset($_SESSION['info_added'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['info_added']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['info_added']); ?>

<!-- banner content added  Success -->