<?php 
    session_start();
?>
<!-- SOCIAL ICONS -->
<?php require_once '/xampp/htdocs/L/includes/icon/social_icons.php'; ?>
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
                    <form action="add_skill_post.php" method="POST">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4>Add Skills</h4>
                            </div>
                            <div class="card-body">
                                 <!-- Show Icon  -->
                                <div class="mb-3">
                                    <label class="form-label">Skill Name</label>
                                    <input type="text" class="form-control" name="skill_name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Short Details</label>
                                    <input type="text" class="form-control" name="skill_details">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Skill Percentage</label>
                                    <small>(0% - 100%)*</small>
                                    <input type="text" class="form-control" name="skill_percentage">
                                </div>
                                <!-- ERROR -->
                                <?php if(isset($_SESSION['skill_err'])){ ?>
                                <div class="alert alert-danger"><?= $_SESSION["skill_err"]; ?></div>
                                <?php } unset($_SESSION['skill_err']); ?>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary my_btn" type="submit">ADD SKILL</button>
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
<?php if(isset($_SESSION['skill_added'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['skill_added']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['skill_added']); ?>
<!-- banner content added  Success -->