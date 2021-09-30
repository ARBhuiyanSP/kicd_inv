 <?php
if(isset($_POST['submit'])){
	$project_id		= $_POST['project_id'];
	$warehouse_id	= $_POST['warehouse_id'];
	$fromdate		= date('Y-m-d H:i:s', strtotime($_POST['fromdate']));
	$todate			= date('Y-m-d H:i:s', strtotime($_POST['todate']));
	
	//query from db
	$resultSet = $conn->query("SELECT * FROM inv_materialbalance WHERE project_id = $project_id AND warehouse_id = $warehouse_id AND mb_date BETWEEN '$fromdate' AND '$todate'");
	$count = $resultSet->num_rows;
	if($resultSet->num_rows > 0){
		echo "<div id='printableArea'><center><h2>Saif Power Group</h2><span>72, Mohakhali C/A, 8th Floor, Rupayan Center, Dhaka-1212, Bangladesh</span><h3>Division Wise RLP List</h3>Number of RLP: $count</center>";
		echo "<table id='rlp_list_table' class='table table-bordered table-striped list-table-custom-style'>
		<tr>
			<th>#</th>
			<th>Material</th>
			<th>Name</th>
			<th>T.In</th>
			<th>T.Out</th>
			<th>B.Qty</th>
			<th>B.Val</th>
		</tr>";

		$i = 0;
		while($rows = $resultSet->fetch_assoc()) {
			$i++;
			echo "<tr><td><?php echo $sl++; ?></td>
					<td><?php echo $data->mb_materialid; ?></td>
					<td>
						<?php
							$table  =   "inv_material where material_id_code='$data->mb_materialid'";
							echo getItemCodeByParam($table, 'material_description');
						?>
					</td>
					<td>
						<?php                                            
							echo getTotalstockInOutQuantityCheck($data->mb_materialid, 'in');;
						?>
					</td>
					<td>
						<?php                                            
							echo getTotalstockInOutQuantityCheck($data->mb_materialid, 'out');;
						?>
					</td>
					<td><?php echo $data->BalanceQty; ?></td>
					<td><?php echo $data->BalanceVal; ?></td>
				</tr>";
			
		}
		echo "</table></div>";
	}
	else{
		echo "<center>No Result</center>";
	}
}
?>
<div class="row">
	<div class="col-sm-12">
		<center>
			<a class="btn btn-default" onclick="printDiv('printableArea')" value="print a div!">
				<i class="fa fa-print"></i> Print 
			</a>
		</center>
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