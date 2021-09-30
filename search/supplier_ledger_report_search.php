
<style>
.dtext{
	text-decoration:underline;
}
</style>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Receive Report Search</div>
    <div class="card-body">
        <form class="form-horizontal" action="" id="warehouse_stock_search_form" method="GET">
            <div class="table-responsive">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>  
							<td>
								<div class="form-group">
									<label for="id">Supplier</label>
									<select class="form-control select2" id="supplier_name" name="supplier_name" required onchange="getItemCodeByParam(this.value, 'suppliers', 'code', 'supplier_id');">
										<option value="">Select</option>
										<?php
										$projectsData = getTableDataByTableName('suppliers');

										if (isset($projectsData) && !empty($projectsData)) {
											foreach ($projectsData as $data) {
												if($_GET['supplier_name'] == $data['id']){
													$selected	= 'selected';
													}else{
													$selected	= '';
													}
													?>
												<option value="<?php echo $data['id']; ?>" <?php echo $selected; ?>><?php echo $data['name']; ?></option>
												<?php
											}
										}
										?>
									</select>
								</div>
							</td>
							<td style="width:10%">
							
								<div class="form-group">
									<label for="id">Supplier ID</label>
									<input type="text" name="supplier_id" id="supplier_id" class="form-control" value="<?php if(isset($_GET['supplier_id'])){ echo $_GET['supplier_id']; } ?>" required>
								</div>
							</td>
							<td style="width:10%">
                                <div class="form-group">
                                    <label for="todate">From Date</label>
                                    <input type="text" class="form-control" id="from_date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" autocomplete="off" required >
                                </div>
                            </td>
							<td style="width:10%">
                                <div class="form-group">
                                    <label for="todate">To Date</label>
                                    <input type="text" class="form-control" id="to_date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" autocomplete="off" required >
                                </div>
                            </td>
							
							<td style="width:15%">
                                <div class="form-group">
                                    <label for="todate">.</label>
									<button type="submit" name="submit" class="form-control btn btn-primary">Supplier Details</button>
                                </div>
                            </td>
							<td style="width:15%">
                                <div class="form-group">
                                    <label for="todate">.</label>
									<button type="submit" name="submitLedger" class="form-control btn btn-primary">Supplier Ledger</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<?php
if(isset($_GET['submit'])){
	
	$supplier_name	=	$_GET['supplier_name'];
	$supplier_id	=	$_GET['supplier_id'];
	$from_date		=	$_GET['from_date'];
	$to_date		=	$_GET['to_date'];
	$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
?>
<center>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" id="printableArea">
			<div class="row">
				<div class="col-sm-12">	
					<center>
						<p>
							<img src="images/Saif_Engineering_Logo_165X72.png" height="100px;"/><br>
							<span>Material Receive Report</span><br>
							From <span class="dtext"><?php echo date("jS F Y", strtotime($from_date));?></span> To  <span class="dtext"><?php echo date("jS F Y", strtotime($to_date));?> </span><br>
						</p>
					</center>
				</div>
			</div>
				<table id="" class="table table-bordered">
					<thead>
						<tr>
							<th>Material ID</th>
							<th>Material Name</th>
							<th>Unit</th>
							<th>Receive QTY</th>
							<th>Unit Price</th>
							<th>Total Amount</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql	=	"SELECT * FROM `inv_receive` where `supplier_id`='$supplier_id' AND `warehouse_id` = '$warehouse_id' AND `mrr_date` BETWEEN '$from_date' AND '$to_date';";
							$result = mysqli_query($conn, $sql);
							while($row=mysqli_fetch_array($result))
							{
						?>
						<tr style="background-color:#E9ECEF;">
							<td>MRR No : <?php echo $row['mrr_no']; ?></td>
							<td>Date : <?php echo date("jS F Y", strtotime($row['mrr_date']));?></td>
							<td>PO No : <?php echo $row['purchase_id']; ?></td>
							<td>Challan No : <?php echo $row['challanno']; ?></td>
							<td colspan="2">Supplier : <?php 
								$supplier_id = $row['supplier_id'];
								$sqlunit	=	"SELECT * FROM `suppliers` WHERE `code` = '$supplier_id'  ";
								$resultunit = mysqli_query($conn, $sqlunit);
								$rowunit=mysqli_fetch_array($resultunit);
								echo $rowunit['name'];
								?>
							</td>
						</tr>
						<?php
							$totalQty = 0;
							$totalAmount = 0;
							$mrr_no = $row['mrr_no'];
							$sqlall	=	"SELECT * FROM `inv_receivedetail` WHERE `mrr_no` = '$mrr_no';";
							$resultall = mysqli_query($conn, $sqlall);
							while($rowall=mysqli_fetch_array($resultall))
							{
								$totalQty += $rowall['receive_qty'];
								$totalAmount += $rowall['total_receive'];
						?>
						<tr>
							<td><?php echo $rowall['material_id']; ?></td>
							<td><?php 
								$mb_materialid = $rowall['material_id'];
								$sqlname	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$mb_materialid' ";
								$resultname = mysqli_query($conn, $sqlname);
								$rowname=mysqli_fetch_array($resultname);
								echo $rowname['material_description'];
							?>
							</td>
							<td><?php echo getDataRowByTableAndId('inv_item_unit', $rowall['unit_id'])->unit_name; ?></td>
							<td><?php echo $rowall['receive_qty']; ?></td>
							<td><?php echo $rowall['unit_price']; ?></td>
							<td><?php echo $rowall['total_receive']; ?></td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="3" class="grand_total">Total:</td>
							<td><?php echo $totalQty; ?></td>
							<td></td>
							<td><?php echo $totalAmount; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<center><div class="row">
					<div class="col-sm-6"></br></br>--------------------</br>Receiver Signature</div>
					<div class="col-sm-6"></br></br>--------------------</br>Authorised Signature</div>
				</div></center></br>
				<div class="row">
					<div class="col-sm-12" style="border:1px solid gray;border-radius:5px;padding:10px;color:#f26522;">
						<center><h5>Notice***</br><span style="font-size:14px;color:#000000;">Please Check Everything Before Signature</span></h5></center>
						
					</div>
				</div>
			</div>			
		</div>
		<center><button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></center>
		<div class="col-md-1"></div>
</center>
<?php } else if(isset($_GET['submitLedger'])){
	$supplier_name	=	$_GET['supplier_name'];
	$supplier_id	=	$_GET['supplier_id'];
	$from_date		=	$_GET['from_date'];
	$to_date		=	$_GET['to_date'];
	$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
	
										$sqlunit	=	"SELECT * FROM `suppliers` WHERE `code` = '$supplier_id' ";
										$resultunit = mysqli_query($conn, $sqlunit);
										$rowunit=mysqli_fetch_array($resultunit);
										$supplier	= $rowunit['name'];
	?>
	
<center>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10" id="printableArea">
			<div class="row">
				<div class="col-sm-12">	
					<center>
						<p>
							<img src="images/Saif_Engineering_Logo_165X72.png" height="100px;"/><br>
							<span>Supplier Ledger Report</span><br>
							<span><?php echo $supplier; ?></span><br>
							From <span class="dtext"><?php echo date("jS F Y", strtotime($from_date));?></span> To  <span class="dtext"><?php echo date("jS F Y", strtotime($to_date));?> </span><br>
						</p>
					</center>
				</div>
			</div>
				<table id="" class="table table-bordered">
					<thead>
						<tr>
							<th>Date</th>
							<th>Ref no</th>
							<th>Perticulars</th>
							<th>Debit</th>
							<th>Credit</th>
							<th>Balance</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sqlpreinqty = "SELECT SUM(`sb_cr_amount`)- SUM(`sb_dr_amount`) AS due FROM `inv_supplierbalance` WHERE `sb_supplier_id` = '$supplier_id' AND `warehouse_id`='$warehouse_id' AND `sb_date` < '$from_date'";
							$sqlpreinqty = "SELECT SUM(`sb_cr_amount`)- SUM(`sb_dr_amount`) AS due FROM `inv_supplierbalance` WHERE `sb_supplier_id` = '$supplier_id' AND `warehouse_id`='$warehouse_id' AND `sb_date` < '$from_date'";
							$resultpreinqty = mysqli_query($conn, $sqlpreinqty);
							$rowpreinqty = mysqli_fetch_object($resultpreinqty);
							
							if($rowpreinqty->due > 0){
								$opening_stock = $rowpreinqty->due;
							}
							else {
									$opening_stock = 0;
								}
							//echo $opening_stock;
						?>
						<tr style="background-color:#E9ECEF;">
							<td><?php echo date("jS F Y", strtotime($from_date));?></td>
							<td colspan="2">Opening Balance</td>
							<td>0</td>
							<td><?php echo $opening_stock; ?></td>
							<td><?php echo $opening_stock; ?></td>
						</tr>
						<?php
							$sql	=	"SELECT * FROM `inv_supplierbalance` WHERE `sb_supplier_id`='$supplier_id' AND `warehouse_id`='$warehouse_id' AND `sb_date` BETWEEN '$from_date' AND '$to_date';";
							$result = mysqli_query($conn, $sql);
							$totaldebit = 0;
							$totalcredit = 0;
							while($row=mysqli_fetch_array($result))
							{
								$debit = $row['sb_dr_amount'];
								$totaldebit += $row['sb_dr_amount'];
								
								$credit = $row['sb_cr_amount'];
								$totalcredit += $row['sb_cr_amount'];
									
								$balance = $opening_stock + $totalcredit - $totaldebit;
						?>
						<tr style="background-color:#E9ECEF;">
							<td><?php echo date("jS F Y", strtotime($row['sb_date']));?></td>
							<td><?php echo $row['sb_ref_id']; ?></td>
							<td><?php echo $row['sb_remark']; ?></td>
							<td><?php echo $row['sb_dr_amount']; ?></td>
							<td><?php echo $row['sb_cr_amount']; ?></td>
							
							<?php 
							$adate			=	$row['sb_date'];
							$sqlcredit 		=	"SELECT SUM(`sb_cr_amount`) AS tcredit FROM `inv_supplierbalance` WHERE `sb_supplier_id` = '$supplier_id' AND `warehouse_id`='$warehouse_id' AND `sb_date` < '$adate'";
							$resultcredit 	= 	mysqli_query($conn, $sqlcredit);
							$rowcredit 		=	mysqli_fetch_object($resultcredit);
							$creditamount	=	$rowcredit->tcredit;
							?>
							<td><?php echo $balance; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<center><div class="row">
					<div class="col-sm-6"></br></br>--------------------</br>Receiver Signature</div>
					<div class="col-sm-6"></br></br>--------------------</br>Authorised Signature</div>
				</div></center></br>
				<div class="row">
					<div class="col-sm-12" style="border:1px solid gray;border-radius:5px;padding:10px;color:#f26522;">
						<center><h5>Notice***</br><span style="font-size:14px;color:#000000;">Please Check Everything Before Signature</span></h5></center>
						
					</div>
				</div>
			</div>			
		</div>
		<center><button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></center>
		<div class="col-md-1"></div>
</center>

<?php } ?>
<script>
function printDiv(divName) {
	 var printContents = document.getElementById(divName).innerHTML;
	 var originalContents = document.body.innerHTML;

	 document.body.innerHTML = printContents;

	 window.print();

	 document.body.innerHTML = originalContents;
}
</script>
<script>
    $(function () {
        $("#from_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<script>
    $(function () {
        $("#to_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>


