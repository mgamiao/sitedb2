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
                <td>Course</td>
                <td>Section</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Last Name</td>
                <td>Department</td>
                <td>Course</td>
                <td>Section</td>
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
        
        
    ?>
    <tr> 
        <td><?= $firstname ?></td>
        <td><?= $middlename ?></td>
        <td><?= $lastname ?></td>
        <td><?= $department ?></td>
        <td><?= $program ?></td>
        <td><?= $section ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>

<?php include "footer.php"; ?>