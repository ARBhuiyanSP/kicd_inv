<?php

if(isset($_GET['process_type']) && $_GET['process_type'] == 'mat_rep'){
        date_default_timezone_set("Asia/Dhaka");
        include '../connection/connect.php';
        include '../helper/utilities.php';
        
        $inv_ba_response    =   '';
        $inv_iss_response    =   '';
        $inv_rec_response    =   '';
        
        $material_id        =   $_POST['material_id'];
        $materialCode       =   $_POST['materialCode'];
        $materialCodePart   =   $_POST['materialCodePart'];
        $replaceWith        =   $_POST['replaceWith'];
    
        // Update inv_material; set material_id_code where id= $material_id
            
            
            $inmUpData         =   [
                'material_id_code'  => $replaceWith,
                'is_manual_code_edit'  => 1
            ];
            $invwhere              =   [
                'id'            =>   $material_id
            ];
            $inv_material_response       = updateData('inv_material', $inmUpData, $invwhere);
        
        
        // update inv_materialbalance set mb_ref_id, mb_materialid where part_no= 
        $invmbwhere  = "part_no='$materialCodePart'";
        if(isDuplicateData('inv_materialbalance', $invmbwhere)){
            
            $inbaUpData         =   [
                'mb_ref_id'         => $replaceWith,
                'mb_materialid'     => $replaceWith,
                'is_manual_code_edit'  => 1
            ];
            $inbawhere              =   [
                'part_no'            =>   $materialCodePart
            ];
            $inv_ba_response       = updateData('inv_materialbalance', $inbaUpData, $inbawhere);
        }
        // update inv_issuedetail set material_id where part_no= 
        $inisswhere  = "part_no='$materialCodePart'";
        if(isDuplicateData('inv_issuedetail', $inisswhere)){
            $inissuUpData         =   [
                'material_id'         => $replaceWith,
                'is_manual_code_edit'  => 1
            ];
            $inissuewhere              =   [
                'part_no'            =>   $materialCodePart
            ];
            $inv_iss_response       = updateData('inv_issuedetail', $inissuUpData, $inissuewhere);
        }
        // update inv_receivedetail set material_id where part_no= 
        $inirecwhere  = "part_no='$materialCodePart'";
        if(isDuplicateData('inv_receivedetail', $inirecwhere)){
            $inrecUpData         =   [
                'material_id'         => $replaceWith,
                'is_manual_code_edit'  => 1,
            ];
            $inrecwhere              =   [
                'part_no'            =>   $materialCodePart
            ];
            $inv_rec_response       = updateData('inv_receivedetail', $inrecUpData, $inrecwhere);
        }
            
            $feedback   =   [
                'inv_material_response' =>     $inv_material_response,
                'inv_ba_response'       =>      $inv_ba_response,
                'inv_iss_response'      =>     $inv_iss_response,
                'inv_rec_response'      =>     $inv_rec_response,
                'material_id'           =>     $material_id,
            ];
            
            echo json_encode($feedback);
}

