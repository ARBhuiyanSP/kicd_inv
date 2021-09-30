<style>
    .dtext{
        text-decoration:underline;
    }
</style>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="card mb-3">


    <div class="card-body">
        <form class="form-horizontal" action="" id="warehouse_stock_search_form" method="GET">
            <div class="table-responsive">          
                <table class="table table-borderless search-table">
                    <tbody>
                        <tr>  


                            <td>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

<center>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="printableArea">
            <div class="row">
                <div class="col-sm-12">	
                    <center>
                        <p>
                            <img src="images/Saif_Engineering_Logo_165X72.png" height="100px;"/><br>
                            <span>All Material Information Report</span><br>

                        </p>
                    </center>
                </div>
            </div>
            <table id="" class="table table-bordered table-striped ">
                <thead>
                    <tr>
                        <th>Parent category</th>
                        <th>Sub category</th>
                        <th>Cat-3</th>
                        <th>Cat-4</th>
                        <th>Material Code</th>
                        <th width="15%">Material Name</th>
                        <th>Part No</th>
                        <th width="15%">Specification</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM inv_material_temp  GROUP BY `material_id`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php
                                $dataresult = getDataRowByTableAndId('inv_materialcategorysub', $row['material_id']);
                                echo (isset($dataresult) && !empty($dataresult) ? $dataresult->category_description : '');
                                echo '</br>' . (isset($dataresult) && !empty($dataresult) ? $dataresult->category_id : '');
                                ?>
                            </td>
                            <td colspan="8"></td>
                        </tr>
                        <?php
                        $material_id = $row['material_id'];
                        $sqlall = "SELECT * FROM inv_material_temp WHERE `material_id` = '$material_id' GROUP BY `material_sub_id`;";
                        $resultall = mysqli_query($conn, $sqlall);
                        while ($rowall = mysqli_fetch_array($resultall)) {
                            ?>

                            <tr>
                                <td></td>
                                <td>
                                    <?php
                                    $dataresult = getDataRowByTableAndId('inv_materialcategory', $rowall['material_sub_id']);
                                    echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_description : '');
                                    echo '</br>' . (isset($dataresult) && !empty($dataresult) ? $dataresult->material_sub_id : '');
                                    ?>
                                </td>
                                <td colspan="7"></td>
                            </tr>
                            <!---------------->
                            <?php
                            $material_sub_id = $rowall['material_sub_id'];
                            $sqlcat3 = "SELECT * FROM inv_material_temp WHERE `material_sub_id` = '$material_sub_id' GROUP BY `material_level3_id`;";
                            $resultcat3 = mysqli_query($conn, $sqlcat3);
                            while ($rowcat3 = mysqli_fetch_array($resultcat3)) {
                                ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?php
                                        $dataresult = getDataRowByTableAndId('inv_material_level3', $rowcat3['material_level3_id']);
                                        echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level3_description : '');
                                        echo '</br>' . (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level3_code : '');
                                        ?>
                                    </td>
                                    <td colspan="6"></td>
                                </tr>
                                <?php
                                $material_level3_id = $rowcat3['material_level3_id'];
                                $sqlcat4 = "SELECT * FROM inv_material_temp WHERE `material_level3_id` = '$material_level3_id' GROUP BY `material_level4_id`;";
                                $resultcat4 = mysqli_query($conn, $sqlcat4);
                                while ($rowcat4 = mysqli_fetch_array($resultcat4)) {
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <?php
                                            $dataresult = getDataRowByTableAndId('inv_material_level4', $rowcat4['material_level4_id']);
                                            echo (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level4_description : '');
                                            echo '</br>' . (isset($dataresult) && !empty($dataresult) ? $dataresult->material_level4_code : '');
                                            ?>
                                        </td>
                                        <td colspan="5"></td>
                                    </tr>
                                    <!---------------->

                                    <?php
                                    $material_level4_id = $rowcat4['material_level4_id'];
                                    $sqlmat = "SELECT * FROM inv_material_temp WHERE `material_level4_id` = '$material_level4_id';";
                                    $resultmat = mysqli_query($conn, $sqlmat);
                                    while ($rowmat = mysqli_fetch_array($resultmat)) {
                                        ?>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><?php echo $rowmat['material_id_code']; ?></td>
                                            <td><?php echo $rowmat['material_description']; ?></td>
                                            <td><?php echo $rowmat['part_no']; ?></td>
                                            <td><?php echo $rowmat['spec']; ?></td>



                                        </tr>
                                    <?php
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
            <center><div class="row">
                    <div class="col-sm-6"></br></br>--------------------</br>Receiver Signature</div>
                    <div class="col-sm-6"></br></br>--------------------</br>Authorised Signature</div>
                </div></center></br>
            <div class="row">
                <div class="col-sm-12" style="border:1px solid gray;border-radius:5px;padding:10px;color:#f26522;">
                    <center><h5>Notice***</br><span style="font-size:14px;color:#000000;">Please Check Everything Before Signature</span></h5></center>

                </div>
            </div>
        </div>			
    </div>
    <center><button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button></center>
    <div class="col-md-1"></div>
</center>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>
<script>
    $(function () {
        $("#from_date").datepicker({
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
        $("#to_date").datepicker({
            inline: true,
            dateFormat: "yy-mm-dd",
            yearRange: "-50:+10",
            changeYear: true,
            changeMonth: true
        });
    });
</script>


