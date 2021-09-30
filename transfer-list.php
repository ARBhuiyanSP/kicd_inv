<?php include 'header.php' ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Transfer List</div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>TID</th>
						<th>Transfer Date</th>
						<th>From</th>
						<th>To</th>
					     <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					
					if($_SESSION['logged']['user_type'] == 'whm') {
						$item_details = getTableDataByTableNameTid('inv_transfermaster', '', 'id');
					}else{
						$item_details = getTableDataByTableName('inv_transfermaster', '', 'id');
					}
					if (isset($item_details) && !empty($item_details)) {
						foreach ($item_details as $item) {
							?>
							<tr>
								<td><?php echo $item['transfer_id']; ?></td>
								<td><?php echo $item['transfer_date']; ?></td>
								<td>
									<?php 
									$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $item['from_warehouse']);
									echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
									?>
								</td>
								<td>
									<?php 
									$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $item['to_warehouse']);
									echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
									?>
								</td>
								<td>
									<span><a class="action-icons c-approve" href="transfer-view.php?no=<?php echo $item['transfer_id']; ?>" title="View"><i class="fas fa-eye text-success"></i></a></span>
							<span><a class="action-icons c-delete" href="#" title="delete"><i class="fa fa-trash text-danger"></i></a></span>
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
<!-- /.container-fluid -->
<?php include 'footer.php' ?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>