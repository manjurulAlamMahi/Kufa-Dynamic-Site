<?php session_start(); ?>
<!-- Dashboard Header HTML -->
<?php require_once '/xampp/htdocs/L/includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->
<?php 
    // Select Banner Content
    $select = "SELECT * FROM projects";
    $select_rslt = mysqli_query($db_connect,$select);
    $after_assoc_select = mysqli_fetch_assoc($select_rslt);
    $added_user_id = $after_assoc_select['user_id'];

    $select_user = "SELECT * FROM users WHERE id=$added_user_id";
    $select_user_rslt = mysqli_query($db_connect,$select_user);
    $after_assoc_user_select = mysqli_fetch_assoc($select_user_rslt);
    $user_name = $after_assoc_user_select['firstname'];
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
            <!-- Banner Content Start  -->
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="card user_card">
                        <div class="card-header text-center">
                            <h4>project Contents Information</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="user_header_text">SL</td>
                                    <td class="user_header_text">Added by</td>
                                    <td class="user_header_text">Project Name</td>
                                    <td class="user_header_text">Category</td>
                                    <td class="user_header_text">Description</td>
                                    <td class="user_header_text">Cover Image</td>
                                    <td class="user_header_text">Project Image</td>
                                    <td class="user_header_text">Status</td>
                                    <td class="user_header_text">Action</td>
                                </tr>
                                <?php foreach($select_rslt as $key => $project){ ?>
                                <tr>
                                    <td class="vv">#<?= $key+1 ?></td>
                                    <td class="vv"><?= $user_name; ?></td>
                                    <td class="vv"><?= $project['project_name']; ?></td>
                                    <td class="vv"><?= $project['category']; ?></td>
                                    <td class="vv"><?= substr($project['project_details'],0,20) ?>.....</td>
                                    <td class="vv">
                                        <img width="50px" src="/L/assets/photos/index/project/cover/<?= $project['project_cover_img']; ?>" alt="<?= $project['project_cover_img']; ?>">
                                    </td>
                                    <td class="vv">
                                        <img width="50px" src="/L/assets/photos/index/project/main/<?= $project['project_img']; ?>" alt="<?= $project['project_img']; ?>">
                                    </td>
                                    <td class="vv">
                                        <a href="act_dct_project_content.php?id=<?=$project["id"]?>"
                                        class="btn btn-<?=($project['status'] == 1? 'success':'secondary') ?> my_btn">
                                        <?=($project['status'] == 1? 'Active':'Deactive') ?>
                                    </td>
                                    <td class="vv">
                                        <a href="project_content_edit.php?id=<?=$project["id"]?>"
                                            class="btn btn-primary my_btn">Edit</a>
                                        <button type="button" name="banner_content_delete.php?id=<?=$project["id"]?>"
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