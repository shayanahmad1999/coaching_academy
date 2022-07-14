<?php

	session_start();
	
	$connect = mysqli_connect("localhost","root","","coaching_academy");

	if (mysqli_connect_errno()) {
		echo "Faild to connect sorry!" . mysqli_connect_error();
		exit();
	}

	
?>