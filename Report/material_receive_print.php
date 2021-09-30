<?php include('header.php');
$id=$_GET['id'];
 ?>
            <!-- Left Sidebar End -->
			
			<!-- DataTables -->
        <link href="plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
			
		


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">MRR</h4>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								
							</div>
							<div class="col-lg-1"></div>
						</div>

                        <div class="row" id="printableArea" style="display:block;">
								<?php
								$sql	=	"select * from `inv_receive` where `mrr_no`='$id'";
								$result = mysqli_query($link, $sql);
								$row=mysqli_fetch_array($result);
								?>
                            <div class="col-lg-12">
								<table width='100%'>				
									<tr>
										<td style="text-align:center"><div class="headbody">
											<h1 align="center"><img src="images/logo.png" width="162" height=""></h1>
											<h2 align="center">E-Enginerring Limited</h2>
											<p align="center">Khawaja Tower(2nd Floor).95,Bir uttam AK Khandakar Road,Mohakhali C/A</p>
											<h3 align="center">MRR</h3>
										</div></td>
									</tr>
								</table>
								<table width='100%'>				
									<tr>
										<td>MRRNo: <b><?php echo$row['mrr_no']; ?></b></td>
										<td align="center"></td>
										<td style="float:right;">Date : <?php 
											$cDate = strtotime($row['date']);
											$dDate = date("jS \of F Y",$cDate);
											echo $dDate;?></td>
									</tr>
								</table>
								</br>
								<table id="" class="table table-bordered">
									<thead>
									<tr>
										<th style="text-align:center;">Description</th>
										<th style="text-align:center;">Quantity</th>
										<th style="text-align:center;">Remarks</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$sqlt	=	"select * from `inv_receivedetail` where `mrr_no`='$id'";
									$resultt = mysqli_query($link, $sql);
									while($rowt=mysqli_fetch_array($resultt))
											{
									?>
										<tr style="text-align:center;">
											<td><div style="" class=""><?php echo $rowt['material_id'] ?></div></td>
											<td><div style="" class=""><?php echo $rowt['receive_qty'] ?></div></td>
											<td><div style="" class=""><?php echo $rowt['unit_price'] ?></div></td>
											</tr>
									<?php } ?>
									<tr style="text-align:center;">
										<td><div style="" class="">Total</div></td>
										<td><div style="" class="">
										<?php  
											    $sql2 = "SELECT sum(quantity) FROM  `gate_pass` where `challan_no`='$id'";
												$result2 = mysqli_query($link, $sql2);
												for($i=0; $row2 = mysqli_fetch_array($result2); $i++){
												$fgfg2=$row2['sum(quantity)'];
												echo $fgfg2 ;
												}
										
										?>
										</div></td>
										<td></td>
									</tr>
									</tbody>
								</table>
								<table class="table">
									<tr>
										<td style="text-align:center;"><p style=""></br></br>__________________</p>
											<p style="">Received By</p></td>
										<td style="text-align:center;"><p style=""></br></br>__________________</p>
											<p style="">Authorized Signature</p></td>
										<td style="text-align:center;"><p style=""></br></br>__________________</p>
											<p style="">for Saif Powertec Ltd.</p></td>
									</tr>
								</table>
							</div>
						</div>
						<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
							
							<script>
							function printDiv(divName) {
								 var printContents = document.getElementById(divName).innerHTML;
								 var originalContents = document.body.innerHTML;

								 document.body.innerHTML = printContents;

								 window.print();

								 document.body.innerHTML = originalContents;
							}
							</script>
							<button class="btn btn-default" onclick="window.location.href = 'gate_pass_list.php'"><i class="fa fa-hand-o-right" aria-hidden="true" style="  font-size: 17px;"> Back To Gate Pass List</i></button>
                    </div> <!-- container -->
                    </div> <!-- container -->
					

                </div> <!-- content -->

                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec</a>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>


		
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>
		
		  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="plugins/datatables/dataTables.colVis.js"></script>
        <script src="plugins/datatables/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>

        <!-- Counter js  -->
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="plugins/morris/morris.min.js"></script>
		<script src="plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
		
		
		

    </body>
</html>
