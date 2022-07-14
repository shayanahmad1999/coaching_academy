<?php

require '../process/connection.php';

if (isset($_POST['course']) && $_POST['course'] == 'submit') {

	$photoName = $_FILES['photo']['name'];
	$photoSize = $_FILES['photo']['size'];
	$photoType = $_FILES['photo']['type'];
	$photoTemp = $_FILES['photo']['tmp_name'];

	 if ($photoType == "image/PNG" || $photoType == "image/jpg" || $photoType == "image/jpeg"){
        $upload = move_uploaded_file($photoTemp, "../uploads/$photoName");
    }
	
	$name = $_POST['coursename'];
	$credithour = $_POST['crdhour'];
	$academyname = $_POST['academies'];
	$course_fee = $_POST['course_fee'];

	$query = "INSERT INTO courses SET
Course_Name='$name',
Credit_Hours='$credithour',
Course_photo='$photoName',
Course_Fee = '$course_fee',
Academies_ID='$academyname'";


$submit =mysqli_query($connect,$query);

if ($submit) {
	header('location:../course_form.php?msg=success');
	exit();		
}
else{
		header('location:../cousrse_form.php?msg=error');
	exit();
}

}

?>