<?php
	include "header.php";
	include "perfect_function.php";
	//get s ID from URL
	$id = $_GET['id'];
	$form_location = "course_edit_proc.php?id=".$id;

	$table_name = "courses";
	$get_userData = get_where($table_name, $id);
	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
	        $id = $row['id'];
	        $coursecode = $row['coursecode'];
	        $coursename = $row['coursename'];
	        $totalunits = $row['totalunits'];
	        $lecunits = $row['lecunits'];
	        $labunits = $row['labunits'];
			$instructorname = $row['instructorname'];
			$semester = $row['semester'];
	
	}
?>
<center>
	<form method="post" action="<?= $form_location ?>">
		<label>Course Code:</label>
		<input type="text" name="coursecode" value="<?= $coursecode ?>"> <br>
		<label>Course Name:</label>
		<input type="text" name="coursename" value="<?= $coursename ?>"> <br>
		<label>Total Units:</label>
		<input type="text" name="totalunits" value="<?= $totalunits ?>"> <br>
		<label>Lec Units:</label>
		<input type="text" name="lecunits" value="<?= $lecunits ?>"> <br>
		<label>Lab Units:</label>
		<input type="text" name="labunits" value="<?= $labunits ?>"> <br>
		<label>Instructor Name:</label>
		<input type="text" name="instructorname" value="<?= $instructorname ?>"> <br>
		<label>Semester:</label>
		<select name="semester">
			<?php if ($semester=="1") { ?>
			<option value="1">1st Semester</option>
			<option value="2">2nd Semester</option>
			<option value="3">Summer</option>
			<?php } elseif ($semester=="2") { ?>
				<option value="2">2nd Semester</option>
				<option value="1">1st Semester</option>
				<option value="3">Summer</option>
			<?php } elseif ($semester=="3") { ?>
				<option value="3">Summer</option>
				<option value="1">1st Semester</option>
				<option value="2">2nd Semester</option>
			<?php } else{ ?>
				<option value="1">1st Semester</option>
				<option value="2">2nd Semester</option>
				<option value="3">Summer</option>
			<?php } ?>
		</select>
		<br><br>
		<button type="submit">
			UPDATE COURSE
		</button>
		&nbsp;&nbsp;
		<button type="submit">
			CANCEL
		</button>
	</form>
</center>
<?php
include "footer.php";
?>