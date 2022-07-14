<?php 
	
	require '../process/connection.php';

	$query = "delete from student_record";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../student_list.php?sms=success');
		exit();
	}
	else{
		header('location:../student_list.php?sms=error');
		exit();
	}
 ?>