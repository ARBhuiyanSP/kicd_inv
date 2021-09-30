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
                                    <label for="todate">From Date</label>
                                    <input type="text" class="form-control" id="from_date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" autocomplete="off" required >
                                </div>
                            </td>
							<td>
                                <div class="form-group">
                                    <label for="todate">To Date</label>
                                    <input type="text" class="form-control" id="to_date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" autocomplete="off" required >
                                </div>
                            </td>
							
							<td>
                                <div class="form-group">
                                    <label for="todate">.</label>
									<button type="submit" name="submit" class="form-control btn btn-primary">Search</button>
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
							<img src="images/Saif_Engineering_Logo_165X72.png" height="50px;"/><br>
							<h5>CTED CHATTOGRAM</h5> 
							<span>Material Received Report</span></br>
							From <span class="dtext"><?php echo date("jS F Y", strtotime($from_date));?></span> To  <span class="dtext"><?php echo date("jS F Y", strtotime($to_date));?> </span><br>
						</p>
					</center>
				</div>
			</div>
				<table id="" class="table table-bordered">
					<thead>
						<tr>
							<th style="text-align:center">Voucher Date</th>
							<th style="text-align:center">Voucher No</th>
							<th style="text-align:center">Material Name</th>
							<th style="text-align:center">Part No</th>
							<th style="text-align:center">Specs</th>
							<th style="text-align:center">Unit</th>
							<th style="text-align:center">QTY</th>
							<th style="text-align:center">Unit Price</th>
							<th style="text-align:center">Amount</th>
							<th style="text-align:center">Remarks</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if($_SESSION['logged']['user_type'] !== 'whm'){
								$sql	=	"SELECT * FROM `inv_receive` where `mrr_date` BETWEEN '$from_date' AND '$to_date';";
							}else{
								$sql	=	"SELECT * FROM `inv_receive` where `warehouse_id` = '$warehouse_id' AND `mrr_date` BETWEEN '$from_date' AND '$to_date';";
							}
							
							$result = mysqli_query($conn, $sql);
							while($row=mysqli_fetch_array($result))
							{
						?>
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
							<td style="text-align:center"><?php echo date("j M y", strtotime($row['mrr_date']));?></td>
							<td style="text-align:center"><?php echo $rowall['mrr_no']; ?></td>
							<td style="text-align:center"><?php 
								$mb_materialid = $rowall['material_id'];
								$sqlname	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$mb_materialid' ";
								$resultname = mysqli_query($conn, $sqlname);
								$rowname=mysqli_fetch_array($resultname);
								echo $rowname['material_description'];
							?>
							</td>
							
							
							<td style="text-align:center"><?php echo $rowall['part_no']; ?></td>
							
							
							<?php 
								$sqlspec	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$mb_materialid' ";
								$resultspec = mysqli_query($conn, $sqlspec);
								$rowspec=mysqli_fetch_array($resultspec);
								
							?>
							<td style="text-align:center"><?php echo $rowspec['spec']; ?></td>
							
							
							<td style="text-align:center"><?php echo getDataRowByTableAndId('inv_item_unit', $rowall['unit_id'])->unit_name; ?></td>
							<td style="text-align:center"><?php echo $rowall['receive_qty']; ?></td>
									<td><?php echo $rowall['unit_price'] ?></td>
									<td style="text-align:right"><?php echo $rowall['total_receive'] ?></td>
							<td></td>
						</tr>
						
						<?php } ?>
						<?php } ?>
						<tr>
									<td colspan="6" class="grand_total" style="text-align:right">Grand Total:</td>
									<td style="text-align:center">
										<?php 
										$sql2 			= "SELECT sum(`no_of_material`) FROM `inv_receive` where `mrr_date` BETWEEN '$from_date' AND '$to_date'";
										$result2 		= mysqli_query($conn, $sql2);
										for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
										$totalReceived	=$row2['sum(`no_of_material`)'];
										echo $totalReceived ;
										}
										?>
									</td>
									<td></td>
									<td style="text-align:right">
									<?php 
										$sql2			= "SELECT sum(`receive_total`) FROM `inv_receive` where `mrr_date` BETWEEN '$from_date' AND '$to_date'";
										$result2		= mysqli_query($conn, $sql2);
										for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
										$totalAmount	= number_format((float)$row2['sum(`receive_total`)'], 2, '.', '');
										echo $totalAmount ;
										}
										?>
									</td>
									<td></td>
								</tr>
						
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
<?php }?>
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


