<?php 
	
	require '../process/connection.php';

	$id = $_GET['id'];

	$query = "delete from student_record where Students_ID = '$id'";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../student_list.php?msg=success');
		exit();
	}
	else{
		header('location:../student_list.php?msg=error');
		exit();
	}
 ?>