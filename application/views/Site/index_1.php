<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>Sellfree.lk Sri Lanka Largest Classifieds Portal by VFT HOLDINGS (PVT) LTD.</title>


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
                width: 95px;
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

            .btn_blk {
                animation-name: anim;
                animation-duration: 1s;
                animation-iteration-count: infinite;
                animation-direction: alternate;
                animation-timing-function: linear;
                background-color: #299dfd;
                border-color: #cc0033;

                border-width: 2px;
                border-style: solid;
                border-radius: 5px;
                color: #fff;

                text-shadow: 0 0 3px #000;
            }

        </style>
    </head>
    <body>
        <!-- header -->
        <?php $this->load->view('Template_Site/Header_Home.php'); ?>
        <!-- header -->

        <!-- home-one-info -->
        <section id="home-one-info" class="clearfix home-one">
            <!-- world -->
            <div id="banner-two" class="parallax-section">
                <div class="row text-center">
                    <!-- banner -->
                    <div class="col-sm-12 ">
                        <div class="banner">
                            <h1 class="title">Sri Lanka Largest Classifieds Portal </h1>
                            <h3>Search from unlimited classifieds & Post unlimited classifieds free!<br> <h3><a class="btn_blk btn btn-primary" href="<?php echo base_url(); ?>All_Ads/" style=" color: #ffffff; border-radius: 5px;">View All Ads</a></h3></h3>


                            <!-- banner-form -->
                            <div class="banner-form">
                                <form action="#">
                                    <!-- category-change -->
                                    <!--								<div class="dropdown category-dropdown">						
                                                                                                            <a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
                                                                                                            <ul class="dropdown-menu category-change">
                                                                                                                    <li><a href="#">Fashion & Beauty</a></li>
                                                                                                                    <li><a href="#">Cars & Vehicles</a></li>
                                                                                                                    <li><a href="#">Electronics & Gedgets</a></li>
                                                                                                                    <li><a href="#">Real Estate</a></li>
                                                                                                                    <li><a href="#">Sports & Games</a></li>
                                                                                                            </ul>								
                                                                                                    </div> category-change -->

                                    <input type="text" name="txt_search" id="txt_search" class="form-control search-box" style="border-radius: 5px; width: 100%" placeholder="What you are looking for?">
                                    <!--<button class="close-icon-mn" style="margin-left: 140px;" type="reset"></button>-->
                                    <select class=" close-icon-mn" style="margin-left: 140px;" readonly="" required="" id="cmb_job_status" name="cmb_job_status" >
                                        <!--                                    <li><a href="#">Fashion & Beauty</a></li>
                                                                            <li><a href="#">Cars & Vehicles</a></li>
                                                                            <li><a href="#">Electronics & Gedgets</a></li>
                                                                            <li><a href="#">Real Estate</a></li>
                                                                            <li><a href="#">Sports & Games</a></li>-->
                                        <option value="" default>Select Category</option>
                                        <?php foreach ($data_set_ad_cat as $t_data) { ?>
                                            <option value="<?php echo $t_data->Ad_Cat_ID; ?>" ><?php echo $t_data->Ad_Cat_Name; ?></option>

                                        <?php }
                                        ?>   
                                    </select>
                                    <!--<button style="" name="cls" id="cls" class="fa fa-close btn btn-disabled" ></button>-->
                                    <!--<button style="margin-left: 140px;" class="form-control" value="Search">ssss</button>-->
                                    <button type="submit" class="form-control" value="Search">Search</button>
                            </div>
                            </form>

                            <!--                        </div> banner-form -->

                            <!-- banner-socail -->
                            <ul class="banner-socail">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul><!-- banner-socail -->
                        </div>
                    </div><!-- banner -->
                </div><!-- row -->
            </div><!-- world -->

            <div class="container">
                <div class="section category-ad text-center">
                    <ul class="category-list">

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[0]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[0]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(1298)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[1]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[1]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(76212)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[6]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[6]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(1298)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[7]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[7]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(712)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[8]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[8]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(212)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[9]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[9]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(1298)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[10]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[10]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(124)</span>
                            </a>
                        </li><!-- category-item -->







                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[2]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[2]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(212)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[3]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[3]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(972)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[4]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[4]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(1298)</span>
                            </a>
                        </li><!-- category-item -->

                        <li class="category-item">
                            <a href="categories.html">
                                <div class="category-icon"><img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $data_set_cat[5]->Image; ?>" alt="images" class="img-responsive"></div>
                                <span class="category-title"><?php echo $data_set_cat[5]->Ad_Cat_Name; ?></span>
                                <span class="category-quantity">(212)</span>
                            </a>
                        </li><!-- category-item -->




                    </ul>				
                </div><!-- category-ad -->	


                <!-- ad-section -->						
                <div class="ad-section text-center">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/Site/images/banner_ads/1280x150-hiwatch.gif" alt="Image" class="img-responsive"></a>
                </div><!-- ad-section -->



                <!-- cta -->
                <div class="cta text-center">
                    <div class="row">
                        <!-- single-cta -->
                        <div class="col-sm-4">
                            <div class="single-cta">
                                <!-- cta-icon -->
                                <div class="cta-icon icon-secure">
                                    <img src="<?php echo base_url(); ?>assets/Site/images/icon/13.png" alt="Icon" class="img-responsive">
                                </div><!-- cta-icon -->

                                <h4>Secure Trading</h4>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
                            </div>
                        </div><!-- single-cta -->

                        <!-- single-cta -->
                        <div class="col-sm-4">
                            <div class="single-cta">
                                <!-- cta-icon -->
                                <div class="cta-icon icon-support">
                                    <img src="<?php echo base_url(); ?>assets/Site/images/icon/14.png" alt="Icon" class="img-responsive">
                                </div><!-- cta-icon -->

                                <h4>24/7 Support</h4>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                            </div>
                        </div><!-- single-cta -->

                        <!-- single-cta -->
                        <div class="col-sm-4">
                            <div class="single-cta">
                                <!-- cta-icon -->
                                <div class="cta-icon icon-trading">
                                    <img src="<?php echo base_url(); ?>assets/Site/images/icon/15.png" alt="Icon" class="img-responsive">
                                </div><!-- cta-icon -->

                                <h4>Easy Trading</h4>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                            </div>
                        </div><!-- single-cta -->
                    </div><!-- row -->
                </div><!-- cta -->											
            </div><!-- container -->
        </section><!-- home-one-info -->


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