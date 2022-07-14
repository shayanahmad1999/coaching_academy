<?php 
	
	require '../process/connection.php';

	$query = "delete from courses";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../course_list.php?sms=success');
		exit();
	}
	else{
		header('location:../course_list.php?sms=error');
		exit();
	}
 ?>