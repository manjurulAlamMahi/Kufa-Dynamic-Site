<!-- PHP CODE START -->
<?php 
session_start();
// Login Verification
if(!isset($_SESSION["verify"])){
    $_SESSION['login_frst'] = "Please Login First!";
    header('location:login.php');
}
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
            <div class="user_profile_photo">
                <img src="assets/photos/upload/user_profile_photos/<?= $after_assoc['profile_photo']; ?>"
                    alt="<?= $after_assoc['profile_photo']; ?>">
            </div>
            <h5 class="mt-5">Welcome <?= $after_assoc['firstname'] . " " . $after_assoc['lastname']; ?></h5>
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->



<!-- Dashboard Footer HTML -->
<?php require_once 'includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->

<!-- Change Name Success -->
<?php if(isset($_SESSION['name_chng'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['name_chng']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['name_chng']); ?>
<!-- Change Name Success -->

<!-- Change email Success -->
<?php if(isset($_SESSION['email'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['email']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['email']); ?>
<!-- Change email Success -->

<!-- Change Profile Photo Success -->
<?php if(isset($_SESSION['pp_success'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['pp_success']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['pp_success']); ?>
<!-- Change Profile Photo Success -->