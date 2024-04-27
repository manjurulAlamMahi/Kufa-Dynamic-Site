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
                    <form action="add_brand_post.php" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header bg-primary text-white text-center">
                                <h4>Add brandrmation</h4>
                            </div>
                            <div class="card-body text-center">
                                 <!-- Show Icon  -->
                                <div class="mt-2">
                                    <p class="brand_text">Insert brand*</p>
                                    <label for="brand_img" class="form-label myButton">Select brand</label>
                                    <input style="display: none;" type="file" id="brand_img" class="form-control" name="brand" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    <style>
                                        .brand_text{
                                            font-size: 22px;
                                            color: #333;
                                            padding-bottom: 15px;
                                        }
                                        .myButton {
                                            box-shadow: 0px 0px 0px 2px #9fb4f2;
                                            background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
                                            background-color:#7892c2;
                                            border-radius:10px;
                                            border:1px solid #4e6096;
                                            display:inline-block;
                                            cursor:pointer;
                                            color:#ffffff;
                                            font-family:Arial;
                                            font-size:19px;
                                            padding:12px 37px;
                                            text-decoration:none;
                                            text-shadow:0px 1px 0px #283966;
                                        }
                                        .myButton:hover {
                                            background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
                                            background-color:#476e9e;
                                        }
                                    </style>
                                </div>
                                <div class="mt-1">
                                    <img id="pic" />
                                </div>
                                <!-- ERROR -->
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
                            <div class="card-footer text-center">
                                <button class="btn btn-primary myButton_submit" type="submit">ADD brand</button>
                                <style>
                                    .myButton_submit {
                                        box-shadow:inset 0px 1px 0px 0px #bbdaf7;
                                        background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
                                        background-color:#79bbff;
                                        border-radius:6px;
                                        border:1px solid #84bbf3;
                                        display:inline-block;
                                        cursor:pointer;
                                        color:#ffffff;
                                        font-family:Arial;
                                        font-size:15px;
                                        font-weight:bold;
                                        padding:6px 24px;
                                        text-decoration:none;
                                        text-shadow:0px 1px 0px #528ecc;
                                    }
                                    .myButton_submit:hover {
                                        background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
                                        background-color:#378de5;
                                    }
                                </style>
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

<!-- brandrmation added  Success -->
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