<?php

$DB = new PDO("mysql:host=localhost;dbname=inventory_module", "root", "");

for ($count = 0; $count < count($_POST['quantity']); $count++) {
    $purchase_date = $_POST['purchase_date'];
    $purchase_no = $_POST['purchase_no'];
    $purchase_id = $_POST['purchase_id'];
    $purchase_date = $_POST['purchase_date'];
    $challan_no = $_POST['challan_no'];
    $challan_date = $_POST['challan_date'];
    $requisition_no = $_POST['requisition_no'];
    $requisition_date = $_POST['requisition_date'];
    $supplier_name = $_POST['supplier_name'];
    $supplier_id = $_POST['supplier_id'];


    $material_name = $_POST['material_name'][$count];
    $material_id = $_POST['material_id'][$count];
    $unit = $_POST['unit'][$count];
    $part_no = $_POST['part_no'][$count];
    $quantity = $_POST['quantity'][$count];
    $unit_price = $_POST['unit_price'][$count];
    $totalamount = $_POST['totalamount'][$count];

    $project_id = $_POST['project_id'];
    $remarks = $_POST['remarks'];
    $warehouse_id = $_POST['warehouse_id'];

    $query = "INSERT INTO `inv_purchasedetail` (`purchase_no`,`material_id`,`purchase_qty`,`unit_price`,`sl_no`,`total_purchase`,`part_no`) VALUES ('$purchase_no','$material_id','$quantity','$unit_price','1','$totalamount','$part_no')";


//$query = "INSERT INTO `inv_receivedetail` (`mrr_no`,`material_id`,`receive_qty`,`unit_price`) VALUES ('$mrr_no','$material_id','$quantity','$unit_price')";

    $result = $DB->exec($query) or die(mysql_error());
}

$query2 = "INSERT INTO `inv_purchase` (`purchase_no`,`purchase_date`,`purchase_id`,`receive_acct_id`,`supplier_id`,`postedtogl`,`remarks`,`purchase_type`,`purchase_ware_hosue_id`,`purchase_unit_id`,`receive_total`,`no_of_material`,`challanno`,`requisitionno`, `warehouse_id`) VALUES ('$purchase_no','$purchase_date','$purchase_id','6-14-010','$supplier_id','0','$remarks','Local','001','1','$totalamount','2','$challan_no','$requisition_no', '$warehouse_id')";

//$query2 = "INSERT INTO `inv_receive` (`mrr_no`,`mrr_date`,`purchase_id`) VALUES ('$mrr_no','$mrr_date','$purchase_id')";

$result2 = $DB->exec($query2) or die(mysql_error());


header("location: purchase_entry.php");
?>