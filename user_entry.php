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
        <li class="breadcrumb-item active">User Entry</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> User Entry Form
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Employee ID</label>
                                <input type="text" name="employee_id" id="employee_id" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control" required >
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control" id="user_type" name="user_type" required>
                                    <option value="">Select</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="superAdmin">SuperAdmin</option>
                                </select>
                            </div>
                        </div>
						<input type="hidden" name="password" id="password" value="123456">
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Warehouse</label>
                                <select class="form-control" id="warehouse_id" name="warehouse_id" required>
                                    <?php
                                    $projectsData = getTableDataByTableName('inv_warehosueinfo');
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
						<div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="user_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xs-12">
							<table id="dataTable" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Name</th>
										<th>Employee ID</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    $projectsData = getTableDataByTableName('users');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
									<tr>
										<td><?php echo $data['first_name'] .' '. $data['last_name']; ?></td>
										<td><?php echo $data['employee_id']; ?></td>
										<td><?php echo $data['email']; ?></td>
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