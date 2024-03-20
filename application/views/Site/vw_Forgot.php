<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>Sri Lanka Largest Classifieds Portal</title>


        <?php $this->load->view('Site/CSS_JS/css.php'); ?>


        <!-- CSS -->

        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Template Developed By ThemeRegion -->

        <style>
            .select.error, textarea.error, input.error {
                color:#FF0000;
            }
            .search-box:not(:valid) ~ .close-icon-mn {
                display: none;
            }
            .close-icon-mn {
                border:1px solid transparent;
                background-color: transparent;
                display: inline-block;
                vertical-align: middle;
                outline: 0;
                cursor: pointer;
            }
            .close-icon-mn:after {
                font-size: 40px;
                content: 'Clear';
                display: block;
                width: 55px;
                height: 25px;
                /*position: absolute;*/
                background-color: #FA9595;
                z-index:15;
                right: 35px;
                margin-bottom: 20px;
                top: 0;
                bottom: 0;
                margin: auto;
                padding: 2px;
                border-radius: 10%;
                text-align: center;
                color: white;
                font-weight: normal;
                font-size: 12px;
                box-shadow: 0 0 2px #ffffff;
                cursor: pointer;

            }

        </style>
    </head>
    <body>
        <!-- header -->
        <?php $this->load->view('Template_Site/Header_Home.php'); ?>
        <!-- header -->

        <!-- signup-page -->
        <section id="main" class="clearfix user-page">
            <div class="container">
                <div class="row text-center">

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


                    <!-- user-login -->			
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div class="user-account">
                            <h2>Reset Password</h2>
                            <form action="<?php echo base_url(); ?>Sign_In/reset_request" method="POST" id="frm_register" name="frm_register">

                                <div class="form-group">
                                    <input type="email" id="txt_mail" name="txt_mail" required="required" class="form-control" placeholder="Email Address">
                                    <span id="email_result"></span> 
                                </div>

                                <!-- select -->
<!--                                <select class="form-control" required="" id="txt_city" name="txt_city">
                                    <option value="" default>-- Select City --</option>
                                <?php foreach ($data_set_city as $t_data) { ?>
                                                    <option value="<?php echo $t_data->CTY_ID; ?>" ><?php echo $t_data->CTY_Name; ?></option>

                                <?php }
                                ?>   
                                </select> select -->

                                <div class="checkbox">
                                    <!--<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>-->
                                </div><!-- checkbox -->	
                                <button type="submit" href="#" class="btn btn-warning">Reset Password</button>	<button type="button" id="clear" name="clear" class="btn btn-danger">Clear</button>	
                            </form>
                            <!-- checkbox -->

                        </div>
                    </div><!-- user-login -->			
                </div><!-- row -->	
            </div><!-- container -->
        </section><!-- signup-page -->



        <?php $this->load->view('Template_Site/Footer_Up.php'); ?>

        <!-- footer -->
        <?php $this->load->view('Template_Site/Footer.php'); ?>
        <!-- footer -->

        <!--/Preset Style Chooser--> 
        <!--	<div class="style-chooser">
                        <div class="style-chooser-inner">
                                <a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
                                <h4>Presets</h4>
                                <ul class="preset-list clearfix">
                                        <li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
                                        <li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
                                        <li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
                                        <li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
                                </ul>
                        </div>
                </div>-->
        <!--/End:Preset Style Chooser-->

        <!-- JS -->

        <?php $this->load->view('Site/CSS_JS/js.php'); ?>

        <script type="text/javascript">

            //Clear Text Boxes
            $("#cls").click(function () {

                $("#txt_search").val("");



            });

        </script>

        <script>
// just for the demos, avoids form submit

            $("#frm_register").validate({

            });

            jQuery.validator.setDefaults({
//                    debug: true,
                success: "valid"
            });
            $("#frm_register").validate({
                rules: {
                    txt_password: "required",
                    txt_conf_password: {
                        equalTo: "#txt_password"
                    }
                }
            });
        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-73239902-1', 'auto');
            ga('send', 'pageview');

        </script>


        <script>
            $(document).ready(function () {
                $('#txt_mail').change(function () {
                    var email = $('#txt_mail').val();
                    if (email != '')
                    {
                        $.ajax({
                            url: "<?php echo base_url(); ?>Register/check_email_avalibility_for",
                            method: "POST",
                            data: {email: email},
                            success: function (data) {
                                $('#email_result').html(data);
                            }
                        });
                    }
                });
            });
        </script>  


        <script>
            $(document).ready(function () {
                $('#txt_mobile').change(function () {
                    var phone = $('#txt_mobile').val();
                    if (phone != '')
                    {
                        $.ajax({
                            url: "<?php echo base_url(); ?>Register/check_phone_avalibility",
                            method: "POST",
                            data: {phone: phone},
                            success: function (data) {
                                $('#phone_result').html(data);
                            }
                        });
                    }
                });
            });
        </script>  


    </body>


</html>