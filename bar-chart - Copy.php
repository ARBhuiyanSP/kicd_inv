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
					text: "Top 5 items stock at a glance"
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
					name: "<?php echo $data['name']; ?>",
					legendText: "<?php echo $data['name']; ?>",
					axisYType: "secondary",
					showInLegend: true,
					dataPoints:[
						{ label: "Rod", y: 266.21 },
						{ label: "OPC-Bag", y: 302.25 },
						{ label: "PPC-Bag", y: 157.20 },
						{ label: "Pakshi sand", y: 148.77 },
						{ label: "Bricks-1st class", y: 101.50 },
						{ label: "Bricks Picket", y: 97.8 },
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
			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <!--here your code will go-->
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>