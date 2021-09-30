<?php
/*******************************************************************************
 * The following code will
 * Update Opening Stock Balance.
 * There are 2 table to keet track on receive data. The are following:
 * 1. inv_material (Update Multiple row)      
 * 2. inv_materialbalance (Update Multiple row)
 * *****************************************************************************
 */
if (isset($_POST['op_submit']) && !empty($_POST['op_submit'])) {
    for ($count = 0; $count < count($_POST['material_id_code']); $count++) {
        
        /*
         *  Update Qty Into inv_material Table:
        */ 
		
        $project_id				= $_POST['project_id'];
        $warehouse_id			= $_POST['warehouse_id'];
		$op_date                = $_POST['op_date'];
        $material_id_code		= $_POST['material_id_code'][$count];  
        $op_balance_qty			= $_POST['op_balance_qty'][$count];   
        $part_no		    	= $_POST['part_no'][$count];          
		
        
		/*
        *  Update Qty Into inv_materialbalance Table:
        */

		$query_inmb = "INSERT INTO `inv_materialbalance` (`mb_ref_id`,`mb_materialid`,`mb_date`,`mbin_qty`,`mbout_qty`,`mbout_val`,`mbtype`,`part_no`,`project_id`,`warehouse_id`) VALUES ('$material_id_code','$material_id_code','$op_date','$op_balance_qty','0','0','OP','$part_no','$project_id','$warehouse_id')";
		$conn->query($query_inmb);
				
    }
	
    
}
if (isset($_POST['op_edit']) && !empty($_POST['op_edit'])) {
    for ($count = 0; $count < count($_POST['material_id_code']); $count++) {
        
        /*
         *  Update Qty Into inv_material Table:
        */ 
		
        $warehouse_id			= $_POST['warehouse_id'];
        $material_id_code		= $_POST['material_id_code'][$count];  
        $op_balance_qty			= $_POST['op_balance_qty'][$count];           
               
      
		/*
        *  Update Qty Into inv_materialbalance Table:
        */
		
		$query_inmb	=	"UPDATE `inv_materialbalance` SET `mbin_qty`='$op_balance_qty' WHERE `mb_materialid`='$material_id_code' AND `mbtype`='OP' AND `warehouse_id`='$warehouse_id'";
		$conn->query($query_inmb);
				
    }
	
    
}

?>