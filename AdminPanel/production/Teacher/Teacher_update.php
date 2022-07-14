<?php

require '../process/connection.php';

if (isset($_POST['teacher']) && $_POST['teacher'] == 'update') {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$confirm_email = $_POST['confirm_email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$academy = $_POST['academy'];
	$course = $_POST['Course'];
	$update = $_POST['update'];

	if ($_FILES['photos']['name'] != "") {
	$photoName = $_FILES['photos']['name'];
	$photoSize = $_FILES['photos']['size'];
	$photoType = $_FILES['photos']['type'];
	$photoTemp = $_FILES['photos']['tmp_name'];

	 if ($photoType == "image/PNG" || $photoType == "image/jpg" || $photoType == "image/jpeg"){
        $upload = move_uploaded_file($photoTemp, "../uploads/$photoName");
    }
	}
	else{
		$photoName = $_POST['oldphoto'];
	}

	$query = "update teachers SET
Teacher_Name='$name',
Teacher_Email='$email',
Teacher_Confirm_Email='$confirm_email',
Teacher_Phone='$number',
Teacher_Password='$password',
Teacher_Repeat_Password='$password2',
Teacher_Telephone='$phone',
Teacher_Gender='$gender',
Teacher_photo='$photoName',
Teacher_Address='$address',
Academies_ID='$academy',
Course_ID='$course'
where Teacher_ID='$update'";


$submit =mysqli_query($connect,$query);

if ($submit) {
	header('location:../teacher_list.php?msgs=success');
	exit();		
}
else{
		header('location:../teacher_form.php?msgs=error');
	exit();
}

}

?>