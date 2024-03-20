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
        <?php $this->load->view('Template_Site/Header.php'); ?>
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







                    <div  class="breadcrumb-section">

                        <ol class="breadcrumb">
                            <li><a style="color: #000" href="<?php echo base_url(); ?>">Home</a></li>
                            <li style="color: #000">Ad Post</li>
                        </ol>
                        <h2 style="color: #000" class="title">Post Free Ad</h2>
                    </div>
                    <div id="ad-post">
                        <div class="row category-tab">
                            <div class="col-lg-4 col-md-6">
                                <div class="section cat-option select-category post-option">
                                    <h2><b>Select a category</b></h2>
                                    <ul role="tablist" class="nav nav-tabs">

                                        <?php foreach ($data_set_ad_cat as $t_data) { ?>

                                            <li><a href="#cat1" aria-controls="cat1" role="tab" data-toggle="tab">
                                       
                                                        <span class="select">
                                                        <!--<i class="<?php echo $t_data->Image; ?>"></i>-->
                                                            <img style="width: 34px;" src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $t_data->Image; ?>" alt="Images" class="img-">
                                                        </span>
                                           
                                                    
                                                        <span ><?php echo $t_data->Ad_Cat_Name; ?></span>
                                                

                                                    

                                                </a>
                                            </li>


                                        <?php } ?> 

                                        <li><a href="#cat1" aria-controls="cat1" role="tab" data-toggle="tab">
                                                <span class="select">
                                                    <img src="<?php echo base_url(); ?>assets/Site/images/icon/1.png" alt="Images" class="img-">
                                                </span>
                                                Cars & Vehicles
                                            </a>
                                        </li>


                                    </ul>
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="section tab-content subcategory post-option">
                                    <h4>Select a subcategory</h4>
                                    <div role="tabpanel" class="tab-pane" id="cat1">
                                        <ul>
                                            <li><a href="javascript:void(0)">Cars & Buses</a></li>
                                            <li><a href="javascript:void(0)">Motorbikes & Scooters</a></li>
                                            <li><a href="javascript:void(0)">Bicycles and Three Wheelers</a></li>
                                            <li><a href="javascript:void(0)">Three Wheelers</a></li>
                                            <li><a href="javascript:void(0)">Trucks, Vans & Buses</a></li>
                                            <li><a href="javascript:void(0)">Tractors & Heavy-Duty</a></li>
                                            <li><a href="javascript:void(0)">Auto Parts & Accessories</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="section  post-option">
                                    <h2>Post an Ad in just <span>30 seconds</span></h2>
                                    <p>Please DO NOT post multiple ads for the same items or service. All duplicate, spam and wrongly categorized ads will be deleted.</p>
                                    <div class="btn-section">
                                        <a style="font-size: 30px;" href="ad-post-details.html" class="btn btn-success">&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;</a>
                                        <!--                                        <a href="#" class="btn-info">or Cancle</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="row">
                                                    <div class="col-sm-8 offset-sm-2 text-center">
                                                        <div class="ad-section">
                                                            <a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-fluid"></a>
                                                        </div>
                                                    </div>
                                                </div>-->
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


    </body>


</html>