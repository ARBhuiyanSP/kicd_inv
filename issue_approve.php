<?php include 'header.php';
$issue_id=$_GET['issue']; ?>
<style>
.table-bordered {
	border: 1px solid #000000;
}
.table-bordered th, .table-bordered td{
	border: 1px solid #000000;
}
.table th, .table td {
	padding:2px 10px 2px 10px;
}

.challan{
	font-weight:bold;
}
</style>
<?php
	$sqld = "select * from `inv_issue` where `issue_id`='$issue_id'";
	$resultd = mysqli_query($conn, $sqld);
	$rowd = mysqli_fetch_array($resultd);
?>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<script src="js/jquery.fancybox.js"></script>

<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material Issue Report
			<!-- Your HTML content goes here -->
			<div style="display: none;" id="hidden-content"><img src="images/<?php echo $rowd['issue_image']; ?>" /></div>
				<button class="btn btn-info" data-fancybox data-src="#hidden-content" onclick="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Attached File </button>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-6">	
								<p>
								<img src="images/Saif_Engineering_Logo_165X72.png" height="100px;"/>
								<h5>E-engineering Ltd</h5></p></div>
							<div class="col-sm-6">
								<table class="table table-bordered">
									<tr>
										<th>Issue ID:</th>
										<td><?php echo $issue_id; ?></td>
									</tr>
									<tr>
										<th>Issue Date:</th>
										<td><?php
										echo $rowd['issue_date'] ?></td>
									</tr>
									<tr>
										<th>Project:</th>
										<td>
											<?php 
											$dataresult =   getDataRowByTableAndId('projects', $rowd['project_id']);
											echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
											?>
										</td>
									</tr>
									<tr>
										<th>Warehouse:</th>
										<td>
											<?php 
											$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $rowd['warehouse_id']);
											echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : '');
											?>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<center><button class="btn btn-block btn-secondary challan">MATERIAL ISSUE DETAILS</button></center>
						<table class="table table-bordered" id="material_receive_list"> 
							<thead>
								<tr>
									<th>SL #</th>
									<th>Material Name</th>
									<th>Part No</th>
									<th>Used in</th>
									<th>Material Unit</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<tbody id="material_receive_list_body">
								<?php
								$sql = "select * from `inv_issuedetail` where `issue_id`='$issue_id'";
								$result = mysqli_query($conn, $sql);
									for($i=1; $row = mysqli_fetch_array($result); $i++){
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>
										<?php 
											$dataresult =   getDataRowByTableAndId('inv_material', $row['material_name']);
											echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_description : '');
										?>
									</td>
									<td><?php echo $row['part_no']; ?></td>
									<td><?php echo $row['use_in']; ?></td>
									<td>
										<?php 
										$dataresult =   getDataRowByTableAndId('inv_item_unit', $row['unit']);
										echo (isset($dataresult) && !empty($dataresult) ? $dataresult->unit_name : '');
										?>
									</td>
									<td><?php echo $row['issue_qty'] ?></td>
								</tr>
								<?php } ?>
								<tr>
									<td colspan="5" class="grand_total">Grand Total:</td>
									<td>
										<?php 
										$sql2 = "SELECT sum(issue_qty) FROM  `inv_issuedetail` where `issue_id`='$issue_id'";
										$result2 = mysqli_query($conn, $sql2);
										for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
										$fgfg2=number_format((float)$row2['sum(issue_qty)'], 2, '.', '');
										
										echo $fgfg2 ;
										}
										?>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row">
							<div class="col-sm-6">
								<div class="row" style="text-align:center">
									<div class="col-sm-8"></br><?php echo $rowd['received_by'];?></br>--------------------</br>Receiver Signature</div>
									<div class="col-sm-4">
										<?php $queryedit	= "SELECT `approval_status` FROM `inv_issue` WHERE `issue_id`='$issue_id'";
										$result		=	$conn->query($queryedit);
										$row		=	mysqli_fetch_assoc($result);
										if($row['approval_status'] == 0){?>
										<img src="images/pending.png" height="100px;" />
										<?php } else{?>
										<img src="images/approved.png" height="100px;" />
										<?php }?>
									</div>
								</div>
							</div>
							<div class="col-sm-6" style="">
								<form action="" method="post" name="add_name" id="add_name">
								<div class="row">
									<input type="hidden" name="issue_id" value="<?php echo $issue_id; ?>" />
									<input type="hidden" name="approved_at" value="<?php echo date('Y-m-d'); ?>" />
									<div class="col-sm-4">
										<div class="form-group">
											<label for="id">Approval Status</label>
											<select class="form-control" id="approval_status" name="approval_status" required>
												<option value="0">Pending</option>
												<option value="1">Approve</option>
											</select>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="form-group">
											<label for="id">Remarks</label>
											<textarea rows="1" class="form-control" name="approval_remarks"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" name="issue_approve_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Approve ISSUE" />   
										</div>
									</div>
								</div>
								</form>
							</div>
						</div></br>
						<div class="row">
							<div class="col-sm-12" style="border:1px solid gray;border-radius:5px;padding:10px;color:#f26522;">
								<h5>Notice***</br><span style="font-size:14px;color:#000000;">Please Check Everything Before Signature</span></h5>
								
							</div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>	
		</div>
	</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>