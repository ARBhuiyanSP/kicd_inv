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
if (isset($_POST['receive_submit']) && !empty($_POST['receive_submit'])) {
	
	// check duplicate:
	$mrr_no		= $_POST['mrr_no'];
    $table		= 'inv_receive';
    $where		= "mrr_no='$mrr_no'";
    if(isset($_POST['receive_update_submit']) && !empty($_POST['receive_update_submit'])){
        $notWhere   =   "id!=".$_POST['receive_update_submit'];
        $duplicatedata = isDuplicateData($table, $where, $notWhere);
    }else{
        $duplicatedata = isDuplicateData($table, $where);
    }
	if ($duplicatedata) {
		$status     =   'error';
		$_SESSION['warning']    =   "Operation faild. Duplicate data found..!";
    }else{
			
	
	
	$receive_total      =   0;
    $no_of_material     =   0;
    for ($count = 0; $count < count($_POST['quantity']); $count++) {
        
        /*
         *  Insert Data Into inv_receivedetail Table:
        */ 
        $mrr_date           = $_POST['mrr_date'];
        $mrr_no             = $_POST['mrr_no'];
        $purchase_id        = $_POST['purchase_id'];
        $Purchase_date      = $_POST['Purchase_date'];
        $challan_no         = $_POST['challan_no'];
        $challan_date       = $_POST['challan_date'];
        $requisition_no     = $_POST['requisition_no'];
        $requisition_date   = $_POST['requisition_date'];
        $supplier_name      = $_POST['supplier_name'];
        $supplier_id        = $_POST['supplier_id'];
        $project_id			= $_POST['project_id'];
        $warehouse_id		= $_POST['warehouse_id'];


        $material_name      = $_POST['material_name'][$count];
        $material_id        = $_POST['material_id'][$count];
        $unit               = $_POST['unit'][$count];
        $part_no            = $_POST['part_no'][$count];
        $quantity           = $_POST['quantity'][$count];
        $no_of_material     = $no_of_material+$quantity;
        $unit_price         = $_POST['unit_price'][$count];
        $totalamount        = $_POST['totalamount'][$count];
        $receive_total      = $receive_total+$totalamount;
		
		
        $remarks            = $_POST['remarks'];  
		
        $received_by            = $_SESSION['logged']['user_id'];        
        $approval_status		= '';        
        $approved_by            = '';        
        $approved_at            = '';        
        $approval_remarks		= '';  
		
		
		/* if (is_uploaded_file($_FILES['file']['tmp_name'])) 
		{
			$temp_file=$_FILES['file']['tmp_name'];
			$mrr_image=time().$_FILES['file']['name'];
			$q = move_uploaded_file($temp_file,"images/".$mrr_image);
		} */
				

		
		
               
        $query = "INSERT INTO `inv_receivedetail` (`mrr_no`,`material_id`,`material_name`,`unit_id`,`receive_qty`,`unit_price`,`sl_no`,`total_receive`,`part_no`,`project_id`,`warehouse_id`,`approval_status`) VALUES ('$mrr_no','$material_id','$material_name','$unit','$quantity','$unit_price','1','$totalamount','$part_no','$project_id','$warehouse_id','$approval_status')";
        $conn->query($query);
		
		

        
        /*
         *  Insert Data Into inv_materialbalance Table:
        */
        $mb_ref_id      = $mrr_no;
        $mb_materialid  = $material_id;
        $mb_date        = $mrr_date;
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
        
        $query_inmb = "INSERT INTO `inv_materialbalance` (`mb_ref_id`,`mb_materialid`,`mb_date`,`mbin_qty`,`mbin_val`,`mbout_qty`,`mbout_val`,`mbprice`,`mbtype`,`mbserial`,`mbserial_id`,`mbunit_id`,`jvno`,`part_no`,`project_id`,`warehouse_id`,`approval_status`) VALUES ('$mb_ref_id','$mb_materialid','$mb_date','$mbin_qty','$mbin_val','$mbout_qty','$mbout_val','$mbprice','$mbtype','$mbserial','$mbunit_id','$unit','$jvno','$part_no','$project_id','$warehouse_id','$approval_status')";
        $conn->query($query_inmb);
    }
    /*
    *  Insert Data Into inv_receive Table:
    */
    $query2 = "INSERT INTO `inv_receive` (`mrr_no`,`mrr_date`,`purchase_id`,`receive_acct_id`,`supplier_id`,`postedtogl`,`remarks`,`receive_type`,`project_id`,`warehouse_id`,`receive_unit_id`,`receive_total`,`no_of_material`,`challanno`,`challan_date`,`part_no`,`requisitionno`,`requisition_date`,`received_by`,`approval_status`,`approved_by`,`approved_at`,`approval_remarks`,`mrr_image`) VALUES ('$mrr_no','$mrr_date','$purchase_id','6-14-010','$supplier_id','0','$remarks','Credit','$project_id','$warehouse_id','1','$receive_total','$no_of_material','$challan_no','$challan_date','$part_no','$requisition_no','$requisition_date','$received_by','$approval_status','$approved_by','$approved_at','$approval_remarks','$mrr_image')";
    $result2 = $conn->query($query2);    
    /*
    *  Insert Data Into inv_supplierbalance Table:
    */
    $query3 = "INSERT INTO `inv_supplierbalance` (`sb_ref_id`,`warehouse_id`,`sb_date`,`sb_supplier_id`,`sb_dr_amount`,`sb_cr_amount`,`sb_remark`,`sb_partac_id`,`approval_status`) VALUES ('$mrr_no','$warehouse_id','$mrr_date','$supplier_id','0','$receive_total','$remarks','$mrr_no','$approval_status')";
    $result2 = $conn->query($query3);
    
    $_SESSION['success']    =   "Receive process have been successfully completed.";
    header("location: receive_entry.php");
    exit();
	}
		

}

function getReceiveDataDetailsById($id){
    global $conn;
    $receieves      =   "";
    $receiveDetails =   "";
    
    // get receive data
    $sql1           = "SELECT * FROM inv_receive where id=".$id;
    $result1        = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        $receieves = $result1->fetch_object();
        // get receive details data
        $table                  =   'inv_receivedetail where mrr_no='."'$receieves->mrr_no'";
        $order                  =   'DESC';
        $column                 =   'receive_qty';
        $dataType               =   'obj';
        $receiveDetailsData     = getTableDataByTableName($table, $order, $column, $dataType);
        if(isset($receiveDetailsData) && !empty($receiveDetailsData)){
            $receiveDetails     =   $receiveDetailsData;
        }
    }
    $feedbackData   =   [
        'receiveData'           =>  $receieves,
        'receiveDetailsData'    =>  $receiveDetails
    ];
    
    return $feedbackData;
}

/*******************************************************************************
 * The following code will
 * Update Receive entry data.
 * There are 4 table to keet track on receive data. The are following:
 * 1. inv_receive (Update single row)      
 * 2. inv_receivedetail (First Delete all rows then Store Multiple row)
 * 3. inv_materialbalance (First Delete all rows then Store Multiple row)
 * 4. inv_supplierbalance (Update single row)
 * *****************************************************************************
 */

if(isset($_POST['receive_update_submit']) && !empty($_POST['receive_update_submit'])){
    $receive_total      =   0;
    $no_of_material     =   0;
    $edit_id            =   $_POST['edit_id'];
    $mrr_no             =   $_POST['mrr_no'];
    
	
	$queryedit	= "SELECT `approval_status` FROM `inv_receive` WHERE `mrr_no`='$mrr_no'";
    $result		=	$conn->query($queryedit);
	$row		=	mysqli_fetch_assoc($result);
	if($row['approval_status'] == 0){
		
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
			$project_id			= $_POST['project_id'];
			$warehouse_id		= $_POST['warehouse_id'];


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
			$vat_challan_no     = $_POST['vat_challan_no'];
			$remarks            = $_POST['remarks'];
			
			
			if (is_uploaded_file($_FILES['sn_prt_image']['tmp_name'])) 
			{
				$temp_file=$_FILES['sn_prt_image']['tmp_name'];
				$mrr_image=time().$_FILES['sn_prt_image']['name'];
				$q = move_uploaded_file($temp_file,"images/".$mrr_image);
			}
			else
			{
			 $mrr_image = $_POST["sn_old_image"];
			}
			

			$query = "INSERT INTO `inv_receivedetail` (`mrr_no`,`material_id`,`material_name`,`unit_id`,`receive_qty`,`unit_price`,`sl_no`,`total_receive`,`part_no`,`project_id`,`warehouse_id`) VALUES ('$mrr_no','$material_id','$material_name','$unit','$quantity','$unit_price','1','$totalamount','$part_no','$project_id','$warehouse_id')";
			$conn->query($query);
			/*
			 *  Insert Data Into inv_materialbalance Table:
			*/
			$mb_ref_id      = $mrr_no;
			$mb_materialid  = $material_id;
			$mb_date        = $mrr_date;
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
			
			$query_inmb = "INSERT INTO `inv_materialbalance` (`mb_ref_id`,`mb_materialid`,`mb_date`,`mbin_qty`,`mbin_val`,`mbout_qty`,`mbout_val`,`mbprice`,`mbtype`,`mbserial`,`mbserial_id`,`mbunit_id`,`jvno`,`part_no`,`project_id`,`warehouse_id`) VALUES ('$mb_ref_id','$mb_materialid','$mb_date','$mbin_qty','$mbin_val','$mbout_qty','$mbout_val','$mbprice','$mbtype','$mbserial','$mbunit_id','$mbserial_id','$jvno','$part_no','$project_id','$warehouse_id')";
			$conn->query($query_inmb);
		}
		/*
			*  Update Data Into inv_receive Table:
		*/
		$query2    = "UPDATE `inv_receive` SET `mrr_no`='$mrr_no',`mrr_date`='$mrr_date',`purchase_id`='$purchase_id',`receive_acct_id`='16-001-001',`supplier_id`='$supplier_id',`postedtogl`='0',`vat_challan_no`='$vat_challan_no',`remarks`='$remarks',`receive_type`='Credit',`project_id`='$project_id',`warehouse_id`='$warehouse_id',`receive_unit_id`='1',`receive_total`='$receive_total',`no_of_material`='$no_of_material',`challanno`='$challan_no',`challan_date`='$challan_date',`requisitionno`='$requisition_no',`requisition_date`='$requisition_date' ,`mrr_image`='$mrr_image' WHERE `id`='$edit_id'";
		$result2 = $conn->query($query2);
		
		
		
		
		/*
			*  Update Data Into inv_supplierbalance Table:
		*/
		$query4    = "UPDATE `inv_supplierbalance` SET `sb_ref_id`='$mrr_no',`warehouse_id`='$warehouse_id',`sb_date`='$mrr_date',`sb_supplier_id`='$supplier_id',`sb_dr_amount`='0',`sb_cr_amount`='$receive_total',`sb_remark`='$remarks',`sb_partac_id`='$mrr_no' WHERE `sb_ref_id`='$mrr_no'";
		$result2 = $conn->query($query4);
		
		$_SESSION['success']    =   "Receive UPDATE process have been successfully updated.";
		header("location: receive_edit.php?edit_id=".$edit_id);
		exit();
	}else{
		$_SESSION['error']    =   "Sorry..! This MRR is not able to edit anymore.";
		header("location: receive_edit.php?edit_id=".$edit_id);
		exit();
	}
	
}


if (isset($_POST['approve_submit']) && !empty($_POST['approve_submit'])) {
 
        /*
         *  Update Data Into inv_receive Table:
        */ 
       
        $mrr_no					= $_POST['mrr_no']; 
        $approval_status		= $_POST['approval_status'];       
        $approved_by            = $_SESSION['logged']['user_id'];       
        $approved_at            = $_POST['approved_at'];        
        $approval_remarks		= $_POST['approval_remarks'];       
               
        $query = "UPDATE `inv_receive` SET `approval_status`='$approval_status',`approved_by`='$approved_by',`approved_at`='$approved_at',`approval_remarks`='$approval_remarks' WHERE `mrr_no`='$mrr_no'";
        $conn->query($query);
		
		
		/*
         *  Update Data Into inv_receivedetail Table:
        */      
        $query2 = "UPDATE `inv_receivedetail` SET `approval_status`='$approval_status' WHERE `mrr_no`='$mrr_no'";
        $conn->query($query2);
		
		/*
         *  Update Data Into inv_materialbalance Table:
        */      
        $query3 = "UPDATE `inv_materialbalance` SET `approval_status`='$approval_status' WHERE `mb_ref_id`='$mrr_no'";
        $conn->query($query3);
		
		/*
         *  Update Data Into inv_supplierbalance Table:
        */      
        $query3 = "UPDATE `inv_supplierbalance` SET `approval_status`='$approval_status' WHERE `sb_ref_id`='$mrr_no'";
        $conn->query($query3);
		
		

    $_SESSION['success']    =   "MRR Approve have been successfully completed.";
    header("location: receive-list.php");
    exit();
}

?>