<style>
.dtext{
	text-decoration:underline;
}
</style>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Issue Report Search</div>
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
							<span>Material Issue Report</span></br>
							From <span class="dtext"><?php echo date("jS F Y", strtotime($from_date));?></span> To  <span class="dtext"><?php echo date("jS F Y", strtotime($to_date));?> </span><br>
						</p>
					</center>
				</div>
			</div>
				<table id="" class="table table-bordered">
					<thead>
						<tr>
							<th>Issue Date</th>
							<th>Issue No</th>
							<th>Material Name</th>
							<th>Part No</th>
							<th>Specs</th>
							<th>Use in</th>
							<th>Unit</th>
							<th>QTY</th>
							<th>Remarks</th>

						</tr>
					</thead>
					<tbody>
						<?php
							if($_SESSION['logged']['user_type'] !== 'whm'){
								$sql	=	"SELECT * FROM `inv_issue` where `issue_date` BETWEEN '$from_date' AND '$to_date';";
							}else{
								$sql	=	"SELECT * FROM `inv_issue` where `warehouse_id` = '$warehouse_id' AND `issue_date` BETWEEN '$from_date' AND '$to_date';";
							}
							
							$result = mysqli_query($conn, $sql);
							while($row=mysqli_fetch_array($result))
							{
						?>
						<?php
							$totalQty = 0;
							
							$issue_id = $row['issue_id'];
							$sqlall	=	"SELECT * FROM `inv_issuedetail` WHERE `issue_id` = '$issue_id';";
							$resultall = mysqli_query($conn, $sqlall);
							while($rowall=mysqli_fetch_array($resultall))
							{
								$totalQty += $rowall['issue_qty'];
								
						?>
						<tr>
							<td><?php echo date("j M y", strtotime($row['issue_date']));?></td>
							<td><?php echo $row['issue_id']; ?></td>
							<td><?php 
								$dataresult =   getDataRowByTableAndId('inv_material', $rowall['material_name']);
								echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_description : '');
							?>
							</td>
							<td><?php echo $rowall['part_no']; ?></td>
							<?php 
							$material_id_code = $rowall['material_id'];
								$sqlspec	=	"SELECT * FROM `inv_material` WHERE `material_id_code` = '$material_id_code' ";
								$resultspec = mysqli_query($conn, $sqlspec);
								$rowspec=mysqli_fetch_array($resultspec);
								
							?>
							<td style="text-align:center"><?php echo $rowspec['spec']; ?></td>
							<td><?php echo $rowall['use_in']; ?></td>
							<td><?php echo getDataRowByTableAndId('inv_item_unit', $rowall['unit'])->unit_name; ?></td>
							<td><?php echo $rowall['issue_qty']; ?></td>
							<td></td>
						</tr>
						<?php } ?>
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


