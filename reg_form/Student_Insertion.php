<?php

require '../AdminPanel/production/process/connection.php';

if (isset($_POST['student']) && $_POST['student'] == 'submit') {

	$photoName = $_FILES['photos']['name'];
	$photoSize = $_FILES['photos']['size'];
	$photoType = $_FILES['photos']['type'];
	$photoTemp = $_FILES['photos']['tmp_name'];

	 if ($photoType == "image/PNG" || $photoType == "image/jpg" || $photoType == "image/jpeg"){
        $upload = move_uploaded_file($photoTemp, "../AdminPanel/production/uploads/$photoName");
    }
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$confirm_email = $_POST['confirm_email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$Academy = $_POST['academy_id'];
	$Course = $_POST['course_id'];

	$query = "INSERT INTO student_record SET
Name='$name',
Email='$email',
Confirm_Email='$confirm_email',
Phone='$number',
Password='$password',
Repeat_Password='$password2',
Telephone='$phone',
Gender='$gender',
photo='$photoName',
Address='$address',
Academies_ID='$Academy',
Course_ID='$Course'";


$submit =mysqli_query($connect,$query);

if ($submit) {

$id = mysqli_insert_id($connect);

$submit =mysqli_query($connect,"INSERT INTO payment set Students_ID = '$id', Course_ID='$Course', Academies_ID='$Academy'");

	
	header('location:../academy.php?msg=success');
	exit();		
}
else{
		header('location:../academy.php?msg=error');
	exit();
}

}

?>