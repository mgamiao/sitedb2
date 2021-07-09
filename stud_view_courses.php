<?php 
session_start();
include "header_view.php";
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
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h3 class="m-0 font-weight-bold text-primary">SITE ENROLLED COURSES</h3>
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
            </tr>
        </tfoot>
    <tbody>
    <?php 
    $table_name = "students";
        //get all records from users table
        $user_data = get($table_name);
        //fetch result set and pass it to an array (associative)
        $semester = _get_semester_from_id($_SESSION['username'], $table_name);
        if ($semester==1){
            $mysql_query = "select * from courses where semester=1";
            $data = custom_query($mysql_query);

            foreach ($data as $key => $row) {
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
            </tr>
                <?php }
                }elseif ($semester==2){
                    $mysql_query = "select * from courses where semester=2";
            $data = custom_query($mysql_query);

            foreach ($data as $key => $row) {
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
            </tr>
                <?php }
                }elseif ($semester==3){
                    $mysql_query = "select * from courses where semester=3";
            $data = custom_query($mysql_query);

            foreach ($data as $key => $row) {
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
            </tr>
            <?php }
            }?>
                </tbody>
    
</table>
</div>
</div>
</div>

<?php include "footer.php"; ?>