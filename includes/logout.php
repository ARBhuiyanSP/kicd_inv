<?php session_start();
 unset($_SESSION['error']);
 unset($_SESSION['success']);
 unset($_SESSION['logged']);
 header("location: ../index.php");
 exit();