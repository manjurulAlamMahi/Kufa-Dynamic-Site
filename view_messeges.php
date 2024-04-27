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

<?php 
    $select = "SELECT * FROM messeges";
    $select_rslt = mysqli_query($db_connect,$select);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Messages</a>
        <span class="breadcrumb-item active">Customer Message</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
        <?php foreach($select_rslt as $index => $msg): ?>
            <div class="row mb-3">
                <div class="col-lg-1 align-self-center">
                    <div class="serial float-right">
                        <p style="display: block; width:30px; height:30px; text-align:center; line-height:30px; background:#5B93D3; border-radius:50%; color: #fff;"><?= $index+1 ?></p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="customer_messeges">
                        <div class="card msg">
                            <div class="card-header customer_details">
                                <h4>Message From:</h4>
                                <h5 class="text-center"><?= $msg['name'] ?></h5>
                                <a href="mailto:<?= $msg['email'] ?>"><?= $msg['email'] ?></a>
                            </div>
                            <div class="card-body customer_msg">
                                <p><?= $msg['messege'] ?></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-2 align-self-center text-left">
                    <a href="#" class="btn btn-danger my_btn">Delete</a>
                </div>
            </div>
        <?php endforeach ?>
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->



<!-- Dashboard Footer HTML -->
<?php require_once 'includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->