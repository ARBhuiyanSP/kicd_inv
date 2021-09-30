<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-search"></i>
        Stock Report Search</div>
    <div class="card-body">
        <form class="form-horizontal" action="" id="stock_search_form">
            <div class="table-responsive">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>                 
                            <td>
                                <div class="form-group">
                                    <label for="todate">Date</label>
                                    <input type="text" class="form-control" id="stock_search" name="stock_search">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-primary" onclick="getSearchTableData('stock_search_form', 'stock_search_list_body', 'stock_search');">Search</button>
        </form>
    </div>
</div>
<script>
    $(function () {
        $("#stock_search").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>


