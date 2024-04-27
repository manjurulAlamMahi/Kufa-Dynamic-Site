<?php session_start(); ?>
<!-- Dashboard Header HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->
<?php 
    // Select Banner Content
    $select = "SELECT * FROM skills";
    $select_rslt = mysqli_query($db_connect,$select);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Skills</a>
        <span class="breadcrumb-item active">View Skills</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title text-center">
            <!-- Banner Content Start  -->
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card user_card">
                        <div class="card-header text-center">
                            <h4>Skills</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="user_header_text">SL</td>
                                    <td class="user_header_text">Name</td>
                                    <td class="user_header_text">Details</td>
                                    <td class="user_header_text">Percentage</td>
                                    <td class="user_header_text">Action</td>
                                </tr>
                                <?php foreach($select_rslt as $key => $skill){ ?>
                                <tr>
                                    <td class="vv">#<?= $key+1 ?></td>
                                    <td class="vv"><?= $skill['name'] ?></td>
                                    <td class="vv"><?= $skill['details'] ?></td>
                                    <td class="vv"><?= $skill['percentage'] ?>%</td>
                                    <td class="vv">
                                        <a href="act_dct_skill_contents.php?id=<?=$skill["id"]?>"
                                        class="btn btn-<?=($skill['status'] == 1? 'success':'secondary') ?> my_btn">
                                        <?=($skill['status'] == 1? 'Active':'Deactive') ?>
                                    </td>
                                    <td class="vv">
                                        <button type="button" name="delete_skill_contents.php?id=<?=$skill["id"]?>"
                                            class="btn btn-danger my_btn del">Delete</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Content End  -->
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
<?php if(isset($_SESSION['limit'])){ ?>
<script>
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '<?= $_SESSION['limit']; ?>',
})
</script>
<?php } unset($_SESSION['limit']); ?>
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