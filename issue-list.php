<?php 
include 'header.php';

 ?>
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
            Material Issue List</div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Issue Date</th>
						<th>Issue No</th>
						<th width="30%">Material Name</th>
						<th>Use in</th>
						<th>Project</th>
						<th>Ware House</th>
					     <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if($_SESSION['logged']['user_type'] == 'whm') {
						$item_details = getTableDataByTableNameWid('inv_issue', '', 'id');
					}else{
						$item_details = getTableDataByTableName('inv_issue', '', 'id');
					}
					if (isset($item_details) && !empty($item_details)) {
						foreach ($item_details as $item) {
							if($item['approval_status'] == 0){
							?>
							<tr style="background-color: #FFC107;max-height:10px;">
							<?php  }else{ ?>
							<tr style="background-color: #218838;max-height:10px;">
							<?php  }?>
									<td><?php echo date("j M y", strtotime($item['issue_date'])); ?></td>
								<td><?php echo $item['issue_id']; ?></td>
								
								
								<td><?php 
								$issue_id = $item['issue_id'];
								$sql = "select * from `inv_issuedetail` where `issue_id`='$issue_id'";
								$result = mysqli_query($conn, $sql);
									for($i=1; $row = mysqli_fetch_array($result); $i++){
											$dataresult =   getDataRowByTableAndId('inv_material', $row['material_name']);
											echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_description : '') . ',' ;
									}
								
								?></td>
								<?php 
								$sql = "select * from `inv_issuedetail` where `issue_id`='$issue_id'";
								
								
								$user_categories = mysqli_query($conn, "select `use_in` from `inv_issuedetail` where `issue_id`='$issue_id'");
								$category_ids = mysqli_fetch_all($user_categories,MYSQLI_NUM);
								$category_ids_imploded = implode(', ', array_map(function ($entry) {
								  return $entry['0'];
								}, $category_ids));
								
								?>
								
								<td><?php echo $category_ids_imploded; ?></td>
								<td>
									<?php 
									$dataresult =   getDataRowByTableAndId('projects', $item['project_id']);
									echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
									?>
								</td>
								<td>
									<?php 
									$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $item['warehouse_id']);
									echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
									?>
								</td>
								<td>
									<span><a class="action-icons c-approve" href="issue-view.php?no=<?php echo $item['issue_id']; ?>" title="View"><i class="fas fa-eye text-success"></i></a></span>
									<span><a class="action-icons c-delete" href="issue_edit.php?edit_id=<?php echo $item['id']; ?>" title="edit"><i class="fa fa-edit text-info mborder"></i></a></span>
									<?php if($_SESSION['logged']['user_type'] == 'superAdmin') {?>
										<span><a class="action-icons c-delete" href="issue_approve.php?issue=<?php echo $item['issue_id']; ?>" title="approve"><i class="fa fa-check text-info mborder"></i></a></span>
										<?php } ?>
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