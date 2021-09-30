<?php include 'header.php';
include 'includes/opening_stock_process.php'; ?>
<style>
.comment {

display:none;

}
.table th, .table td {
	padding:3px;
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
            Opening Balance Maintenece</div>
        <div class="card-body">
           
		   
                        
						
						
						
						
<div>
    <form name="add_name" action="" method="post" id="opening_entry_form" onsubmit="showFormIsProcessing('opening_entry_form');">
        <div class="col-xs-4" style="background-color:#007BFF;color:#fff;">
			<div class="form-group">
				<label>Opening Stock Entry Date</label>
				<?php 
							$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
							$sqlop			=	"SELECT * FROM inv_materialbalance WHERE `mbtype`='OP' AND `warehouse_id`='$warehouse_id';";
							$resultop		=	mysqli_query($conn, $sqlop);
							$rowop			=	mysqli_fetch_array($resultop);
							$op_date 		= 	$rowop['mb_date'];
							if($op_date)
							{
								$op_date 		= 	$rowop['mb_date'];
								$validation		=	'readonly';
								$op_id			=	'';
							}else{
								$op_date 		= 	date('Y-m-d');
								$validation		=	'';
								$op_id			=	'op_date';
							}
				?>
				<input type="text" autocomplete="off" name="op_date" id="<?php echo $op_id; ?>" class="form-control datepicker" value="<?php echo $op_date; ?>" <?php echo $validation; ?>>
			</div>
		</div>
		<table class="table table-condensed table-hover table-bordered">
				<thead>
					<tr style="background-color:#007BFF;color:#fff;">
						<th width="10%">Category</th>
						<th width="10%">Sub Category</th>
						<th width="10%">Material Code</th>
						<th width="20%">Material Name</th>
						<th width="15%">Part No</th>
						<th width="15%">Spec</th>
						<th width="10%">Unit</th>
						<th width="10%">OP Stock</th>
					</tr>
				</thead>
				<tbody>
					<?php
						
						$sql	=	"SELECT * FROM inv_material  GROUP BY `material_id`";
						$result = mysqli_query($conn, $sql);
						while($row=mysqli_fetch_array($result))
						{
					?>
						<tr style="background-color:#b6d7fa;">
							<td>
								<?php 
								$dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $row['material_id']);
								echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
								?>
							</td>
							<td colspan="7"></td>
						</tr>
						<?php 
							$material_id = $row['material_id'];
							$sqlall	=	"SELECT * FROM inv_material WHERE `material_id` = '$material_id' GROUP BY `material_sub_id`;";
							$resultall = mysqli_query($conn, $sqlall);
							while($rowall=mysqli_fetch_array($resultall))
							{ ?>
						
						<tr>
							<td></td>
							<td style="background-color:#b6d7fa;">
								<?php
								$dataresult =   getDataRowByTableAndId('inv_materialcategory', $rowall['material_sub_id']);
								echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
								?>
							</td>
							<td colspan="6"></td>
						</tr>
						<?php 
							$material_sub_id = $rowall['material_sub_id'];
							$sqlmat	=	"SELECT * FROM inv_material WHERE `material_sub_id` = '$material_sub_id' GROUP BY `material_id_code`;";
							$resultmat = mysqli_query($conn, $sqlmat);
							while($rowmat=mysqli_fetch_array($resultmat))
							{ ?>
						
						<tr>
							<td></td>
							<td></td>
							<td><input class="form-control" name="material_id_code[]" id="material_id_code" type="text" value="<?php echo $rowmat['material_id_code']; ?>" readonly /></td>
							<td><input class="form-control" name="material_description[]" id="material_description" type="text" value="<?php echo $rowmat['material_description']; ?>" readonly /></td>
							<td><input class="form-control" name="part_no" id="part_no" type="text" value="<?php echo $rowmat['part_no']; ?>" readonly /></td>
							<td><input class="form-control" name="spec" id="spec" type="text" value="<?php echo $rowmat['spec']; ?>" readonly /></td>
							<td><input class="form-control" name="material_description[]" id="material_description" type="text" value="<?php echo getDataRowByTableAndId('inv_item_unit', $rowmat['qty_unit'])->unit_name; ?>" readonly /></td>
							
							
							<?php
							$mb_materialid	=	$rowmat['material_id_code'];
							$warehouse_id	=	$_SESSION['logged']['warehouse_id'];
							$sqlop			=	"SELECT * FROM inv_materialbalance WHERE `mb_materialid` = '$mb_materialid' AND `mbtype`='OP' AND `warehouse_id`='$warehouse_id';";
							$resultop		=	mysqli_query($conn, $sqlop);
							$rowop			=	mysqli_fetch_array($resultop);
							$rowcount 		=	mysqli_num_rows($resultop);
							
							if($rowcount > 0){
								$mbin_qty 		= $rowop['mbin_qty'];
								$mbin_val 		= $rowop['mbin_val'];
								$submit_name	= 'op_edit';
								if($mbin_qty > 0){
									$validation 	= 'readonly';
									$submit			= 'disabled';
								}else{
									$validation 	= '';
									$submit			= '';
								}
							}else{
								$mbin_qty		= 0;
								$mbin_val 		= 0;
								$validation 	= '';
								$submit			= '';
								$submit_name	= 'op_submit';
							}
							?>
							
							<td><input class="form-control" name="op_balance_qty[]" id="op_balance_qty" type="text" value="<?php echo $mbin_qty; ?>" <?php echo $validation; ?> /></td>
						</tr>
						<?php } 
						
							} 
						} 
						?>
					</tbody>
			</table>
					<?php $project_id	= $_SESSION['logged']['project_id']; ?>
					<input type="hidden" name="project_id" value="<?php echo $project_id; ?>">
					<?php $warehouse_id	= $_SESSION['logged']['warehouse_id']; ?>
					<input type="hidden" name="warehouse_id" value="<?php echo $warehouse_id; ?>">
			<div class="col-xs-12">
				<div class="form-group">
					<input type="submit" name="<?php echo $submit_name; ?>" id="submit" class="btn btn-block btn-info" style="" value="SAVE DATA" <?php echo $submit; ?>/>    
				</div>
			</div>
    </form>
</div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>
<script>
    $(function () {
        $("#op_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>