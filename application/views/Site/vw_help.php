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

                    <!-- signin-page -->
                    <div class="container">
                        <h2>FAQ</h2>
                        <!--<p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>-->
                        <div class="panel-group" id="accordion">
                            
                            <div class="panel panel-default">
                                <div style="background-color: #99cc00" class="panel-heading">
                                        <h4  class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#1>">How do I post an advertisement?</a>
                                        </h4>
                                    </div>
                                    <div id="1" class="panel-collapse collapse in">
                                        <div class="panel-body"><p>Posting your advertisement on sellfree.lk is free and hassle free! Simply click the&nbsp;<strong>POST YOUR AD FREE</strong>&nbsp;button and follow instructions.</p>

                                            <p>If you are new to sellfree.lk, you will need to register as the first step to posting your advertisement.</p>

                                            <ul>
                                                <li>
                                                    <p>Click on the &lsquo;Post Your Ad&rsquo; button on the Homepage</p>
                                                </li>
                                                <li>
                                                    <p style="color: #FF0000"><b>If you are a new user, register on sellfree.lk by entering your details</b></p>
                                                </li>
                                                <li>
                                                    <p>If you are already a registered user, enter your email and password and submit</p>
                                                </li>
                                                <li>
                                                    <p>Enter your ad details, photos and click submit</p>
                                                </li>
                                            </ul>

                                            <p>Your advertisement will be published once it has been approved by our team. This will only take 15 to 30 minutes.</p>
                                            <img src="<?php echo base_url(); ?>assets/Doc/doc.jpg">
                                        </div>
                                    </div>
                                </div>

                            <?php
                            foreach ($data_faq as $data_faq) {

//     var_dump($data_faq);die;
                                ?>

                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $data_faq->FAQ_ID ?>"><?php echo $data_faq->FAQ_Title ?></a>
                                        </h4>
                                    </div>
                                    <div id="<?php echo $data_faq->FAQ_ID ?>" class="panel-collapse collapse in">
                                        <div class="panel-body"><?php echo $data_faq->FAQ_Desc ?></div>
                                    </div>
                                </div>


                            <?php } ?>


                        </div> 
                    </div>


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
            $("#clear").click(function () {

                $("#txt_username").val("");
                $("#txt_password").val("");



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


    </body>


</html>