<!-- Modal -->
<div class="modal fade" id="item_edit_form" role="dialog">
    <form id="item_updated_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Material update</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div id="material_edit_data_section"></div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                    <button type="button" class="btn btn-default" onclick="processItems('item_updated_form_value')">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="partnoAddedModal" role="dialog">
    <form id="part_no_updated_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Material Part No Update</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div id="material_part_no_edit_data_section"></div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                    <button type="button" class="btn btn-default" onclick="partNoUpdate('part_no_updated_form_value')">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>