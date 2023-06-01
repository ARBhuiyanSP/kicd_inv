<?php include 'header.php' ?>
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
.ui-widget-content {
	max-height: 500px; 

}
</style>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material Setup
                <button class="btn btn-flat btn-info " style="text-align: right;" onclick="openModal('item_added_form');"><i class="fa fa-plus"></i> Material</button>     
			</div>
        <div class="card-body">
            <div class="div-center">
                    <div class="row">
                        
                        <div class='col-md-12'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Action</th>
                                            <th>Equipment</th>
                                            <th>Equipt.Brand</th>
                                            <th>Material Code</th>
                                            <th>Material</th>
                                            <th>Part no</th>
                                            <th>Old Part No</th>
                                            <th>Specification</th>
                                            <th>Location</th>
                                            <th>Unit</th>
                                        </tr>
                                    </thead>
                                    <tbody id="item_category_body">
                                        <?php
                                        $item_details = getTableDataByTableName('inv_material', '', 'id');
                                        if (isset($item_details) && !empty($item_details)) {
                                            foreach ($item_details as $item) {
                                                //echo "<pre>";
                                                //print_r($item);
                                                //echo "</pre>";
                                                ?>
                                                <tr>
                                                 
                                                    <td>
                                                        <?php echo $item['id']; ?>
                                                    </td>
                                                        <td>
                                                        <button title="Item Edit" type="button" class="btn btn-sm btn-default" onclick="openMaterialEditForm('<?php echo $item['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>

                                                        <button title="Add New Part No" type="button" class="btn btn-sm btn-info" onclick="addNewPartNumberModal('<?php echo $item['id']; ?>');">
                                                           <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $item['material_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategory', $item['material_sub_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
                                                        ?>
                                                    </td>
                                                    <td><?php echo $item['material_id_code']; ?></td>
                                                    <td><?php echo $item['material_description']; ?></td>
                                                    <td><?php echo $item['part_no']; ?></td>
                                                    <td><?php echo $item["old_part_no"];?></td>
                                                    <td><?php echo $item['spec']; ?></td>
                                                    <td><?php echo $item['location']; ?></td>
                                                    <td><?php echo getDataRowByTableAndId('inv_item_unit', $item['qty_unit'])->unit_name; ?></td>
                                                   
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="7">
                                                        <div class="alert alert-info" role="alert">
                                                            Sorry, no data found!
                                                        </div>
                                                    </td>
                                                </tr>  
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!--table-responsive-->
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

$(document).ready(function() {
    $('#example1').DataTable();
} );
$(document).ready(function() {
    $('#example2').DataTable();
} );
$(document).ready(function() {
    $('#example3').DataTable();
} );
$(document).ready(function() {
    $('#example4').DataTable();
} );
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>