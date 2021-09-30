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
			<table class="table">
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<?php
						
						$sql	=	"SELECT * FROM inv_material WHERE material_id = 13 OR material_id = 14 OR material_id = 15";
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($result))
						{
						?>
						<td class="table-title"><?php echo $row['material_description']; ?></td>
						<?php
							}
						?>
					</tr>
					
					
					<?php 
					$projectsData = getwarehouseinfo('inv_warehosueinfo');
						if (isset($projectsData) && !empty($projectsData)) {
							foreach ($projectsData as $data) {
					?>
					<tr>
						<td><?php echo $data['name']; ?></td>
						<?php
						$sql	=	"SELECT * FROM inv_materialcategorysub LIMIT 2";
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($result))
						{
						?>
						<td>08h00-12h00 : <?php echo $data['id']; ?></td>
						<?php } ?>
					</tr>
					<?php } } ?>
				</tbody>
			</table>

            <!--here your code will go-->
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>