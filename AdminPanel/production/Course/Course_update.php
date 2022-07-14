<?php

require '../process/connection.php';

if (isset($_POST['course']) && $_POST['course'] == 'update') {
	
	$name = $_POST['coursename'];
	$credithour = $_POST['crdhour'];
	$course_fee = $_POST['course_fee'];
	$academyname = $_POST['academies'];	
	$update = $_POST['update'];

	if ($_FILES['photo']['name'] != "") {
	$photoName = $_FILES['photo']['name'];
	$photoSize = $_FILES['photo']['size'];
	$photoType = $_FILES['photo']['type'];
	$photoTemp = $_FILES['photo']['tmp_name'];

	 if ($photoType == "image/PNG" || $photoType == "image/jpg" || $photoType == "image/jpeg"){
        $upload = move_uploaded_file($photoTemp, "../uploads/$photoName");
    }
	}
	else{
		$photoName = $_POST['oldphoto'];
	}

	$query = "update courses SET
Course_Name='$name',
Credit_Hours='$credithour',
Course_photo='$photoName',
Course_Fee='$course_fee',
Academies_ID='$academyname'
where Course_ID='$update'";


$submit =mysqli_query($connect,$query);

if ($submit) {
	header('location:../course_list.php?msgs=success');
	exit();		
}
else{
		header('location:../course_list.php?msgs=error');
	exit();
}

}

?>