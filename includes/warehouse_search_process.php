<?php



if (isset($_GET['search_data']) && $_GET['search_data'] == 'warehouse_stock_search_form') {
    include '../connection/connect.php';
    include '../helper/utilities.php';
    //$stock_from_date  =   (isset($_REQUEST['from_date']) && !empty($_REQUEST['from_date']) ? $_REQUEST['from_date'] : '');
    $stock_from_date  		=   (isset($_REQUEST['from_date']) && !empty($_REQUEST['from_date']) ? $_REQUEST['from_date'] : '');
    $stock_todate     		=   (isset($_REQUEST['todate']) && !empty($_REQUEST['todate']) ? $_REQUEST['todate'] : '');
    $sql                    =   '';
    $where                  =   [];
    $where_sql_status       =   false;
    $receiveDataList        =   [];
    $sql.="SELECT * FROM inv_materialbalance INNER JOIN inv_material ON inv_material.material_id_code=inv_materialbalance.mb_materialid INNER JOIN inv_item_unit ON inv_item_unit.id=inv_material.qty_unit GROUP BY mb_materialid";
    $status     			=   'error';
    $message    			=   'No data found';
    $data       			=   '';
    
    if(isset($stock_from_date) && !empty($stock_from_date)){
        $where_sql_status   =   true;
        $where[]			=" mb_date >='$stock_from_date' ";
    }
    if(isset($stock_todate) && !empty($stock_todate)){
        $where_sql_status   =   true;
        $where[]			=" mb_date <='$stock_todate' ";
    }
    
    if($where_sql_status){
        $sql.=" WHERE".implode("AND",$where);
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $stockDataList[] = $row;
        }        
    ?>
        <div class="" id="printableArea" style="display:block;">
		<table class="table table-bordered" id="stock_list">            
            <?php
            if (isset($stockDataList) && !empty($stockDataList)) {
                ?>
				
                <thead>
					<tr style="background-color: #F3EFB4;">
						<th>#</th>
						<th>Material Id</th>
						<th>Name Of Material</th>
						<th>Unit</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Value</th>
					</tr>
				</thead>
                <tbody>
					<?php 
                    foreach ($stockDataList as $listData) {  
					?>
					<tr style="background-color: #BCC6CC;">
						<td>Category</td>
						<td>ID</td>
						<td colspan="5"><?php echo $listData->mb_materialid; ?></td>
					</tr>
					<tr style="background-color: #F9F8F6;">
						<td>Sub Category</td>
						<td>ID</td>
						<td colspan="5"><?php echo $listData->mb_materialid; ?></td>
					</tr>
					<?php 
					$slno = 1;
                    foreach ($stockDataList as $listData) {  
					?>
					<tr>
						<td><span style="float:right"><?php echo $slno++; ?></span></td>
						<td>ID</td>
						<td><span style="float:right"><?php echo $listData->material_description; ?></span></td>
						<td><?php echo $listData->unit_name; ?></td>
						<td><?php echo $listData->mbin_qty; ?></td>
						<td><?php echo $listData->mbprice; ?></td>
						<td><?php echo $listData->mbin_qty * $listData->mbprice ?></td>
					</tr>
					<?php  }}?>
				</tbody>
            <?php } else { ?>
                <thead>
                    <tr>
                        <th>Sorry, Database have no information!</th>
                    </tr>
                </thead>
            <?php } ?>
        </table>
		</div>	
		<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>				
		<script>
		function printDiv(printableArea) {
			 var printContents = document.getElementById(printableArea).innerHTML;
			 var originalContents = document.body.innerHTML;

			 document.body.innerHTML = printContents;

			 window.print();

			 document.body.innerHTML = originalContents;
		}
		</script>
    <?php }else{ ?>
        <div class="alert alert-info">
            <strong>Sorry</strong> Database have no information!
        </div>
    <?php }
}