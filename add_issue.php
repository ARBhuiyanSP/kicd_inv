<?php
$DB = new PDO("mysql:host=localhost;dbname=inventory_module", "root", "");

for($count = 0; $count<count($_POST['quantity']); $count++)
{  
$issue_id 			= $_POST['issue_id'];
$issue_date 		= $_POST['issue_date'];
//$buyer_id 	= $_POST['buyer_id'];
//$posted_to_gl 		= $_POST['posted_to_gl'];
$remarks 		= $_POST['remarks'];
//$issue_type 		= $_POST['issue_type'];
//$issue_unit_id 	= $_POST['issue_unit_id'];
//$no_of_material 		= $_POST['no_of_material'];
//$issue_total 		= $_POST['issue_total'];


$material_name 		= $_POST['material_name'][$count];
$material_id 		= $_POST['material_id'][$count];
$unit 			= $_POST['unit'][$count];
$part_no 		= $_POST['part_no'][$count];
$quantity 		= $_POST['quantity'][$count];
$unit_price 		= $_POST['unit_price'][$count];
$totalamount 		= $_POST['totalamount'][$count];



$query = "INSERT INTO `inv_issuedetail` (`issue_id`,`material_id`,`expense_acct_id`,`cost_center`,`issue_qty`,`issue_price`,`sl_no`,`total_issue`) VALUES ('$issue_id','$material_id','8-10-006','C-01','$quantity','$unit_price','1','$totalamount')";
$result = $DB->exec($query)  or die(mysql_error());

$query2 = "INSERT INTO `inv_issue` (`issue_id`,`issue_date`,`buyer_id`,`posted_to_gl`,`remarks`,`issue_type`,`issue_unit_id`,`no_of_material`,`issue_total`) VALUES ('$issue_id','$issue_date','B001','0','$remarks','Issue','b20','10','$totalamount')";
$result2 = $DB->exec($query2) or die(mysql_error());


}




header("location: issue_entry.php");

?>