<?php 
if(isset($_GET['process_type']) && $_GET['process_type'] == "getSupplierIdBySupplierName"){
    date_default_timezone_set("Asia/Dhaka");
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $supplier_id     =   $_POST['supplier_id'];
    $table      =   "suppliers WHERE id=$supplier_id";
    $info   = getDataRowIdAndTable($table);
    $feedbackData   =   [
        'status'    =>  'success',
        'data'      =>  $info,
        'message'   =>  'Data Found'
    ];
    echo json_encode($feedbackData);
}