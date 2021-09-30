<?php include 'header.php'; ?>
<!-- Left Sidebar End -->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<link href="css/form-entry.css" rel="stylesheet">-->
<!-- Left Sidebar End -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#add_name").submit(function (e) {
            $("#submit").attr("disabled", true);
            return true;
        });
    });
</script>


<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Receive Entry</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Receive Entry
            <a href="receive-list.php" style="float:right"><i class="fas fa-list"></i> Receive List<a>
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name" enctype="multipart/form-data" onsubmit="return Validate(this);">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>MRR Date</label>
                                <input type="text" autocomplete="off" name="mrr_date" id="mrr_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>MRR No</label>
								<?php if($_SESSION['logged']['user_type'] == 'whm')
									{
										$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
										$sql	=	"SELECT * FROM inv_warehosueinfo WHERE `id`='$warehouse_id'";
										$result = mysqli_query($conn, $sql);
										$row=mysqli_fetch_array($result);
										$short_name = $row['short_name'];
										$mrrcode= 'MRR-'.$short_name;
									} else{
										$mrrcode= 'MRR-CW';
									}
								?>
                                <input type="text" name="mrr_no" id="mrr_no" class="form-control" readonly="readonly" value="<?php echo getDefaultCategoryCodeByWarehouse('inv_receive', 'mrr_no', '03d', '001', $mrrcode) ?>">
                                <input type="hidden" name="receive_no" id="receive_no" value="<?php echo getDefaultCategoryCodeByWarehouse('inv_receive', 'mrr_no', '03d', '001', $mrrcode) ?>">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Purchase ID</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Purchase Date</label>
                                <input type="text" autocomplete="off" name="Purchase_date" id="Purchase_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">	
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="id">Supplier Challan No</label>
                                <input type="text" name="challan_no" id="challan_no" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="id">Challan Date</label>
                                <input type="text" autocomplete="off" name="challan_date" id="challan_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="id">Requisition No.</label>
                                <input type="text" name="requisition_no" id="requisition_no" class="form-control">
								<!-- <input type="text" id="requisition_no" name="requisition_no" class="form-control" onkeypress="return event.charCode > 47 && event.charCode < 58;" pattern="[0-9]{5}" required></input> -->
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="id">Requisition Date</label>
                                <input type="text" autocomplete="off" name="requisition_date" id="requisition_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="id">Supplier</label><span class="reqfield"> ***required</span>
                                <select class="form-control" id="supplier_name" name="supplier_name" required onchange="getItemCodeByParam(this.value, 'suppliers', 'code', 'supplier_id');">
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
                                <input type="text" name="supplier_id" id="supplier_id" class="form-control" required>
                            </div>
                        </div>
						<div class="col-xs-2">
                            <div class="form-group">
                                <label>Project</label>
                                <select class="form-control" id="project_id" name="project_id" readonly >
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
						<div class="col-xs-2">
                            <div class="form-group">
                                <label>Warehouse</label>
								
								<?php  
									$warehouse_id = $_SESSION['logged']['warehouse_id'];								
									$dataresult =   getDataRowByTableAndId('inv_warehosueinfo', $warehouse_id);
								?>
								<input type="text" class="form-control" readonly="readonly" value="<?php echo (isset($dataresult) && !empty($dataresult) ? $dataresult->name : ''); ?>">
								
								<input type="hidden" name="warehouse_id" id="warehouse_id" class="form-control" readonly="readonly" value="<?php echo $_SESSION['logged']['warehouse_id']; ?>">
								
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div1"  style="">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dynamic_field">
                                <thead>
                                <th>Material Name<span class="reqfield"> ***required</span></th>
                                <th>Material ID</th>
                                <th width="10%">Unit</th>
                                <th>Brand Name</th>
                                <th>Qty<span class="reqfield"> ***required</span></th>
                                <th>Unit Price<span class="reqfield"> ***required</span></th>
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
                                        <td><input type="text" name="material_id[]" id="material_id0" class="form-control" readonly ></td>
                                        <td>
                                            <select class="form-control" id="unit0" name="unit[]" required readonly >
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
                                        <td><input type="text" name="quantity[]" id="quantity0" onchange="sum(0)" class="form-control" required></td>
                                        <td><input type="text" name="unit_price[]" id="unit_price0" onchange="sum(0)" class="form-control" required></td>
                                        <td><input type="text" name="totalamount[]" id="sum0" class="form-control"></td>
                                        <td><button type="button" name="add" id="add" class="btn" style="background-color:#2e3192;color:#ffffff;">+</button></td>
                                    </tr>
                                </tbody>
                            </table>
							<table class="table table-bordered">
								<tr>
									<td width="" style="">VAT Challan No<span class="reqfield"> ***required</span></td>
									<td><input type="text" class="form-control" maxlength="30" name="vat_challan_no" required /></td>
									<td width="" style="text-align:right;">Total Amount</td>
									<td><input type="text" class="form-control" maxlength="30" name="sub_total_amount" id="allsum" readonly /></td>
								</tr>
							</table>
                        </div>
                    </div>
					<div class="row" style="">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="file" accept="image/*"  name="file" id="picture">
								<p id="error1" style="display:none; color:#FF0000;">
								Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
								</p>
								<p id="error2" style="display:none; color:#FF0000;">
								Maximum File Size Limit is 500KB.
								</p>
								<script>
								  var loadFile = function(event) {
									var output = document.getElementById('output');
									output.src = URL.createObjectURL(event.target.files[0]);
									output.onload = function() {
									  URL.revokeObjectURL(output.src) // free memory
									}
								  };
								  
								</script>
								
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div style="border:1px solid gray;height:150px;width:150px;">
								<img id="output" height="150px" width="150px"/>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea id="remarks" name="remarks" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                    <input type="submit" name="receive_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />   
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
    var i = 0;
    $(document).ready(function () {
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><select class="form-control select2" id="material_name'+i+'" name="material_name[]' + i + '" required onchange="getAppendItemCodeByParam('+i+",'inv_material',"+"'material_id_code',"+"'material_id',"+"'qty_unit'"+')"><option value="">Select</option><?php $projectsData = get_product_with_category();
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) { ?><option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?></option><?php }
                                    } ?></select></td><td><input type="text" name="material_id[]" id="material_id' + i + '" class="form-control" readonly ></td><td><select class="form-control select2" id="unit'+i+'" name="unit[]' + i + '" required readonly onchange="getAppendItemCodeByParam('+i+",'inv_material'"+",'material_id_code'"+",'material_id''"+",'qty_unit'"+')"><option value="">Select</option><?php $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) { ?><option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option><?php }
                                    } ?></select></td><td><input type="text" name="part_no[]" id="part_no' + i + '" class="form-control"></td><td><input type="text" name="quantity[]" id="quantity' + i + '" onchange="sum(0)" class="form-control" required></td><td><input type="text" name="unit_price[]" id="unit_price' + i + '" onchange="sum(0)" class="form-control" required></td><td><input type="text" name="totalamount[]" id="sum' + i + '" class="form-control"></td><td><button type="button" name="remove" id="' + i + '" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
            $('#quantity' + i + ', #unit_price' + i).change(function () {
                sum(i)
            });
        });

        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            sum_total();
        });

        $('#submit').click(function () {
            $.ajax({
                url: "name.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function (data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });

    });

    $(document).ready(function () {
        //this calculates values automatically 
        sum(0);
    });

    function sum(i) {
        var quantity1 = document.getElementById('quantity' + i).value;
        var unit_price1 = document.getElementById('unit_price' + i).value;
        var result = parseFloat(quantity1) * parseFloat(unit_price1);
        if (!isNaN(result)) {
            document.getElementById('sum' + i).value = result;
        }
        sum_total();
    }
    function sum_total() {
        var newTot = 0;
        for (var a = 0; a <= i; a++) {
            aVal = $('#sum' + a);
            if (aVal && aVal.length) {
                newTot += aVal[0].value ? parseFloat(aVal[0].value) : 0;
            }
        }
        document.getElementById('allsum').value = newTot.toFixed(2);
    }
</script>
<script>
    $(function () {
        $("#mrr_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<script>
    $(function () {
        $("#challan_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<script>
    $(function () {
        $("#requisition_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<script>
$('input[type="submit"]').prop("disabled", false);
var a=0;
//binds to onchange event of your input field
$('#picture').bind('change', function() {
if ($('input:submit').attr('disabled',false)){
 $('input:submit').attr('disabled',true);
 }
var ext = $('#picture').val().split('.').pop().toLowerCase();
if ($.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
 $('#error1').slideDown("slow");
 $('#error2').slideUp("slow");
 a=0;
 }else{
 var picsize = (this.files[0].size);
 if (picsize > 500000){
 $('#error2').slideDown("slow");
 a=0;
 }else{
 a=1;
 $('#error2').slideUp("slow");
 }
 $('#error1').slideUp("slow");
 if (a==1){
 $('input:submit').attr('disabled',false);
 }
}
});	
</script>
<?php include 'footer.php' ?>