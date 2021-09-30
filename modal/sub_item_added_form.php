<!-- Modal -->
<div class="modal fade" id="sub_item_added_form" role="dialog">
    <form id="sub_item_added_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Sub category add</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div class="modal_body_centerize">
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="parent_id">Parent Category:</label>
                            <div class="col-sm-7">
                                <select class="form-control" id="parent_item_id" name="parent_id" onchange="getSubCodeByParenId(this.value);">
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
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="sub_code">Sub Code:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="sub_code" placeholder="Enter sub code" name="sub_code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="sub_name" placeholder="name" name="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" onclick="processSubItems('sub_item_added_form_value')">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>