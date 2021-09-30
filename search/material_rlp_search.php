<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        RLP Search</div>
    <div class="card-body">
        <form class="form-horizontal" action="" id="material_rlp_search_form">
            <div class="table-responsive">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>                 
                            <td>
                                <div class="form-group">
                                    <label for="todate">RLP No:</label>
                                    <input type="text" class="form-control" id="rlp_no_search" name="rlp_no">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" onclick="getSearchTableData('material_rlp_search_form', 'material_rlp_list_body', 'rlp_no_search');">Search</button>
        </form>
    </div>
</div>


