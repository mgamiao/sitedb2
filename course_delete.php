<?php
include "perfect_function.php";

$table_name = "courses";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);

header("Location: course_view.php");

?>