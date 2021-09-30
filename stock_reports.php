<?php include 'header.php' ?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Stock management Filters</a>
        </li>
        <li class="breadcrumb-item active">List</li>
    </ol>
    <!-- receive search start here -->
    <?php include 'search/stock_report_search.php'; ?>
    <!-- end receive search -->
    
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Stock management Reports
        </div>
        <div class="card-body" id="stock_search_list_body">
            <!--here your code will go-->
            <div class="alert alert-success">
                Search result will be shown here..
            </div>
			
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>