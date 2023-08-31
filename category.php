<?php include 'header.php' ?>

<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
.ui-widget-content {
	max-height: 500px; 

}
</style>


<style type="text/css">
  .tree li {
        list-style-type: none;
    margin: 0;
    padding: 1px 2px 0 2px;
    position: relative;
}
.tree li::before, 
.tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:2px solid #000;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:2px solid #000;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:2px solid #000;
    border-radius:3px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none;
    cursor:pointer;
}
.tree>ul>li::before,
.tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:27px
}
.tree li span:hover {
    background: white;
    border:2px solid #94a0b4;
    }

[aria-expanded="false"] > .expanded,
[aria-expanded="true"] > .collapsed {
  display: none;
}


    
    .mt-3{
        margin-top: 30px !important;
    }
</style>
<?php


    $category_resize_data = category_tree();
    
 $number_of_category = sizeof($category_resize_data);

 if($number_of_category < 10){
    $number_of_category = "0".$number_of_category;
 }


    function buildTreeCollapse(array $category_resize_data, $parentId = 0) {
    $branch = [];

    foreach ($category_resize_data as $element) {
        
        if ($element['parent_id'] == $parentId) {
            $children = buildTreeCollapse($category_resize_data, $element['id']);
            if ($children) {
                $element['children'] = $children;
            }
            $branch[] = $element;
        }
    }

    return $branch;
}

    // Organize data into a nested array
    $tree = buildTreeCollapse($category_resize_data);
    ?>


<?php
function removeAllSpace($string=''){
  $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string);
}
function generateTreeMenuHtmlCollapse($items) {
        $html = '<ul>';
        foreach ($items as $item) {
            $html .= '';
            
            // Check if the item has children
            if (!empty($item['children'])) {
              $html .='<li>
                        <span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#page__'.removeAllSpace($item['category_description']).'" aria-expanded="true" aria-controls="page__'.removeAllSpace($item['category_description']).'"  >
                          <i class="collapsed"> <i class="fas fa-folder"></i></i>
                          <i class="expanded"><i class="far fa-folder-open"></i></i> '.$item['category_id'].'-'.$item['category_description'].'</a> <button type="button" class="btn btn-sm" onclick="openParentEditForm('.$item['id'].')"><i class="fa fa-edit" aria-hidden="true"></i></button> </span>
                        <ul>
                          <div id="page__'.removeAllSpace($item['category_description']).'" class="collapse show">';
                          $html .= generateTreeMenuHtmlCollapse($item['children']);
                            
                        $html .=  '</div>
                        </ul>
                      </li>';
            } else {
                $html .= '<li><span><i class="far fa-file"></i><a attr_cat_id='.$item['id'].' class=" ml-1 editCategory" href="#!">';
                $html .= $item['category_id'].'-'.$item['category_description'];
                $html .= '</a><button type="button" class="btn btn-sm" onclick="openParentEditForm('.$item['id'].')"><i class="fa fa-edit" aria-hidden="true"></i></button></span></li>';
            }

            
        }
        $html .= '</ul>';
        return $html;
    }


 ?>
<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
        <li class="breadcrumb-item active">
            <button class="btn btn-flat btn-default pull-left" onclick="openModal('tree_category_modal');"><i class="fa fa-plus"></i> Category</button>
        </li>
    </ol>
     <div class="row">
   
   <div class="col-md-6">
     <div class="tree ">
              <ul>
                <li><span><a style="color:#000; text-decoration:none;" data-toggle="collapse" href="#AllCategory" aria-expanded="true" aria-controls="AllCategory"><i class="collapsed"><i class="fas fa-folder"></i></i>
                    <i class="expanded"><i class="far fa-folder-open"></i></i> All Category</a></span>
                  <div id="AllCategory" class="collapse show">

                  <?php  echo generateTreeMenuHtmlCollapse($tree); ?>
                    
                  </div>
                </li>
              </ul>
            </div>
   </div>
   <div class="col-md-6">
       <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Material category <a class="btn btn-sm btn-info" href="category.php">Refresh</a></div>
        <div class="card-body">
            <div class="div-center">
              
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class="table-responsive data-table-wrapper">
                                <table id="example1" class="table table-condensed table-hover table-bordered site_custome_table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                            <th>Order</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php
                                        $parentCats = getTableDataByTableName('inv_materialcategorysub', '', 'category_description');
                                        if (isset($parentCats) && !empty($parentCats)) {
                                            foreach ($parentCats as $pcat) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $pcat['category_id']; ?></td>
                                                    <td><?php echo $pcat['category_description']; ?></td>
                                                    <td><?php echo $pcat['_order']; ?></td>
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
                        
                    </div>
                    
                    
                
            </div>
        </div>
    </div>
   </div>
 </div>
    <!-- DataTables Example -->
    
</div>
<div class="modal fade" id="tree_category_modal" role="dialog">
    <form id="parent_item_added_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Category add</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div class="modal_body_centerize">                    
                        <div class="form-group mt-3">
                            <label class="control-label col-sm-5" for="category_id">Category:</label>
                            <div class="col-sm-7">
                                <select id="parent_id" class="form-control "
                                  name="parent_id"  onchange="getMainCategoryCode(this.value,'category_id');" >
                                  <option value="0">Parent Category</option>
                                    <?php
                                    $html = '';
                                    function generateOptions($category_resize_data, $indent = 0) {
                                        foreach ($category_resize_data as $key => $value) {
                                            echo '<option value="' . $value['id'] . '">' . str_repeat('-', $indent * 2) . $value['category_id'].'-' .$value['category_description']. '</option>';
                                            if (is_array($value['children']) && !empty($value['children'])) {
                                                generateOptions($value['children'], $indent + 1);
                                            }
                                        }
                                    }
                                    
                                    generateOptions($category_resize_data);
                                    ?>
                                </select>

                                
                            </div>
                        </div>                  
                        
                        <div class="form-group mt-3" style="">
                            <label class="control-label col-sm-5" for="category_id">Category Code:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="category_id" placeholder="Category Code" name="category_id" value="<?php echo $number_of_category; ?>-00">
                            </div>
                        </div>  
                        <br>            
                        
                        <div class="form-group mt-3">
                            <label class="control-label col-sm-5" for="name">Name:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="parent_name" placeholder="name" name="name">
                            </div>
                        </div>
                        <br>     
                        <div class="form-group mt-3">
                            <label class="control-label col-sm-5" for="_order">Order:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="_order" placeholder="Order" name="_order">
                            </div>
                        </div>
                       <br>     
                        
                    </div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" onclick="processParentItems('parent_item_added_form_value')">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="parent_item_edit_form" role="dialog">
    <form id="parent_item_edit_form_value">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal_header_custom_background">
                    <h4 class="modal-title">Category add</h4>
                </div>
                <div class="modal-body modal_body_custom_background">
                    <div class="modal_body_centerize">
                        <div id="parent_material_edit_data_section"></div>
                    </div>
                </div>
                <div class="modal-footer modal_footer_custom_background">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-default" onclick="processParentItems('parent_item_edit_form_value')">Update</button>
                </div>
            </div>
        </div>
    </form>
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
    $('#example4').DataTable();
} );

$(document).on("click",".sa-confirm-button-container",function(){
    location.reload();
})
</script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

