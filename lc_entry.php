<?php include 'header.php' ?>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
        <div class="card-body">
            <!--here your code will go-->
			<div class="container">
			
                <form id="sidebar">
                <div class="row">
					<div class="col-md-4">
                        <label for="id">LC NO</label>
                        <input type="text" id="id" name="id" class="form-control" placeholder="Identity" />
                    </div>
                    <div class="col-md-4">
                        <label for="nm"><b style="color:red;">LC NUMBER</b></label>
                        <input type="text" id="nm" name="nm" class="form-control" placeholder="LC NUMBER"/>
                    </div>
					
					<div class="col-md-4">
                        <label for="nm">LC DATE</label>
                        <input type="text" id="stype" name="stype" class="form-control" placeholder="supplier type"/>
                    </div>
					
					
					
					<div class="col-md-4">
                        <label for="nm">PROFORMA INVOICE NO</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Address"/>
                    </div>
					
					<div class="col-md-4">
                        <label for="nm">NAME OF BANK</label>
                        <input type="text" id="cp" name="cp" class="form-control" placeholder="Contact Person"/>
                    </div>
					
					<div class="col-md-4">
                        <label for="nm">LC PERIOD</label>
                        <input type="text" id="cp" name="cp" class="form-control" placeholder="Contact Person"/>
                    </div>
					
					<div class="col-md-4">
                        <label for="nm">PAYMENT TERMS</label>
                        <input type="text" id="cp" name="cp" class="form-control" placeholder="Contact Person"/>
                    </div>
					
					
					
					<div class="col-md-4">
                        <label for="nm">REMARKS</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone"/>
                    </div>
					
					
					
				</div><br>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<button type="button" id="save" class="btn btn-primary" onclick="saveData()">Save</button>
						<button type="button" id="update" class="btn btn-warning" onclick="updateData()">Update</button></div>
					</div>
					<div class="col-md-4"></div>
                </form>
			<div class="row">
            <div class="col-md-12">
                <table id="dataTable" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="40">S.ID</th>
                            <th>Supplier Name</th>
                            <th width="100">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
					</tbody>
                </table>
            </div>
        </div>
        </div>
            <!--here your code will go-->
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>
<script src="script_com.js"></script>