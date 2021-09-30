<?php
/*******************************************************************************
 * The following code will
 * Insert Project Info at projects table
 */
if (isset($_POST['unit_submit']) && !empty($_POST['unit_submit'])) {

        
        /*
         *  Insert Data Into inv_receivedetail Table:
        */ 
        $unit_name		= $_POST['unit_name'];    
               
        $query = "INSERT INTO `inv_item_unit` (`unit_name`) VALUES ('$unit_name')";
        $conn->query($query);
        
		$_SESSION['success']    =   "Unit Entry process have been successfully completed.";
		header("location: unit_entry.php");
		exit();
}


/*******************************************************************************
 * The following code will
 * Update Project Info at projects table
 */

if(isset($_POST['package_update_submit']) && !empty($_POST['package_update_submit'])){
    $receive_total      =   0;
    $no_of_material     =   0;
    $edit_id            =   $_POST['edit_id'];
    $mrr_no             =   $_POST['mrr_no'];
    
    // first delete all from inv_receivedetail; 
    $delsql    = "DELETE FROM inv_receivedetail WHERE mrr_no='$mrr_no'";
    $conn->query($delsql);
    // first delete all from inv_materialbalance; 
    $delsq2    = "DELETE FROM inv_materialbalance WHERE mb_ref_id='$mrr_no'";
    $conn->query($delsq2);
    
    for ($count = 0; $count < count($_POST['quantity']); $count++) {
        $mrr_date           = $_POST['mrr_date'];        
        $purchase_id        = $_POST['purchase_id'];
        $Purchase_date      = $_POST['Purchase_date'];
        $challan_no         = $_POST['challan_no'];
        $challan_date       = $_POST['challan_date'];
        $requisition_no     = $_POST['requisition_no'];
        $requisition_date   = $_POST['requisition_date'];
        $supplier_name      = $_POST['supplier_name'];
        $supplier_id        = $_POST['supplier_id'];


        $material_name      = $_POST['material_name'][$count];
        $material_id        = $_POST['material_id'][$count];
        $unit               = $_POST['unit'][$count];
        $part_no            = $_POST['part_no'][$count];
        $quantity           = $_POST['quantity'][$count];
        $no_of_material     = $no_of_material+$quantity;
        $unit_price         = $_POST['unit_price'][$count];
        $totalamount        = $_POST['totalamount'][$count];
        $receive_total      = $receive_total+$totalamount;
        $project_id         = $_POST['project_id'];
        $remarks            = $_POST['remarks'];

        $query = "INSERT INTO `inv_receivedetail` (`mrr_no`,`material_id`,`unit_id`,`receive_qty`,`unit_price`,`sl_no`,`total_receive`,`part_no`) VALUES ('$mrr_no','$material_id','$unit','$quantity','$unit_price','1','$totalamount','$part_no')";
        $conn->query($query);
        /*
         *  Insert Data Into inv_materialbalance Table:
        */
        $mb_ref_id      = $mrr_no;
        $mb_materialid  = $material_id;
        $mb_date        = (isset($Purchase_date) && !empty($Purchase_date) ? date('Y-m-d h:i:s', strtotime($Purchase_date)) : date('Y-m-d h:i:s'));
        $mbin_qty       = $quantity;
        $mbin_val       = $totalamount;
        $mbout_qty      = 0;
        $mbout_val      = 0;
        $mbprice        = $unit_price;
        $mbtype         = 'Receive';
        $mbserial       = '1.1';
        $mbunit_id      = $project_id;
        $mbserial_id    = 0;
        $jvno           = $mrr_no;
        $part_no        = $part_no;        
        
        $query_inmb = "INSERT INTO `inv_materialbalance` (`mb_ref_id`,`mb_materialid`,`mb_date`,`mbin_qty`,`mbin_val`,`mbout_qty`,`mbout_val`,`mbprice`,`mbtype`,`mbserial`,`mbserial_id`,`mbunit_id`,`jvno`,`part_no`) VALUES ('$mb_ref_id','$mb_materialid','$mb_date','$mbin_qty','$mbin_val','$mbout_qty','$mbout_val','$mbprice','$mbtype','$mbserial','$mbunit_id','$mbserial_id','$jvno','$part_no')";
        $conn->query($query_inmb);
    }
    /*
        *  Update Data Into inv_receive Table:
    */
    $query2    = "UPDATE inv_receive SET mrr_no='$mrr_no',mrr_date='$mrr_date',purchase_id='$purchase_id',receive_acct_id='16-001-001',supplier_id='$supplier_id',postedtogl='0',remarks='$remarks',receive_type='Credit',receive_ware_hosue_id='$project_id',receive_unit_id='1',receive_total='$receive_total',no_of_material='$no_of_material',challanno='$challan_no',requisitionno='$requisition_no',requisition_date='$requisition_date' WHERE id=$edit_id";
    $result2 = $conn->query($query2);
    
    /*
        *  Update Data Into inv_supplierbalance Table:
    */
    $query4    = "UPDATE inv_supplierbalance SET sb_ref_id='$mrr_no',sb_date='$mrr_date',sb_supplier_id='$supplier_id',sb_dr_amount='0',sb_cr_amount='$receive_total',sb_remark='$remarks',sb_partac_id='$mrr_no' WHERE sb_ref_id='$mrr_no'";
    $result2 = $conn->query($query4);
    
    $_SESSION['success']    =   "Receive process have been successfully updated.";
    header("location: receive_edit.php?edit_id=".$edit_id);
    exit();
}

?>