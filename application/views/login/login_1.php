
<!DOCTYPE html>
<html lang="en" class="coming-soon">


    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="description" content="HRM_SYETEM">

        <link href="<?php echo base_url(); ?>assets/plugins/iCheck/skins/minimal/blue.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/styles.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom_css.css" type="text/css" rel="stylesheet">   
    </head>

    <body class="focused-form" style="background-color: #c7c7c7; background-image: url('<?php base_url(); echo "assets/img/bk.png" ?>'); background-repeat: repeat;">

        
        

        <div class="container" id="login-form">
            
            
            <h3 style="text-align: center;padding:0px; margin-top: 20px; margin-bottom: -25px">DEDIGAMA GROUP (PVT) LTD</h3>
            
            <a class="login-logo"><h3 style="color: black;">
                    <?php
                    if ($logo == null) {
                        $logo_hr = 'Company Name (pvt) Ltd';
                    } else {
                        $logo_hr = $logo[0]->company_Name;
                    }

//                    echo $logo_hr;
                    ?>

                </h3><img style="width:120px; height: 80px;" src="<?php base_url(); ?>

                          <?php
                          if ($logo == null) {
                              $logo_img = 'empty_logo';
                          } else {
                              $logo_img = $logo[0]->comp_logo;
                          }

                          echo "assets/images/company/" . $logo_img .""
                          ?>"></a>
            <div class="row">
                <div class="col-md-4 col-md-offset-4" >
                    <div class="panel panel-default" style="border: #c7c7c7 solid 0px;border-radius: 2px;">
                        <div class="panel-heading"><h2>LOGIN TO CHEQUE MASTER SYSTEM</h2></div>
                        <div class="panel-body">


                            <form class="form-horizontal" id="frmLogin" name="frmLogin" action="<?php echo base_url() ?>Login/verifyUser" method="POST">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group" >							
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </span>


                                            <input type="text" class="form-control" id="txt_username" name="txt_username" placeholder="Username" data-parsley-minlength="6" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="password" class="form-control" id="txt_password" name="txt_password" placeholder="Password" required="">
                                        </div>
                                    </div>
                                </div>

                                <!--success Message-->
                                <?php if (isset($_SESSION['success_message']) && $_SESSION['success_message'] != '') { ?>
                                    <div id="spnmessagelogin" class=" error_redirect alert alert-dismissable alert-success">
                                        <strong>Success !</strong> <?php echo $_SESSION['success_message'] ?>
                                    </div>
                                <?php } ?>

                                <!--Error Message-->
                                <?php if (isset($_SESSION['error_message']) && $_SESSION['error_message'] != '') { ?>
                                    <div id="spnmessagelogin" class="error_redirect alert alert-dismissable alert-danger ">
                                        <strong>Error !</strong> <?php echo $_SESSION['error_message'] ?>
                                    </div>
                                <?php } ?>
                                <div class="panel-footer">
                                    <div class="clearfix">

                                        <button style="border: 0px solid;box-shadow: 2px 2px 2px #666;" type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-info pull-right fa fa-lock">&nbsp;&nbsp;&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                        <input style="border: 0px solid;box-shadow: 2px 2px 2px #666;" type="button"  id="cancel" name="cancel" class="btn-danger-alt btn fa fa-check" value="&nbsp;&nbsp;CLEAR" >    

                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                    <div style="text-align: center">Cheque Master 1.0 By ASHAN RATHSARA</div>
                    <marquee behavior="alternate" scrolldelay="150"><?php echo $logo_hr; ?></marquee>


                </div>
            </div>
        </div>

    </body>

    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/plugins/easypiechart/jquery.easypiechart.js"></script> 		<!-- EasyPieChart-->
    <script src="<?php echo base_url(); ?>assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->
    <script src="<?php echo base_url(); ?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/js/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootbox/bootbox.js"></script>							<!-- Bootbox -->
    <script src="<?php echo base_url(); ?>assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->
    <script src="<?php echo base_url(); ?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> 	<!-- Mousewheel support needed for jScrollPane -->
    <script src="<?php echo base_url(); ?>assets/js/application.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/demo/demo-switcher.js"></script>
    <script src="<?php echo base_url(); ?>system_js/utility.js" type="text/javascript"></script>
    <!--Ajax-->
    <!--<script src="<?php echo base_url(); ?>system_js/login/login.js"></script>-->

    <!--Jquary Validation-->
    <script src="<?php echo base_url(); ?>assets/plugins/validation/jquery.validate.js"></script>

    <!--JQuary Validation-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#frmLogin").validate({
                rules: {
                    txt_username: {
                        required: true,
                        minlength: 1
                    },
                    txt_password: {
                        required: true,
                        minlength: 1
                    },
                },
                messages: {
                    txt_username: {
                        required: "<i class='fa fa-user'></i>  Please enter Username !",
                        minlength: "Your username must consist of at least 1 characters"
                    },
                    txt_password: {
                        required: "<i class='fa fa-key'></i> Please enter your Password !",
                        minlength: "Your password must be at least 1 characters long"
                    }

                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#frm_departmrnt").validate();
            $("#spnmessagelogin").hide("shake", {times: 6}, 3500);
        });
    </script>

    <!--Clear Text Boxes-->
    <script type="text/javascript">

        $("#cancel").click(function () {

            $("#txt_username").val("");
            $("#txt_password").val("");

        });
    </script>





</html>