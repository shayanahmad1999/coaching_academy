<?php 
	
	require '../process/connection.php';

	$id = $_GET['id'];

	$query = "delete from admin where Admin_ID = '$id'";

	$delete = mysqli_query($connect,$query);

	if ($delete){
		header('location:../admin_list.php?msg=success');
		exit();
	}
	else{
		header('location:../admin_list.php?msg=error');
		exit();
	}
 ?>