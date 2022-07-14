<?php 

require '../process/connection.php';

if (isset($_POST['Admin']) && $_POST['Admin'] == 'account' ) {

    $photoName = $_FILES['photo']['name'];
    $photoSize = $_FILES['photo']['size'];
    $photoType = $_FILES['photo']['type'];
    $photoTemp = $_FILES['photo']['tmp_name'];

    if ($photoType == "image/PNG" || $photoType == "image/jpg" || $photoType == "image/jpeg"){
        $upload = move_uploaded_file($photoTemp, "../uploads/$photoName");
    }


	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

    $query = "insert into admin set
    User_Name = '$username',
    Email = '$email',
    Password = '$password',
    Photo = '$photoName'";

    $go = mysqli_query($connect,$query);

    if ($go) {
    	header('location:../login.php?msg=success');
    	exit();
    }
    else{
    	header('location:../login.php?msg=error');
    	exit();
    } 
}


?>