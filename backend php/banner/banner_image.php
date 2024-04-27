<?php session_start(); ?>
<!-- Dashboard Header HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->
<?php 
    // Select Banner Image
    $select_image = "SELECT * FROM banner_image";
    $select_image_rslt = mysqli_query($db_connect,$select_image);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Users</a>
        <span class="breadcrumb-item active">View Users</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title text-center">
            <!-- Banner Image Content Start  -->
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card user_card">
                        <div class="card-header text-center">
                            <h4>Banner Content Image</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="user_header_text">SL</td>
                                    <td class="user_header_text">Image</td>
                                    <td class="user_header_text">Status</td>
                                    <td class="user_header_text">Action</td>
                                </tr>
                                <?php foreach($select_image_rslt as $index => $banner_image){ ?>
                                <tr>
                                    <td class="vv">#<?= $index+1 ?></td>
                                    <td class="vv">
                                        <a class="my-link" target="_blank" href="../../assets/photos/index/banner/<?= $banner_image['image']; ?>">
                                            <img style="width: 50px;"
                                            src="../../assets/photos/index/banner/<?= $banner_image['image']; ?>"
                                            alt="<?= $banner_image['image']; ?>">
                                        </a>
                                    </td>
                                    <td class="vv">
                                        <a href="banner_image_act_dct.php?id=<?=$banner_image["id"]?>"
                                            class="btn btn-<?=($banner_image['status'] == 1? 'success':'secondary') ?> my_btn">
                                            <?=($banner_image['status'] == 1? 'Active':'Deactive') ?>
                                        </a>
                                    </td>
                                    <td class="vv">
                                        <button type="button" name="banner_image_delete.php?id=<?=$banner_image["id"]?>"
                                            class="btn btn-danger del my_btn">Delete</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Image Content End  -->
        </div><!-- sl-page-title -->
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<!-- Sweet Alert LINK -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- ############## Sweet Alert Javascript start ############## -->

<!-- ############## Sweet Alert Javascript end ############## -->

<!-- Dashboard Footer HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->

<!-- banner content Updated  Success -->
<?php if(isset($_SESSION['banner_content_updated'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['banner_content_updated']; ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['banner_content_updated']); ?>
<!-- banner content Updated  Success -->

<!-- Delete Alert -->
<script>
    $(".del").click(function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                var link = $(this).attr("name");
                window.location.href = link;
            }
        })
    })
</script>
<!-- Delete Success  -->
<?php if(isset($_SESSION["delete"])){?>
<script>
    Swal.fire(
        'Deleted!',
        '<?= $_SESSION["delete"] ?>',
        'success'
    )
</script>
<?php } unset($_SESSION["delete"]);?>
<!-- Delete Query Ends -->