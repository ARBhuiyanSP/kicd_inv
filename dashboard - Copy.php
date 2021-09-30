<?php include 'header.php';
$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
 ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
table tbody tr{
	background-color:#E9ECEF;
	color:#000;
}


</style>

<div class="container-fluid">
        <!-- Breadcrumbs-->
		<?php if($_SESSION['logged']['user_type'] !== 'whm') {?>
		<div class="row">
		<?php
			$projectsData = getwarehouseinfo('inv_warehosueinfo');
			;
			if (isset($projectsData) && !empty($projectsData)) {
				foreach ($projectsData as $data) {
					?>
			<div class="col-xl-4 col-sm-6 mb-4">
				<div class="card text-white bg-info o-hidden h-100">
					<center><h3><?php echo $data['name']; ?></h3></center>
					<table class="table">
						<thead>
							<tr>
								<th>Type</th>
								<th>Quantity</th>
								<th>Approved</th>
								<th>Pending</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php 
								$warehouse = $data['id'];
								$sqlmrr	=	"SELECT * FROM `inv_receive` WHERE `warehouse_id`=$warehouse";
								$resultmrr = mysqli_query($conn, $sqlmrr);
								$totalMrr = mysqli_num_rows($resultmrr);	

									$sqlpmrr	=	"SELECT * FROM `inv_receive` WHERE `warehouse_id`=$warehouse AND `approval_status`='0'";
									$resultpmrr = mysqli_query($conn, $sqlpmrr);
									$totalpMrr = mysqli_num_rows($resultpmrr);
								$totalaMrr	=	$totalMrr-$totalpMrr;
								?>
								<td>Receive</td>
								<td><?php echo $totalMrr; ?></td>
								<td><?php echo $totalaMrr; ?></td>
								<td><?php echo $totalpMrr; ?></td>
							</tr>
							<tr>
								<?php 
								$sqliss	=	"SELECT * FROM `inv_issue` WHERE `warehouse_id`=$warehouse";
								$resultiss = mysqli_query($conn, $sqliss);
								$totalIss = mysqli_num_rows($resultiss);	

									$sqlpiss	=	"SELECT * FROM `inv_issue` WHERE  `warehouse_id`=$warehouse AND `approval_status`='0'";
									$resultpiss = mysqli_query($conn, $sqlpiss);
									$totalpIss = mysqli_num_rows($resultpiss);
								$totalaIss	=	$totalIss-$totalpIss;
								?>
								<td>Issue</td>
								<td><?php echo $totalIss; ?></td>
								<td><?php echo $totalaIss; ?></td>
								<td><?php echo $totalpIss; ?></td>
							</tr>
							<tr>
								<?php 
								$sqltrn	=	"SELECT * FROM `inv_transfermaster` WHERE `from_warehouse`='$warehouse'";
								$resulttrn = mysqli_query($conn, $sqltrn);
								$totalTrn = mysqli_num_rows($resulttrn);	

									$sqlptrn	=	"SELECT * FROM `inv_transfermaster` WHERE `from_warehouse`=$warehouse";
									$resultptrn = mysqli_query($conn, $sqlptrn);
									$totalpTrn = mysqli_num_rows($resultptrn);
								$totalaTrn	=	$totalTrn-$totalpTrn;
								?>
								<td>Transfer</td>
								<td><?php echo $totalTrn; ?></td>
								<td><?php echo $totalaTrn; ?></td>
								<td><?php echo $totalpTrn; ?></td>
							</tr>
							<tr>
								<?php 
								$sqlrtn	=	"SELECT * FROM `inv_return` WHERE `warehouse_id`=$warehouse";
								$resultrtn = mysqli_query($conn, $sqlrtn);
								$totalRtn = mysqli_num_rows($resultrtn);	

									$sqlprtn	=	"SELECT * FROM `inv_return` WHERE `warehouse_id`=$warehouse";
									$resultprtn = mysqli_query($conn, $sqlprtn);
									$totalpRtn = mysqli_num_rows($resultprtn);
								$totalaRtn	=	$totalRtn-$totalpRtn;
								?>
								<td>Return</td>
								<td><?php echo $totalRtn; ?></td>
								<td><?php echo $totalaRtn; ?></td>
								<td><?php echo $totalpRtn; ?></td>
							</tr>
						</tbody>
					</table>
					<!-- box -->
					<div class="row">
						<?php
						$warehouse = $data['id'];
						$sqlpck	=	"SELECT * FROM `packages` WHERE `warehouse_id`=$warehouse";
						$resultpck = mysqli_query($conn, $sqlpck);
						while($rowpck=mysqli_fetch_array($resultpck))
						{ ?>
					
						<div class="col-md-3">
							<span href="#" data-toggle="popover" title="<?php echo $rowpck['name']; ?>" data-html="true" data-content="<div>
							<table border='1'>
								<thead>
									<tr>
										<th>Type</th>
										<th>Quantity</th>
										<th>Approved</th>
										<th>Pending</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php 
										echo $package_id	=	$rowpck['id'];
										echo $warehouse = $data['id'];
										$sqliss	=	"SELECT * FROM `inv_issuedetail` WHERE `warehouse_id`='$warehouse' AND `package_id`='$package_id'";
										$resultiss = mysqli_query($conn, $sqliss);
										$totalIss = mysqli_num_rows($resultiss);	

											
											$sqlpiss	=	"SELECT * FROM `inv_issuedetail` WHERE  `warehouse_id`='$warehouse' AND `package_id`='$package_id' AND `approval_status`='0'";
											$resultpiss = mysqli_query($conn, $sqlpiss);
											$totalpIss = mysqli_num_rows($resultpiss);
											$totalaIss	=	$totalIss-$totalpIss;
										?>
										<td>Issue</td>
										<td><?php echo $totalIss; ?></td>
										<td><?php echo $totalaIss; ?></td>
										<td><?php echo $totalpIss; ?></td>
									</tr>
									<tr>
										<?php
										echo $package_id	=	$rowpck['id'];
										echo $warehouse = $data['id'];
										$sqlrtn	=	"SELECT * FROM `inv_return` WHERE `warehouse_id`=$warehouse";
										$resultrtn = mysqli_query($conn, $sqlrtn);
										$totalRtn = mysqli_num_rows($resultrtn);	

											$sqlprtn	=	"SELECT * FROM `inv_return` WHERE `warehouse_id`=$warehouse";
											$resultprtn = mysqli_query($conn, $sqlprtn);
											$totalpRtn = mysqli_num_rows($resultprtn);
										$totalaRtn	=	$totalRtn-$totalpRtn;
										?>
										<td>Return</td>
										<td><?php echo $totalRtn; ?></td>
										<td><?php echo $totalaRtn; ?></td>
										<td><?php echo $totalpRtn; ?></td>
									</tr>
								</tbody>
							</table>
						</div>"><?php echo $rowpck['name']; ?></span>
						</div>
							<script>
								$(function () {
									$('[data-toggle="popover"]').popover()
								})
							</script>
							
							
						<?php } ?>
					</div>
					<!-- /.box -->
				</div>
			</div>
			<?php
				}
			}
			?>	
		</div>
		<?php } ?>
		<div class="row">
			<div class="col-xl-4 col-sm-6 mb-4">
				<div class="card text-white bg-info o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-truck"></i>
						</div>
					<?php
					if($_SESSION['logged']['user_type'] == 'superAdmin') {
						$sqlpmrr	=	"SELECT * FROM `inv_receive` WHERE `approval_status` = '0'";
					}else{
						$sqlpmrr	=	"SELECT * FROM `inv_receive` WHERE `warehouse_id`='$warehouse_id' AND `approval_status` = '0'";
					}
					
					$resultpmrr = mysqli_query($conn, $sqlpmrr);
					$totalPendingMrr = mysqli_num_rows($resultpmrr);
					?>
						<div class="mr-5"><?php echo $totalPendingMrr; ?> Pending MRR</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="receive-list.php">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fas fa-angle-right"></i>
					</span>
					</a>
				</div>
			</div>
			<div class="col-xl-4 col-sm-6 mb-4">
				<div class="card text-white bg-info o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-truck"></i>
						</div>
					<?php
					if($_SESSION['logged']['user_type'] == 'superAdmin') {
						$sqlpmrr	=	"SELECT * FROM `inv_issue` WHERE `approval_status` = '0'";	
					}else{
						$sqlpmrr	=	"SELECT * FROM `inv_issue` WHERE `warehouse_id`='$warehouse_id' AND `approval_status` = '0'";
					}
					
					$resultpmrr = mysqli_query($conn, $sqlpmrr);
					$totalPendingMrr = mysqli_num_rows($resultpmrr);
					?>
						<div class="mr-5"><?php echo $totalPendingMrr; ?> Pending Issue</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="issue-list.php">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fas fa-angle-right"></i>
					</span>
					</a>
				</div>
			</div>
			<div class="col-xl-4 col-sm-6 mb-4">
				<div class="card text-white bg-info o-hidden h-100">
					<div class="card-body">
						<div class="card-body-icon">
							<i class="fas fa-fw fa-truck"></i>
						</div>
					<?php
					if($_SESSION['logged']['user_type'] == 'superAdmin') {
						$sqlpmrr	=	"SELECT * FROM `inv_return` WHERE `approval_status` = '0'";
					}else{
						$sqlpmrr	=	"SELECT * FROM `inv_return` WHERE `warehouse_id`='$warehouse_id' AND `approval_status` = '0'";
					}
					
					$resultpmrr = mysqli_query($conn, $sqlpmrr);
					$totalPendingMrr = mysqli_num_rows($resultpmrr);
					?>
						<div class="mr-5"><?php echo $totalPendingMrr; ?> Pending Return</div>
					</div>
					<a class="card-footer text-white clearfix small z-1" href="return-list.php">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fas fa-angle-right"></i>
					</span>
					</a>
				</div>
			</div>
		</div>
		
        <!-- Icon Cards-->
		<?php if($_SESSION['logged']['user_type'] !== 'whm') {?>
        <div class="row">
		  <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
				<?php
				$sqlsup	=	"SELECT * FROM suppliers";
				$resultsup = mysqli_query($conn, $sqlsup);
				$totalSupplier = mysqli_num_rows($resultsup);
				?>
                <div class="mr-5"><?php echo $totalSupplier; ?> Total Supplier</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="supplier_entry.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
				<?php
				$sqlwar	=	"SELECT * FROM inv_warehosueinfo";
				$resultwar = mysqli_query($conn, $sqlwar);
				$totalWarehouse = mysqli_num_rows($resultwar);
				?>
                <div class="mr-5"><?php echo $totalWarehouse; ?> Total Warehouse</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="warehouse_entry.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
				<?php
				$sqlpck	=	"SELECT * FROM packages";
				$resultpck = mysqli_query($conn, $sqlpck);
				$totalPackage = mysqli_num_rows($resultpck);
				?>
                <div class="mr-5"><?php echo $totalPackage; ?> Total Package</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="package_entry.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
				<?php
				$sqlbld	=	"SELECT * FROM buildings";
				$resultbld = mysqli_query($conn, $sqlbld);
				$totalBuilding = mysqli_num_rows($resultbld);
				?>
                <div class="mr-5"><?php echo $totalBuilding; ?> Total Bulding</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="building_entry.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
		
		
		<?php if($_SESSION['logged']['user_type'] == 'admin') {?>
		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3"><a href="receive_entry.php" class="btn btn-block btn-success"><i class="fa fa-truck"></i> Receive Entry</a></div>
			<div class="col-xl-3 col-sm-6 mb-3"><a href="issue_entry.php" class="btn btn-block btn-success"><i class="fa fa-server"></i> Issue Entry</a></div>
			<div class="col-xl-3 col-sm-6 mb-3"><a href="warehousetransfer_entry.php" class="btn btn-block btn-success mybtn"><i class="fa fa-text-width"></i> Warehouse Transfer</a></div>
			<div class="col-xl-3 col-sm-6 mb-3"><a href="return_entry.php" class="btn btn-block btn-success"><i class="fa fa-undo"></i> Material Return</a></div>
		</div>
		<?php } ?>
<?php } ?>
      </div>
      <!-- /.container-fluid -->
<?php include 'footer.php' ?>