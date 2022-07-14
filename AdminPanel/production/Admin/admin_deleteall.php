<?php 
	
	require '../process/connection.php';

	$query = "delete from admin";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../admin_list.php?sms=success');
		exit();
	}
	else{
		header('location:../admin_list.php?sms=error');
		exit();
	}
 ?>