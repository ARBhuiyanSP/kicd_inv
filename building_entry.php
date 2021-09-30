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
        <li class="breadcrumb-item active"> Building Entry</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Building Entry Form
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
						<div class="col-xs-4">
                            <div class="form-group">
                                <label>Building ID</label>
                                <input type="text" name="building_id" id="building_id" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-4">
                            <div class="form-group">
                                <label>Building Type</label>
								<select class="form-control" id="building_type" name="building_type" required>
									<option value="">Select</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
                            </div>
                        </div>
						<div class="col-xs-4">
                            <div class="form-group">
                                <label>Package Name</label>
								<select class="form-control" id="package_id" name="package_id" required>
                                    <option value="">Select</option>
                                    <?php
                                    $projectsData = getTableDataByTableName('packages');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
                                            <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
						<div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="building_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xs-12">
							<table id="dataTable" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Building ID</th>
										<th>Building Type</th>
										<th>Package Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    $projectsData = getTableDataByTableName('buildings');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
									<tr>
										<td><?php echo $data['building_id']; ?></td>
										<td><?php echo $data['building_type']; ?></td>
										<td><?php echo $data['package_id']; ?></td>
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