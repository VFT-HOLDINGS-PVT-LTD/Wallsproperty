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
                                <li><a href="<?php echo base_url(); ?>Profile/change_to_password">Change Password</a></li>
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
                                    <div class="my-ads section">
                                        <h2>My ads</h2>
                                        <div class="section recommended-ads">
                                            <!-- featured-top -->
                                            <!--                                <div class="featured-top">
                                                                                <h4>Recommended Ads for You</h4>
                                                                                <div class="dropdown pull-right">
                                            
                                                                                     category-change 
                                                                                                                            <div class="dropdown category-dropdown">
                                                                                                                                <h5>Sort by:</h5>						
                                                                                                                                <a data-toggle="dropdown" href="#"><span class="change-text">Popular</span><i class="fa fa-caret-square-o-down"></i></a>
                                                                                                                                <ul class="dropdown-menu category-change">
                                                                                                                                    <li><a href="#">Featured</a></li>
                                                                                                                                    <li><a href="#">Newest</a></li>
                                                                                                                                    <li><a href="#">All</a></li>
                                                                                                                                    <li><a href="#">Bestselling</a></li>
                                                                                                                                </ul>								
                                                                                                                            </div> category-change 														
                                                                                </div>							
                                                                            </div> featured-top 	-->

                                            <?php
//                                                                                    var_dump($ad_list->result());die;


                                            foreach ($ad_list->result() as $data) {

//     var_dump($data);
                                                ?>




                                                <!-- ad-item -->
                                                <div class="ad-item row" style="margin-top: -13px; margin-bottom: -13px; box-shadow: 6px 6px 7px #e8e8e8; border: 1px #c5c5c5 solid; border-radius: 5px;">
                                                    <div class="item-image-box col-sm-3">
                                                        <!-- item-image -->
                                                        <div class="item-image">


                                                            <a href="<?php echo base_url(); ?>Single_Ad/Get_Ad_details/<?php echo $data->AD_Code ?>"><img style="object-fit: cover; width:95%; height:148px" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $data->Img_Folder; ?>/<?php echo $data->IMG1 ?>" alt="Image" class="img-responsive"></a>

                                                            <?php
                                                            if ($data->Top_Ad) {
                                                                echo '<span class="featured-ad">Top Ad</span>';
                                                            }
                                                            ?>
                                                                            <!--<span class="featured-ad">Top Ad</span>-->

                                                                            <!--<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>-->
                                                        </div><!-- item-image -->
                                                    </div><!-- item-image-box -->

                                                    <!-- rending-text -->
                                                    <div class="item-info col-sm-9">
                                                        <!-- ad-info -->
                                                        <div class="ad-info">

                                                            <h4 class="item-title"><a href="<?php echo base_url(); ?>Single_Ad/Get_Ad_details/<?php echo $data->AD_Code ?>"><?php echo $data->Ad_Title ?></a></h4><br>
                                                            <h4 style="font-size: 16px;" class="item-price">LKR:&nbsp;<?php echo number_format($data->Price); ?><span>&nbsp;  <?php
                                                                    if ($data->Negotiable == 1) {
//                                        $nego = 'Negotiable';
                                                                        echo '(Negotiable)';
                                                                    }
                                                                    ?></span></h4>
                                                            <div class="item-cat">
                                                                <span><a href="#"><?php echo $data->Ad_Cat_Name ?></a></span> /
                                                                <span><a href="#"><?php echo $data->Ad_Sub_Cat_Name ?></a></span><br>


                                                                <?php if ($data->Ad_Cat_ID == 1) { ?>

                                                                    <span><a href="#"><?php echo $data->Mileage; ?>KM</a></span>

                                                                <?php }
                                                                ?>
                                                                <?php if ($data->Ad_Cat_ID == 3) { ?>

                                                                    <span><a href="#"><?php echo $data->Land_Size; ?> <?php echo $data->Land_mesure; ?></a></span>

                                                                <?php }
                                                                ?>


                                                            </div>
                                                            <!--                                                <div>
                                                                                                                <button class="btn btn-primary">Bid</button>
                                                                                                            </div>-->
                                                        </div><!-- ad-info -->

                                                        <!-- ad-meta -->
                                                        <div class="ad-meta">
                                                            <div class="meta-content">
                                                                <span class="dated"><a href="#"><?php echo $data->Date ?> <?php echo (date("h:i:a", strtotime($data->Time))) ?> </a></span>
                                                                <a style="color: #000" href="#" class="tag"><i class="fa fa-tags"></i>&nbsp;<?php
                                                                    if ($data->Brand_Condition == 1) {
                                                                        echo 'New';
                                                                    } elseif ($data->Brand_Condition == 2) {
                                                                        echo 'Used';
                                                                    } elseif ($data->Brand_Condition == 3) {
                                                                        echo 'Reconditioned';
                                                                    }
                                                                    ?> &nbsp;&nbsp;&nbsp; <?php echo $data->CTY_Name ?></a>
                                                            </div>									
                                                            <!-- item-info-right -->
                                                            <div class="user-option pull-right">
                                                                <a href="#" data-toggle="tooltip1" data-placement="top" title="<?php echo $data->CTY_Name ?>, <?php echo $data->DST_Name ?>"><i class="fa fa-map-marker"></i> </a>
                                                                <?php if ($data->Is_member == 1) { ?>
                                                                    <a class="online" href="#" data-toggle="tooltip1" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
                                                                <?php } ?>
                                                                <a class="delete-item" href="<?php echo base_url(); ?>Ad_Manage/delete_ad/<?php echo $data->AD_Code ?>" data-toggle="tooltip1" data-placement="top" title="Delete this ad"><i class="fa fa-times"></i></a>
                                                            </div><!-- item-info-right -->
                                                        </div><!-- ad-meta -->
                                                    </div><!-- item-info -->
                                                </div><!-- ad-item -->
                                                <hr>

                                            <?php } ?>

                                            <div class="pagination_links"> 

                                            </div>

                                            <!--                                 pagination  
                                                                            <div class="text-center">
                                                                                <ul class="pagination ">
                                                                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                                                                    <li><a href="#">1</a></li>
                                                                                    <li class="active"><a href="#">2</a></li>
                                                                                    <li><a href="#">3</a></li>
                                                                                    <li><a href="#">4</a></li>
                                                                                    <li><a href="#">5</a></li>
                                                                                    <li><a>...</a></li>
                                                                                    <li><a href="#">10</a></li>
                                                                                    <li><a href="#">20</a></li>
                                                                                    <li><a href="#">30</a></li>
                                                                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>			
                                                                                </ul>
                                                                            </div> pagination  					-->
                                        </div>
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

        <script type="text/javascript">
            $(document).ready(function () {
                $("#frm_designation").validate();
                $("#spnmessage").hide("shake", {times: 6}, 3000);
            });
        </script>


    </body>


</html>