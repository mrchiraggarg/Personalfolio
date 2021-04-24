<?php include 'header.php';?>
<?php
include('../db.php');
$student_id = $_REQUEST['student_id'];
$delete_qry = "DELETE FROM student WHERE student_id ='$student_id';";
$delete_qry_run = mysqli_query ($con,$delete_qry);  
if ($delete_qry_run == true) {
 ?>
 <script>
 alert('Student Deleted');
 window.open('dashboard.php','_self');
 </script>
 <?php
} else {
 ?>
 <script>
 alert('Sorry! Here is some error');
 window.open('dashboard.php','_self');
 </script>
 <?php
}
?>
<?php include 'footer.php';?>