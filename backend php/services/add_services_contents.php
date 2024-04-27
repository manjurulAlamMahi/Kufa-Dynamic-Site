<?php 
    session_start();
?>
<!-- SOCIAL ICONS -->
<?php require_once '/xampp/htdocs/L/includes/icon/all_icons.php'; ?>
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
                    <form action="add_services_contents_post.php" method="POST">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4>Add Service Content</h4>
                            </div>
                            <div class="card-body">
                                 <!-- Show Icon  -->
                                 <div class="card">
                                    <p>ICONS :</p>
                                    <div class="icon" style="padding: 20px; overflow:scroll; height:250px">
                                    <?php foreach($fonts as $social_icons){?>
                                        <i id="social_icons" name="<?= $social_icons; ?>" style="font-size: 18px; color:#333; cursor:pointer;" class="call_social_icons m-2 fa <?= $social_icons; ?>"></i>
                                    <?php } ?>
                                    </div>
                                 </div>
                                 <!-- Show Icon  -->
                                <div class="mb-3">
                                    <label class="form-label">Icon Name</label>
                                    <input readonly type="text" class="form-control" id="icon_input" name="icon">
                                    <div class="mt-2 mb-2 text-center">
                                        <i id="show_icon" style="font-size: 42px;"></i>
                                    </div>
                                </div>
                                <!-- Service Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <!-- Service Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea style="resize: none;" name="decp" class="form-control" cols="20" rows="5"></textarea>
                                </div>
                                <!-- ERROR -->
                                <?php if(isset($_SESSION['service_empty_err'])){ ?>
                                <div class="alert alert-danger"><?= $_SESSION["service_empty_err"]; ?></div>
                                <?php } unset($_SESSION['service_empty_err']); ?>
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
<!-- SOCIAL ICON JS START -->
<script>
    $('.call_social_icons').click(function(){
        var icon_name = $(this).attr('name');
        $('#icon_input').attr('value', icon_name);
        $('#show_icon').attr('class', 'fa '+icon_name);
    });
</script>
<!-- SOCIAL ICON JS END -->
<!-- banner content added  Success -->
<?php if(isset($_SESSION['content_added'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['content_added']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['content_added']); ?>
<!-- banner content added  Success -->