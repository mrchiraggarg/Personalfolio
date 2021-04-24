<?php include 'header.php';
include '../db.php';
$sid = $_GET['student_id'];
$select_qry = "SELECT * FROM student WHERE student_id = '$sid'";
$select_qry_run = mysqli_query($con,$select_qry);
$data = mysqli_fetch_assoc($select_qry_run);
?>
<div class="container bg-light p-5 my-5">
	<form method="post" action="update_student_details.php">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>First</label>
					<input type="text" class="form-control" name="student_first_name" value="<?php echo $data['student_first_name'];?>" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Last</label>
					<input type="text" class="form-control" name="student_last_name" value="<?php echo $data['student_last_name'];?>" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Class</label>
					<input type="text" class="form-control" name="student_new_class" value="<?php echo $data['student_class'];?>" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Section</label>
					<div class="input-group mb-3">
						<select class="custom-select" name="student_section">
							<option value="<?php echo $data['student_section'];?>"><?php echo $data['student_section'];?></option>
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
					<input type="text" class="form-control" name="student_status" value="<?php echo $data['student_status'];?>" required>
				</div>
			</div>
			<input type="hidden" name="student_id" value="<?php echo $data['student_id'];?>">
			<div class="col-md-6">
				<div class="form-group">
					<label>Academic Year</label>
					<div class="input-group mb-3">
						<select class="custom-select" name="student_academic_year">
							<option value="<?php echo $data['student_academic_year'];?>"><?php echo $data['student_academic_year'];?></option>
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