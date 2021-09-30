<style>
.dtext{
	text-decoration:underline;
}
.linktext{
	font-size:12px;
}
</style>
<div class="card mb-3">
    <div class="card-header">
		<button class="btn btn-info linktext" onclick="window.location.href='consumption_report.php';"> Individual Consumption Report</button>
		<button class="btn btn-info linktext" onclick="window.location.href='consumption_type_report.php';"> Type Wise Consumption Report</button>
        <button class="btn btn-success linktext"> Material Groupwise Consumption Report</button> 
		
		<button class="btn btn-info linktext" onclick="window.location.href='consumption_pakg_build_report.php';"> Package and Bulding Wise Consumption Report</button>
		</div>
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
							<img src="images/Saif_Engineering_Logo_165X72.png" height="100px;"/><br>
							<span>Material Groupwise Consumption Report</span><br>
							From <span class="dtext"><?php echo date("jS F Y", strtotime($from_date));?></span> To  <span class="dtext"><?php echo date("jS F Y", strtotime($to_date));?> </span><br>
						</p>
					</center>
				</div>
			</div>
				<table id="" class="table table-bordered table-striped ">
					<thead>
						<tr>
							<th>Material ID</th>
							<th>Material Name</th>
							<th>Unit</th>
							
							<th>Quantity</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
						if($_SESSION['logged']['user_type'] !== 'whm'){
							$sql	=	"SELECT * FROM qry_inv_issue WHERE issue_date BETWEEN '$from_date' AND '$to_date'  GROUP BY `material_id`";
						}else{
							$sql	=	"SELECT * FROM qry_inv_issue WHERE warehouse_id = $warehouse_id AND issue_date BETWEEN '$from_date' AND '$to_date'  GROUP BY `material_id`";
						}
						
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($result))
						{
					?>
						<tr>
							<td><?php echo $row['material_id']; ?></td>
							<td>
								<?php 
								$material_id = $row['material_id'];
								$sqlname	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$material_id' ";
								$resultname = mysqli_query($conn, $sqlname);
								$rowname=mysqli_fetch_array($resultname);
								echo $rowname['material_description'];
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
							
							
						
							
							
							<td style="text-align:right;"><?php
							if($_SESSION['logged']['user_type'] !== 'whm'){
								$sqloutqty = "SELECT SUM(`issue_qty`) AS totalout FROM `qry_inv_issue` WHERE `material_id`='$material_id' AND `issue_date` BETWEEN '$from_date' AND '$to_date'  GROUP BY `material_id`";
							}else{
								$sqloutqty = "SELECT SUM(`issue_qty`) AS totalout FROM `qry_inv_issue` WHERE `material_id`='$material_id' AND `warehouse_id` = '$warehouse_id' AND `issue_date` BETWEEN '$from_date' AND '$to_date'  GROUP BY `material_id`";
							}
							
							$resultoutqty = mysqli_query($conn, $sqloutqty);
							$rowoutqty = mysqli_fetch_object($resultoutqty) ;
							//echo $rowoutqty->totalout;
							echo number_format((float)$rowoutqty->totalout, 2, '.', '');
							
							
							?></td>
							
							
							
							
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


