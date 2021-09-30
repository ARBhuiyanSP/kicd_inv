<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Receive Search</div>
    <div class="card-body">
        <form class="form-horizontal" action="" id="material_receive_search_form">
            <div class="table-responsive">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>                 
                            <td>
                                <div class="form-group">
                                    <label for="todate">MRR:</label>
                                    <input type="text" class="form-control" id="mrr_no_search" name="mrr_no">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" onclick="getSearchTableData('material_receive_search_form', 'material_receive_list_body', 'mrr_no_search');">Search</button>
        </form>
    </div>
</div>


