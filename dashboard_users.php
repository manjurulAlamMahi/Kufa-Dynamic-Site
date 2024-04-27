<!-- ============== PHP Code Start =============== -->
<?php 
    session_start();
    require 'database/database.php';

    $select_users = "SELECT * FROM users WHERE status=0";
    $select_users_rslt = mysqli_query($db_connect,$select_users);

?>
<!-- ============== PHP Code End =============== -->

<!-- Dashboard Header HTML -->
<?php require_once 'includes/dashboard_parts/header.php'; ?>
<!-- Dashboard Header HTML -->

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Users</a>
        <span class="breadcrumb-item active">View Users</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title text-center">
            <!-- =========================
                    User Table Start 
            =========================== -->
            <div class="card user_card">
                <div class="card-header text-center">
                    <h4>User Information</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td class="user_header_text">SL</td>
                            <td class="user_header_text">ID</td>
                            <td class="user_header_text">Photo</td>
                            <td class="user_header_text">Name</td>
                            <td class="user_header_text">Email</td>
                            <td class="user_header_text">Created at</td>
                            <td class="user_header_text">Action</td>
                        </tr>
                        <?php foreach($select_users_rslt as $index => $users){ ?>
                            <tr>
                                <td class="vv">#<?= $index+1 ?></td>
                                <td class="vv"><?= $users['id']; ?></td>
                                <td class="vv">
                                    <img width="50" src="assets/photos/upload/user_profile_photos/<?= $users["profile_photo"] ?>" 
                                    alt="<?=$users["profile_photo"]?>">
                                </td>
                                <td class="vv"><?= $users['firstname']." ".$users['lastname']; ?></td>
                                <td class="vv"><?= $users['email']; ?></td>
                                <td class="vv"><?= $users['created_at']; ?></td>
                                <td class="vv">
                                    <a href="edit.php?id=<?=$users["id"]?>" class="btn btn-primary my_btn">Edit</a>
                                    <a href="post/trash.php?id=<?=$users["id"]?>" class="btn btn-danger my_btn">Trash</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <!-- =========================
                    User Table End 
            =========================== -->
        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<!-- Sweet Alert LINK -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- ############## Sweet Alert Javascript start ############## -->
<!-- Success Alert -->
<?php if(isset($_SESSION['edit'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['edit'] ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['edit']); ?>
<!-- Success Alert -->
<!-- trash Alert -->
<?php if(isset($_SESSION['trash'])){ ?>
<script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: '<?= $_SESSION['trash'] ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
<?php } unset($_SESSION['trash']); ?>
<!-- trash Alert -->
<!-- ############## Sweet Alert Javascript end ############## -->

<!-- Dashboard Footer HTML -->
<?php require_once 'includes/dashboard_parts/footer.php'; ?>
<!-- Dashboard Footer HTML -->