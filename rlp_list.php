<?php include 'header.php' ?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="rlp_entry.php">Material Requisiton [RLP]</a>
        </li>
        <li class="breadcrumb-item active">List</li>
    </ol>
    <!-- receive search start here -->
    <?php include 'search/material_rlp_search.php'; ?>
    <!-- end receive search -->
    
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            RLP List
        </div>
        <div class="card-body" id="material_rlp_list_body">
            <!--here your code will go-->
            <div class="alert alert-success">
                Search result will be shown here..
            </div>
			
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>