<!-- Modal -->

<?php
$category_resize_data = category_tree();
 ?>

<div class="modal fade" id="item_added_form" role="dialog">
    <form id="item_added_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Material add</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div class="modal_body_centerize">                    
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="parent_code">Parent Category:</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="level_1_id_l5" name="parent_item_id" onchange="getSubCodeByParenId(this.value,'item_code');">
                                    <option value="0">Parent Category</option>
                                    <?php
                                    $html = '';
                                    function generateOptions($category_resize_data, $indent = 0) {
                                        foreach ($category_resize_data as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . str_repeat('-', $indent * 2) . $value['id'].'-' .$value['category_description']. '</option>';
                                            if (is_array($value['children']) && !empty($value['children'])) {
                                                generateOptions($value['children'], $indent + 1);
                                            }
                                        }
                                    }
                                    
                                    generateOptions($category_resize_data);
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="parent_code">Material Code:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="item_code" placeholder="Enter item code" name="item_code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="item_name" placeholder="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Part No:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="part_no" placeholder="part_no" name="part_no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Specification:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="spec" placeholder="Specification" name="spec">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Location:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="location" placeholder="location" name="location">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="parent_code">Unit:</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="qty_unit" name="qty_unit" required>
                                    <option value="">Select</option>
                                    <?php
                                    $parentCats = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                                    if (isset($parentCats) && !empty($parentCats)) {
                                        foreach ($parentCats as $pcat) {
                                            ?>
                                            <option value="<?php echo $pcat['id'] ?>"><?php echo $pcat['unit_name'] ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Material min stock:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="material_min_stock" placeholder="Material min stock" name="material_min_stock" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" onclick="processItems('item_added_form_value')">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>