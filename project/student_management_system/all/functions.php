<?php
function showdetails($student_class,$student_section)
{
include('../db.php');
$a = $student_class;
$b = $student_section;
if ($student_class == "Class" && $student_section == "Section") {
?>
<script type="text/javascript">
	alert ("Please Select the Class & Section");
</script>
<?php
} else {
$select_qry = "SELECT * FROM student WHERE student_class = '$a' AND student_section='$b'";
$select_qry_run = mysqli_query($con,$select_qry);
$select_qry_row = mysqli_num_rows($select_qry_run);
if($select_qry_row>0) {
?>
<div class="bg-light">
	<table class="table table-hover table-striped mb-5 text-center">
		<thead>
			<tr>
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
		<?php
		$count = 0;
		while ($data = mysqli_fetch_assoc($select_qry_run)) {
		$count++;
		?>
		<tbody>
			<tr>
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
		</tbody>
		<?php
		}
		}else {
		?>
	</table>
</div>
<script type="text/javascript">
	alert ("No Record Found");
</script>
<?php
}
}
}
?>