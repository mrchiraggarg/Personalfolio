<?php include 'header.php';
include '../db.php';
if (isset($_POST['search_button'])) {
	$valueToSearch = $_POST['valueToSearch'];
	$select_qry = "SELECT * FROM student WHERE CONCAT (student_first_name,student_last_name,student_class,student_section,student_status,student_academic_year,student_new_class) LIKE '%$valueToSearch%'";
	$search_result = searchTable($select_qry);
} else {
	$select_qry = "SELECT * FROM student";
	$search_result = searchTable($select_qry);
}
function searchTable($select_qry) {
$con = mysqli_connect('localhost','root','','student_management_system');
	$select_qry_run = mysqli_query($con,$select_qry);
	return $select_qry_run;

}
?>
<div class="bg-light">
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
				$count = 0;
				while ($data = mysqli_fetch_array($search_result)) {
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
			
			?>
		</tbody>
	</table>
</div>
<?php include 'footer.php';?>