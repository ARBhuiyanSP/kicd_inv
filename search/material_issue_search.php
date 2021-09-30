<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Issue Search</div>
    <div class="card-body">
        <form class="form-horizontal" action="" id="material_issue_search_form">
            <div class="table-responsive">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>                 
                            <td>
                                <div class="form-group">
                                    <label for="todate">Issue Id:</label>
                                    <input type="text" class="form-control" id="issue_id" name="issue_id">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" onclick="getSearchTableData('material_issue_search_form', 'material_issue_list_body', 'issue_id');">Search</button>
        </form>
    </div>
</div>


