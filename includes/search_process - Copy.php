<?php

if (isset($_GET['search_data']) && $_GET['search_data'] == 'material_receive_search_form') {
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $requisition_from_date  =   (isset($_REQUEST['from_date']) && !empty($_REQUEST['from_date']) ? $_REQUEST['from_date'] : '');
    $requisition_from_date  =   (isset($_REQUEST['from_date']) && !empty($_REQUEST['from_date']) ? $_REQUEST['from_date'] : '');
    $requisition_todate     =   (isset($_REQUEST['todate']) && !empty($_REQUEST['todate']) ? $_REQUEST['todate'] : '');
    $mrr_no                 =   (isset($_REQUEST['mrr_no']) && !empty($_REQUEST['mrr_no']) ? $_REQUEST['mrr_no'] : '');
    $supplyer_id            =   (isset($_REQUEST['supplyer_id']) && !empty($_REQUEST['supplyer_id']) ? $_REQUEST['supplyer_id'] : '');
    $requisition_id         =   (isset($_REQUEST['requisition_id']) && !empty($_REQUEST['requisition_id']) ? $_REQUEST['requisition_id'] : '');
    $sql                    =   '';
    $where                  =   [];
    $where_sql_status       =   false;
    $receiveDataList          =   [];
    $sql.="SELECT * FROM inv_receive";
    $status     =   'error';
    $message    =   'No data found';
    $data       =   '';
    
    if(isset($requisition_from_date) && !empty($requisition_from_date)){
        $where_sql_status   =   true;
        $where[]=" mrr_date >='$requisition_from_date' ";
    }
    if(isset($requisition_todate) && !empty($requisition_todate)){
        $where_sql_status   =   true;
        $where[]=" mrr_date <='$requisition_todate' ";
    }
    if(isset($mrr_no) && !empty($mrr_no)){
        $where_sql_status   =   true;
        $where[]=" mrr_no ='$mrr_no' ";
    }
    if(isset($supplyer_id) && !empty($supplyer_id)){
        $where_sql_status   =   true;
        $where[]=" supplier_id ='$supplyer_id' ";
    }
    
    if($where_sql_status){
        $sql.=" WHERE".implode("AND",$where);
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $receiveDataList[] = $row;
        }        
    ?>
        <table class="table table-striped table-bordered data-list-table" id="material_receive_list">            
            <?php
            if (isset($receiveDataList) && !empty($receiveDataList)) {
                ?>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>MRR</th>
                        <th>Supplier</th>
                        <th>Total Quantity</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="material_receive_list_body">
                    <?php
                    $sl = 1;
                    foreach ($receiveDataList as $listData) {
                        ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo date("jS F, Y", strtotime($listData->mrr_date)); ?></td>
                            <td><?php echo $listData->mrr_no; ?></td>
                            <td><?php echo $listData->supplier_id; ?></td>
                            <td><?php echo $listData->no_of_material; ?></td>
                            <td><?php echo $listData->receive_total; ?></td>
                            <td style="text-align: right;">
                                <a href="receive_edit.php?edit_id=<?php echo $listData->id; ?>">Edit</a> | Details
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            <?php } else { ?>
                <thead>
                    <tr>
                        <th>Sorry, Database have no information!</th>
                    </tr>
                </thead>
            <?php } ?>
        </table>
    <?php }else{ ?>
        <div class="alert alert-info">
            <strong>Sorry</strong> Database have no information!
        </div>
    <?php }
}
if (isset($_GET['search_data']) && $_GET['search_data'] == 'material_issue_search_form') {
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $issue_id               =   (isset($_REQUEST['issue_id']) && !empty($_REQUEST['issue_id']) ? $_REQUEST['issue_id'] : '');
    $sql                    =   '';
    $where                  =   [];
    $where_sql_status       =   false;
    $receiveDataList          =   [];
    $sql.="SELECT * FROM inv_issue";
    $status     =   'error';
    $message    =   'No data found';
    $data       =   '';
    
    if(isset($issue_id) && !empty($issue_id)){
        $where_sql_status   =   true;
        $where[]=" issue_id >='$issue_id' ";
    }
    
    if($where_sql_status){
        $sql.=" WHERE".implode("AND",$where);
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $receiveDataList[] = $row;
        }        
    ?>
        <table class="table table-striped table-bordered data-list-table" id="material_receive_list">            
            <?php
            if (isset($receiveDataList) && !empty($receiveDataList)) {
                ?>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Issue ID</th>
                        <th>Total Quantity</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="material_receive_list_body">
                    <?php
                    $sl = 1;
                    foreach ($receiveDataList as $listData) {
                        ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo date("jS F, Y", strtotime($listData->issue_date)); ?></td>
                            <td><?php echo $listData->issue_id; ?></td>
                            <td><?php echo $listData->no_of_material; ?></td>
                            <td><?php echo $listData->issue_total; ?></td>
                            <td style="text-align: right;">
                                <a href="issue_edit.php?edit_id=<?php echo $listData->id; ?>">Edit</a> | Details
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            <?php } else { ?>
                <thead>
                    <tr>
                        <th>Sorry, Database have no information!</th>
                    </tr>
                </thead>
            <?php } ?>
        </table>
    <?php }else{ ?>
        <div class="alert alert-info">
            <strong>Sorry</strong> Database have no information!
        </div>
    <?php }
}
if (isset($_GET['search_data']) && $_GET['search_data'] == 'material_rlp_search_form') {
    include '../connection/connect.php';
    include '../helper/utilities.php';
    $requisition_from_date  =   (isset($_REQUEST['from_date']) && !empty($_REQUEST['from_date']) ? $_REQUEST['from_date'] : '');
    $requisition_from_date  =   (isset($_REQUEST['from_date']) && !empty($_REQUEST['from_date']) ? $_REQUEST['from_date'] : '');
    $requisition_todate     =   (isset($_REQUEST['todate']) && !empty($_REQUEST['todate']) ? $_REQUEST['todate'] : '');
    $rlp_no                 =   (isset($_REQUEST['rlp_no']) && !empty($_REQUEST['rlp_no']) ? $_REQUEST['rlp_no'] : '');
    $supplyer_id            =   (isset($_REQUEST['supplyer_id']) && !empty($_REQUEST['supplyer_id']) ? $_REQUEST['supplyer_id'] : '');
    $requisition_id         =   (isset($_REQUEST['requisition_id']) && !empty($_REQUEST['requisition_id']) ? $_REQUEST['requisition_id'] : '');
    $sql                    =   '';
    $where                  =   [];
    $where_sql_status       =   false;
    $receiveDataList          =   [];
    $sql.="SELECT * FROM inv_rlpdetail";
    $status     =   'error';
    $message    =   'No data found';
    $data       =   '';
    
    if(isset($requisition_from_date) && !empty($requisition_from_date)){
        $where_sql_status   =   true;
        $where[]=" rlp_date >='$requisition_from_date' ";
    }
    if(isset($requisition_todate) && !empty($requisition_todate)){
        $where_sql_status   =   true;
        $where[]=" rlp_date <='$requisition_todate' ";
    }
    if(isset($rlp_no) && !empty($rlp_no)){
        $where_sql_status   =   true;
        $where[]=" rlp_no ='$rlp_no' ";
    }
    if(isset($supplyer_id) && !empty($supplyer_id)){
        $where_sql_status   =   true;
        $where[]=" supplier_id ='$supplyer_id' ";
    }
    
    if($where_sql_status){
        $sql.=" WHERE".implode("AND",$where);
    }
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $receiveDataList[] = $row;
        }        
    ?>
        <div class="" id="printableArea" style="display:block;">
		<table class="table table-bordered data-list-table" id="material_rlp_list">            
            <?php
            if (isset($receiveDataList) && !empty($receiveDataList)) {
                ?>
				<center><h5>Saif Electrical Manufacturing Limited</h5><span>Khaja Tower, 95 Bir Uttam AK Khandokar Road, Mohakhali C/A, Dhaka-1212</br>Request for Local Purchase</span></center>
                <thead>
                    <tr>
                        <th>SL.No</th>
                        <th>Item Description</th>
                        <th>Purpose of Purchase</th>
                        <th>Quantity</th>
                        <th>Estimated Price</th>
                        <th>Total Estimated Price</th>
                        <th>Supplier Details</th>
                    </tr>
                </thead>
                <tbody id="material_receive_list_body">
                    <?php
                    $sl = 1;
					$sum = 0;
                    foreach ($receiveDataList as $listData) {
                        ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php echo $listData->material_id; ?></td>
                            <td><?php echo 'Purpose'; ?></td>
                            <td><?php echo $listData->rlp_qty; ?></td>
                            <td><?php echo $listData->unit_price; ?></td>
                            <td><?php echo $listData->total_rlp; ?></td>
                            <td><?php echo 'Supplier'; ?></td>
                        </tr>
                    <?php
							$sum+= $listData->total_rlp;
					} ?>
						<tr>
                            <td colspan="5">Total:</td>
                            <td><b><?php echo $sum; ?></b></td>
                            <td></td>
                        </tr>
                </tbody>
            <?php } else { ?>
                <thead>
                    <tr>
                        <th>Sorry, Database have no information!</th>
                    </tr>
                </thead>
            <?php } ?>
        </table>
		<p> In Words : <b><span><?php
									// Adapted from a buggy script original written by vgurudev at nikshepa dot com
									// You can find the original script at: http://php.net/manual/en/function.number-format.php
									function convertNumberToWords($number){
										//A function to convert numbers into readable words with Cores, Lakhs and Thousands.
										$words = array(
										'0'=> '' ,'1'=> 'one' ,'2'=> 'two' ,'3' => 'three','4' => 'four','5' => 'five',
										'6' => 'six','7' => 'seven','8' => 'eight','9' => 'nine','10' => 'ten',
										'11' => 'eleven','12' => 'twelve','13' => 'thirteen','14' => 'fouteen','15' => 'fifteen',
										'16' => 'sixteen','17' => 'seventeen','18' => 'eighteen','19' => 'nineteen','20' => 'twenty',
										'30' => 'thirty','40' => 'fourty','50' => 'fifty','60' => 'sixty','70' => 'seventy',
										'80' => 'eighty','90' => 'ninty');
										
										//First find the length of the number
										$number_length = strlen($number);
										//Initialize an empty array
										$number_array = array(0,0,0,0,0,0,0,0,0);        
										$received_number_array = array();
										
										//Store all received numbers into an array
										for($i=0;$i<$number_length;$i++){    
											$received_number_array[$i] = substr($number,$i,1);    
										}
										//Populate the empty array with the numbers received - most critical operation
										for($i=9-$number_length,$j=0;$i<9;$i++,$j++){ 
											$number_array[$i] = $received_number_array[$j]; 
										}
										$number_to_words_string = "";
										//Finding out whether it is teen ? and then multiply by 10, example 17 is seventeen, so if 1 is preceeded with 7 multiply 1 by 10 and add 7 to it.
										for($i=0,$j=1;$i<9;$i++,$j++){
											//"01,23,45,6,78"
											//"00,10,06,7,42"
											//"00,01,90,0,00"
											if($i==0 || $i==2 || $i==4 || $i==7){
												if($number_array[$j]==0 || $number_array[$i] == "1"){
													$number_array[$j] = intval($number_array[$i])*10+$number_array[$j];
													$number_array[$i] = 0;
												}
												   
											}
										}
										$value = "";
										for($i=0;$i<9;$i++){
											if($i==0 || $i==2 || $i==4 || $i==7){    
												$value = $number_array[$i]*10; 
											}
											else{ 
												$value = $number_array[$i];    
											}            
											if($value!=0)         {    $number_to_words_string.= $words["$value"]." "; }
											if($i==1 && $value!=0){    $number_to_words_string.= "Crores "; }
											if($i==3 && $value!=0){    $number_to_words_string.= "Lakhs ";    }
											if($i==5 && $value!=0){    $number_to_words_string.= "Thousand "; }
											if($i==6 && $value!=0){    $number_to_words_string.= "Hundred &amp; "; }            
										}
										if($number_length>9){ $number_to_words_string = "Sorry This does not support more than 99 Crores"; }
										return ucwords(strtolower($number_to_words_string)." Taka Only.");
									}
									  echo convertNumberToWords($sum);
										
									?></span></b></p>
		<p> Terms and Conditions :</span></p>
		<table class="table table-bordered data-list-table">
			<tr>
				<td><div style="min-height:50px;"></div></td>
				<td><div style="min-height:50px;"></div></td>
				<td><div style="min-height:50px;"></div></td>
				<td><div style="min-height:50px;"></div></td>
				<td><div style="min-height:50px;"></div></td>
				<td><div style="min-height:50px;"></div></td>
				<td><div style="min-height:50px;"></div></td>
			</tr>
			<tr>
				<td><center><span>Prepared By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
				<td><center><span>Checked By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
				<td><center><span>Checked By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
				<td><center><span>Verified By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
				<td><center><span>Verified By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
				<td><center><span>Verified By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
				<td><center><span>Approved By By</br>Md Shohidul Islam</br>Manager-Credit & Sample Control</span></center></td>
			</tr>
		</table>
		</div>	
		<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>				
		<script>
		function printDiv(printableArea) {
			 var printContents = document.getElementById(printableArea).innerHTML;
			 var originalContents = document.body.innerHTML;

			 document.body.innerHTML = printContents;

			 window.print();

			 document.body.innerHTML = originalContents;
		}
		</script>
    <?php }else{ ?>
        <div class="alert alert-info">
            <strong>Sorry</strong> Database have no information!
        </div>
    <?php }
}