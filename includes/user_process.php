<?php
/*******************************************************************************
 * The following code will
 * Insert Project Info at projects table
 */
if (isset($_POST['user_submit']) && !empty($_POST['user_submit'])) {

        
        /*
         *  Insert Data Into inv_receivedetail Table:
        */ 
        $first_name		= $_POST['first_name'];
        $last_name		= $_POST['last_name'];
        $employee_id	= $_POST['employee_id'];
        $user_type		= $_POST['user_type'];     
        $project_id		= '1';     
        $warehouse_id	= $_POST['warehouse_id']; 
        $email			= $_POST['email'];      
		$password		= md5(mysqli_real_escape_string($conn,$_POST['password'])); 
        $status			= '1';  
		$created_by     = $_SESSION['logged']['user_id'];		
               
        $query = "INSERT INTO `users` (`first_name`,`last_name`,`employee_id`,`user_type`,`project_id`,`warehouse_id`,`email`,`password`,`status`,`created_by`) VALUES ('$first_name','$last_name','$employee_id','$user_type','$project_id','$warehouse_id','$email','$password','$status','$created_by')";
        $conn->query($query);
        
		$_SESSION['success']    =   "User Entry process have been successfully completed.";
		header("location: user_entry.php");
		exit();
}


?>