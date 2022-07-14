<?php 

require '../../AdminPanel/production/process/connection.php'; 
require '../security.php';
if (isset($_POST['file']) && $_POST['file'] == 'upload') {
	
	$fileName = $_FILES['files']['name'];
	$fileSize = $_FILES['files']['size'];
	$fileType = $_FILES['files']['type'];
	$fileTemp = $_FILES['files']['tmp_name'];

	 if ($fileType == "application/pdf" || $fileType == "application/docx" || $fileType == "application/ppt" || $fileType == "application/pptx"){
        $upload = move_uploaded_file($fileTemp,"../uploads/$fileName");
    }


	$query = "insert into upload_files set
	File = '$fileName'";

	$submit =mysqli_query($connect,$query);

if ($submit) {
	header('location:../upload_file.php?msg=success');
	exit();		
}
else{
		header('location:../upload_file.php?msg=error');
	exit();
}

}


 ?>