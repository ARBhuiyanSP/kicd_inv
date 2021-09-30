<style>
.dtext{
	text-decoration:underline;
}
</style>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Material Type Search</div>
    <div class="card-body">
        <form class="form-horizontal" action="" id="warehouse_stock_search_form" method="GET">
            <div class="table-responsive col-md-6">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>  
							<td>
								<div class="form-group">
									<label>Material Type</label>
									<select name="material_id" id="material_id" class="form-control select2">
										<option value="CIVIL">CIVIL</option>
										<option value="ELECTRICAL">ELECTRICAL</option>
										<option value="MACHINICAL">MACHINICAL</option>
										<option value="SANITARY">SANITARY</option>
										<option value="HARDWARE">HARDWARE</option>
										
									</select>
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
	
	$material_id	=	$_GET['material_id'];

	
	
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
							<span>Materialwise List</span><br>
							
						</p>
					</center>
				</div>
			</div>
				<table id="" class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							
							
						</tr>
					</thead>
					<tbody>
						<?php
							$sql	=	"SELECT * FROM `inv_material` WHERE `type` = '$material_id'";
							$result = mysqli_query($conn, $sql);
							while($row=mysqli_fetch_array($result))
								
							
							{
						?>
						<tr style="background-color:#E9ECEF;">
							
							<td><?php echo $row['material_id_code'];?></td>
							<td><?php echo $row['material_description'];?></td>
							
								
							
							
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


