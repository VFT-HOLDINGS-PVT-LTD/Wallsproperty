<!DOCTYPE html>

<?php
$currentUser = $this->session->userdata('login_user');

$Image = $currentUser[0]->Image;

$User_Name = $currentUser[0]->Display_Name;



//var_dump($ssss);die;
?>

<!--Description of dashboard page

@author Ashan Rathsara-->


<html lang="en">


    <head>
        <!-- Styles -->
        <?php $this->load->view('template/css.php'); ?>

    </head>

    <body class="infobar-offcanvas">

        <!--header-->
        <?php //echo $sdata[0]->Dep_Name;die;  ?>
        <?php $this->load->view('template/header.php'); ?>

        <!--end header-->

        <div id="wrapper">
            <div id="layout-static">

                <!--dashboard side-->

                <?php $this->load->view('template/dashboard_side.php'); ?>

                <!--dashboard side end-->


                <div class="static-content-wrapper">

                    <div class="static-content">
                        <div class="" style="color: #000080; font-size: 15px; text-transform: uppercase; margin-left: 0%;">

                            <!--<marquee BEHAVIOR=ALTERNATE>Happy and Prosperous New Year For You All - Cincomax Team -</marquee>-->


                        </div>
                        <div class="page-content">


                            <div class="page-heading">            
                                <h1>DASHBOARD</h1>
                                <!--<a href="<?php echo base_url(); ?>Sms/Send_Sms/send_for_jobs" class="btn btn-primary-alt" style="float: right;">SEND SMS</a>-->
                                <div class="" style="float: right; ">
                                    <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In Hand Cheque : <span style="color: tomato"><?php echo $cheque[0]->CQ_Count ?></span>   &nbsp;&nbsp;&nbsp;&nbsp; Amount : <span style="color: tomato">Rs. <?php echo number_format($cheque[0]->Amount, 2, '.', ',')  ?></span>   </h1>
                                </div>
                            </div>

                            <!--success Message-->
                            <?php if (isset($_SESSION['success_message']) && $_SESSION['success_message'] != '') { ?>
                                <div id="spnmessage" class="alert alert-dismissable alert-success">
                                    <strong>Success !</strong> <?php echo $_SESSION['success_message'] ?>
                                </div>
                            <?php } ?>

                            <div class="container-fluid">

                                <!--Dashboard shortcut start-->
                                <div data-widget-group="group1">
                                    <div class="row">

                                        <?php
                                        $currentUser = $this->session->userdata('login_user');
                                        ?>

                                        <?php if ($currentUser[0]->job_card == 1): ?>
                                            <!--                                            <div class="col-md-3">
                                                                                            <a class="info-tile tile-grape has-footer" href="<?php echo base_url(); ?>Job/New_Job/">
                                                                                                <div class="tile-heading">
                                                                                                    <div class="pull-left">JOB CARD</div>
                                                                                                    <div class="pull-right">
                                                                                                        <div id="tileorders" class="sparkline-block"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="tile-body">
                                                                                                    <div class="pull-left"><i class="fa fa-newspaper-o"></i></div>
                                                                                                    <div class="pull-right"><?php //echo $count[0]->count_emp                ?></div>
                                                                                                </div>
                                                                                                <div class="tile-footer">
                                                                                                    <div class="pull-left">ADD JOB CARD</div>
                                                                                                    <div class="pull-right percent-change"></div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>-->
                                        <?php endif; ?>

                                        <?php if ($currentUser[0]->customers == 1): ?>
                                            <div  class="col-md-3" >
                                                <a style="border: 0px solid;box-shadow: 5px 5px 7px #666; " class="info-tile tile-success has-footer dash-radius" href="<?php echo base_url(); ?>Master/Customers/">
                                                    <div class="tile-heading" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                        <div class="pull-left">RECEIVE CHEQUE</div>
                                                        <div class="pull-right">
                                                            <div id="tiletickets" class="sparkline-block"></div>
                                                        </div>
                                                    </div>
                                                    <div  class="tile-body">
                                                        <div class="pull-left"><i class="fa fa-check"></i></div>
                                                        <div class="pull-right"></div>
                                                    </div>
                                                    <div class="tile-footer" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="pull-left">ADD RECEIVE CHEQUE</div>
                                                        <div class="pull-right percent-change"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($currentUser[0]->invoice == 1): ?>
                                            <div class="col-md-3">
                                                <a style="border: 0px solid;box-shadow: 5px 5px 7px #666;" class="info-tile tile-alizarin has-footer dash-radius" href="<?php echo base_url(); ?>Cheque/Deposit_Cheque">
                                                    <div class="tile-heading" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                        <div class="pull-left">DEPOSIT CHEQUE</div>
                                                        <div class="pull-right">
                                                            <div id="tilerevenues" class="sparkline-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tile-body">
                                                        <div class="pull-left"><i class="fa fa-money"></i></div>
                                                        <div class="pull-right"></div>
                                                    </div>
                                                    <div class="tile-footer" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="pull-left">ADD DEPOSIT CHEQUE</div>
                                                        <div class="pull-right percent-change"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($currentUser[0]->messages == 1): ?>
                                            <div class="col-md-3">
                                                <a style="border: 0px solid;box-shadow: 5px 5px 7px #666;" class="info-tile tile-midnightblue has-footer dash-radius" href="<?php echo base_url(); ?>Cheque/Return_Cheque/">
                                                    <div class="tile-heading" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                        <div class="pull-left">RETURNED CHEQUE</div>
                                                        <div class="pull-right">
                                                            <div id="tilemembers" class="sparkline-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tile-body">
                                                        <div class="pull-left"><i class="fa fa-credit-card"></i></div>
                                                        <div class="pull-right"></div>
                                                    </div>
                                                    <div class="tile-footer" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                        <div class="pull-left">RETURNED CHEQUE</div>
                                                        <div class="pull-right percent-change"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>

                            </div>
                            <!--Dashboard shortcut end-->




                            <!--End Departments Chart JS-->
                            <div class="panel-body">
                                <?php if ($currentUser[0]->invoice == 1): ?>
                                    <h4>REPORTS</h4>
                                <?php endif; ?>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="domshortcuttiles">
                                        <div class="row">
                                            <?php if ($currentUser[0]->invoice == 1): ?>
                                                <div class="col-md-2">
                                                    <a style="border: 0px solid;box-shadow: 5px 5px 7px #666 ;  " target="_blank" href="<?php echo base_url(); ?>Reports/Stock/Current_Stock" class="dash-radius shortcut-tile tile-info">
                                                        <div class="tile-body" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                            <div class="pull-left"><i class="fa fa-newspaper-o"></i></div>
                                                            <div class="pull-right"><span class="badge"></span></div>
                                                        </div>
                                                        <div class="tile-footer" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                            RECEIVED CHEQUES<br><br>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($currentUser[0]->invoice == 1): ?>
                                                <div class="col-md-2">
                                                    <a style="border: 0px solid;box-shadow: 5px 5px 7px #666;" href="<?php echo base_url(); ?>Reports/Stock/Branch_Stock" class="dash-radius shortcut-tile tile-orange">
                                                        <div class="tile-body" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                            <div class="pull-left"><i class="fa fa-credit-card"></i></div>
                                                            <div class="pull-right"><span class="badge"></span></div>
                                                        </div>
                                                        <div class="tile-footer" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                            RETURNED CHEQUES<br><br>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($currentUser[0]->invoice == 1): ?>
                                                <div class="col-md-2">
                                                    <a style="border: 0px solid;box-shadow: 5px 5px 7px #666;" href="<?php echo base_url(); ?>Reports/Sales/Sale_Invoice" class="dash-radius shortcut-tile tile-success">
                                                        <div class="tile-body" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                                            <div class="pull-left"><i class="fa fa-clock-o"></i></div>

                                                        </div>
                                                        <div class="tile-footer" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                                            PENDING CHEQUES<br><br>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($currentUser[0]->invoice == 1): ?>
                                                <!--                                                <div class="col-md-2">
                                                                                                    <a href="<?php echo base_url(); ?>Reports/Sales/Service_Invoice" class="shortcut-tile tile-magenta">
                                                                                                        <div class="tile-body">
                                                                                                            <div class="pull-left"><i class="fa fa-users"></i></div>
                                                                                                            <div class="pull-right"><span class="badge"></span></div>
                                                                                                        </div>
                                                                                                        <div class="tile-footer">
                                                                                                            SERVICE INVOICES <br><br>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>-->
                                            <?php endif; ?>

                                            <?php if ($currentUser[0]->customer_out_rpt == 1): ?>
                                                <!--                                                <div class="col-md-2">
                                                                                                    <a href="<?php echo base_url(); ?>Reports/Outstanding/Customer_Outstanding" class="shortcut-tile tile-midnightblue">
                                                                                                        <div class="tile-body">
                                                                                                            <div class="pull-left"><i class="fa fa-folder"></i></div>
                                                                                                            <div class="pull-right"><span class="badge"></span></div>
                                                                                                        </div>
                                                                                                        <div class="tile-footer">
                                                                                                            CUSTOMER OUTSTANDING
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>-->
                                            <?php endif; ?>

                                            <?php if ($currentUser[0]->supplier_out_rpt == 1): ?>
                                                <!--                                                <div class="col-md-2">
                                                                                                    <a href="<?php echo base_url(); ?>Reports/Outstanding/Supplier_Outstanding" class="shortcut-tile tile-green">
                                                                                                        <div class="tile-body">
                                                                                                            <div class="pull-left"><i class="fa fa-bell-o"></i></div>
                                                                                                            <div class="pull-right"><span class="badge"></span></div>
                                                                                                        </div>
                                                                                                        <div class="tile-footer">
                                                                                                            SUPPLIER OUTSTANDING
                                                                                                        </div>
                                                                                                    </a>
                                                                                                </div>-->
                                            <?php endif; ?>
                                        </div>

                                    </div>
                                </div>


                            </div> 







                            <div class="container-fluid">


                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">

                                        <div class="row">
                                            <div class="col-xs-12">


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel panel-sky">
                                                            <div class="panel-heading"><h2>PENDING CHEQUES</h2></div>
                                                            <div class="panel-body">
                                                                <form class="form-horizontal" id="frm_employee_view" name="frm_employee_view" action="" method="POST">

                                                                    <!--success Message-->
                                                                    <?php if (isset($_SESSION['success_message']) && $_SESSION['success_message'] != '') { ?>
                                                                        <div id="spnmessage" class="alert alert-dismissable alert-success">
                                                                            <strong>Success !</strong> <?php echo $_SESSION['success_message'] ?>
                                                                        </div>
                                                                    <?php } ?>



                                                                    <div class="form-group col-sm-4">
                                                                        <label for="focusedinput"  class="col-sm-4 control-label">CODE</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" name="txt_P_code" id="txt_P_code" placeholder="Ex: DRING1">
                                                                        </div>

                                                                    </div>



                                                                    <div class="form-group col-sm-4">
                                                                        <label for="focusedinput" class="col-sm-4 control-label">P TYPE</label>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control"  id="cmb_p_type" name="cmb_p_type" >


                                                                                <option value="" default>-- Select --</option>
                                                                                <?php foreach ($data_set as $t_data) { ?>
                                                                                    <option value="<?php echo $t_data->P_T_ID; ?>" ><?php echo $t_data->P_T_Name; ?></option>

                                                                                <?php }
                                                                                ?>

                                                                            </select>
                                                                        </div>

                                                                    </div>


                                                                </form>

                                                                <input  type="submit"  id="search" name="search" class="btn-green btn fa fa-check" value="&nbsp;&nbsp;SEARCH&nbsp; PENDING CHEQUE" >
                                                                <input type="button"  id="cancel" name="cancel" class="btn-danger-alt btn fa fa-check" value="&nbsp;&nbsp;CLEAR" >    
                                                                <hr>

                                                                <div id="divmessage" class="">

                                                                    <div id="spnmessage"> </div>
                                                                </div>


                                                                <div id="search_body">

                                                                </div>


                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                    <!--***************************-->

                                </div>

                            </div> <!-- .container-fluid -->








                            <!-- Charts-->
                            <div class="row">


                            </div>

                            <div class="row">

                                <!--Departments Chart -->
                                <?php if ($currentUser[0]->customers == 1): ?>
                                    <!--                                    <div class="col-md-6" >
                                                                                <div id="container" ></div>
                                                                            </div>-->

                                    <!--                                <div class="col-md-6" >
                                                                            <div id="job_history" ></div>
                                                                        </div>-->
                                <?php endif; ?>
                            </div>





                        </div> <!-- #page-content -->
                    </div>



                    <!--Footer-->
                    <?php $this->load->view('template/footer.php'); ?>	
                    <!--End Footer-->

                </div>
            </div>
        </div>







        <!-- Load site level scripts -->

        <?php $this->load->view('template/js.php'); ?>							<!-- Initialize scripts for this page-->

        <!-- End loading page level scripts-->




        <script>

            $('#txt_HDate').datepicker({
                format: "dd/mm/yyyy",
                "todayHighlight": true,
                autoclose: true,
                format: 'yyyy/mm/dd'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });
            $('#dpd2').datepicker({
                format: "dd/mm/yyyy",
                "todayHighlight": true,
                autoclose: true,
                format: 'yyyy/mm/dd'
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            });

            $("#search").click(function () {
                $('#search_body').html('<center><p><img style="width: 50;height: 50;" src="<?php echo base_url(); ?>assets/images/icon-loading.gif" /></p><center>');
                $('#search_body').load("<?php echo base_url(); ?>Invoice/View_Invoice/search_invoice", {'txt_invoice_no': $('#txt_invoice_no').val(), 'txt_customer_id': $('#txt_customer_id').val(), 'cmb_branch': $('#cmb_branch').val(), 'cmb_inv_type': $('#cmb_inv_type').val(), 'txt_job_no': $('#txt_job_no').val(), 'txt_wn_no': $('#txt_wn_no').val()});
            });

        </script>


        <script src="<?php echo base_url(); ?>assets/js/jquery.marquee.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {


                $('.marqueeheader').marquee({
                    duration: 10000,
                    gap: 30,
                    //time in milliseconds before the marquee will start animating
                    delayBeforeStart: 0,
                    //'left' or 'right'
                    //                direction: 'left',
                    //true or false - should the marquee be duplicated to show an effect of continues flow
                    duplicated: true
                });
            });
        </script>


        <!--JQuary Validation-->
        <script type="text/javascript">


            $(document).ready(function () {
                $("#frm_designation").validate();
                $("#warrenty").hide();
                $("#spnmessage").hide("shake", {times: 6}, 3000);
            });
        </script>



        <!--Job Chart-->
        <script type="text/javascript">


            $(function () {

                var dep_data = [];
<?php foreach ($job_st as $jobs) { ?>
                    s = eval('<?php echo $jobs->Jobs ?>'.toString().replace(/"/g, ""));
                    dep_data.push({name: '<?php echo $jobs->ST_Name ?>', y: s});

<?php } ?>

                $('#container').highcharts({
                    chart: {
                        type: 'pie',
                        options3d: {
                            enabled: true,
                            alpha: 45,
                            beta: 0
                        }
                    },
                    title: {
                        text: 'Job Status'
                    },

                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            depth: 35,
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Jobs',
                            data: dep_data
                        }]
                });
//                    alert(dep_data);

            });
        </script>




        <!--Job Chart-->
        <script type="text/javascript">


            $(function () {

                var dep_data = [];
<?php foreach ($job_complete as $jobs) { ?>



                    s = eval('<?php echo $ssss; ?>'.toString().replace(/"/g, ""));
                    dep_data.push({name: 'COMPLETE & DILIVER', y: s});

<?php } ?>

                $('#job_history').highcharts({
                    chart: {
                        type: 'pie',
                        options3d: {
                            enabled: true,
                            alpha: 45,
                            beta: 0
                        }
                    },
                    title: {
                        text: '<?php echo date('F'); ?> - Job Summery'
                    },

                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            depth: 35,
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}'
                            }
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Jobs',
                            data: dep_data
                        }]
                });
//                    alert(dep_data);

            });
        </script>


        <script type="text/javascript">
            $(function () {
                $('#container2').highcharts({
                    title: {
                        text: 'Employee Attendance'
                    },
                    xAxis: {
                        categories: ['MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATERDAY', 'SUNDAY']
                    },
                    labels: {
                        items: []
                    },
                    series: [{
                            type: 'column',
                            name: 'Present',
                            data: [17, 18, 16, 18, 18, 16, 5]
                        }, {
                            type: 'column',
                            name: 'Absence',
                            data: [1, 0, 2, 0, 0, 2, 13]
                        }, ]
                });
            });


        </script>

        <script type="text/javascript">

            $(function () {
                $('#container3').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
                    title: {
                        text: 'EMPLOYEES<br>GENDER<br>',
                        align: 'center',
                        verticalAlign: 'middle',
                        y: 40
                    },
                    //                        tooltip: {
                    //                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    //                        },
                    plotOptions: {
                        pie: {
                            dataLabels: {
                                enabled: true,
                                distance: -50,
                                style: {
                                    fontWeight: 'bold',
                                    color: 'white',
                                    textShadow: '0px 1px 2px black'
                                }
                            },
                            startAngle: -90,
                            endAngle: 90,
                            center: ['50%', '75%']
                        }
                    },
                    series: [{
                            type: 'pie',
                            name: 'Employee',
                            innerSize: '50%',
                            data: [
                                ['Male', 12],
                                ['Female', 6]


                            ]
                        }]
                });
            });


        </script>
        <script src="<?php echo base_url(); ?>assets/plugins/highcharts/exporting.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/highcharts/highcharts-3d.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/highcharts/highcharts.js" type="text/javascript"></script>
    </body>


</html>