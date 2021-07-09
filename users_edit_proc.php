<?php
	include "perfect_function.php";

	$table_name = 'students';

	//get user ID from URL
	$id = $_GET['id'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$department = $_POST['department'];
	$program = $_POST['program'];
	$section = $_POST['section'];
	$semester = $_POST['semester'];
	$account_type = $_POST['account_type'];
	$account_status = $_POST['account_status'];
	$semester = $_POST['semester'];

	$user_editedValues = array(
		"firstname" => $firstname,
		"middlename" => $middlename,
		"lastname" => $lastname,
		"department" => $department,
		"program" => $program,
		"section" => $section,
		"semester" => $semester,
		"account_type" => $account_type,
		"account_status" => $account_status,
		"semester" => $semester,
	);

	update($user_editedValues, $id, $table_name);
	header("Location: users_manage.php");
?>