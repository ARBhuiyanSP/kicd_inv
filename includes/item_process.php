




<?php 
if (isset($_GET['process_type']) && $_GET['process_type'] == 'parent') {
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $status     =   'success';
    $message    =   'Current operation was successfully completed';
    $feedback   =   '';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $parent_id = mysqli_real_escape_string($conn, $_POST['parent_id']);
    $_order = mysqli_real_escape_string($conn, $_POST['_order']);
    $parent_code = mysqli_real_escape_string($conn, $_POST['category_id'] ?? '');
    // check duplicate:
    $table = 'inv_materialcategorysub';
//    $where = 'category_id=' . "$parent_code" . ' and category_description=' . "$name";
    $where = "category_id='$parent_code' and LOWER(category_description)='".strtolower($name)."'";
    if(isset($_POST['parent_material_update_id']) && !empty($_POST['parent_material_update_id'])){
        $notWhere   =   "id!=".$_POST['parent_material_update_id'];
        $duplicatedata = isDuplicateData($table, $where, $notWhere);
    }else{
        $duplicatedata = isDuplicateData($table, $where);
    }
    if ($duplicatedata) {
        $status     =   'error';
        $message    =   'Current operation was faild. Duplicate data found!';
    } else {
        if (isset($_POST['parent_material_update_id']) && !empty($_POST['parent_material_update_id'])) {
            $edit_id = $_POST['parent_material_update_id'];
            $sql = "UPDATE inv_materialcategorysub SET category_id='$parent_code',category_description='$name',parent_id= '$parent_id',_order='$_order' WHERE id=$edit_id";
            $status     =   'success';
            $message    =   'Data have been successfully updated!';
        } else {
            $sql = "INSERT INTO inv_materialcategorysub (category_description, category_id,parent_id,_order) VALUES ('" . $name . "', '" . $parent_code . "','".$parent_id."','".$_order."')";
            $status     =   'success';
            $message    =   'Data have been successfully inserted!';
        }
        if ($conn->query($sql) === TRUE) {
            $feedback = parent_category_table_json_response('parent_category');
        }
    }
    $data   =   [
        'status'    =>  $status,
        'message'   =>  $message,
        'data'      =>  $feedback,
    ];
    echo json_encode($data);
}
// if (isset($_GET['process_type']) && $_GET['process_type'] == 'parent') {
//     include '../connection/connect.php';
//     include '../helper/utilities.php';
//     $status     =   'success';
//     $message    =   'Current operation was successfully completed';
//     $feedback   =   '';
//     $name = mysqli_real_escape_string($conn, $_POST['name']);
//     $parent_code = mysqli_real_escape_string($conn, $_POST['category_id']);
//     // check duplicate:
//     $table = 'inv_materialcategorysub';
// //    $where = 'category_id=' . "$parent_code" . ' and category_description=' . "$name";
//     $where = "category_id='$parent_code' and category_description='$name'";
//     if(isset($_POST['parent_material_update_id']) && !empty($_POST['parent_material_update_id'])){
//         $notWhere   =   "id!=".$_POST['parent_material_update_id'];
//         $duplicatedata = isDuplicateData($table, $where, $notWhere);
//     }else{
//         $duplicatedata = isDuplicateData($table, $where);
//     }
//     if ($duplicatedata) {
//         $status     =   'error';
//         $message    =   'Current operation was faild. Duplicate data found!';
//     } else {
//         if (isset($_POST['parent_material_update_id']) && !empty($_POST['parent_material_update_id'])) {
//             $edit_id = $_POST['parent_material_update_id'];
//             $sql = "UPDATE inv_materialcategorysub SET category_id='$parent_code',category_description='$name' WHERE id=$edit_id";
//             $status     =   'success';
//             $message    =   'Data have been successfully updated!';
//         } else {
//             $sql = "INSERT INTO inv_materialcategorysub (category_description, category_id) VALUES ('" . $name . "', '" . $parent_code . "')";
//             $status     =   'success';
//             $message    =   'Data have been successfully inserted!';
//         }
//         if ($conn->query($sql) === TRUE) {
//             $feedback = parent_category_table_json_response('parent_category');
//         }
//     }
//     $data   =   [
//         'status'    =>  $status,
//         'message'   =>  $message,
//         'data'      =>  $feedback,
//     ];
//     echo json_encode($data);
// }
function parent_category_table_json_response($tableName) {
    $feedback   =   '';
    $tableData = getTableDataByTableName('inv_materialcategorysub', '' , 'category_description');
    if (isset($tableData) && !empty($tableData)) {
        foreach ($tableData as $data) {
            $category_id                =   $data['category_id'];
            $category_description       =   $data['category_description'];
            $id                =   $data['id'];
            $feedback.="<tr>
                <td>$category_id</td>
                <td>$category_description</td>
                <td>
                    <button type=\"button\" class=\"btn btn-sm\" onclick=\"openParentEditForm('$id');\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                    </button>
                </td>
            </tr>";
        }// end of foreach;
    }
    return $feedback;
}
if (isset($_GET['process_type']) && $_GET['process_type'] == 'sub_cat') {
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $status     =   'success';
    $message    =   'Current operation was successfully completed';
    $feedback   =   '';
    $parent_id  = mysqli_real_escape_string($conn, $_POST['parent_id']);
    $sub_code   = mysqli_real_escape_string($conn, $_POST['sub_code']);
    $name       = mysqli_real_escape_string($conn, $_POST['name']);
    // check duplicate:
    $table = 'inv_materialcategory';
//    $where = 'category_id=' . "$parent_code" . ' and category_description=' . "$name";
    $where = "category_id='$parent_id' and material_sub_id='$sub_code' and material_sub_description='$name'";
    if(isset($_POST['sub_material_update_id']) && !empty($_POST['sub_material_update_id'])){
        $notWhere       =   "id!=".$_POST['sub_material_update_id'];
        $duplicatedata  = isDuplicateData($table, $where, $notWhere);
    }else{
        $duplicatedata  = isDuplicateData($table, $where);
    }
    if ($duplicatedata) {
        $status  = 'error';
        $message = 'Current operation was faild. Duplicate data found!';
    } else {
        if (isset($_POST['sub_material_update_id']) && !empty($_POST['sub_material_update_id'])) {
            $edit_id     = $_POST['sub_material_update_id'];
            $sql         = "UPDATE inv_materialcategory SET material_sub_id='$sub_code',category_id='$parent_id',material_sub_description='$name' WHERE id=$edit_id";
            $status      = 'success';
            $message     = 'Data have been successfully updated!';
        } else {
            $sql         = "INSERT INTO inv_materialcategory (category_id, material_sub_description, material_sub_id) VALUES ('" . $parent_id . "','" . $name . "', '" . $sub_code . "')";
            $status      = 'success';
            $message     = 'Data have been successfully inserted!';
        }

        if ($conn->query($sql) === TRUE) {
            $feedback = sub_category_table_json_response('inv_materialcategory');
        }
    }

    $data = [
        'status' => $status,
        'message' => $message,
        'data' => $feedback,
    ];
    echo json_encode($data);
}
function sub_category_table_json_response($tableName) {
    $feedback   =   '';
    $tableData = getTableDataByTableName('inv_materialcategory','','material_sub_description');
    if (isset($tableData) && !empty($tableData)) {
        foreach ($tableData as $data) {
            $id                         =   $data['id'];
            $dataresult                 =   getDataRowByTableAndId('inv_materialcategorysub', $data['category_id']);
            $category_description       = (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
            $material_sub_id            =  $data['material_sub_id'];
            $material_sub_description   =  $data['material_sub_description'];
            $feedback.="<tr>
                <td>
                    $category_description
                </td>
                <td>$material_sub_id</td>
                <td>$material_sub_description</td>
                <td>
                    <button type=\"button\" class=\"btn btn-sm\" onclick=\"openSubMaterialEditForm('$id');\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                    </button>
                </td>
            </tr>";
        }
    }
    return $feedback;
}
if(isset($_GET['process_type']) && $_GET['process_type'] == 'item'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $status     =   'success';
    $message    =   'Current operation was successfully completed';
    $feedback   =   '';

    /*
<pre>Array
(
    [parent_item_id] => 42
    [sub_item_id] => 109
    [material_level3_id] => 3
    [material_level4_id] => 1
    [item_code] => 01-01-01-01-001
    [name] => ABC
    [brand_name] => Brand
    [type] => CIVIL
    [qty_unit] => 19
    [material_min_stock] => 250
)
</pre>
    */

    $parent_id          =   mysqli_real_escape_string($conn, $_POST['parent_item_id']);
    $sub_item_id        =   mysqli_real_escape_string($conn, $_POST['sub_item_id'] ?? 0);
    $material_level3_id =   mysqli_real_escape_string($conn, $_POST['material_level3_id'] ?? 0);
    $material_level4_id =   mysqli_real_escape_string($conn, $_POST['material_level4_id'] ?? 0);
    $item_code          =   mysqli_real_escape_string($conn, $_POST['item_code']);
    $name               =   mysqli_real_escape_string($conn, $_POST['name']);
    $part_no			=   mysqli_real_escape_string($conn, $_POST['part_no']);
    $spec				=   mysqli_real_escape_string($conn, $_POST['spec']);
    $location			=   mysqli_real_escape_string($conn, $_POST['location']);
    $qty_unit           =   mysqli_real_escape_string($conn, $_POST['qty_unit']);
    $material_min_stock =   mysqli_real_escape_string($conn, $_POST['material_min_stock']);
    // check duplicate:
    $table = 'inv_material';
    $where = "material_id=".$parent_id." and material_sub_id='$sub_item_id' and material_level3_id='$material_level3_id' and material_level4_id='$material_level4_id' and material_id_code='$item_code' and material_description='$name'";
    if(isset($_POST['material_update_id']) && !empty($_POST['material_update_id'])){
        $notWhere   =   "id!=".$_POST['material_update_id'];
        $duplicatedata = isDuplicateData($table, $where, $notWhere);
    }else{
        $duplicatedata = isDuplicateData($table, $where);
    }
    if ($duplicatedata) {
        $status  = 'error';
        $message = 'Current operation was faild. Duplicate data found!';
    } else {
        if(isset($_POST['material_update_id']) && !empty($_POST['material_update_id'])){
            $edit_id     =   $_POST['material_update_id'];
            /* $sql         = "UPDATE inv_material SET material_id_code='$item_code',material_id='$parent_id',material_sub_id='$sub_item_id',material_level3_id='$material_level3_id',material_level4_id='$material_level4_id',material_description='$name',spec='$spec',material_min_stock='$material_min_stock',qty_unit='$qty_unit',part_no='$part_no' WHERE id=$edit_id"; */
			 $sql         = "UPDATE inv_material SET material_description='$name',spec='$spec',location='$location',material_min_stock='$material_min_stock',qty_unit='$qty_unit',part_no='$part_no' WHERE id=$edit_id";
            $status      = 'success';
            $message     = 'Data have been successfully updated!';
           // $feedback = item_table_json_response('inv_material');            
        }else{
            $sql         = "INSERT INTO inv_material (material_id,material_sub_id,material_level3_id,material_level4_id,material_id_code,material_description,spec,location,material_min_stock,qty_unit,part_no) VALUES ('".$parent_id."','".$sub_item_id."','".$material_level3_id."','".$material_level4_id."', '".$item_code."','".$name."', '".$spec."', '".$location."', '".$material_min_stock."','".$qty_unit."','".$part_no."')";




            $status      = 'success';
            $message     = 'Data have been successfully inserted!';
            //$feedback = item_table_json_response('inv_material');
            
        }
        if ($conn->query($sql) === TRUE) {
            $material_update_id = $conn->insert_id;
            $user_id =1;
            $date = date('Y-m-d');
            $insert_sql=" INSERT INTO inv_material_partno_detail( inv_material_id, material_id_code, part_no, status, created_by, updated_by, created_at, updated_at) VALUES ('$material_update_id','$item_code','$part_no','1','$user_id','$user_id','$date','$date') ";
            $conn->query($insert_sql);

           $feedback = item_table_json_response('inv_material'); 

        }
    }
    $data = [
        'status'    => $status,
        'message'   => $message,
        'data'      => $feedback,
    ];
    echo json_encode($data);
}
if(isset($_GET['process_type']) && $_GET['process_type'] == 'part_number_update'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $status     =   'success';
    $message    =   'Current operation was successfully completed';
    $feedback   =   '';
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $new_part_no = $_POST["new_part_no"];
    $material_update_id = $_POST["material_update_id"];
    $item_code = $_POST["item_code"];
    $part_no = $_POST["part_no"];
    $item_code = $_POST["item_code"];

    $date = date('Y-m-d');
    $user_id   =   1;

    if($new_part_no !=""){

        // Update inv_material_partno_detail update

        $inv_material_partno_detail_sql = "UPDATE inv_material_partno_detail SET status=0  WHERE inv_material_id=$material_update_id ";
        $conn->query($inv_material_partno_detail_sql);

        // Insert inv_material_partno_detail

       $insert_sql=" INSERT INTO `inv_material_partno_detail`( `inv_material_id`, `material_id_code`, `part_no`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES ('$material_update_id','$item_code','$new_part_no','1','$user_id','$user_id','$date','$date') ";
       $conn->query($insert_sql);


        $sql = "UPDATE inv_material SET part_no='$new_part_no' WHERE id=$material_update_id ";
            if ($conn->query($sql) === TRUE) {
                $feedbackData   =   [
                    'status'    =>  'success',
                    'message'   =>  'Data have been successfully Updated '.$material_update_id,
                ];
            } else {
                $feedbackData   =   [
                    'status'    =>  'error',
                    'message'   =>  "Error: " . $sql . "<br>" . $conn->error,
                ];        
            }
        }else{
           $feedbackData   =   [
                    'status'    =>  'error',
                    'message'   =>  "Part No is required" . $conn->error,
                ]; 
        }

    

   echo json_encode($feedbackData);
}

/*
****************************************************************************************
############################## MATERIAL LEVEL 3 DATA ADD ###############################
############################## start tanveer qureshee 12-13-2020 #######################
****************************************************************************************
*/

if(isset($_GET['process_type']) && $_GET['process_type'] == 'level3itemsave'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $status     =   'success';
    $message    =   'Current operation was successfully completed';
    $feedback   =   '';
    $category_id                    =   mysqli_real_escape_string($conn, $_POST['category_id']);
    $category_sub_id                =   mysqli_real_escape_string($conn, $_POST['category_sub_id']);
    $material_level3_code           =   mysqli_real_escape_string($conn, $_POST['material_level3_code']);
    $material_level3_description    =   mysqli_real_escape_string($conn, $_POST['material_level3_description']);
    // check duplicate:
    $table = 'inv_material_level3';
    $where = "category_id=".$category_id." and category_sub_id='$category_sub_id' and material_level3_code='$material_level3_code' and material_level3_description='$material_level3_description'";
    if(isset($_POST['level3_update_id']) && !empty($_POST['level3_update_id'])){
        $notWhere   =   "id!=".$_POST['level3_update_id'];
        $duplicatedata = isDuplicateData($table, $where, $notWhere);
    }else{
        $duplicatedata = isDuplicateData($table, $where);
    }
    if ($duplicatedata) {
        $status  = 'error';
        $message = 'Current operation was faild. Duplicate data found!';
    } else {
        if(isset($_POST['level3_update_id']) && !empty($_POST['level3_update_id'])){
            $edit_id     =   $_POST['level3_update_id'];
            $sql         = "UPDATE inv_material_level3 SET category_id='$category_id',category_sub_id='$category_sub_id',material_level3_code='$material_level3_code',material_level3_description='$material_level3_description'WHERE id=$edit_id";
            $status      = 'success';
            $message     = 'Data have been successfully updated!';            
        }else{
            $sql         = "INSERT INTO inv_material_level3 (category_id,category_sub_id,material_level3_code,material_level3_description) VALUES ('".$category_id."','".$category_sub_id."', '".$material_level3_code."','".$material_level3_description."')";
            $status      = 'success';
            $message     = 'Data have been successfully inserted!';
            
        }
        if ($conn->query($sql) === TRUE) {
            $feedback = level3_table_json_response('inv_material_level3');
        }
    }
    $data = [
        'status'    => $status,
        'message'   => $message,
        'data'      => $feedback,
    ];
    echo json_encode($data);
}


if(isset($_GET['process_type']) && $_GET['process_type'] == 'level4itemsave'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $status     =   'success';
    $message    =   'Current operation was successfully completed';
    $feedback   =   '';


    /*

        <pre>Array
(
    [category_id] => 42
    [category_sub_id] => 109
    [level3_id] => 3
    [material_level4_code] => 01-01-01-01-000
    [material_level4_description] => lv4 item1
)
</pre>

    */


    $category_id                    =   mysqli_real_escape_string($conn, $_POST['category_id']);
    $category_sub_id                =   mysqli_real_escape_string($conn, $_POST['category_sub_id']);
    $level3_id                      =   mysqli_real_escape_string($conn, $_POST['level3_id']);
    $material_level4_code           =   mysqli_real_escape_string($conn, $_POST['material_level4_code']);
    $material_level4_description    =   mysqli_real_escape_string($conn, $_POST['material_level4_description']);
    // check duplicate:
    $table = 'inv_material_level4';
    $where = "category_id=".$category_id." and category_sub_id='$category_sub_id' and level3_id='$level3_id' and material_level4_code='$material_level4_code' and material_level4_description='$material_level4_description'";
    if(isset($_POST['level4_update_id']) && !empty($_POST['level4_update_id'])){
        $notWhere   =   "id!=".$_POST['level4_update_id'];
        $duplicatedata = isDuplicateData($table, $where, $notWhere);
    }else{
        $duplicatedata = isDuplicateData($table, $where);
    }
    if ($duplicatedata) {
        $status  = 'error';
        $message = 'Current operation was faild. Duplicate data found!';
    } else {
        if(isset($_POST['level4_update_id']) && !empty($_POST['level4_update_id'])){
            $edit_id     =   $_POST['level4_update_id'];
            $sql         = "UPDATE inv_material_level4 SET category_id='$category_id',category_sub_id='$category_sub_id',material_level3_code='$material_level3_code',material_level3_description='$material_level3_description'WHERE id=$edit_id";
            $status      = 'success';
            $message     = 'Data have been successfully updated!';            
        }else{
            $sql         = "INSERT INTO inv_material_level4 (category_id,category_sub_id,level3_id,material_level4_code,material_level4_description) VALUES ('".$category_id."','".$category_sub_id."','".$level3_id."', '".$material_level4_code."','".$material_level4_description."')";
            
            $status      = 'success';
            $message     = 'Data have been successfully inserted!';
            
        }
        if ($conn->query($sql) === TRUE) {
            $feedback = level4_table_json_response('inv_material_level4');
        }
    }
    $data = [
        'status'    => $status,
        'message'   => $message,
        'data'      => $feedback,
    ];
	
    echo json_encode($data);
}

function level4_table_json_response($tableName){
    $feedback   =   '';
    $tableData = getTableDataByTableName($tableName, '', 'material_level4_description');
    if (isset($tableData) && !empty($tableData)) {
        foreach ($tableData as $data) {
            // category_id
            // category_sub_id
            // material_level3_description
            // material_level3_code

            $id                         =  $data['id'];
            $level1Data                 =  getDataRowByTableAndId('inv_materialcategorysub', $data['category_id']);
            
            $level2Data                 =  getDataRowByTableAndId('inv_materialcategory', $data['category_sub_id']);

            $level3Data                 =  getDataRowByTableAndId('inv_material_level3', $data['level3_id']);
            
            $material_level4_code       =  $data['material_level4_code'];
            $material_level4_description=  $data['material_level4_description'];
            $feedback.="<tr>
                <td>$level1Data->category_id</td>
                <td>$level2Data->material_sub_id</td>
                <td>$level3Data->material_level3_code</td>
                <td>$material_level4_code</td>
                <td>$material_level4_description</td>
                <td>
                    <button type=\"button\" class=\"btn btn-sm\" onclick=\"openMaterialEditForm('$id');\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                    </button>
                </td>
            </tr>";
        }
    }
    return $feedback;
}

function level3_table_json_response($tableName){
    $feedback   =   '';
    $tableData = getTableDataByTableName($tableName, '', 'material_level3_description');
    if (isset($tableData) && !empty($tableData)) {
        foreach ($tableData as $data) {
            // category_id
            // category_sub_id
            // material_level3_description
            // material_level3_code

            $id                         =  $data['id'];
            $level1Data                 =  getDataRowByTableAndId('inv_materialcategorysub', $data['category_id']);
            
            $level2Data                 =  getDataRowByTableAndId('inv_materialcategory', $data['category_sub_id']);
            
            $material_level3_code       =  $data['material_level3_code'];
            $material_level3_description=  $data['material_level3_description'];
            $feedback.="<tr>
                <td>$level1Data->category_id</td>
                <td>$level2Data->material_sub_id</td>
                <td>$material_level3_code</td>
                <td>$material_level3_description</td>
                <td>
                    <button type=\"button\" class=\"btn btn-sm\" onclick=\"openMaterialEditForm('$id');\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                    </button>
                </td>
            </tr>";
        }
    }
    return $feedback;
}





/*
*************************************************************** END ******************************************************************************
*/


function item_table_json_response($tableName) {
    $feedback   =   '';
    $tableData = getTableDataByTableName($tableName, '', 'material_description');
    if (isset($tableData) && !empty($tableData)) {
        foreach ($tableData as $data) {
            $id                         =  $data['id'];
            $dataresult                 =  getDataRowByTableAndId('inv_materialcategorysub', $data['material_id']);
            $category_description       = (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
            
            // $datasubresult              =  getDataRowByTableAndId('inv_materialcategory', $data['material_sub_id']);
            // $sub_category_description   =  (isset($dataresult) && !empty($dataresult) ? $datasubresult->material_sub_description : '');
            $sub_category_description   =  '';
            
            $material_id_code           =  $data['material_id_code'];
            $material_description       =  $data['material_description'];
            $location         =  $data['location'];
            $unit_name                  =  getDataRowByTableAndId('inv_item_unit', $data['qty_unit'])->unit_name;
            $feedback.="<tr>
            <td>
                    <button type=\"button\" class=\"btn btn-sm\" onclick=\"openMaterialEditForm('$id');\">
                        <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
                    </button>
                    <button title=\"Add New Part No\" type=\"button\" class=\"btn btn-sm btn-info\" onclick=\"addNewPartNumberModal('$id');\">
                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                    </button>
                </td>
                <td>$id </td>
                <td>$category_description</td>
                <td>$sub_category_description</td>
                <td>$material_id_code</td>
                <td>$material_description</td>
                <td>$location</td>
                <td>$unit_name</td>
                
            </tr>";
        }
    }
    return $feedback;
}
if(isset($_GET['process_type']) && $_GET['process_type'] == 'get_sub_by_parent'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $parent_id      =    $_POST['parent_id'];
    $tableName      =    'inv_materialcategory where category_id='.$parent_id;
    $tableData      = getTableDataByTableName($tableName, '', 'material_sub_description');
    if (isset($tableData) && !empty($tableData)) {
        echo "<option value=''>Please Select</option>";
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['material_sub_description'].'('.$data['material_sub_id'].')'; ?></option>
            <?php
        }
    }
}
/*-----------level 4-----------*/
if(isset($_GET['process_type']) && $_GET['process_type'] == 'get_3_by_2'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $level_1_id      =    $_POST['level_1_id'];
    $tableName      =    'inv_materialcategory where category_id='.$level_1_id;
    $tableData      = getTableDataByTableName($tableName, '', 'material_sub_description');
    if (isset($tableData) && !empty($tableData)) {
        echo "<option value=''>Please Select</option>";
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['material_sub_description'].'('.$data['material_sub_id'].')'; ?></option>
            <?php
        }
    }
}


if(isset($_GET['process_type']) && $_GET['process_type'] == 'get_4_by_3'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $level_2_id      =    $_POST['level_2_id'];
    $tableName      =    'inv_material_level3 where category_sub_id='.$level_2_id;
    $tableData      = getTableDataByTableName($tableName, '', 'material_level3_description');
    if (isset($tableData) && !empty($tableData)) {
        echo "<option value=''>Please Select</option>";
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['material_level3_description'].'('.$data['material_level3_code'].')'; ?></option>
            <?php
        }
    }
}
/*-----------level 4-----------*/
/*-----------level 5-----------*/
if(isset($_GET['process_type']) && $_GET['process_type'] == 'get5__3_by_2'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $level_1_id_l5      =    $_POST['level_1_id_l5'];
    $tableName      =    'inv_materialcategory where category_id='.$level_1_id_l5;
    $tableData      = getTableDataByTableName($tableName, '', 'material_sub_description');
    if (isset($tableData) && !empty($tableData)) {
        echo "<option value=''>Please Select</option>";
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['material_sub_description'].'('.$data['material_sub_id'].')'; ?></option>
            <?php
        }
    }
}

if(isset($_GET['process_type']) && $_GET['process_type'] == 'get5__3_by_2_same_level'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $level_1_id_l5      =    $_POST['level_1_id_l5'];
   global $conn;
    $dataContainer  =   [];
    $sql = " SELECT lev1.id as lev1_id,lev1.category_description,
lev2.id as lev2id,lev2.material_sub_description,
lev3.id as lev3_id,lev3.material_level3_description,
lev4.id as lev4_id,lev4.material_level4_description
FROM inv_materialcategorysub AS lev1
INNER JOIN inv_materialcategory AS lev2 ON lev1.id=lev2.category_id
INNER JOIN inv_material_level3 AS lev3 ON lev3.category_sub_id=lev2.id
INNER JOIN inv_material_level4 AS lev4 ON lev4.level3_id=lev3.id
WHERE lev1.id=".$level_1_id_l5." ";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        if (isset($dataType) && $dataType == 'obj') {
            while ($row = $result->fetch_object()) {
                $dataContainer[] = $row;
            }
        } else {
            while ($row = $result->fetch_assoc()) {
                $dataContainer[] = $row;
            }
        }
    }
    echo json_encode($dataContainer);
}

if(isset($_GET['process_type']) && $_GET['process_type'] == 'get5__4_by_3'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $level_2_id_l5      =    $_POST['level_2_id_l5'];
    $tableName      =    'inv_material_level3 where category_sub_id='.$level_2_id_l5;
    $tableData      = getTableDataByTableName($tableName, '', 'material_level3_description');
    if (isset($tableData) && !empty($tableData)) {
        echo "<option value=''>Please Select</option>";
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['material_level3_description'].'('.$data['material_level3_code'].')'; ?></option>
            <?php
        }
    }
}

if(isset($_GET['process_type']) && $_GET['process_type'] == 'get5__5_by_4'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $material_level3_id      =    $_POST['material_level3_id'];
    $tableName      =    'inv_material_level4 where level3_id='.$material_level3_id;
    $tableData      = getTableDataByTableName($tableName, '', 'material_level4_description');
    if (isset($tableData) && !empty($tableData)) {
        echo "<option value=''>Please Select</option>";
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['material_level4_description'].'('.$data['material_level4_code'].')'; ?></option>
            <?php
        }
    }
}
/*-----------level 5-----------*/


/*
 *   Category, Sub category and material
 */
if(isset($_GET['process_type']) && $_GET['process_type'] == 'material_edit'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $edit_id    =   $_POST['edit_id'];
    $editData   =   getDataRowByTableAndId('inv_material',$edit_id);
?> 
        <div class="modal_body_centerize"> 
            <input type="hidden" name="material_update_id" value="<?php echo $editData->id; ?>">
            <div class="form-group">
                <label class="control-label col-sm-5" for="parent_code">Parent Category:</label>
                <div class="col-sm-7">
					<input type="hidden" class="form-control"  placeholder="name" name="parent_item_id" value="<?php if(isset($editData->material_id)){ echo $editData->material_id; } ?>">
					 <input type="text" class="form-control"  placeholder="name" value="<?php if(isset($editData->material_id)){ $dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $editData->material_id); echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : ''); } ?>"readonly> 
                </div>
            </div>
			
			
			
            <div class="form-group">
                <label class="control-label col-sm-5" for="parent_code">Material Code:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="item_edit_code" placeholder="Enter item code" name="item_code" value="<?php if(isset($editData->material_id_code)){ echo $editData->material_id_code; } ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="name">Name:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  placeholder="name" name="name" value="<?php if(isset($editData->material_description)){ echo $editData->material_description; } ?>">
                </div>
            </div>
            <!-- <div class="form-group">
                <label class="control-label col-sm-5" for="name">Brand Name:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  placeholder="brand name" name="brand_name" value="<?php if(isset($editData->brand_name)){ echo $editData->brand_name; } ?>">
                </div>
            </div> -->
            <div class="form-group">
                <label class="control-label col-sm-5" for="name">Part No:</label>
                <div class="col-sm-7">
                    <input readonly type="text" class="form-control"  placeholder="brand name" name="part_no" value="<?php if(isset($editData->part_no)){ echo $editData->part_no; } ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="name">Specifiaction:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  placeholder="brand name" name="spec" value="<?php if(isset($editData->spec)){ echo $editData->spec; } ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="name">Location:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control"  placeholder="location" name="location" value="<?php if(isset($editData->location)){ echo $editData->location; } ?>">
                </div>
            </div>
			<!-- <div class="form-group">
                <label class="control-label col-sm-5" for="name">Type:</label>
                <div class="col-sm-7">
					<select class="form-control" id="type" name="type">
						<option value="<?php if(isset($editData->type)){ echo $editData->type; } ?>"><?php if(isset($editData->type)){ echo $editData->type; } ?></option>
						<option value="CIVIL">CIVIL</option>
						<option value="ELECTRICAL">ELECTRICAL</option>
						<option value="MACHANICAL">MACHANICAL</option>
						<option value="SANITARY">SANITARY</option>
						<option value="HARDWARE">HARDWARE</option>
					</select>
                </div>
            </div> -->
            <div class="form-group">
                <label class="control-label col-sm-5" for="parent_code">Unit:</label>
                <div class="col-sm-7">
                    <select class="form-control" id="qty_unit" name="qty_unit">
                        <option value="">Select</option>
                        <?php
                        $parentCats = getTableDataByTableName('inv_item_unit', '', 'unit_name');
                        if (isset($parentCats) && !empty($parentCats)) {
                            foreach ($parentCats as $pcat) {
                                ?>
                                <option value="<?php echo $pcat['id'] ?>" <?php if(isset($editData->qty_unit) && $editData->qty_unit == $pcat['id']){ echo 'selected'; } ?>><?php echo $pcat['unit_name'] ?></option>
<?php }
}
?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-5" for="name">Material min stock:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="material_min_stock" placeholder="Material min stock" name="material_min_stock" value="<?php if(isset($editData->material_min_stock)){ echo $editData->material_min_stock; } ?>">
                </div>
            </div>
        </div>
<?php } ?>




<?php
if(isset($_GET['process_type']) && $_GET['process_type'] == 'sub_material_edit'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $edit_id    =   $_POST['edit_id'];
    $editData   =   getDataRowByTableAndId('inv_materialcategory',$edit_id);
?>
        <div class="form-group">
            <input type="hidden" name="sub_material_update_id" value="<?php echo $editData->id; ?>">
            <label class="control-label col-sm-5" for="parent_id">Parent Category:</label>
            <div class="col-sm-7">
                <select class="form-control" id="edit_parent_item_id" name="parent_id" onchange="getSubCodeByParenId(this.value, 'edit_sub_code');">
                    <option value="">Select</option>
                    <?php
                    $parentCats = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
                    if (isset($parentCats) && !empty($parentCats)) {
                        foreach ($parentCats as $pcat) {
                            ?>
                            <option value="<?php echo $pcat['id'] ?>"<?php if(isset($editData->category_id) && $editData->category_id == $pcat['id']){ echo 'selected'; } ?>><?php echo $pcat['category_description'].'('.$pcat['category_id'].')'; ?></option>
                        <?php }
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="sub_code">Sub Code:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_sub_code" placeholder="Enter sub code" name="sub_code" value="<?php if(isset($editData->material_sub_id)){ echo $editData->material_sub_id; } ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="name">Name:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_sub_name" placeholder="name" name="name" value="<?php if(isset($editData->material_sub_description)){ echo $editData->material_sub_description; } ?>">
            </div>
        </div>
<?php }

if(isset($_GET['process_type']) && $_GET['process_type'] == 'parent_material_edit'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $edit_id    =   $_POST['edit_id'];
    $editData   =   getDataRowByTableAndId('inv_materialcategorysub',$edit_id);
?>
        <div class="form-group mt-3">
                            <label class="control-label col-sm-5" for="parent_id">Category:</label>
                            <div class="col-sm-7">
                                <select id="parent_id" class="form-control "
                                  name="parent_id" >
                                  <option value="0">Parent Category</option>
                                    <?php
                                    $category_resize_data = category_tree();
                                    $html = '';
                                    function generateOptions($category_resize_data, $indent = 0,$editData) {
                                        foreach ($category_resize_data as $key => $value) {
                                            echo '<option  value="'.$value['id'].'" ';
                                           
                                            if($value['id']==$editData->parent_id){
                                                echo 'selected="selected" ';
                                            }
                                           
                                            
                                           echo  ' >';
                                            echo  str_repeat('-', $indent * 2) . $value['id'].'-' .$value['category_description']. '</option>';
                                            if (isset($value['children']) && is_array($value['children']) && !empty($value['children'])) {
                                                generateOptions($value['children'], $indent + 1,$editData);
                                            }
                                        }
                                    }
                                    
                                    generateOptions($category_resize_data,$indent = 0,$editData);
                                    ?>
                                </select>

                                
                            </div>
                        </div>

        <div class="form-group">
            <input type="hidden" name="parent_material_update_id" value="<?php echo $editData->id; ?>">
            <label class="control-label col-sm-5" for="category_id">Category Id:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_category_id" placeholder="Enter Category Id" name="category_id" value="<?php if(isset($editData->category_id)){ echo $editData->category_id; } ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-5" for="name">Name:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="edit_parent_name" placeholder="name" name="name" value="<?php if(isset($editData->category_description)){ echo $editData->category_description; } ?>">
            </div>
        </div>
        <div class="form-group mt-3">
                            <label class="control-label col-sm-5" for="_order">Order:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="_order" placeholder="Order" name="_order" value="<?php if(isset($editData->_order)){ echo $editData->_order; } ?>">
                            </div>
                        </div>

    
<?php }
if(isset($_GET['process_type']) && $_GET['process_type'] == 'get_parent_category'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    echo "<option value=''>Please Select</option>";
    $tableData      = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
    if (isset($tableData) && !empty($tableData)) {
        foreach ($tableData as $data) { ?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['category_description'].'('.$data['category_id'].')'; ?></option>
            <?php
        }
    }
}
if(isset($_GET['process_type']) && $_GET['process_type'] == 'get_category_code'){
    include '../connection/connect.php';
    $catType   =   $_POST['cat_type'];
    $data_type  =   $_POST['data_type'];
    //echo $_POST['parent_cat'];

    global $conn;
    $sql            =   '';
    $defaultCode    =   '';    
    $feedback       =   '';    
    switch($catType){
        case 'parent':
            $table =    'inv_materialcategorysub';
            $sql.= "SELECT * FROM $table";
          //  $where =    ' where parent_id='.$_POST['parent_cat'];
            if(isset($where) && !empty($where)){
                $sql.= $where;
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $value          =   $result->num_rows + 1;
                $code           =  sprintf('%0' . 2 . 's', $value);
                $defaultCode    =  $code.'-00';
            }else{
                $defaultCode    =  '01-00';
            }




            break;
        case 'sub':
            $psql= "SELECT * FROM inv_materialcategorysub where id=".$_POST['parent_cat'];
            $presult = $conn->query($psql);
            
            $table =    'inv_material';
            $where =    ' where material_id='.$_POST['parent_cat'];
            $sql.= "SELECT * FROM $table";
            if(isset($where) && !empty($where)){
                $sql.= $where;
            }
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                $parentPrefixcode   =  explode('-', $presult->fetch_object()->category_id);
                $code               =  sprintf('%0' . 2 . 's', $result->num_rows + 1);
                $defaultCode        =  $parentPrefixcode[0].'-'.$code;
            }else{
                $parentPrefixcode   =  explode('-', $presult->fetch_object()->category_id);
                $defaultCode        =  $parentPrefixcode[0].'-01';
            }
            break;
        case 'level3':

            //level 2 data:
            $level2sql      =   "SELECT * FROM inv_materialcategory where id=".$_POST['level_2_id'];
            $level2result   =   $conn->query($level2sql);
            $level2Data     =   $level2result->fetch_object();

            //level 1 data:
            $level1sql      =   "SELECT * FROM inv_materialcategorysub where id=".$level2Data->category_id;
            $level1result   =   $conn->query($level1sql);

            $table =    'inv_material_level3';
            $where =    ' where category_sub_id='.$_POST['level_2_id'];
            $sql.= "SELECT * FROM $table";
            if(isset($where) && !empty($where)){
                $sql.= $where;
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                $parentPrefixcode   =  explode('-', $level1result->fetch_object()->category_id);
                $level2Prefixcode   =  explode('-', $level2Data->material_sub_id);
                $code               =  sprintf('%0' . 2 . 's', $result->num_rows + 1);
                $defaultCode        =  $parentPrefixcode[0].'-'.$level2Prefixcode[1].'-'.$code.'-00-000';
            }else{

                $parentPrefixcode   =  explode('-', $level1result->fetch_object()->category_id);
                $level2Prefixcode   =  explode('-', $level2Data->material_sub_id);

                $defaultCode        =  $parentPrefixcode[0].'-'.$level2Prefixcode[1].'-01-00-000';
            }
            break;
        case 'level4':

            //level 2 data:
            $level3sql      =   "SELECT * FROM inv_material_level3 where id=".$_POST['level_3_id'];
            $level3result   =   $conn->query($level3sql);
            $level3Data     =   $level3result->fetch_object();

            //level 2 data:
            $level2sql      =   "SELECT * FROM inv_materialcategory where id=".$level3Data->category_sub_id;
            $level2result   =   $conn->query($level2sql);
            $level2Data     =   $level2result->fetch_object();

            //level 1 data:
            $level1sql      =   "SELECT * FROM inv_materialcategorysub where id=".$level3Data->category_id;
            $level1result   =   $conn->query($level1sql);
            $level1Data     =   $level1result->fetch_object();

            $table =    'inv_material_level4';
            $where =    ' where level3_id='.$_POST['level_3_id'];
            $sql.= "SELECT * FROM $table";
            if(isset($where) && !empty($where)){
                $sql.= $where;
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                $l1Prefixcode   =  explode('-', $level1Data->category_id);
                $l2Prefixcode   =  explode('-', $level2Data->material_sub_id);
                $l3Prefixcode   =  explode('-', $level3Data->material_level3_code);
                $code               =  sprintf('%0' . 2 . 's', $result->num_rows + 1);
                $defaultCode        =  $l1Prefixcode[0].'-'.$l2Prefixcode[1].'-'.$l3Prefixcode[2].'-'.$code.'-000';
            }else{

                $l1Prefixcode   =  explode('-', $level1Data->category_id);
                $l2Prefixcode   =  explode('-', $level2Data->material_sub_id);
                $l3Prefixcode   =  explode('-', $level3Data->material_level3_code);

                $defaultCode        =  $l1Prefixcode[0].'-'.$l2Prefixcode[1].'-'.$l3Prefixcode[2].'-01-000';
            }
            break;
        case 'mat':
            /*
            <pre>Array
(
    [cat_type] => mat
    [data_type] => ajax
    [parent_cat] => 47
    [main_sub_item_id] => 119
    [material_level3_id] => 23
    [material_level4_id] => 16
)
</pre>
*/

            $l1pId          =   $_POST['parent_cat'];
            $l2pId          =   $_POST['main_sub_item_id'];
            $l3pId          =   $_POST['material_level3_id'];
            $l4pId          =   $_POST['material_level4_id'];
            //level 3 data:
            $level3sql      =   "SELECT * FROM inv_material_level3 where id=".$l3pId;
            $level3result   =   $conn->query($level3sql);
            $level3Data     =   $level3result->fetch_object();

            //level 2 data:
            $level2sql      =   "SELECT * FROM inv_materialcategory where id=".$l2pId;
            $level2result   =   $conn->query($level2sql);
            $level2Data     =   $level2result->fetch_object();

            //level 1 data:
            $level1sql      =   "SELECT * FROM inv_materialcategorysub where id=".$l1pId;
            $level1result   =   $conn->query($level1sql);
            $level1Data     =   $level1result->fetch_object();

            //level 4 data:
            $level4sql      =   "SELECT * FROM inv_material_level4 where id=".$l4pId;
            $level4result   =   $conn->query($level4sql);
            $level4Data     =   $level4result->fetch_object();
            
            $table =    'inv_material';
            $where =    ' where material_id='.$l1pId.' and material_sub_id='.$l2pId.' and material_level3_id='.$l3pId.' and material_level4_id='.$l4pId;
            $sql.= "SELECT * FROM $table";
            if(isset($where) && !empty($where)){
                $sql.= $where;
            }
            
            //echo $sql; exit;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $l1Prefixcode   =  explode('-', $level1Data->category_id);
                $l2Prefixcode   =  explode('-', $level2Data->material_sub_id);
                $l3Prefixcode   =  explode('-', $level3Data->material_level3_code);
                $l4Prefixcode   =  explode('-', $level4Data->material_level4_code);
                $code           =  sprintf('%0' . 3 . 's', $result->num_rows + 1);
                $defaultCode    =  $l1Prefixcode[0].'-'.$l2Prefixcode[1].'-'.$l3Prefixcode[2].'-'.$l4Prefixcode[3].'-'.$code;
            }else{
                $l1Prefixcode   =  explode('-', $level1Data->category_id);
                $l2Prefixcode   =  explode('-', $level2Data->material_sub_id);
                $l3Prefixcode   =  explode('-', $level3Data->material_level3_code);
                $l4Prefixcode   =  explode('-', $level4Data->material_level4_code);
                $code               =  '001';
                $defaultCode        =  $l1Prefixcode[0].'-'.$l2Prefixcode[1].'-'.$l3Prefixcode[2].'-'.$l4Prefixcode[3].'-'.$code;
            }
            break;
    }
    $feedback =  [
        'code' =>   $defaultCode
    ];
    echo json_encode($feedback);
}

if(isset($_GET['process_type']) && $_GET['process_type'] == 'getItemCodeByParam'){
    session_start();
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $qty_unit   =   '';
    $table      =   $_POST['table']." where id=".$_POST['id'];
    $field      =   $_POST['field'];
    $code       = getItemCodeByParam($table, $field);
    if(isset($_POST['qty_unit']) && !empty($_POST['qty_unit'])){
        $qty_unit   = getItemCodeByParam($table, 'qty_unit');
    }

    // get material informtion for brand name:
    $materialData           =   getDataRowIdAndTable($table);
	
    // Get Opening quantity:
    $param                  =   [];
    $param['mb_materialid'] =   $code;
    $param['warehouse_id']  =   $_SESSION['logged']['warehouse_id'];
    
    $totalStock     =   get_product_stock_by_material_id($param);
    
    $feedback   =   [
        'status'    =>  'success',
        'message'   =>  'Found Code',
        'data'      =>  $code,
        'qty_unit'  =>  $qty_unit,
        'totalStock'  =>  $totalStock,
        'brand_name'  =>  (isset($materialData->brand_name) && !empty($materialData->brand_name) ? $materialData->brand_name : ''),
        'part_no'  =>  (isset($materialData->part_no) && !empty($materialData->part_no) ? $materialData->part_no : ''),
    ];    
    echo json_encode($feedback);
}
?>
<?php

if(isset($_GET['process_type']) && $_GET['process_type'] == 'add_new_part_number'){
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $edit_id    =   $_POST['edit_id'];
    $editData   =   getDataRowByTableAndId('inv_material',$edit_id);

     global $conn;
   $sql_partno = "SELECT * FROM inv_material_partno_detail WHERE status=0 AND inv_material_id=$edit_id ";
    $partno_result = $conn->query($sql_partno);
    
    $material_key_array=[];
     while ($part_row = $partno_result->fetch_assoc()) {
        $material_key_array[]=$part_row["part_no"];
     }

?> 
        <div class="modal_body_centerize"> 
            <table style="width:100%;" >
                <tr>
                    <td class="col-sm-5">ID:</td>
                    <td class="col-sm-7">
                        <input type="hidden" name="material_update_id" value="<?php echo $editData->id; ?>">
                        <input type="text" id="_id" readonly class="form-control"  value="<?php echo $editData->id; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Parent Category:</td>
                    <td class="col-sm-7">
                        <input type="hidden" class="form-control"  placeholder="name" name="parent_item_id" value="<?php if(isset($editData->material_id)){ echo $editData->material_id; } ?>">
                     <input type="text" class="form-control"  placeholder="name" value="<?php if(isset($editData->material_id)){ $dataresult =   getDataRowByTableAndId('inv_materialcategorysub', $editData->material_id); echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : ''); } ?>"readonly> 
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Sub Category:</td>
                    <td class="col-sm-7">
                        <input type="hidden" class="form-control"  placeholder="name" name="sub_item_id" value="<?php if(isset($editData->material_sub_id)){ echo $editData->material_sub_id; } ?>">
                    <input type="text" class="form-control"  placeholder="name" value="<?php if(isset($editData->material_sub_id)){ 
                    $dataresult =   getDataRowByTableAndId('inv_materialcategory', $editData->material_sub_id); echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : ''); } ?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Level-3:</td>
                    <td class="col-sm-7">
                       <input type="hidden" class="form-control"  placeholder="name" name="material_level3_id" value="<?php if(isset($editData->material_level3_id)){ echo $editData->material_level3_id; } ?>">
                    <input type="text" class="form-control"  placeholder="name" value="<?php if(isset($editData->material_level3_id)){ 
                    $dataresult =   getDataRowByTableAndId('inv_material_level3', $editData->material_level3_id); echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level3_description : ''); } ?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Level-4:</td>
                    <td class="col-sm-7">
                        <input type="hidden" class="form-control"  placeholder="name" name="material_level4_id" value="<?php if(isset($editData->material_level4_id)){ echo $editData->material_level4_id; } ?>">
                    <input type="text" class="form-control"  placeholder="name" value="<?php if(isset($editData->material_level4_id)){ 
                    $dataresult =   getDataRowByTableAndId('inv_material_level4', $editData->material_level4_id); echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level4_description : ''); } ?>"readonly>
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Material Code:</td>
                    <td class="col-sm-7">
                        <input type="text" class="form-control" id="item_edit_code" placeholder="Enter item code" name="item_code" value="<?php if(isset($editData->material_id_code)){ echo $editData->material_id_code; } ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Name:</td>
                    <td class="col-sm-7">
                        <input type="text" readonly class="form-control"  placeholder="name" name="name" value="<?php if(isset($editData->material_description)){ echo $editData->material_description; } ?>">
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Current Part No:</td>
                    <td class="col-sm-7">
                        <input readonly type="text" class="form-control"  placeholder="Current Part No" name="part_no" value="<?php if(isset($editData->part_no)){ echo $editData->part_no; } ?>">
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">Previous Part No:</td>
                    <td class="col-sm-7">
                         <?php
                            echo  implode(",", $material_key_array);
                            ?>
                    </td>
                </tr>
                <tr>
                    <td class="col-sm-5">New Part No:</td>
                    <td class="col-sm-7">
                       <input id="new_part_no" type="text" class="form-control"  placeholder="New Part No" name="new_part_no" value="">
                    </td>
                </tr>
            </table>
            
            
            
           
            
        </div>
<?php } ?>