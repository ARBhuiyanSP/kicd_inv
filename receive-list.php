<?php include 'header.php' ?>

<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
table th{
	 font-size:14px;
}
table td{
	 font-size:14px;
}
</style>
<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material Receive List
			<a href="receive_entry.php" style="float:right"><i class="fas fa-plus"></i> Receive Entry<a>
		</div>
        <div class="card-body">
			<div class="table-responsive data-table-wrapper">
				<table id="example" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Voucher Date</th>
							<th>Voucher No</th>
							<th width="30%">Material Name</th>
							<!-- <th>Project</th> -->
							<th>Ware House</th>
							<th>Supplier name</th>
							<th>Total Qty</th>
							<th>Total Amount</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						
						if($_SESSION['logged']['user_type'] == 'whm') {
							$item_details = getTableDataByTableNameWid('inv_receive', '', 'id');
						}else{
							$item_details = getTableDataByTableName('inv_receive', '', 'id');
						}
						if (isset($item_details) && !empty($item_details)) {
							foreach ($item_details as $item) {
								if($item['approval_status'] == 0){
								?>
								<tr style="background-color: #FFC107;max-height:10px;">
								<?php  }else{ ?>
								<tr style="background-color: #218838;max-height:10px;">
								<?php  }?>
									<td><?php echo date("j M y", strtotime($item['mrr_date'])); ?></td>
									<td><?php echo $item['mrr_no']; ?></td>
									<td><?php 
										$mrr_no = $item['mrr_no'];
										$sql = "select * from `inv_receivedetail` where `mrr_no`='$mrr_no'";
										$result = mysqli_query($conn, $sql);
											for($i=1; $row = mysqli_fetch_array($result); $i++){
													$dataresult =   getDataRowByTableAndId('inv_material', $row['material_name']);
													echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_description : '') . ',' ;
											}
										
										?></td>
									<!-- <td>
										<?php 
										$dataresult =   getDataRowByTableAndId('projects', $item['project_id']);
										echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
										?>
									</td> -->
									<td>
										<?php 
										$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $item['warehouse_id']);
										echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
										?>
									</td>
									<td>
										<?php 
										$supplier_id = $item['supplier_id'];
										$sqlunit	=	"SELECT * FROM `suppliers` WHERE `code` = '$supplier_id' ";
										$resultunit = mysqli_query($conn, $sqlunit);
										$rowunit=mysqli_fetch_array($resultunit);
										echo $rowunit['name'];
										?>
									</td>
									<td><?php echo $item['no_of_material']; ?></td>
									<td><?php echo $item['receive_total']; ?></td>
									<td>
										<span><a class="action-icons c-approve" href="receive-view.php?no=<?php echo $item['mrr_no']; ?>" title="View"><i class="fas fa-eye text-success mborder"></i></a></span>
										<!-- <span><a class="action-icons c-delete" href="receive_edit.php?edit_id=<?php //echo $item['id']; ?>" title="edit"><i class="fa fa-edit text-info mborder"></i></a></span> --->
										<?php if($_SESSION['logged']['user_type'] == 'superAdmin') {?>
										<span><a class="action-icons c-delete" href="receive_approve.php?mrr=<?php echo $item['mrr_no']; ?>" title="approve"><i class="fa fa-check text-info mborder"></i></a></span>
										<?php } ?>
										<span><a class="action-icons c-delete" href="#" title="delete"><i class="fa fa-trash text-danger mborder"></i></a></span>
									</td>
								</tr>
								<?php
							}
						}else{ ?>
							  <tr>
								  <td colspan="7">
										<div class="alert alert-info" role="alert">
											Sorry, no data found!
										</div>
									</td>
								</tr>  
						<?php } ?>
					</tbody>
				</table>
			</div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>