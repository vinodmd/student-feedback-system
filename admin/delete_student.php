<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"CALL deletestudent($info)");
	echo mysqli_error($conn);
	header('location:dashboard.php?info=display_student');
?>