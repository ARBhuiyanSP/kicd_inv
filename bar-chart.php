<?php 
include 'header.php';
?>
<!-- Left Sidebar End -->
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> Chart View</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Stock Quantity in Chart
		</div>
        <div class="card-body">
            <!--here your code will go-->
			<script>
			window.onload = function () {

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				title:{
					text: "Top 10 items stock at a glance"
				},	
				axisY: {
					title: "Items in Qty",
					titleFontColor: "#4F81BC",
					lineColor: "#4F81BC",
					labelFontColor: "#4F81BC",
					tickColor: "#4F81BC"
				},
				axisY2: {
					title: "Items in Qty",
					titleFontColor: "#C0504E",
					lineColor: "#C0504E",
					labelFontColor: "#C0504E",
					tickColor: "#C0504E"
				},	
				toolTip: {
					shared: true
				},
				legend: {
					cursor:"pointer",
					itemclick: toggleDataSeries
				},
				data: [
				<?php
				$projectsData = getwarehouseinfo('inv_warehosueinfo');
				if (isset($projectsData) && !empty($projectsData)) {
					foreach ($projectsData as $data) {
				?>
				
				
				{
					type: "column",	
					name: "<?php echo $data['name']; ?>:<?php echo $data['id']; ?>",
					legendText: "<?php echo $data['name']; ?>:<?php echo $data['id']; ?>",
					axisYType: "secondary",
					showInLegend: true,
					dataPoints:[
					
					<?php 
					$sql	=	"SELECT * FROM inv_material WHERE material_id = 13";
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($result))
						{
							$warehouse 		= $data['id'];
							$to_date 		= date('Y-m-d');
							$mb_materialid 	= $row['material_id_code'];
							
							$sqlinqty = "SELECT SUM(`mbin_qty`) AS totalin FROM `inv_materialbalance` WHERE warehouse_id = $warehouse AND `mb_materialid` = '$mb_materialid' AND mb_date <= '$to_date'";
							$resultinqty = mysqli_query($conn, $sqlinqty);
							$rowinqty = mysqli_fetch_object($resultinqty) ;
							
							
							$sqloutqty = "SELECT SUM(`mbout_qty`) AS totalout FROM `inv_materialbalance` WHERE warehouse_id = $warehouse AND `mb_materialid` = '$mb_materialid' AND mb_date <= '$to_date'";
							$resultoutqty = mysqli_query($conn, $sqloutqty);
							$rowoutqty = mysqli_fetch_object($resultoutqty) ;
							
							//echo $rowinqty->totalin -$rowoutqty->totalout;
							
							$instock = $rowinqty->totalin -$rowoutqty->totalout;
							
					?>
						{ label: "<?php echo $row['material_description']; ?>", y: <?php echo number_format((float)$instock, 2, '.', ''); ?> },
						
						<?php } ?>
					]
				},
				
					<?php
					}
				}
				?>
				
				
				]
			});
			chart.render();

			function toggleDataSeries(e) {
				if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				}
				else {
					e.dataSeries.visible = true;
				}
				chart.render();
			}

			}
			</script>

			<div id="chartContainer" style="height: auto; width: 100%;"></div>
			<script src="js/canvasjs.min.js"></script>
            <!--here your code will go-->
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>