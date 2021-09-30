<?php include 'header.php';
$mrr_no=$_GET['mrr']; ?>
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
.amountWords{
	text-decoration:underline;
	font-style:italic;
	color:#f26522;
}
</style>
<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material Receive Report
			<button class="btn btn-default" onclick="printDiv('printableArea')" style="float:right;"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
			<div class="card-body" id="printableArea">
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
										<th>MRR No:</th>
										<td><?php echo $mrr_no; ?></td>
									</tr>
									<tr>
										<th>MRR Date:</th>
										<td><?php
											$sqld = "select * from `inv_receive` where `mrr_no`='$mrr_no'";
											$resultd = mysqli_query($conn, $sqld);
											$rowd = mysqli_fetch_array($resultd);
										echo $rowd['mrr_date']; ?></td>
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
									<tr>
										<th>Supplier:</th>
										<td>
											<?php 
											$supplier_id = $rowd['supplier_id'];
											$sqlunit	=	"SELECT * FROM `inv_supplier` WHERE `supplier_id` = '$supplier_id' ";
											$resultunit = mysqli_query($conn, $sqlunit);
											$rowunit=mysqli_fetch_array($resultunit);
											echo $rowunit['supplier_company'];
											?>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<center><button class="btn btn-block btn-secondary challan">MATERIAL RECEIVE DETAILS</button></center>
						<table class="table table-bordered" id="material_receive_list"> 
							<thead>
								<tr>
									<th>SL #</th>
									<th>Material ID</th>
									<th>Material Unit</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody id="material_receive_list_body">
								<?php
								$transfer_id=$_GET['mrr'];
								$sql = "select * from `inv_receivedetail` where `mrr_no`='$mrr_no'";
								$result = mysqli_query($conn, $sql);
									for($i=1; $row = mysqli_fetch_array($result); $i++){
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['material_id']; ?></td>
									<td>
										<?php 
										$dataresult =   getDataRowByTableAndId('inv_item_unit', $row['unit_id']);
										echo (isset($dataresult) && !empty($dataresult) ? $dataresult->unit_name : '');
										?>
									</td>
									<td><?php echo $row['receive_qty'] ?></td>
									<td><?php echo $row['unit_price'] ?></td>
									<td><?php echo $row['total_receive'] ?></td>
								</tr>
								<?php } ?>
								<tr>
									<td colspan="3" class="grand_total">Grand Total:</td>
									<td>
										<?php 
										$sql2 			= "SELECT sum(receive_qty) FROM  `inv_receivedetail` where `mrr_no`='$mrr_no'";
										$result2 		= mysqli_query($conn, $sql2);
										for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
										$totalReceived	=$row2['sum(receive_qty)'];
										echo $totalReceived ;
										}
										?>
									</td>
									<td></td>
									<td>
										<?php 
										$sql2			= "SELECT sum(total_receive) FROM  `inv_receivedetail` where `mrr_no`='$mrr_no'";
										$result2		= mysqli_query($conn, $sql2);
										for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
										$totalAmount	=$row2['sum(total_receive)'];
										echo $totalAmount ;
										}
										?>
									</td>
								</tr>
							</tbody>
						</table>
						<b>Total Amount in words: 
							<span class="amountWords"><?php echo convertNumberToWords($totalAmount).' BDT Only';?></span>
						</b> 
						<div class="row">
							<div class="col-sm-6">
								<div class="row" style="text-align:center">
									<div class="col-sm-8"></br><?php 
										$dataresult =   getDataRowByTableAndId('users', $rowd['received_by']);
										echo (isset($dataresult) && !empty($dataresult) ? $dataresult->first_name . ' ' .$dataresult->last_name : '');
										?></br>--------------------</br>Receiver Signature</div>
									<div class="col-sm-4">
										<?php $queryedit	= "SELECT `approval_status` FROM `inv_receive` WHERE `mrr_no`='$mrr_no'";
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
									<input type="hidden" name="mrr_no" value="<?php echo $mrr_no; ?>" />
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
											<input type="submit" name="approve_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Approve MRR" />   
										</div>
									</div>
								</div>
								</form>
							</div>
						</div></br>
						<div class="row">
							<div class="col-sm-12" style="border:1px solid gray;border-radius:5px;padding:10px;color:#f26522;">
								<h5>Notice***</br><span style="font-size:14px;color:#000000;">Please Check Everything Before Approved</span></h5>
								
							</div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>				
			<script>
			function printDiv(divName) {
				 var printContents = document.getElementById(divName).innerHTML;
				 var originalContents = document.body.innerHTML;

				 document.body.innerHTML = printContents;

				 window.print();

				 document.body.innerHTML = originalContents;
			}
			</script>
		</div>
	</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>