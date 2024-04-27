<?php 
    session_start();
?>
<!-- Dashboard Header HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->

<?php 
    // Get Login User ID
    $id = $_GET['id'];
    // Get User Information 
    $select= "SELECT * FROM banner_content WHERE id=$id";
    $select_rslt = mysqli_query($db_connect,$select);
    $after_assoc = mysqli_fetch_assoc($select_rslt);
?>

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
                <div class="col-lg-8 m-auto">
                    <!-- Add Banner Content -->
                    <form action="banner_content_edit_post.php" method="POST">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4>Add Banner Content</h4>
                            </div>
                            <div class="card-body">
                                <!-- ID INPUT  -->
                                <input type="hidden" class="form-control" name="id" value="<?= $after_assoc['id']; ?>" >
                                <!-- ID INPUT  -->
                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" 
                                    value="<?= $after_assoc['sub_title']; ?>"
                                    >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title"
                                    value="<?= $after_assoc['title']; ?>" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <input readonly type="text" class="form-control my-2 mb-3" value="<?= $after_assoc['description']; ?>">
                                    <textarea name="desc" cols="20" rows="5" class="form-control" style="resize: none;"
                                    value="<?= $after_assoc['description']; ?>"></textarea>
                                </div>
                                <!-- ERROR -->
                                <?php if(isset($_SESSION['banner_empty_err'])){ ?>
                                    <div class="alert alert-danger"><?= $_SESSION["banner_empty_err"]; ?></div>
                                <?php } unset($_SESSION['banner_empty_err']); ?>
                                <!-- ERROR -->
                                <div class="mb-3">
                                    <button class="btn btn-warning my_btn" type="submit">UPDATE CONTENT</button>
                                </div>
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

