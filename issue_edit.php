<?php
include 'header.php';
if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $edit_id            = $_GET['edit_id'];
    $data               = getissueDataDetailsById($edit_id);
    $issueData          = $data['receiveData'];
    $issueDetailsData   = $data['receiveDetailsData'];
}
?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Issue Edit</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Issue Edit Form</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_issue" id="add_issue">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label>Issue Date</label>
                                <input type="text" autocomplete="off" name="issue_date" id="issue_date" class="form-control datepicker" value="<?php echo date('Y-m-d', strtotime($issueData->issue_date)); ?>">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label>Issue No</label>
                                <input type="text" name="issue_id" id="issue_id" class="form-control" readonly="readonly" value="<?php echo $issueData->issue_id; ?>">
                                <input type="hidden" name="issue_no" id="issue_no" value="<?php echo $issueData->issue_id; ?>">
                            </div>
                        </div>
                        <div class="col-xs-3">
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
											<option value="<?php echo $data['id']; ?>" <?php if (isset($issueData->id) && $issueData->id == $data['id']) {
                                        echo 'selected';
                                    } ?>><?php echo $data['name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-3">
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
                                <th width="25%">Material Name<span class="reqfield"> ***required</span></th>
                                <th width="10%">Material ID</th>
                                <th width="10%">Unit</th>
                                <th width="10%">Brand</th>
                                <th width="10%">In Stock</th>
                                <th width="10%">Qty<span class="reqfield"> ***required</span></th>
                                <th width="15%">Package</th>
                                <th width="15%">Building</th>
                                <th></th>
                                </thead>
                                <tbody>
                                    <?php
                                    $productSerial = 0;
                                    if (isset($issueDetailsData) && !empty($issueDetailsData)) {
                                        foreach ($issueDetailsData as $key => $editDatas) {
                                            $productSerial++;
                                            ?>
                                            <tr id="row<?php echo $key; ?>">
                                                <td>
                                                    <select class="form-control select2" id="material_name<?php echo $key; ?>" name="material_name[]" required onchange="getItemCodeByParam('<?php echo $key; ?>', 'inv_material', 'material_id_code', 'material_id0', 'qty_unit');">
                                                        <option value="">Select</option>
                                                        <?php
                                                        $projectsData = get_product_with_category();
                                                        if (isset($projectsData) && !empty($projectsData)) {
                                                            foreach ($projectsData as $data) {
                                                                ?>
                                                                <option value="<?php echo $data['id']; ?>"<?php
                                                                if (isset($editDatas->material_id) && $editDatas->material_id == $data['item_code']) {
                                                                    echo 'selected';
                                                                }
                                                                ?>><?php echo $data['material_name']; ?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                    </select>
                                                </td>
                                                <td><input type="text" name="material_id[]" id="material_id<?php echo $key; ?>" class="form-control" value="<?php echo (isset($editDatas->material_id) && !empty($editDatas->material_id) ? $editDatas->material_id : ''); ?>"></td>
                                                <td>
                                                    <select class="form-control" id="unit<?php echo $key; ?>" name="unit[]" required>
                                                        <option value="">Select</option>
                                                        <?php
                                                        $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                                        if (isset($projectsData) && !empty($projectsData)) {
                                                            foreach ($projectsData as $data) {
                                                                ?>
                                                                <option value="<?php echo $data['id']; ?>"<?php
                                                                        if (isset($editDatas->unit) && $editDatas->unit == $data['id']) {
                                                                            echo 'selected';
                                                                        }
                                                                        ?>><?php echo $data['unit_name']; ?></option>
                <?php
            }
        }
        ?>
                                                    </select>
                                                </td>
												<td>
													<select class="form-control" id="brand<?php echo $key; ?>" name="brand[]" readonly>
														<option value="">Select Brand</option>
														<?php
														$brandData = getmaterialbrand();
														if (isset($brandData) && !empty($brandData)) {
															foreach ($brandData as $data) {
																?>
																<option value="<?php echo $data['brand_name']; ?>"<?php
                                                                        if (isset($editDatas->brand_name) && $editDatas->brand_name == $data['brand_name']) {
                                                                            echo 'selected';
                                                                        }
                                                                        ?>><?php echo $data['brand_name']; ?></option>
																<?php
															}
														}
														?>
													</select>
												</td>
												<td><input type="text" name="material_total_stock[]" id="material_total_stock<?php echo $key; ?>" class="form-control" readonly ></td>
                                            
											
											
                                                <td><input type="text" name="quantity[]" id="quantity<?php echo $key; ?>" onchange="sum(<?php echo $key; ?>)" class="form-control" value="<?php echo (isset($editDatas->issue_qty) && !empty($editDatas->issue_qty) ? $editDatas->issue_qty : ''); ?>"></td>
                                          
										  
										  
										  
											   <td>
													<select class="form-control" id="package_id<?php echo $key; ?>" name="package_id[]" required>
														<option value="">Select</option>
														<?php
														$projectsData = getTableDataByTableName('packages');
														
														if (isset($projectsData) && !empty($projectsData)) {
															foreach ($projectsData as $data) {
																?>
																<option value="<?php echo $data['id']; ?>"<?php
                                                                        if (isset($editDatas->package_id) && $editDatas->package_id == $data['id']) {
                                                                            echo 'selected';
                                                                        }
                                                                        ?>><?php echo $data['name']; ?></option>
																<?php
															}
														}
														?>
													</select>
												</td>
												<td>
													<select class="form-control" id="building_id<?php echo $key; ?>" name="building_id[]" required>
														<option value="">Select</option>
														<?php
														$projectsData = getTableDataByTableName('buildings');
														
														if (isset($projectsData) && !empty($projectsData)) {
															foreach ($projectsData as $data) {
																?>
																<option value="<?php echo $data['building_id']; ?>"<?php
                                                                        if (isset($editDatas->building_id) && $editDatas->building_id == $data['building_id']) {
                                                                            echo 'selected';
                                                                        }
                                                                        ?>><?php echo $data['building_id']; ?></option>
																<?php
															}
														}
														?>
													</select>
												</td>
												
												
												
                                                <?php if ($key == 0) { ?>
                                                    <td><button type="button" name="add" id="add" class="btn" style="background-color:#2e3192;color:#ffffff;">+</button></td>
                                            <?php } else { ?>
                                                    <td><button type="button" name="remove" id="<?php echo $key; ?>" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td>
                                            <?php } ?>
                                            </tr>
        <?php
    }//End of foreach
} else {
    ?>
                                        <tr>
                                            <td>
                                                <select class="form-control select2" id="material_name" name="material_name[]" required onchange="getItemCodeByParam(this.value, 'inv_material', 'material_id_code', 'material_id0', 'qty_unit');">
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
                                            <select class="form-control" id="unit0" name="unit[]" required readonly>
                                                <option value="">Select Unit</option>
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
                                        <td>
                                            <select class="form-control" id="brand0" name="brand[]" readonly>
                                                <option value="">Select Brand</option>
                                                <?php
                                                $brandData = getmaterialbrand();
                                                if (isset($brandData) && !empty($brandData)) {
                                                    foreach ($brandData as $data) {
                                                        ?>
                                                        <option value="<?php echo $data['brand_name']; ?>"><?php echo $data['brand_name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td><input type="text" name="material_total_stock[]" id="material_total_stock0" class="form-control" readonly ></td>
                                        <td><input type="text" name="quantity[]" id="quantity0" onchange="sum(0)" onkeyup="check_stock_quantity_validation(0)" class="form-control" required></td>
                                        <td>
											<select class="form-control" id="package_id0" name="package_id[]" required>
												<option value="">Select</option>
												<?php
												$projectsData = getTableDataByTableName('packages');
												
												if (isset($projectsData) && !empty($projectsData)) {
													foreach ($projectsData as $data) {
														?>
														<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
														<?php
													}
												}
												?>
											</select>
										</td>
                                        <td>
											<select class="form-control" id="building_id0" name="building_id[]" required>
												<option value="">Select</option>
												<?php
												$projectsData = getTableDataByTableName('buildings');
												
												if (isset($projectsData) && !empty($projectsData)) {
													foreach ($projectsData as $data) {
														?>
														<option value="<?php echo $data['building_id']; ?>"><?php echo $data['building_id']; ?></option>
														<?php
													}
												}
												?>
											</select>
										</td>
                                            <td><button type="button" name="add" id="add" class="btn" style="background-color:#2e3192;color:#ffffff;">+</button></td>
                                        </tr>
<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
					<div class="row" style="">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Received By</label><span class="reqfield"> ***required</span>
								<select class="form-control select2" id="received_by" name="received_by" required>
                                    <?php
                                    $projectsData = getTableDataByTableName('inv_employee');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
											<option value="<?php echo $data['name']; ?>" <?php if ($issueData->received_by == $data['name']) {
                                        echo 'selected';
                                    } ?>><?php echo $data['name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Receiver Phone</label><span class="reqfield"> ***required</span>
                                <input type="text" autocomplete="off" name="receiver_phone" value="<?php echo $issueData->receiver_phone; ?>" id="receiver_phone" class="form-control" required>
                            </div>
                        </div>
                    </div>
					<div class="row" style="">
                        <div class="col-xs-3">
                            <div class="form-group">
								<input type="hidden" name="sn_old_image" value="<?php if (isset($issueData->	issue_image)) {
    echo $issueData->	issue_image;
} ?>"  /> 
                                <input type="file" accept="image/*" name="sn_prt_image" onchange="loadFile(event)">
								<p style="color:red;">*** Select an image file like .jpg or .png</p>
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
								<img id="output" <?php if ($issueData->	issue_image){ ?> src="images/<?php echo $issueData->	issue_image; ?>" <?php } ?> height="150px" width="150px"/>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label>Remarks</label>
                                <textarea id="remarks" name="remarks" class="form-control"><?php
if (isset($issueData->remarks)) {
    echo $issueData->remarks;
}
?></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <input type="hidden" name="edit_id" value="<?php echo $issueData->id; ?>">
                                    <input type="submit" name="issue_update_submit" id="submit" class="btn btn-block" style="background-color:#f26522;color:#ffffff;" value="Update" />
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
    var i = <?php echo $productSerial; ?>;
    $(document).ready(function () {
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><select class="form-control select2" id="material_name' + i + '" name="material_name[]' + i + '" required onchange="getAppendItemCodeByParam(' + i + ",'inv_material'," + "'material_id_code'," + "'material_id'," + "'qty_unit'" + ')"><option value="">Select</option><?php
                                                $projectsData = get_product_with_category();
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['material_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><input type="text" name="material_id[]" id="material_id' + i + '" class="form-control" required readonly></td><td><select class="form-control select2" id="unit' + i + '" name="unit[]' + i + '" required onchange="getAppendItemCodeByParam(' + i + ",'inv_material'" + ",'material_id_code'" + ",'material_id''" + ",'qty_unit'" + ')"><option value="">Select</option><?php
                                                $projectsData = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['id']; ?>"><?php echo $data['unit_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><select class="form-control select2" id="brand' + i + '" name="brand[]' + i + '"><option value="">Select</option><?php
                                                $projectsData = getmaterialbrand();
                                                if (isset($projectsData) && !empty($projectsData)) {
                                                    foreach ($projectsData as $data) {
                                                        ?><option value="<?php echo $data['brand_name']; ?>"><?php echo $data['brand_name']; ?></option><?php }
                                                }
                                                ?></select></td><td><input type="text" name="material_total_stock[]" id="material_total_stock' + i + '" class="form-control" readonly></td><td><input type="text" name="quantity[]" id="quantity' + i + '" onchange="sum(0)"  onkeyup="check_stock_quantity_validation('+ i + ')" class="form-control" required></td><td><select class="form-control" id="package_id' + i + '" name="package_id[]" required><option value="">Select</option><?php
												$projectsData = getTableDataByTableName('packages');
												if (isset($projectsData) && !empty($projectsData)) {
													foreach ($projectsData as $data) {
														?><option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option><?php }
												}
												?></select></td><td><select class="form-control" id="building_id' + i + '" name="building_id[]" required><option value="">Select</option><?php
												$projectsData = getTableDataByTableName('buildings');
												if (isset($projectsData) && !empty($projectsData)) {
													foreach ($projectsData as $data) {?><option value="<?php echo $data['building_id']; ?>"><?php echo $data['building_id']; ?></option><?php }
												}
												?></select></td><td><button type="button" name="remove" id="' + i + '" class="btn btn_remove" style="background-color:#f26522;color:#ffffff;">X</button></td></tr>');
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

   
</script>
<script>
    $(function () {
        $("#issue_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<?php include 'footer.php' ?>