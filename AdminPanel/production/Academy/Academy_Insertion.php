<?php

require '../process/connection.php';

if (isset($_POST['academy']) && $_POST['academy'] == 'submit') {

	$photoName = $_FILES['photo']['name'];
	$photoSize = $_FILES['photo']['size'];
	$photoType = $_FILES['photo']['type'];
	$photoTemp = $_FILES['photo']['tmp_name'];

	 if ($photoType == "image/PNG" || $photoType == "image/jpg" || $photoType == "image/jpeg"){
        $upload = move_uploaded_file($photoTemp, "../uploads/$photoName");
    }
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$confirm_email = $_POST['confirm_email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$query = "INSERT INTO academy SET
Academy_Name='$name',
Academy_Email='$email',
Academy_Confirm_Email='$confirm_email',
Academy_Phone='$number',
Academy_Password='$password',
Academy_Repeat_Password='$password2',
Academy_Telephone='$phone',
Academy_photo='$photoName',
Academy_Address='$address'";


$submit =mysqli_query($connect,$query);

if ($submit) {
	header('location:../academy_form.php?msg=success');
	exit();		
}
else{
		header('location:../academy_form.php?msg=error');
	exit();
}

}

?>