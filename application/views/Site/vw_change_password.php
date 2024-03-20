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

                    <!-- signin-page --> <section id="main" class="clearfix user-page">




                        <div class="ad-profile section">
                            <div class="user-profile">
                                <div class="user-images">
                                    <img src="<?php echo base_url(); ?>assets/Site/images/user.jpg" alt="User Images" class="img-fluid">
                                </div>
                                <div class="user">
                                    <h2>Hello, <a href="#"><?php
                                            $currentUser = $this->session->userdata('login_user');

                                            $user_name = $currentUser[0]->Users_Name;
                                            echo $user_name;
                                            ?></a></h2>
                                    <!--<h5>You last logged in at: 14-01-2018 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>-->
                                </div>
                                <div class="favorites-user">
                                    <div class="my-ads">
                                        <a href="#"><?php echo $data_ad_count[0]->AdC; ?><small>Total My ADS</small></a>
                                    </div>
                                    <!--                                    <div class="favorites">
                                                                            <a href="#">18<small>Favorites</small></a>
                                                                        </div>-->
                                </div>
                            </div>
                            <ul class="user-menu">
                                <li><a href="<?php echo base_url(); ?>Profile/change_password">Change Password</a></li>
                                <li class=""><a href="<?php echo base_url(); ?>Profile/index">My ads</a></li>
                                <li><a href="favourite-ads.html">Favourite ads</a></li>

                                <li><a href="pending-ads.html">Pending approval</a></li>
                                <li><a href="delete-account.html">Close account</a></li>
                                <li style="float: right;  font-weight: bold"><a style="color: #FF0000; font-size: 20px;" href="<?php echo base_url(); ?>Sign_In/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="ads-info">
                            <div class="row">
                                <div class="col-md-8">


                                    <!-- user-login -->			

                                    <div class="user-account">
                                        <h3>Change Password</h3>


                                        <form action="<?php echo base_url(); ?>Profile/password_change" method="POST" id="frm_register" name="frm_register">

                                            <div class="form-group">
                                                <input type="password" id="txt_password" name="txt_password" required="required" class="form-control" placeholder="New Password" >
                                            </div>
                                            <div class="form-group">
                                                <input type="password" id="txt_confirm_password" name="txt_confirm_password" required="required" class="form-control" placeholder="Confirm Password">
                                                <span id='message'></span>
                                            </div>






                                            
                                            <button type="submit"  class="btn">Change</button>	<button type="button" id="clear" name="clear" class="btn btn-danger">Clear</button>	
                                        </form>
                                        <!-- checkbox -->

                                    </div>




                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="recommended-cta">
                                        <div class="cta">
                                            <div class="single-cta">
                                                <div class="cta-icon icon-secure">
                                                    <a href="http://websolution.lk/"> <img src="<?php echo base_url(); ?>assets/Sponse/vft_web_design.jpg" alt="Ads" class="img-fluid"> </a>
                                                </div>

                                            </div>
                                            <div class="single-cta">
                                                <div class="cta-icon icon-support">
                                                    <a href="http://vftholdings.lk/"> <img src="<?php echo base_url(); ?>assets/Sponse/zkteco01.jpg" alt="Ads" class="img-fluid"> </a>
                                                </div>

                                            </div>
                                            <div class="single-cta">
                                                <div class="cta-icon icon-support">
                                                    <a href="http://vftholdings.lk/"> <img src="<?php echo base_url(); ?>assets/Sponse/ZKCMP200Barrier.jpg" alt="Ads" class="img-fluid"> </a>
                                                </div>

                                            </div>
                                            <div class="single-cta">
                                                <h5>Need Help?</h5>
                                                <p><span>Give a call on</span><a href="tellto:+94117111050">+94117111050</a></p>
                                                <p><span>Email :</span><a href="tellto:08048100000">info@sellfree.lk</a></p>
                                            </div><!-- single-cta -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>


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

        <script type="text/javascript">
            $(document).ready(function () {
                $("#frm_designation").validate();
                $("#spnmessage").hide("shake", {times: 6}, 3000);
            });
        </script>

        <script>
            $('#txt_password, #txt_confirm_password').on('keyup', function () {
                if ($('#txt_password').val() == $('#txt_confirm_password').val()) {
                    $('#message').html('Password Matching').css('color', 'green');
                } else
                    $('#message').html('Confirm Password Not Matching').css('color', 'red');
            });
        </script>


    </body>


</html>