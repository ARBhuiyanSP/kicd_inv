<style>
.dtext{
	text-decoration:underline;
}
.table th, .table td{
	padding:5px;
}

</style>
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569818907/jquery.table2excel.min.js"></script>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Movement Report Search</div>
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
		<div class="col-md-12" id="printableArea">
				<table id="htmltable" class="table table-bordered table-striped ">
					<thead>
						<tr>
							<th colspan="8">
								<center>
										<img src="images/Saif_Engineering_Logo_165X72.png" height="50px;"/><br>
										<span>Material Movement Report</span><br>
										From  <span class="dtext"><?php echo date("jS F Y", strtotime($from_date));?> </span>To  <span class="dtext"><?php echo date("jS F Y", strtotime($to_date));?> </span>
								</center>
							</th>
						</tr>
						<tr>
							<th width="30%">Material Name</th>
							<th width="15%">Part No</th>
							<th width="15%">Specification</th>
							<th>Unit</th>
							<th width="10%">Opening Stock</th>
							<th style="text-align:right;">Receive</th>
							<th style="text-align:right;">Issue</th>
							<th width="15%" style="text-align:right;">Closing Stock</th>
						</tr>
					</thead>
					<tbody>
					<?php
						if($_SESSION['logged']['user_type'] !== 'whm'){
							$sql	=	"SELECT * FROM `inv_materialbalance` GROUP BY `mb_materialid`";
						}else{
							$sql	=	"SELECT * FROM `inv_materialbalance` WHERE `warehouse_id` = $warehouse_id GROUP BY `mb_materialid`";
						}
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($result))
						{
					?>
						<tr>
							<td>
								<?php 
								$mb_materialid = $row['mb_materialid'];
								$sqlname	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$mb_materialid' ";
								$resultname = mysqli_query($conn, $sqlname);
								$rowname=mysqli_fetch_array($resultname);
								echo $rowname['material_description'];
								?>
							</td>
							<td><?php echo $row['part_no']; ?></td>
							<td>
							<?php 
								$mb_materialid = $row['mb_materialid'];
								$sqlspec	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$mb_materialid' ";
								$resultspec = mysqli_query($conn, $sqlspec);
								$rowspec=mysqli_fetch_array($resultspec);
								echo $rowspec['spec'];
								?>
							</td>
							<td>
								<?php 
								$qty_unit = $rowname['qty_unit'];
								$sqlunit	=	"SELECT * FROM `inv_item_unit` WHERE `id` = '$qty_unit' ";
								$resultunit = mysqli_query($conn, $sqlunit);
								$rowunit=mysqli_fetch_array($resultunit);
								echo $rowunit['unit_name'];
								
								?>
								
							</td>
							<td style="text-align:right;">
								<?php 
									if($_SESSION['logged']['user_type'] !== 'whm'){
										$sqlpreinqty = "SELECT SUM(`mbin_qty`)- SUM(`mbout_qty`) AS totalpre FROM `inv_materialbalance` WHERE `mb_materialid` = '$mb_materialid' AND `mb_date` < '$from_date'";
									}else{
										$sqlpreinqty = "SELECT SUM(`mbin_qty`)- SUM(`mbout_qty`) AS totalpre FROM `inv_materialbalance` WHERE `warehouse_id` = '$warehouse_id' AND `mb_materialid` = '$mb_materialid' AND `mb_date` < '$from_date'";
									}
									
									$resultpreinqty = mysqli_query($conn, $sqlpreinqty);
									$rowpreinqty = mysqli_fetch_object($resultpreinqty);
									
									if($rowpreinqty->totalpre > 0){
										$opening_stock = $rowpreinqty->totalpre;
									}
									else {
											$opening_stock = 0;
										}
									//echo $opening_stock;
									echo number_format((float)$opening_stock, 2, '.', '');
								?>
							</td>
							<td style="text-align:right;">
								<?php 
									if($_SESSION['logged']['user_type'] !== 'whm'){
										$sqlinqty = "SELECT SUM(`mbin_qty`) AS totalin FROM `inv_materialbalance` WHERE `mb_materialid` = '$mb_materialid' AND mb_date BETWEEN '$from_date' AND '$to_date'";
									}else{
										$sqlinqty = "SELECT SUM(`mbin_qty`) AS totalin FROM `inv_materialbalance` WHERE warehouse_id = $warehouse_id AND `mb_materialid` = '$mb_materialid' AND mb_date BETWEEN '$from_date' AND '$to_date'";
									}
									
									$resultinqty = mysqli_query($conn, $sqlinqty);
									$rowinqty = mysqli_fetch_object($resultinqty) ;
									$stockin = $rowinqty->totalin;
									echo number_format((float)$stockin, 2, '.', '');
								?>
							</td>
							<td style="text-align:right;">
							<?php 
							if($_SESSION['logged']['user_type'] !== 'whm'){
							$sqloutqty = "SELECT SUM(`mbout_qty`) AS totalout FROM `inv_materialbalance` WHERE `mb_materialid` = '$mb_materialid' AND mb_date BETWEEN '$from_date' AND '$to_date'";
							}else{
							$sqloutqty = "SELECT SUM(`mbout_qty`) AS totalout FROM `inv_materialbalance` WHERE warehouse_id = $warehouse_id AND `mb_materialid` = '$mb_materialid' AND mb_date BETWEEN '$from_date' AND '$to_date'";
							}
							
							$resultoutqty = mysqli_query($conn, $sqloutqty);
							$rowoutqty = mysqli_fetch_object($resultoutqty) ;
							$stockout = $rowoutqty->totalout;
							echo number_format((float)$stockout, 2, '.', '');
							?>
							</td>
							<td style="text-align:right;">
								<?php $closingStock = $opening_stock + $stockin -$stockout; echo number_format((float)$closingStock, 2, '.', '');?>
							</td>
						</tr>
						<?php
							}
							$rowcount=mysqli_num_rows($result);
							if($rowcount < 1) { ?>
								<tr><td colspan="6"><center>No Data Found</center></td></tr>
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
		<center><button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="font-size: 17px;"> Print</i></button><button id="exporttable" class="btn btn-default"><i class="fas fa-file-excel" aria-hidden="true" style="font-size: 17px;"> Export xls</i></button></center>
		
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
<script>
$(function() {
$("#exporttable").click(function(e){
var table = $("#htmltable");
if(table && table.length){
$(table).table2excel({
exclude: ".noExl",
name: "Excel Document Name",
filename: "BBBootstrap" + new Date().toISOString().replace(/[\-\:\.]/g, "") + ".xls",
fileext: ".xls",
exclude_img: true,
exclude_links: true,
exclude_inputs: true,
preserveColors: false
});
}
});

});
</script>


