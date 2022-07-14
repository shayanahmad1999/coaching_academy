<?php 
	
	require '../process/connection.php';

	$query = "delete from teachers";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../teacher_list.php?sms=success');
		exit();
	}
	else{
		header('location:../teacher_list.php?sms=error');
		exit();
	}
 ?>