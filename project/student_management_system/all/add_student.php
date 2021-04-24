<?php include 'header.php';?>
<div class="container bg-light p-5 my-5">
	<form method="post" action="add_student.php">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>First</label>
					<input type="text" class="form-control" name="student_first_name" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Last</label>
					<input type="text" class="form-control" name="student_last_name" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Class</label>
					<input type="text" class="form-control" name="student_class" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Section</label>
					<div class="input-group mb-3">
						<select class="custom-select" name="student_section">
							<option value="">Choose...</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Status</label>
					<input type="text" class="form-control" name="student_status" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Academic Year</label>
					<div class="input-group mb-3">
						<select class="custom-select" name="student_academic_year">
							<option value="">Choose...</option>
							<option value="2018-2019">2018-2019</option>
							<option value="2019-2020">2019-2020</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							<option value="2022-2023">2022-2023</option>
							<option value="2023-2024">2023-2024</option>
							<option value="2024-2025">2024-2025</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-primary w-25" name="submit">Submit</button>
		</div>
	</form>
</div>
<?php include 'footer.php';?>
<?php
include '../db.php';
if (isset($_POST['submit'])) {
	$student_first_name = $_POST['student_first_name'];
	$student_last_name = $_POST['student_last_name'];
	$student_class = $_POST['student_class'];
	$student_section = $_POST['student_section'];
	$student_academic_year = $_POST['student_academic_year'];
	$student_status = $_POST['student_status'];
	$insert_qry = "INSERT INTO student
						(student_first_name,
						student_last_name,
						student_class,
						student_section,
						student_academic_year,
						student_status)
						VALUES
						('$student_first_name',
						'$student_last_name',
						'$student_class',
						'$student_section',
						'$student_academic_year',
						'$student_status')";
	$insert_qry_run = mysqli_query($con,$insert_qry);
	if ($insert_qry_run) {
?>
<script type="text/javascript">
	alert ("Successful");
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