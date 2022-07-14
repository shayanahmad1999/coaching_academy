<?php

	  if (!isset($_SESSION['STID']) || $_SESSION['STID'] == "") {
    header('location:login.php?msg = you can not access this page directly');
    exit();
  }
  
?>