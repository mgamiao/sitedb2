<?php
	include "perfect_function.php";

	$table_name = 'courses';

	//get user ID from URL
	$id = $_GET['id'];
	$coursecode = $_POST['coursecode'];
	$coursename = $_POST['coursename'];
	$totalunits = $_POST['totalunits'];
	$lecunits = $_POST['lecunits'];
	$labunits = $_POST['labunits'];
	$instructorname = $_POST['instructorname'];
	$semester = $_POST['semester'];

	$user_editedValues = array(
		"coursecode" => $coursecode,
		"coursename" => $coursename,
		"totalunits" => $totalunits,
		"lecunits" => $lecunits,
		"labunits" => $labunits,
		"instructorname" => $instructorname,
		"semester" => $semester
	);

	update($user_editedValues, $id, $table_name);
	header("Location: course_view.php");
?>