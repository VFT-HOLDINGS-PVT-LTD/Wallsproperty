<!DOCTYPE html>


<!--Description of dashboard page

@author Ashan Rathsara-->


<html lang="en">

    <title><?php echo $title ?></title>

    <link href="<?php echo base_url(); ?>assets/plugins/form-select2/select2.css" type="text/css" rel="stylesheet"> 

    <head>
        <!-- Styles -->
        <?php $this->load->view('template/css.php'); ?>
    </head>

    <body class="infobar-offcanvas">

        <!--header-->

        <?php $this->load->view('template/header.php'); ?>

        <!--end header-->

        <div id="wrapper">
            <div id="layout-static">

                <!--dashboard side-->

                <?php $this->load->view('template/dashboard_side.php'); ?>

                <!--dashboard side end-->

                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">

<!--                                <li class=""><a href="<?php echo base_url(); ?>Dashboard/">HOME</a></li>
                                <li class="active"><a href="<?php echo base_url(); ?>Master/Designation/">ADD INVENTORY</a></li>-->

                            </ol>


                            <!--                            <div class="page-tabs">
                                                            <ul class="nav nav-tabs">
                            
                                                                <li class="active"><a data-toggle="tab" href="#tab1">ADD INVENTORY</a></li>
                                                                <li><a data-toggle="tab" href="#tab2">VIEW INVENTORY</a></li>
                            
                            
                                                            </ul>
                                                        </div>-->
                            <div class="container-fluid">


                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">

                                        <div class="row">
                                            <div class="col-xs-12">


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-sky">
                                                            <div class="panel-heading"><h2>ADD RECEIVED CHEQUE</h2>&nbsp;&nbsp;&nbsp;&nbsp; <span class="fa fa-money"></span> </div>
                                                            <div class="panel-body">
                                                                <form class="form-horizontal" id="frm_designation" name="frm_designation" action="<?php echo base_url(); ?>Cheque/Received_Cheque/insert_Data" method="POST" enctype="multipart/form-data">

                                                                    <!--success Message-->
                                                                    <?php if (isset($_SESSION['success_message']) && $_SESSION['success_message'] != '') { ?>
                                                                        <div id="spnmessage" class="alert alert-dismissable alert-success">
                                                                            <strong>Success !</strong> <?php echo $_SESSION['success_message'] ?>
                                                                        </div>
                                                                    <?php } ?>

                                                                    <!--Error Message-->
                                                                    <?php if (isset($_SESSION['error_message']) && $_SESSION['error_message'] != '') { ?>
                                                                        <div id="spnmessage" class="alert alert-dismissable alert-danger error_redirect">
                                                                            <strong>Error !</strong> <?php echo $_SESSION['error_message'] ?>
                                                                        </div>
                                                                    <?php } ?>

                                                                    <!--                                                                    <div class="form-group col-sm-12">
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <img class="imagecss" src="<?php echo base_url(); ?>assets/images/jewellery.png" >
                                                                    
                                                                                                                                            </div>
                                                                                                                                        </div>-->
                                                                    <div class="form-group col-sm-12">


                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Company</label>
                                                                            <div class="col-sm-8">
                                                                                <!--<input type="text" class="form-control" required="required" name="txt_product_name" id="txt_product_name" placeholder="Ex: Asus Motherboard">-->

                                                                                <select class="form-control" required="" id="txt_product_main" name="txt_product_main" >


                                                                                    <option value="" default>-- Select --</option>
                                                                                    <?php foreach ($data_set_comp as $t_data) { ?>
                                                                                        <option value="<?php echo $t_data->CP_ID; ?>" ><?php echo $t_data->Company_Name; ?></option>

                                                                                    <?php }
                                                                                    ?>     
                                                                                </select>

                                                                            </div>

                                                                        </div>


                                                                        <!--                                                                        <div class="form-group col-sm-6">
                                                                                                                                                    <label for="focusedinput" class="col-sm-4 control-label">Serial</label>
                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                        <input style="color: red" type="text" readonly="readonly" class="form-control" name="txt_serial" id="txt_serial" placeholder="">
                                                                                                                                                    </div>
                                                                        
                                                                                                                                                </div>-->


                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Sub Company</label>
                                                                            <div class="col-sm-8">
                                                                                <!--<input type="text" class="form-control" required="required" name="txt_product_name" id="txt_product_name" placeholder="Ex: Asus Motherboard">-->

                                                                                <select class="form-control" required="" id="txt_sub_comp" name="txt_sub_comp" >


                                                                                    <option value="" default>-- Select --</option>
                                                                                    <?php foreach ($data_set_prod as $t_data) { ?>
                                                                                        <option value="<?php echo $t_data->PM_ID; ?>" ><?php echo $t_data->PM_Name; ?></option>

                                                                                    <?php }
                                                                                    ?>     
                                                                                </select>

                                                                            </div>

                                                                        </div>




                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Cheque Date</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" autocomplete="off" class="form-control" name="txt_Date" id="txt_Date" placeholder="select receiced date">
                                                                            </div>

                                                                        </div>


                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Cheque No</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" autocomplete="off" class="form-control" name="txt_cq_no" id="txt_cq_no" placeholder="234534">
                                                                            </div>

                                                                        </div>






                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Bank</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-control" required="" id="cmb_bank" name="cmb_bank" >


                                                                                    <option value="" default>-- Select --</option>
                                                                                    <?php foreach ($data_set_bank as $t_data) { ?>
                                                                                        <option value="<?php echo $t_data->Bnk_ID; ?>" ><?php echo $t_data->bank_name; ?></option>

                                                                                    <?php }
                                                                                    ?>     
                                                                                </select>
                                                                            </div>

                                                                        </div>



                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Cheque Date</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" autocomplete="off" class="form-control" name="txt_cq_Date" id="txt_cq_Date" placeholder="select cheque date">
                                                                            </div>

                                                                        </div>




                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Cheque Amount</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="number" autocomplete="off" class="form-control" name="txt_cq_amount" id="txt_cq_amount" placeholder="120000.50">
                                                                            </div>

                                                                        </div>




                                                                        <div class="form-group col-sm-6">
                                                                            <label for="focusedinput" class="col-sm-4 control-label">Description</label>
                                                                            <div class="col-sm-8">
                                                                                <textarea type="text" class="form-control" name="txt_description" id="txt_description" placeholder="Ex: Description"></textarea>
                                                                            </div>

                                                                        </div>









                                                                        <!--submit button-->
                                                                        <?php $this->load->view('template/btn_submit.php'); ?>
                                                                        <!--end submit-->
                                                                </form>
                                                                <hr>

                                                                <div id="divmessage" class="">

                                                                    <div id="spnmessage"> </div>
                                                                </div>


                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                    <!--***************************-->
                                    <!-- Grid View -->


                                    <!-- End Grid View-->


                                </div>





                            </div> <!-- .container-fluid -->
                        </div>
                        <!--Footer-->
                        <?php $this->load->view('template/footer.php'); ?>
                        <!--End Footer-->
                    </div>
                </div>
            </div>




            <!-- Load site level scripts -->

            <?php $this->load->view('template/js.php'); ?>	

            <!-- Initialize scripts for this page-->
            <script src="<?php echo base_url(); ?>assets/plugins/form-jasnyupload/fileinput.min.js"></script>   
            <!-- End loading page level scripts-->

            <!--Ajax-->
            <script src="<?php echo base_url(); ?>system_js/Master/Designation.js"></script>





            <!--Date Format-->
            <script>

                $('#txt_Date').datepicker({
                    format: "dd/mm/yyyy",
                    "todayHighlight": true,
                    autoclose: true,
                    format: 'yyyy/mm/dd'
                }).on('changeDate', function (ev) {
                    $(this).datepicker('hide');
                });
                $('#txt_cq_Date').datepicker({
                    format: "dd/mm/yyyy",
                    "todayHighlight": true,
                    autoclose: true,
                    format: 'yyyy/mm/dd'
                }).on('changeDate', function (ev) {
                    $(this).datepicker('hide');
                });


            </script>





            <!--JQuary Validation-->
            <script type="text/javascript">
                $(document).ready(function () {
//                                                                                        $("#frm_designation").validate();
                    $("#spnmessage").hide("shake", {times: 2}, 1000);
                });
            </script>



            <script>
                window.onunload = refreshPageB;
                function refreshPageB() {
                    window.opener.location.reload();
                }
            </script>






            <script type="text/javascript">

                function calculate() {
                    var myBox1 = document.getElementById('txt_wheight').value;
                    var myBox2 = document.getElementById('txt_rate').value;
                    var result = document.getElementById('txt_sale_price');
                    var myResult = myBox1 * myBox2;
                    result.value = parseFloat(myResult).toFixed(2);

                }

            </script>



            <script type="text/javascript">


                $(document).ready(function () {
                    $('select[name="txt_product_main"]').on('change', function () {
                        var stateID = $(this).val();
                        if (stateID) {
                            $.ajax({
                                url: '<?php echo base_url(); ?>Inventory/Inventory/myformAjax/' + stateID,
                                type: "GET",
                                dataType: "json",
                                success: function (data) {
                                    $('select[name="txt_sub_comp"]').empty();


                                    $('select[name="txt_sub_comp"]').append('<option value="" default>-- Select --</option>');
                                    $.each(data, function (key, value) {
                                        $('select[name="txt_sub_comp"]').append('<option value="' + value.SB_ID + '">' + value.Sub_Name + '</option>');
                                    });
                                }
                            });
                        }
                    });
                });
            </script>


            <script type="text/javascript">


                $(document).ready(function () {

                    $('select[name="txt_product_name"]').on('change', function () {
                        var ssss = $(this).val();
                        if (ssss) {
                            $.ajax({
                                url: '<?php echo base_url(); ?>Inventory/Inventory/get_hotel_serial/' + ssss,
                                type: "GET",
                                dataType: "json",
                                success: function (data) {


                                    $('#txt_p_serial').val(data[0].serial);

                                }
                            });
                        }
                    });
                });
            </script>





<!--            <script type="text/javascript">


                $(document).ready(function () {
                    $('select[name="txt_product_main"]').on('change', function () {
                        var stateID = $(this).val();
                        if (stateID) {
                            $.ajax({
                                url: '<?php echo base_url(); ?>Inventory/Inventory/myformAjax_types/' + stateID,
                                type: "GET",
                                dataType: "json",
                                success: function (data) {
                                    $('select[name="cmb_product_type"]').empty();



                                    $('select[name="cmb_product_type"]').append('<option value="" default>-- Select --</option>');
                                    $.each(data, function (key, value) {
//                                        $('select[name="cmb_product_type"]').append('<option value="">''</option>');
                                        $('select[name="cmb_product_type"]').append('<option value="' + value.P_T_ID + '">' + value.P_T_Name + '</option>');
                                    });
                                }
                            });
                        } else if (stateID) {

                        }
                    });
                });
            </script>-->








<!--            <script type="text/javascript">


                $(document).ready(function () {debugger;
                    $('select[name="txt_product_name"]').on('change', function () {
                        var stateID1 = $(this).val();
                        if (stateID1) {
                            $.ajax({
                                url: '<?php echo base_url(); ?>Inventory/Inventory/get_hotel_serial/' + stateID1,
                                type: "GET",
                                dataType: "json",
                                success: function (data) {debugger;

                                    console.log(data);

                                    alert('fail');
                                }
                            });
                        } else {debugger;
//                            $('select[name="city"]').empty();
                        }
                    });
                });
            </script>-->



            <!--
                        <script>
            
            
            
                            function get_lc_no()
                            {
                                var Hotel_no = $('#txt_product_name').val();
            
                                $.post('<?php echo base_url(); ?>Inventory/Inventory/get_hotel_serial/',
                                        {
                                            txt_product_main: Hotel_no
            
                                        },
                                        function (data)
                                        {
            
            
                                            $('#txt_serial').val(data);
                                        });
            
            
            
            
            
                            }
            
                        </script>-->



    </body>


</html>