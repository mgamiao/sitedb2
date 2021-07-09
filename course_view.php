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
<a href="course_add.php" class="btn btn-success btn-icon-split">
<span class="icon text-white-50"> 
    <i class="fas fa-plus"></i>
</span>
<span class="text">ADD COURSE</span>
</a>
<a href="users_manage.php" class="btn btn-success btn-icon-split">
<span class="icon text-white-50"> 
    <i class="fas fa-user"></i>
</span>
<span class="text">VIEW STUDENTS</span>
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
    <h3 class="m-0 font-weight-bold text-primary">SITE OFFERED COURSES</h3>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Total Units</td>
                <td>Lec Units</td>
                <td>Lab Units</td>
                <td>Instructor Name</td>
                <td>Semester</td>
                <td>OPTIONS</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Course Code</td>
                <td>Course Name</td>
                <td>Total Units</td>
                <td>Lec Units</td>
                <td>Lab Units</td>
                <td>Instructor Name</td>
                <td>Semester</td>
                <td>OPTIONS</td>
            </tr>
        </tfoot>
    <tbody>
    <?php 
    $table_name = "courses";
        //get all records from users table
        $user_data = get($table_name);
        //fetch result set and pass it to an array (associative)
        foreach ($user_data as $key => $row) {
            $id = $row['id'];
            $coursecode = $row['coursecode'];
            $coursename = $row['coursename'];
            $totalunits = $row['totalunits'];
            $lecunits = $row['lecunits'];
            $labunits = $row['labunits'];
            $instructorname = $row['instructorname'];
            $semester = $row['semester'];
            if ($semester == 1) {
                $semester = "1st Semester";
            }elseif ($semester == 2) {
                $semester = "2nd Semester";
            }elseif ($semester == 3) {
                $semester = "Summer";
            }
        
        
    ?>
    <tr> 
        <td><?= $coursecode ?></td>
        <td><?= $coursename ?></td>
        <td><?= $totalunits ?></td>
        <td><?= $lecunits ?></td>
        <td><?= $labunits ?></td>
        <td><?= $instructorname ?></td>
        <td><?= $semester ?></td>
        <td> 
        <a href="course_edit.php?id=<?= $id ?>" class = "btn btn-warning btn-circle btn-md"> 
            <i class="far fa-edit"></i> 
        </a>
        &nbsp;
        <a href="course_delete.php?id=<?= $id ?>" class = "btn btn-danger btn-circle btn-md">
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