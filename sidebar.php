<style>
.sidebar{
	background-color:#e9ecef;
}
.sidebar .nav-item .nav-link span {
	color: #444;
	font-size:14px;
}
.sidebar .nav-item .nav-link{
	border:1px solid rgba(0, 0, 0, 0.125);
	margin-top:2px;
	margin-bottom:2px;
	color: #007bff;
	padding-left: 20px;
    padding-top: 5px;
	font-weight:bold;
}
.sidebar ul li {
	border-bottom: 1px solid #444;
}
.bg-dark {
    background-color: #007bff !important;
}
.form-control {
    border:1px solid #000000;
}

.reqr{
	font-size:10px;
	color:red;
	font-weight:bold;
	font-style:italic;
}
</style>
<ul class="sidebar navbar-nav">
	<li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt" style="color: #007BFF;"></i>
            <span>Dashboard</span>
        </a>
    </li>
	<?php if($_SESSION['logged']['user_type'] !== 'whm') {?>
	<?php if($_SESSION['logged']['user_type'] !== 'superAdmin') {?>
    <li class="nav-item" style="background-color:#007BFF;">
        <span class="nav-link" href="#">
            <i class="fa fa-bars" aria-hidden="true" style="color: #FFF;"></i>
            <span style="color: #FFF;">Settings</span></span>
    </li>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-cog" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Master Setup</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="material.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Material</span>
            </a>
            <a class="dropdown-item" href="unit_entry.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> UOM</span>
            </a>
            <!-- <a class="dropdown-item" href="supplier_entry.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Supplier Add</span>
            </a>
			<a class="dropdown-item" href="supplier_info.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Supplier Report</span>
            </a> -->
            <a class="dropdown-item" href="project_entry.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Projects</span>
            </a>
            <a class="dropdown-item" href="warehouse_entry.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Warehouse</span>
            </a>
            <a class="dropdown-item" href="equipment_entry.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Euipments</span>
            </a>
            <!-- <a class="dropdown-item" href="user_entry.php">
                <i class="fa fa-bullseye" aria-hidden="true" style="color: #007BFF;"></i>
                <span class="sub_menu_text_design"> Users</span>
            </a> -->
        </div>
    </li>
	
	<li class="nav-item" style="background-color:#007BFF;">
        <span class="nav-link" href="#">
            <i class="fa fa-users" aria-hidden="true" style="color: #FFF;"></i>
            <span style="color: #FFF;">User Page</span></span>
    </li>
    <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-shopping-bag" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Material Purchase</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="purchase_entry.php"><i class="fa fa-plus" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Purchase Entry</span></a>
            <a class="dropdown-item" href="Purchase_list.php"><i class="fa fa-list" aria-hidden="true" style="color: red;"></i><span class="sub_menu_text_design">Purchase  List</span></a>
        </div>
    </li> -->
    
	<?php } ?>
	<?php } ?>
	<?php if($_SESSION['logged']['user_type'] !== 'superAdmin') {?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-truck" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Material Receive</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="receive_entry.php"><i class="fa fa-plus" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Receive Entry</span></a>
            <a class="dropdown-item" href="receive-list.php"><i class="fa fa-list" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Receive List</span></a>
        </div>
    </li>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-server" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Material issue</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="issue_entry.php"><i class="fa fa-plus" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Material issue</span></a>
            <a class="dropdown-item" href="issue-list.php"><i class="fa fa-list" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Issue List</span></a>
        </div>
    </li>
	<li class="nav-item">
        <a class="nav-link " href="daily-activities.php">
            <i class="fas fa-fw fa-server" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Daily Activities</span></a>
    </li>
    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-text-width " aria-hidden="true" style="color: #007BFF;"></i>
            <span>Warehouse Transfer</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="warehousetransfer_entry.php"><i class="fa fa-plus" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Warehouse Transfer</span></a>
            <a class="dropdown-item" href="transfer-list.php"><i class="fa fa-list" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">W.Transfer List</span></a>
        </div>
    </li>
	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-undo" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Material return</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="return_entry.php"><i class="fa fa-plus" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Material return</span></a>
            <a class="dropdown-item" href="return-list.php"><i class="fa fa-list" aria-hidden="true" style="color: #007BFF;"></i><span class="sub_menu_text_design">Return List</span></a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="returntovendor_entry.php">
            <i class="fa fa-history" aria-hidden="true" style="color: red;"></i>
            <span>Return To Vendor</span></a>
    </li>-->
	
    <li class="nav-item">
        <a class="nav-link" href="opening_balance.php">
            <i class="fa fa-key" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Opening Stock Entry</span></a>
    </li>
	 <!-- <li class="nav-item">
        <a class="nav-link" href="payment_entry.php">
            <i class="fa fa-money-bill" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Payment Entry</span></a>
    </li> -->

	<?php } ?>
	<li class="nav-item" style="background-color:#007BFF;">
        <span class="nav-link" href="#">
            <i class="fa fa-bars" aria-hidden="true" style="color: #FFF;"></i>
            <span style="color: #FFF;">Reports</span></span>
    </li>

	
	<li class="nav-item">
        <a class="nav-link" href="materialinfo_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Material List</span></a>
    </li>
	<!-- <li class="nav-item">
        <a class="nav-link" href="materialtype_info.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>TypeWise Material List</span></a>
    </li> -->
	<li class="nav-item">
        <a class="nav-link" href="stock_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Stock Reports</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="movement_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Movement Reports</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="equipments-history.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Equips.History Report</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="material-history.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Material History Report</span></a>
    </li>
	<!-- <li class="nav-item">
        <a class="nav-link" href="consumption_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Consumption Reports</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="supplier_ledger.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Supplier Ledger</span></a>
    </li> -->
	<li class="nav-item">
        <a class="nav-link" href="receive_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Receive details</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="issue_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Issue details</span></a>
    </li>
	<!-- <li class="nav-item">
        <a class="nav-link" href="warhousetransfer_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Transfer details</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="return_report.php">
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Return details</span></a>
    </li>
	<li class="nav-item">
        <a class="nav-link" href="inventory_sheet.php"> 
            <i class="fa fa-registered" aria-hidden="true" style="color: #007BFF;"></i>
            <span>Inventory Sheet</span></a>
    </li> -->
	
</ul>