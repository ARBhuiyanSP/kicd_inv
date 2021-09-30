<?php include 'header.php'; ?>
<!-- Left Sidebar End -->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<link href="css/form-entry.css" rel="stylesheet">-->
<!-- Left Sidebar End -->



<div class="container-fluid">
    <!-- Breadcrumbs-->
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Daily Activities Entry
            <a href="daily-activities.php" style=""> <i class="fas fa-list"></i> View List<a>
		</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="receive_entry_form" enctype="multipart/form-data" onsubmit="showFormIsProcessing('receive_entry_form');">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" autocomplete="off" name="date" id="mrr_date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Equipment</label>
								<select class="form-control material_select_2" name="equipment" id="equipment" required >
									<option value="">Select</option>
									<?php
									$projectsData = getTableDataByTableName('equipments', '', 'equipment_no');
									if (isset($projectsData) && !empty($projectsData)) {
										foreach ($projectsData as $data) {
											?>
											<option value="<?php echo $data['equipment_no']; ?>"><?php echo $data['equipment_no']; ?></option>
											<?php
										}
									}
									?>
								</select>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Work Type</label>
								<select class="form-control material_select_2" name="work_type" id="work_type" required >
									<option>Select</option>
									<option value="PM">PM</option>
									<option value="Completed">Completed</option>
								</select>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label>Work Status</label>
								<select class="form-control material_select_2" name="work_type" id="work_type" required >
									<option>Select</option>
									<option value="PM">PM</option>
									<option value="Completed">Completed</option>
								</select>
                            </div>
                        </div>
						<div class="col-xs-2">
                            <div class="form-group">
                                <label>Job Code</label>
                                <input type="text" autocomplete="off" name="job_code" id="job_code" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-2">
                            <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" autocomplete="off" name="job_code" id="job_code" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" autocomplete="off" name="job_code" id="job_code" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div class="form-group">
                                <label>Remedial Action</label>
                                <input type="text" autocomplete="off" name="job_code" id="job_code" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div class="form-group">
                                <label>New Problem Generated</label>
                                <input type="text" autocomplete="off" name="job_code" id="job_code" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Equipment Status</label>
                                <select class="form-control material_select_2" name="work_type" id="work_type" required >
									<option>Select</option>
									<option value="Operational">Operational</option>
									<option value="Non-Operational">Non-Operational</option>
								</select>
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Spare Parts Used</label>
                                <input type="text" autocomplete="off" name="job_code" id="job_code" class="form-control">
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
            $('#dynamic_field').append('<tr id="row' + i + '"><td><select class="form-control material_select_2" id="material_name' + i + '" name="material_name[]' + i + '" required onchange="getAppendItemCodeByParam(' + i + ",'inv_material'," + "'material_id_code'," + "'material_id'," + "'qty_unit'" + ')"><option value="">Select</option><?php
                                                $projectsData = get_product_with_category();
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?> - <?php echo $data['part_no']; ?> - <?php echo $data['spec']; ?></option><?php }
                                                }
                                                ?></select></td><td><input type="text" name="material_id[]" id="material_id' + i + '" class="form-control" required readonly></td><td><select class="form-control select2" id="unit' + i + '" name="unit[]' + i + '" required readonly onchange="getAppendItemCodeByParam(' + i + ",'inv_material'" + ",'material_id_code'" + ",'material_id''" + ",'qty_unit'" + ')"><option value="">Select</option><?php
                                                $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><input type="text" name="part_no[]" id="part_no' + i + '" class="form-control" readonly></td><td><input type="text" name="quantity[]" id="quantity' + i + '" onchange="sum(0)" class="form-control" required></td><td><input type="text" name="unit_price[]" id="unit_price' + i + '" onchange="sum(0)" class="form-control" required></td><td><input type="text" name="totalamount[]" id="sum' + i + '" class="form-control"></td><td><button type="button" name="remove" id="' + i + '" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
												$(".material_select_2").select2();
												$('#quantity' + i + ', #unit_price' + i).change(function () {
                sum(i)
            });
        });

        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            sum_total();
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
        $("#Purchase_date").datepicker({
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
<?php include 'footer.php' ?>