<?php 
	
	require '../process/connection.php';

	$id = $_GET['id'];

	$query = "delete from teachers where Teacher_ID = '$id'";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../teacher_list.php?msg=success');
		exit();
	}
	else{
		header('location:../teacher_list.php?msg=error');
		exit();
	}
 ?>