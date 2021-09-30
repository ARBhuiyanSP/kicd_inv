<?php include 'header.php' ?>

<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
table th{
	 font-size:14px;
}
table td{
	 font-size:14px;
}
</style>
<div class="container-fluid">
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material Receive List
			<a href="receive_entry.php" style="float:right"><i class="fas fa-plus"></i> Receive Entry<a>
		</div>
        <div class="card-body">
			<div class="table-responsive data-table-wrapper">
				<!-- <table id="example" class="table table-striped table-bordered"> -->
				<table id="example" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Parent Cat</th>
                                            <th>Sub Cat</th>
                                            <th>Level 3</th>
                                            <th>Level 4</th>
                                            <th>Material Code</th>
                                            <th>Material</th>
                                            <th>Part no</th>
                                            <th width="15%">Specification</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="item_category_body">
                                        <?php
                                        $item_details = getTableDataByTableName('inv_material_temp', '', 'material_id_code');
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
													<td>
                                                        <?php
                                                        $dataresult =   getDataRowByTableAndId('inv_material_level3', $item['material_level3_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level3_description : '');
                                                        ?>
                                                    </td>
													<td>
                                                        <?php
                                                        $dataresult =   getDataRowByTableAndId('inv_material_level4', $item['material_level4_id']);
                                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level4_description : '');
                                                        ?>
                                                    </td>
                                                    <td><?php echo $item['material_id_code']; ?></td>
                                                    <td><?php echo $item['material_description']; ?></td>
                                                    <td><?php echo $item['part_no']; ?></td>
                                                    <td><?php echo $item['spec']; ?></td>
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
</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>