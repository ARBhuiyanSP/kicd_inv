<?php include 'header.php' ?>
<!-- Left Sidebar End -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="css/form-entry.css" rel="stylesheet">
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
                <form action="add_purchase.php" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
						<div class="col-xs-2">
							<div class="form-group">
								<label>Purchase Date</label>
								<input type="text" autocomplete="off" name="purchase_date" id="mrr_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
							</div>
						</div>
						<div class="col-xs-3">
							<div class="form-group">
								<label>Purchase No</label>
								<input type="text" name="purchase_no" id="purchase_no" class="form-control" readonly="readonly" value="<?php echo getDefaultCategoryCode('inv_purchase', 'purchase_no', '03d', '001', 'PO-') ?>">
                                <input type="hidden" name="purchase_no" id="purchase_no" value="<?php echo getDefaultCategoryCode('inv_purchase', 'purchase_no', '03d', '001', 'PO-') ?>">
							</div>
						</div>
						
						
						
						
						
						<div class="col-xs-2">
							<div class="form-group">
								<label for="id">Select Supplier Name</label>
								<select class="form-control" id="supplier_name" name="supplier_name" required onclick="getSupplierIdBySupplierName(this.value);">
									<option value="">Select</option>
									<?php
									$projectsData = getTableDataByTableName('suppliers');

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
						<div class="col-xs-2">
							<div class="form-group">
								<label for="id">Supplier ID</label>
								<input type="text" name="supplier_id" id="supplier_id" class="form-control">
							</div>
						</div>
						<div class="col-xs-2">
							<div class="form-group">
								<label for="id">Select Purchase Type</label>
								<select class="form-control" id="supplier_name" name="supplier_name">
									<option value="">Select</option>
									<option value="Local">Local</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row" id="div1"  style="">
						<div class="table-responsive">
							<table class="table table-bordered" id="dynamic_field">
							<thead>
								<th>Material Name</th>
								<th>Material ID</th>
								<th>Unit</th>
								<th>Part No</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Total Amount</th>
								<th></th>
							</thead>
							<tbody>
								<tr>
									<td>
                                            <select class="form-control select2" id="material_name" name="material_name[]" required onchange="getItemCodeByParam(this.value, 'inv_material', 'material_id_code', 'material_id0','qty_unit');">
                                                <option value="">Select</option>
                                                <?php
                                                $projectsData = get_product_with_category();
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?>
                                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td><input type="text" name="material_id[]" id="material_id0" class="form-control"></td>
                                        <td>
                                            <select class="form-control" id="unit0" name="unit[]" required>
                                                <option value="">Select</option>
                                                <?php
                                                $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?>
                                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </td>
									<td><input type="text" name="part_no[]" id="part_no" class="form-control"></td>
									<td><input type="text" name="quantity[]" id="quantity0" onchange="sum(0)" class="form-control"></td>
									<td><input type="text" name="unit_price[]" id="unit_price0" onchange="sum(0)" class="form-control"></td>
									<td><input type="text" name="totalamount[]" id="sum0" class="form-control"></td>
									<td><button type="button" name="add" id="add" class="btn" style="background-color:#2e3192;color:#ffffff;">+</button></td>
								</tr>
							</tbody>
							</table>
						</div>
                    </div>
					<div class="row" style="">
						<div class="col-xs-3">
							<div class="form-group">
								<label>Warehouse</label>
								<select class="form-control" id="warehouse_id" name="warehouse_id" required>
									<option value="">Select</option>
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
						
						<div class="col-xs-3">
							<div class="form-group">
								<label>Sub Total Amount</label>
								<input type="text" class="form-control" maxlength="30" name="sub_total_amount" id="allsum" readonly />
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>Remarks</label>
								<textarea id="remarks" name="remarks" class="form-control"></textarea>
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
        $('#dynamic_field').append('<tr id="row'+i+'"><td><select class="form-control select2" id="material_name'+i+'" name="material_name[]' + i + '" required onchange="getAppendItemCodeByParam('+i+",'inv_material',"+"'material_id_code',"+"'material_id',"+"'qty_unit'"+')"><option value="">Select</option><?php $projectsData = get_product_with_category();
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) { ?><option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?></option><?php }
                                    } ?></select></td><td><input type="text" name="material_id[]" id="material_id' + i + '" class="form-control"></td><td><select class="form-control select2" id="unit'+i+'" name="unit[]' + i + '" required onchange="getAppendItemCodeByParam('+i+",'inv_material'"+",'material_id_code'"+",'material_id''"+",'qty_unit'"+')"><option value="">Select</option><?php $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) { ?><option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option><?php }
                                    } ?></select></td><td><input type="text" name="part_no[]" id="part_no'+i+'" class="form-control"></td><td><input type="text" name="quantity[]" id="quantity'+i+'" onchange="sum(0)" class="form-control"></td><td><input type="text" name="unit_price[]" id="unit_price'+i+'" onchange="sum(0)" class="form-control"></td><td><input type="text" name="totalamount[]" id="sum'+i+'" class="form-control"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
        $('#quantity'+i+', #unit_price'+i).change(function() {
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

$(document).ready(function() {
    //this calculates values automatically 
    sum(0);
});

function sum(i) {
    var quantity1 = document.getElementById('quantity'+i).value;
    var unit_price1 = document.getElementById('unit_price'+i).value;
    var result = parseFloat(quantity1) * parseFloat(unit_price1);
    if (!isNaN(result)) {
        document.getElementById('sum'+i).value = result;
    }
    sum_total();
}
function sum_total() {
    var newTot = 0;
    for (var a=0; a<=i ; a++) {
        aVal = $('#sum'+a);
        if (aVal && aVal.length) { newTot += aVal[0].value ? parseFloat(aVal[0].value) : 0; }
    }
    document.getElementById('allsum').value = newTot.toFixed(2);
}




</script>
<script>
				$(function() {
				$("#mrr_date").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
			<script>
				$(function() {
				$("#challan_date").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
			<script>
				$(function() {
				$("#requisition_date").datepicker({
						inline: true,
						dateFormat:"yy-mm-dd",
						yearRange:"-50:+10",
						changeYear: true,
						changeMonth: true
				});
			});
			</script>
<?php include 'footer.php' ?>