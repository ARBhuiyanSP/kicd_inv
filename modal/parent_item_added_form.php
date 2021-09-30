<!-- Modal -->
<div class="modal fade" id="parent_item_added_form" role="dialog">
    <form id="parent_item_added_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Category add</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div class="modal_body_centerize">                    
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="category_id">Category Id:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="category_id" placeholder="Enter Category Id" name="category_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="parent_name" placeholder="name" name="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" onclick="processParentItems('parent_item_added_form_value')">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>