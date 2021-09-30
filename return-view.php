<?php include 'header.php';
$return_id=$_GET['no']; ?>
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
<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material Return Report
			<button class="btn btn-default" onclick="printDiv('printableArea')" style="float:right;"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></div>
			<div class="card-body" id="printableArea">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-6">	
								<p>
								<img src="images/Saif_Engineering_Logo_165X72.png" height="100px;"/>
								<h5>E-engineering Ltd</h5><span>Payra Project</span></br></p></div>
							<div class="col-sm-6">
								<table class="table table-bordered">
									<tr>
										<th>Return ID:</th>
										<td><?php echo $return_id; ?></td>
									</tr>
									<tr>
										<th>Return Date:</th>
										<td><?php
											$sqld = "select * from `inv_return` where `return_id`='$return_id'";
											$resultd = mysqli_query($conn, $sqld);
											$rowd = mysqli_fetch_array($resultd);
										echo $rowd['return_date'] ?></td>
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
						<center><button class="btn btn-block btn-secondary challan">MATERIAL RETURN DETAILS</button></center>
						<table class="table table-bordered" id="material_receive_list"> 
							<thead>
								<tr>
									<th>SL #</th>
									<th>Material ID</th>
									<th>Material Name</th>
									<th>Material Unit</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<tbody id="material_receive_list_body">
								<?php
								$transfer_id=$_GET['no'];
								$sql = "select * from `inv_returndetail` where `return_id`='$return_id'";
								$result = mysqli_query($conn, $sql);
									for($i=1; $row = mysqli_fetch_array($result); $i++){
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row['material_id']; ?></td>
									<td>
										<?php 
											$dataresult =   getDataRowByTableAndId('inv_material', $row['material_name']);
											echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_description : '');
										?>
									</td>
									<td>
										<?php 
										$dataresult =   getDataRowByTableAndId('inv_item_unit', $row['unit']);
										echo (isset($dataresult) && !empty($dataresult) ? $dataresult->unit_name : '');
										?>
									</td>
									<td><?php echo $row['return_qty'] ?></td>
								</tr>
								<?php } ?>
								<tr>
									<td colspan="4" class="grand_total">Grand Total:</td>
									<td>
										<?php 
										$sql2 = "SELECT sum(return_qty) FROM  `inv_returndetail` where `return_id`='$return_id'";
										$result2 = mysqli_query($conn, $sql2);
										for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
										$fgfg2=$row2['sum(return_qty)'];
										echo $fgfg2 ;
										}
										?>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="row" style="text-align:center">
							<div class="col-sm-6"></br></br>--------------------</br>Receiver Signature</div>
							<div class="col-sm-6"></br></br>--------------------</br>Authorised Signature</div>
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