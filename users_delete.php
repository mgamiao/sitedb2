<?php
include "perfect_function.php";

$table_name = "students";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);

header("Location: users_manage.php");

?>