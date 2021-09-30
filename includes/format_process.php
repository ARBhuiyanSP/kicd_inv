<?php
/*******************************************************************************
 * The following code will
 * Store Receive entry data.
 * There are 4 table to keet track on receive data. The are following:
 * 1. inv_receive (Store single row)      
 * 2. inv_receivedetail (Store Multiple row)
 * 3. inv_materialbalance (Store Multiple row)
 * 4. inv_supplierbalance (Store single row)
 * *****************************************************************************
 */
if (isset($_POST['format_submit']) && !empty($_POST['format_submit'])) {
   
    $query1 = "DELETE from inv_issue;";
    $result1 = $conn->query($query1);
	
	$query2 = "DELETE from inv_issuedetail;";
    $result2 = $conn->query($query2);
	
	$query3 = "DELETE from inv_materialbalance;";
    $result3 = $conn->query($query3);
	
	$query4 = "DELETE from inv_receive;";
    $result4 = $conn->query($query4);
	
	$query5 = "DELETE from inv_receivedetail;";
    $result5 = $conn->query($query5);
	
	$query6 = "DELETE from inv_supplierbalance;";
    $result6 = $conn->query($query6);
	
	$query7 = "DELETE from inv_tranferdetail;";
    $result7 = $conn->query($query7);
	
	$query8 = "DELETE from inv_transfermaster;";
    $result8 = $conn->query($query8);
    
	$query9 = "DELETE from inv_return;";
    $result9 = $conn->query($query9);
	
	$query10 = "DELETE from inv_returndetail;";
    $result10 = $conn->query($query10);
	
    $_SESSION['success']    =   "Format has been successfully completed.";
    header("location: format.php");
    exit();
	
    }

?>