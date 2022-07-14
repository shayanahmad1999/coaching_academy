<?php 
	
	require '../process/connection.php';

	$query = "delete from academy";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../academy_list.php?sms=success');
		exit();
	}
	else{
		header('location:../academy_list.php?sms=error');
		exit();
	}
 ?>