<?php session_start();

include '../connection/connect.php';
include '../helper/utilities.php';
include '../log_history.php';


$history_param  =   (object)[
	'user_id'   =>  $_SESSION['logged']['user_id'],
	'log_time'   =>  date('Y-m-d H:i:s'),
	'log_type'   =>  'logout',
	'log_date'   =>  date('Y-m-d'),
];
process_log_information($history_param);


 unset($_SESSION['error']);
 unset($_SESSION['success']);
 unset($_SESSION['logged']);
 

 
 
 header("location: ../index.php");
 exit();