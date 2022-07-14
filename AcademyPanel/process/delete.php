<?php 

	 require '../../AdminPanel/production/process/connection.php';

	$id = $_GET['id'];

	$delete = mysqli_query($connect,"delete from student_record where Student_ID = '$id'");

	if ($delete) {
		header('location:../Academy_list.php?msg=success');
		exit();
	}
	else{
		header('location:../Academy_list.php?msg=error');
		exit();
	}

 ?>