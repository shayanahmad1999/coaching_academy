<?php 
	
	require '../process/connection.php';

	$id = $_GET['id'];

	$query = "delete from courses where Course_ID = '$id'";


	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../course_list.php?msg=success');
		exit();
	}
	else{
		header('location:../course_list.php?msg=error');
		exit();
	}
 ?>