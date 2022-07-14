<?php 
	
	require '../process/connection.php';

	$id = $_GET['id'];

	$query = "delete from academy where Academies_ID = '$id'";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../academy_list.php?msg=success');
		exit();
	}
	else{
		header('location:../academy_list.php?msg=error');
		exit();
	}
 ?>