<?php
$con = mysqli_connect('localhost','root','','student_management_system');
if ($con) {
	echo "";
} else {
	?>
	<script type="text/javascript">
		alert ("Error in Connection Establishment");
	</script>
	<?php
}
?>