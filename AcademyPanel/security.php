<?php  

    if (!isset($_SESSION['ACID']) || $_SESSION['ACID'] == "") {
        header('location:login.php?msg=HAHAHA you can not access directly please first log-in');
        exit();
    }

?>