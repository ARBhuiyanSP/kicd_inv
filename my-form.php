<?php include 'header.php' ?>
<!-- Left Sidebar End -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!-- Left Sidebar End -->
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
			<div class="form-group">
                <form action="add_challan.php" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
						<div class="col-xs-2">
							<div class="form-group">
								<label>Challan No</label>
								<input name="challan_no" type="text" class="form-control" id="" value="CGP-" size="30" required />
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label>Date</label>
								<input name="date" type="text" class="form-control" id="cldate" value="" size="30" autocomplete="off" required />
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label>Return Date</label>
								<input name="return_date" type="text" onchange="showdays()" class="form-control" id="rndate" value="" size="30" autocomplete="off" required />
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label>Total Days</label>
								<input type="text" name="totaldays" class="form-control" maxlength="100" id="result" readonly />	
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label for="id">Type</label>
								<select id="ac" name="type" class="form-control select2">
									<option>Select Type</option>
									
									<option value="Own">Own</option>
									<option value="Rent">Rent</option>
									
								</select>
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label for="id">Client name</label>
								<select id="ac" name="client_name" class="form-control select2">
									<option>Select Client</option>
									<?php 
									$sql	= "select * from clients ORDER BY client_id ASC";
									$result = mysqli_query($link, $sql);
									while($row=mysqli_fetch_array($result))
										{
									?>
									<option value="<?php echo $row['client_id'] ?>"><?php echo $row['client_name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row" id="div1"  style="">
						<div class="table-responsive">
							<table class="table table-bordered" id="dynamic_field">
							<thead>
								<th>Product Name</th>
								<th>Qty</th>
								<th>Product Description</th>
								<th></th>
							</thead>
							<tbody>
								<tr>
									<td>
										<select name="product_name[]" class="form-control name_list">
											<option>Select Item</option>
											<?php 
											$sql	= "select * from ams_products ORDER BY id ASC";
											$result = mysqli_query($link, $sql);
											while($row=mysqli_fetch_array($result))
												{
											?>
											<option value="<?php echo $row['id'] ?>"><?php echo $row['manu_sl'] ?></option>
											<?php } ?>
										</select>
									</td>
									<td><input type="text" name="qty[]" id="qty0" placeholder="Enter your Qty" class="form-control name_list"  required /></td>
									<td><input type="text" name="description[]" id="description0" placeholder="Enter your Rate" class="form-control name_list"  required /></td>
									<td><button type="button" name="add" id="add" class="btn" style="background-color:#2e3192;color:#ffffff;">Add More</button></td>
								</tr>
							</tbody>
							</table>
						</div>
                    </div>
					<div class="row" style="">
						<div class="col-xs-3">
							<div class="form-group">
								<label>Project Name</label>
								<input name="project_name" type="text" class="form-control" id="" value="" size="30"  required />
							</div>
						</div>
						
						<div class="col-xs-3">
							<div class="form-group">
								<label>Location</label>
								<input name="location" type="text" class="form-control" id="" value="" size="30"  required />
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label>Carrier Information</label>
								<input name="carrier_information" type="text" class="form-control" id="" value="" size="30"  required />
							</div>
						</div>
						
						<div class="col-xs-3">
							<div class="form-group">
								<label>Remarks</label>
								<input name="remarks" type="text" class="form-control" id="" value="" size="30"  required />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<div class="modal-footer">
									<input type="submit" name="submit" id="submit" class="btn btn-block" style="background-color:#f26522;color:#ffffff;" value="Submit" />
								</div>    
							</div>
						</div>
					</div>
					
						 
                </form>
            </div>
            <!--here your code will go-->
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script>
var i=0;
$(document).ready(function(){
    $('#add').click(function(){
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'"><td>dfdf</td><td><input type="text" name="qty[]" id="qty'+i+'" placeholder="Enter your Qty" class="form-control name_list" /></td><td><input type="text" name="description[]" id="description'+i+'" placeholder="Enter your Rate" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
        $('#qty'+i+', #rate'+i).change(function() {
            sum(i)
        });
    });

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
        sum_total();
    });

    $('#submit').click(function(){      
        $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });

});




</script>
<?php include 'footer.php' ?>