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
        <li class="breadcrumb-item active">Warehouse Entry</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Warehouse Entry Form
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Warehouse ID</label>
                                <input type="text" name="warehouse_id" id="warehouse_id" class="form-control" readonly="readonly" value="<?php echo getDefaultCategoryCode('inv_warehosueinfo', 'warehouse_id', '03d', '001', 'WH-') ?>">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Warehouse Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-2">
                            <div class="form-group">
                                <label>Short Name</label>
                                <input type="text" name="short_name" id="short_name" placeholder="like 'LN for Londa'" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-2">
                            <div class="form-group">
                                <label>Project Name</label>
								<select class="form-control" id="project_id" name="project_id" required>
                                    <option value="">Select</option>
                                    <?php
                                    $projectsData = getTableDataByTableName('projects');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="warehouse_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xs-12">
							<table id="dataTable" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Warehouse ID</th>
										<th>Warehouse Name</th>
										<th>Address</th>
										<th>Project Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    $projectsData = getTableDataByTableName('inv_warehosueinfo');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
									<tr>
										<td><?php echo $data['warehouse_id']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><?php echo $data['address']; ?></td>
										<td><?php echo $data['project_id']; ?></td>
										<td>
											<a href="#"><i class="fas fa-edit text-success"></i></a>
											<a href="#"><i class="fa fa-trash text-danger"></i></a>
										</td>
									</tr>
									<?php
                                        }
                                    }
                                    ?>
								</tbody>
							</table>
						</div>
					</div>
                </form>
            </div>
            <!--here your code will go-->
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>