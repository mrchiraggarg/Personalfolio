<?php
include '../db.php';
if (isset($_POST['submit'])) {
	$student_id = $_POST['student_id'];
	$student_first_name = $_POST['student_first_name'];
	$student_last_name = $_POST['student_last_name'];
	$student_section = $_POST['student_section'];
	$student_academic_year = $_POST['student_academic_year'];
	$student_status = $_POST['student_status'];
	$select_qry = "SELECT * FROM student WHERE student_id = '$student_id'";
	$select_qry_run = mysqli_query($con,$select_qry);
	$data = mysqli_fetch_assoc($select_qry_run);
	$stu_status = $data['student_status'];
	$stu_class = $data['student_class'];
	if ($stu_status === "Fail") {
		$student_new_class = $stu_class;		
	} else {
		$student_new_class = $_POST['student_new_class'];
	}
	$update_qry = "UPDATE student SET
						student_first_name = '$student_first_name',
						student_last_name = '$student_last_name',
						student_new_class = '$student_new_class',
						student_section = '$student_section',
						student_academic_year = '$student_academic_year',
						student_status = '$student_status' WHERE student_id = '$student_id' ";
	$update_qry_run = mysqli_query($con,$update_qry);
	if ($update_qry_run) {
?>
<script type="text/javascript">
	alert ("Updated");
	window.location.replace('dashboard.php');
</script>
<?php
} else {
?>
<script type="text/javascript">
	alert ("Failed");
</script>
<?php
}
}
?>