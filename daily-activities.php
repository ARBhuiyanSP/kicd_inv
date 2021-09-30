<?php 
include 'header.php';

 ?>
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
            <i class="fas fa-table"></i> Daily Activities List
			<a href="daily_activities_entry.php" style="">  <i class="fas fa-plus"></i> New Entry<a>
		</div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<td></td>
				</tbody>
			</table>
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