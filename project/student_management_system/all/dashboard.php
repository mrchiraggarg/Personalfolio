<?php include 'header.php';
$select_qry = "SELECT * FROM student";
$select_qry_run = mysqli_query($con,$select_qry);
?>
<div class="container-fluid text-center" style="outline:  none;">
	<form method="post" action="dashboard.php">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group my-3">
					<select name="student_class" class="custom-select">
						<option>Class</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group my-3">
					<select name="student_section" class="custom-select">
						<option>Section</option>
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
					</select>
				</div>
			</div>
			<div class="col-md-4 my-3">
				<button name="filter_button" type="submit" class="btn btn-outline-success w-100">Filter</button>
			</div> 
		</div>
	</form>
</div>
<?php
include '../db.php';
if (isset($_POST['filter_button'])) {
	$student_section = $_POST['student_section'] ?? "";
	$student_class = $_POST['student_class'] ?? "";
	include 'functions.php';
	showdetails($student_class,$student_section);
}
?>
<div class="bg-light" style="overflow: auto; width: 100%; padding: 10px;">
	<table class="table table-hover table-striped">
		<thead>
			<tr align="center">
				<th>ID</th>
				<th>Student Name</th>
				<th>Academic Year</th>
				<th>Class</th>
				<th>Section</th>
				<th>Status</th>
				<th>Promote</th>
				<th colspan="2">Upgrade</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (1>mysqli_num_rows($select_qry_run)) {
				echo "<tr ><th colspan='8' class='text-center'>NO RECORD FOUND!!..</th></tr>";
			} else {
				$count = 0;
				while ($data = mysqli_fetch_assoc($select_qry_run)) {
					$count++;
			?>
			<tr align="center">
				<td><?php echo $count;?></td>
				<td><?php echo $data['student_first_name']." ".$data['student_last_name'];?></td>
				<td><?php echo $data['student_academic_year'];?></td>
				<td><?php echo $data['student_class'];?></td>
				<td><?php echo $data['student_section'];?></td>
				<td><?php echo $data['student_status'];?></td>
				<td><?php echo $data['student_new_class'];?></td>
				<td>
					<div class="text-center">
						<a href="update_student.php?student_id=<?php echo $data['student_id'];?>">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">&#x1F589;</button>
						</a>
						<a href="delete_student.php?student_id=<?php echo $data['student_id'];?>">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">&#x1F5D1;</button>
						</a>
					</div>
				</td>
			</tr>
			<?php
			}
			}
			?>
		</tbody>
	</table>
</div>
<?php include 'footer.php';?>