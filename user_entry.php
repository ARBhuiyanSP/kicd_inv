<?php 
include 'header.php';
?>
<!-- Left Sidebar End -->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<link href="css/form-entry.css" rel="stylesheet">-->
<!-- Left Sidebar End -->
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">User Entry</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            User Entry</div>
        <div class="card-body">
            <!--here your code will go-->
            <div class="form-group">
                <form action="" method="post" name="add_name" id="add_name">
                    <div class="row" id="div1" style="">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Employee ID</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
						
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control" id="warehouse_id" name="warehouse_id" required>
                                    <option value="">Select</option>
                                    <option value="">Admin</option>
                                    <option value="">Incharge</option>
                                </select>
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Warehouse</label>
                                <select class="form-control" id="warehouse_id" name="warehouse_id" required>
                                    <option value="">Select</option>
                                    <?php
                                    $projectsData = getTableDataByTableName('inv_warehosueinfo');
                                    ;
                                    if (isset($projectsData) && !empty($projectsData)) {
                                        foreach ($projectsData as $data) {
                                            ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
						<div class="col-xs-3">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="text" name="purchase_id" id="purchase_id" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="modal-footer">
                                    <input type="submit" name="receive_submit" id="submit" class="btn btn-block" style="background-color:#007BFF;color:#ffffff;" value="Save" />
                                </div>    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--here your code will go-->
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
    $(function () {
        $("#mrr_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<script>
    $(function () {
        $("#challan_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<script>
    $(function () {
        $("#requisition_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>
<?php include 'footer.php' ?>