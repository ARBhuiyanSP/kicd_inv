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
        <li class="breadcrumb-item active">Project Entry</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Project Entry Form
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Project Code</label>
                                <input type="text" name="code" id="code" class="form-control" readonly="readonly" value="<?php echo getDefaultCategoryCode('projects', 'code', '03d', '001', 'PR-') ?>">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Project Incharge</label>
                                <input type="text" name="incharge" id="incharge" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-4">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="project_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xs-12">
							<table id="dataTable" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Project Code</th>
										<th>Project Name</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    $projectsData = getTableDataByTableName('projects');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
									<tr>
										<td><?php echo $data['code']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><?php echo $data['address']; ?></td>
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