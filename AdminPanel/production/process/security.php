<?php

	  if (!isset($_SESSION['AaID']) || $_SESSION['AaID'] == "") {
    header('location:login.php?msg = you can not access this page directly');
    exit();
  }
  
?>