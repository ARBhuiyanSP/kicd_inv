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
        <li class="breadcrumb-item active"> Suppliers Information</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Suppliers Information Form
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label>Supplier ID</label>
                                <input type="text" name="supplier_id" id="supplier_id" class="form-control" readonly="readonly" value="<?php echo getDefaultCategoryCode('suppliers', 'code', '03d', '001', 'SID-') ?>">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Supplier Name</label>
                                <input type="text" name="supplier_name" id="supplier_name" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Supplier Address</label>
                                <input type="text" name="supplier_address" id="supplier_address" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Contact Person</label>
                                <input type="text" name="contact_person" id="contact_person" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="supplier_phone" id="supplier_phone" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Balance</label>
                                <input type="text" name="supplier_op_balance" id="supplier_op_balance" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Supplier Type</label>
                                <select name="supplier_type" class="form-control">
									<option value="cash">Cash</option>
									<option value="credit">Credit</option>
								</select>
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Material Type</label>
                                <select class="form-control select2" id="material_type" name="material_type" required>
									<option value="">Select</option>
                                    <?php
                                    $parentCats = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
                                    if (isset($parentCats) && !empty($parentCats)) {
                                        foreach ($parentCats as $pcat) {
                                            ?>
                                            <option value="<?php echo $pcat['id'] ?>"><?php echo $pcat['category_description'] ?></option>
                                        <?php }
                                    } ?>
								</select>
                            </div>
                        </div>
						<div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="suppliers_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xs-12">
							<table id="dataTable" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Supplier ID</th>
										<th>Supplier Name</th>
										<th>Address</th>
										<th>Material Types</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
                                    $projectsData = getTableDataByTableName('suppliers');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
									<tr>
										<td><?php echo $data['code']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><?php echo $data['address']; ?></td>
										<td><?php 
												$mb_materialid = $data['material_type'];
												$sqlname	=	"SELECT * FROM `inv_materialcategorysub` WHERE `id` = '$mb_materialid' ";
												$resultname = mysqli_query($conn, $sqlname);
												$rowname=mysqli_fetch_array($resultname);
												echo $rowname['category_description'];
											?>
										</td>
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