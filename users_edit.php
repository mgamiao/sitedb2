<?php
include "header.php";
include "perfect_function.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "users_edit_proc.php?id=".$id;

$table_name = "students";
$get_userData = get_where($table_name, $id);
//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	$id = $row['id'];
	$firstname = $row['firstname'];
	$middlename = $row['middlename'];
	$lastname = $row['lastname'];
	$department = $row['department'];
	$program = $row['program'];
	$section = $row['section'];
	$semester = $row['semester'];
	$account_type = $row['account_type'];
	$account_status = $row['account_status'];	
}
?>
<center>
<form method="post" action="<?= $form_location ?>">
	<label>First Name:</label>
	<input type="text" name="firstname" value="<?= $firstname ?>"> &nbsp;
	<label>Middle Name:</label>
	<input type="text" name="middlename" value="<?= $middlename ?>"> &nbsp;
	<label>Last Name:</label>
	<input type="text" name="lastname" value="<?= $lastname ?>"> <br><br>
	<label>Department:</label>
	<input type="text" name="department" value="<?= $department ?>"> &nbsp;
	<label>Program:</label>
	<input type="text" name="program" value="<?= $program ?>"> &nbsp;
	<label>Section:</label>
	<input type="text" name="section" value="<?= $section ?>"> <br><br>
	<label>Semester:</label>
	<select name="semester">
		<?php if ($semester=="1") { ?>
		<option value="1">1st Semester</option>
		<option value="2">2nd Semester</option>
		<option value="3">Summer</option>
		<?php }elseif ($semester=="2") { ?>
			<option value="2">2nd Semester</option>
			<option value="1">1st Semester</option>
			<option value="3">Summer</option>
		<?php }elseif ($semester=="3") { ?>
			<option value="3">Summer</option>
			<option value="1">1st Semester</option>
			<option value="2">2nd Semester</option>
		<?php }else { ?>
			<option value="1">1st Semester</option>
			<option value="2">2nd Semester</option>
			<option value="3">Summer</option>
		<?php } ?>
	</select>

	&nbsp;

	<label>Account Type:</label>
	<select name="account_type">
		<?php if ($account_type=="1") { ?>
			<option value="1">Admin</option>		
			<option value="0">User</option>
		<?php }elseif ($account_type=="0") { ?>
				<option value="0">User</option>
				<option value="1">Admin</option>		
		<?php }else{ ?>
			<option value="0">User</option>
			<option value="1">Admin</option>
		<?php } ?>
	</select>

	&nbsp;

	<label>Account Status:</label>
	<select name="account_status">
		<?php if ($account_status=="1") { ?>
		<option value="1">Active</option>
		<option value="0">Inactive</option>
		<?php }elseif ($account_status=="0") { ?>
		<option value="0">Inactive</option>
		<option value="1">Active</option>
		<?php }else{ ?>
			<option value="0">Inactive</option>
			<option value="1">Active</option>
		<?php } ?>
	</select>
	<br><br>
	<button type="submit">
		UPDATE USER
	</button>
	</form>
	
	<form method="post" action="users_manage.php">
	<button type="submit">
		CANCEL
	</button>
	</form>
</center>
<?php
include "footer.php";
?>