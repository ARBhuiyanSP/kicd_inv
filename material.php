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
            Material</div>
        <div class="card-body">
            <div class="div-center">
                <div id="item_information">
                    <h3>Level-1</h3>
                    <div class='row'>
                        <div class='col-md-10'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example1" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="parent_category_body">
                                        <?php
                                        $parentCats = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
                                        if (isset($parentCats) && !empty($parentCats)) {
                                            foreach ($parentCats as $pcat) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $pcat['category_id']; ?></td>
                                                    <td><?php echo $pcat['category_description']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openParentEditForm('<?php echo $pcat['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="3">
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
                        <div class='col-md-2'>
                            <button class="btn btn-flat btn-default pull-left" onclick="openModal('parent_item_added_form');"><i class="fa fa-plus"></i> Category</button>
                        </div>
                    </div>
                    <h3>Level-2</h3>
                    <div class='row'>
                        <div class='col-md-10'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example2" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Level-1</th>
                                            <th>Code</th>
                                            <th>Level-2</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sub_category_body">
                                        <?php
                                        $childInfo = getTableDataByTableName('inv_materialcategory', '', 'material_sub_description');
                                        if (isset($childInfo) && !empty($childInfo)) {
                                            foreach ($childInfo as $sub) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $sub['category_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
                                                        ?>
                                                    </td>
                                                    <td><?php echo $sub['material_sub_id']; ?></td>
                                                    <td><?php echo $sub['material_sub_description']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openSubMaterialEditForm('<?php echo $sub['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="4">
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
                        <div class='col-md-2'>
                            <button class="btn btn-flat btn-default pull-left" onclick="openModal('sub_item_added_form');"><i class="fa fa-plus"></i> Level-2</button>
                        </div>
                    </div>
                    <h3>Level-3</h3>
                    <div class='row'>
                        <div class='col-md-10'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example3" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Level-1</th>
                                            <th>Level-2</th>
                                            <th>Code</th>
                                            <th>Level-3</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="level3_category_body">
                                        <?php
                                        $childInfo = getTableDataByTableName('inv_material_level3', '', 'material_level3_description');
                                        if (isset($childInfo) && !empty($childInfo)) {
                                            foreach ($childInfo as $sub) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $sub['category_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategory', $sub['category_sub_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
                                                        ?>
                                                    </td>
                                                    <td><?php echo $sub['material_level3_code']; ?></td>
                                                    <td><?php echo $sub['material_level3_description']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openSubMaterialEditForm('<?php echo $sub['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="5">
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
                        <div class='col-md-2'>
                            <button class="btn btn-flat btn-default pull-left" onclick="openModal('level3_added_form');"><i class="fa fa-plus"></i> Level-3</button>
                        </div>
                    </div>
                    <h3>Level-4</h3>
                    <div class='row'>
                        <div class='col-md-10'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example4" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Level-1</th>
                                            <th>Level-2</th>
                                            <th>Level-3</th>
                                            <th>Code</th>
                                            <th>Level-4</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="level4_category_body">
                                        <?php
                                        $childInfo = getTableDataByTableName('inv_material_level4', '', 'material_level4_description');
                                        if (isset($childInfo) && !empty($childInfo)) {
                                            foreach ($childInfo as $sub) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $sub['category_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_materialcategory', $sub['category_sub_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                        $dataresult =   getDataRowByTableAndId('inv_material_level3', $sub['level3_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level3_description : '');
                                                        ?>
                                                    </td>
                                                    <td><?php echo $sub['material_level4_code']; ?></td>
                                                    <td><?php echo $sub['material_level4_description']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openSubMaterialEditForm('<?php echo $sub['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{ ?>
                                              <tr>
                                                  <td colspan="6">
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
                        <div class='col-md-2'>
                            <button class="btn btn-flat btn-default pull-left" onclick="openModal('level4_added_form');"><i class="fa fa-plus"></i> Level-4</button>
                        </div>
                    </div>
                    <h3>Material</h3>
                    <div class="row">
                        <div class='col-md-10'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Equipment</th>
                                            <th>Equipt.Brand</th>
                                            <th>Material Code</th>
                                            <th>Material</th>
                                            <th>Part no</th>
                                            <th>Specification</th>
                                            <th>Min Stock</th>
                                            <th>Unit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="item_category_body">
                                        <?php
                                        $item_details = getTableDataByTableName('inv_material', '', 'material_description');
                                        if (isset($item_details) && !empty($item_details)) {
                                            foreach ($item_details as $item) {
                                                ?>
                                                <tr>
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
                                                    <td><?php echo $item['spec']; ?></td>
                                                    <td><?php echo $item['material_min_stock']; ?></td>
                                                    <td><?php echo getDataRowByTableAndId('inv_item_unit', $item['qty_unit'])->unit_name; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm" onclick="openMaterialEditForm('<?php echo $item['id']; ?>');">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
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
                        <div class='col-md-2'>
                            <button class="btn btn-flat btn-default pull-left" onclick="openModal('item_added_form');"><i class="fa fa-plus"></i> Material</button>
                        </div>
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