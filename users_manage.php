<?php 
session_start();
include "header.php";
include "perfect_function.php";
if (isset($_SESSION['alert_msg'])) {
    if ($_SESSION['alert_msg']==1) {
        echo "
            <div class='card mb-4 py-3 border-bottom-success'>
                <div class='card-body'>
                RECORD HAS BEEN SUCCESSFULLY ADDED!
                </div>  
            </div>
        ";
        session_unset();
    }
}

?>
<br>
<a href="users_add.php" class="btn btn-success btn-icon-split">
<span class="icon text-white-50"> 
    <i class="fas fa-user-plus"></i>
</span>
<span class="text">ADD STUDENT</span>
</a>
<a href="course_view.php" class="btn btn-success btn-icon-split">
<span class="icon text-white-50"> 
    <i class="fas fa-folder-open"></i>
</span>
<span class="text">VIEW COURSES OFFERED</span>
</a>
<a href="admin_view_courses.php" class="btn btn-success btn-icon-split">
<span class="icon text-white-50"> 
    <i class="fas fa-graduation-cap"></i>
</span>
<span class="text">VIEW ENROLLED COURSES</span>
</a>
<br><br>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary">SITE STUDENTS</h3>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Last Name</td>
                <td>Department</td>
                <td>Program</td>
                <td>Section</td>
                <td>Semester</td>
                <td>Account Type</td>
                <td>Account Status</td>
                <td>OPTIONS</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Last Name</td>
                <td>Department</td>
                <td>Program</td>
                <td>Section</td>
                <td>Semester</td>
                <td>Account Type</td>
                <td>Account Status</td>
                <td>OPTIONS</td>
            </tr>
        </tfoot>
    <tbody>
    <?php 
    $table_name = "students";
        //get all records from users table
        $user_data = get($table_name);
        //fetch result set and pass it to an array (associative)
        foreach ($user_data as $key => $row) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $middlename = $row['middlename'];
            $lastname = $row['lastname'];
            $department = $row['department'];
            $program = $row['program'];
            $section = $row['section'];
            $semester = $row['semester'];
            if ($semester == 1) {
                $semester = "1st Semester";
            }elseif ($semester == 2) {
                $semester = "2nd Semester";
            }elseif ($semester == 3) {
                $semester = "Summer";
            }
            $account_type = $row['account_type'];
            if ($account_type == 1) {
                $account_type = "ADMIN";
            } else {
                $account_type = "USER";
            }
            $account_status = $row['account_status'];
            if ($account_status == 1) {
                $account_status = "ACTIVE";
            } else {
                $account_status = "INACTIVE";
            }
        
        
    ?>
    <tr> 
        <td><?= $firstname ?></td>
        <td><?= $middlename ?></td>
        <td><?= $lastname ?></td>
        <td><?= $department ?></td>
        <td><?= $program ?></td>
        <td><?= $section ?></td>
        <td><?= $semester ?></td>
        <td><?= $account_type ?></td>
        <td><?= $account_status ?></td>
        <td> 
        <a href="users_edit.php?id=<?= $id ?>" class = "btn btn-warning btn-circle btn-md"> 
            <i class="far fa-edit"></i> 
        </a>
        &nbsp;
        <a href="users_delete.php?id=<?= $id ?>" class = "btn btn-danger btn-circle btn-md">
            <i class="fas fa-trash"></i>
        </a>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>

<?php include "footer.php"; ?>