
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

   <title>Sellfree.lk Sri Lanka Largest Classifieds Portal by VFT HOLDINGS (PVT) LTD.</title>

        <!-- CSS -->
        <?php $this->load->view('Site/CSS_JS/css.php'); ?>
        <!-- icons -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


        <style>
            .close-icon {
                border:1px solid transparent;
                background-color: transparent;
                display: inline-block;
                vertical-align: middle;
                outline: 0;
                cursor: pointer;
            }
            .close-icon:after {
                font-size: 40px;
                content: 'X';
                display: block;
                width: 25px;
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
                border-radius: 50%;
                text-align: center;
                color: white;
                font-weight: normal;
                font-size: 12px;
                box-shadow: 0 0 2px #E50F0F;
                cursor: pointer;

            }
            .search-box:not(:valid) ~ .close-icon {
                display: none;
            }
            
             @media only screen and (max-width: 768px) {
                .imgres {
                    width: 80px;
                
                }
            }
            
         
         @media (min-width: 992px) and (max-width: 1199px) {
                .imgres {
                   object-fit: cover; width:95%; height:148px
                }
            }
            
        </style>


    </head>
    <body>
        <!-- header -->
        <?php $this->load->view('Template_Site/Header_Home.php'); ?>
        <!-- header -->


        <!-- main -->
        <section id="main" class="clearfix category-page">

            <div class="container">
                <!--<img style="alignment-adjust: middle" src="<?php echo base_url(); ?>assets/Site/images/ads/3.jpg">-->
                <div class="breadcrumb-section">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a style="color: #000"  href="<?php echo base_url(); ?>">Home</a></li>
                        <!--<li>Electronics & Gedget</li>-->
                    </ol><!-- breadcrumb -->						
                    <h2 style="color: #000"  class="title">All Ads</h2>
                </div>


                <div class="banner-form-full" style="margin-bottom: 0px;padding:25px 0px 65px 25px;max-width: 100%;
                     border: 1px solid #e6e6e6;
                     border-radius:4px;
                     background-color:#fff;
                     box-shadow: 6px 6px 7px #e8e8e8; border: 2px #c5c5c5 solid; border-radius: 5px
                     /*max-height: 100%;*/

                     /**/
                     ">

                    <!-- banner-form -->
                    <div class="" >
                        <form action="<?php echo base_url(); ?>All_Ads/Filter" method="POST">
                            <!-- category-change -->
                            <div class="col-md-12" style="">
                                <div class="col-md-2" style="" >						
                                <!--<a data-toggle="dropdown" href="#"><span class="change-text">All Category</span> <i class="fa fa-angle-down"></i></a>-->
                                    <!--<ul class="dropdown-menu category-change">-->
                                    <select class="form-control" readonly=""  id="cmb_cat" name="cmb_cat" >
                                        <!--                                <li><a href="#">Fashion & Beauty</a></li>
                                                                            <li><a href="#">Cars & Vehicles</a></li>
                                                                            <li><a href="#">Electronics & Gedgets</a></li>
                                                                            <li><a href="#">Real Estate</a></li>
                                                                            <li><a href="#">Sports & Games</a></li>-->
                                        <option value="" default>-- All Categories --</option>

                                        <?php foreach ($data_set_ad_cat as $t_data) { ?>
                                            <option value="<?php echo $t_data->Ad_Cat_ID; ?>" ><?php echo $t_data->Ad_Cat_Name; ?></option>

                                        <?php }
                                        ?>   
                                    </select>
                                    <!--</ul>-->								
                                </div><!-- category-change -->

                                <!-- language-dropdown -->
                                <div class="col-md-3" style="">						
                                    <select class="form-control" readonly=""  id="cmb_dist" name="cmb_dist" >
                                        <!--                                    <li><a href="#">Fashion & Beauty</a></li>
                                                                            <li><a href="#">Cars & Vehicles</a></li>
                                                                            <li><a href="#">Electronics & Gedgets</a></li>
                                                                            <li><a href="#">Real Estate</a></li>
                                                                            <li><a href="#">Sports & Games</a></li>-->
                                        <option value="" default>-- All Of Sri Lanka --</option>
                                        <?php foreach ($data_set_city as $t_data) { ?>
                                            <option value="<?php echo $t_data->DST_ID; ?>" ><?php echo $t_data->DST_Name; ?></option>

                                        <?php }
                                        ?>
                                    </select>			
                                </div><!-- language-dropdown -->

                                <div class="col-md-5">


                                    <input type="text" class="form-control clearable" name="txt_key" id="txt_key" placeholder="What are you looking for?">
                                    <button class="close-icon" style="margin-top: -65px;margin-left: 380px;" type="reset"></button>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit"  class="btn btn-primary" value="Search">Search</button>
                                </div>
                            </div>

                        </form>
                    </div><!-- banner-form -->
                </div>



                <div class="category-info" style="padding-top: 25px;">	
                    <div class="row">
                        <!-- accordion-->
                        <div class="col-md-3 col-sm-4">
                            <div class="accordion">
                                <!-- panel-group -->
                                <div class="panel-group" id="accordion">

                                    <!-- panel -->
                                    <div class="panel-default panel-faq">
                                        <!-- panel-heading -->
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
                                                <h4 class="panel-title">Categories<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                            </a>
                                        </div><!-- panel-heading -->

                                        <div id="accordion-one" class="panel-collapse collapse">
                                            <!-- panel-body -->
                                            <div class="panel-body">
                                                <a href="categories-main.html"><i class="fa fa-caret-down"></i> All Categories</a></h5>
<!--                                                <a href="#"><i class="icofont icofont-laptop-alt"></i>Electronics & Gedget</a>-->
                                                <ul>

                                                    <?php foreach ($data_set_ad_cat as $t_data) { ?>




                                                        <h5><li><a href="<?php echo $t_data->Ad_Cat_ID; ?>"><i class="<?php echo $t_data->ad_cat_icon; ?>"></i><?php echo $t_data->Ad_Cat_Name; ?> <span>(129)</span></a></li></h5>
                                                    <?php }
                                                    ?> 

                                                </ul>

                                            </div><!-- panel-body -->
                                        </div>
                                    </div><!-- panel -->

                                    <!-- panel -->
                                    <div class="panel-default panel-faq">
                                        <!-- panel-heading -->
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-two">
                                                <h4 class="panel-title">Condition<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                            </a>
                                        </div><!-- panel-heading -->

                                        <div id="accordion-two" class="panel-collapse collapse">
                                            <!-- panel-body -->
                                            <div class="panel-body">
                                                <label for="new"><input type="checkbox" name="new" id="new"> New</label>
                                                <label for="used"><input type="checkbox" name="used" id="used"> Used</label>
                                            </div><!-- panel-body -->
                                        </div>
                                    </div><!-- panel -->

                                    <!-- panel -->
                                    <div class="panel-default panel-faq">
                                        <!-- panel-heading -->
                                        <div class="panel-heading">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-three">
                                                <h4 class="panel-title">
                                                    Price
                                                    <span class="pull-right"><i class="fa fa-plus"></i></span>
                                                </h4>
                                            </a>
                                        </div><!-- panel-heading -->

                                        <div id="accordion-three" class="panel-collapse collapse">
                                            <!-- panel-body -->
                                            <div class="panel-body">
                                                <div class="price-range"><!--price-range-->
                                                    <div class="price">
                                                        <span>$100 - <strong>$700</strong></span>
                                                        <div class="dropdown category-dropdown pull-right">	
                                                            <a data-toggle="dropdown" href="#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
                                                            <ul class="dropdown-menu category-change">
                                                                <li><a href="#">USD</a></li>
                                                                <li><a href="#">AUD</a></li>
                                                                <li><a href="#">EUR</a></li>
                                                                <li><a href="#">GBP</a></li>
                                                                <li><a href="#">JPY</a></li>
                                                            </ul>								
                                                        </div><!-- category-change -->													
                                                        <input type="text"value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
                                                    </div>
                                                </div><!--/price-range-->
                                            </div><!-- panel-body -->
                                        </div>
                                    </div><!-- panel -->

                                    <!-- panel -->
                                    <!--                                                                        <div class="panel-default panel-faq">
                                                                                                                 panel-heading 
                                                                                                                <div class="panel-heading">
                                                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#accordion-four">
                                                                                                                        <h4 class="panel-title">
                                                                                                                            Posted By
                                                                                                                            <span class="pull-right"><i class="fa fa-plus"></i></span>
                                                                                                                        </h4>
                                                                                                                    </a>
                                                                                                                </div> panel-heading 
                                                                        
                                                                                                                <div id="accordion-four" class="panel-collapse collapse">
                                                                                                                     panel-body 
                                                                                                                    <div class="panel-body">
                                                                                                                        <label for="individual"><input type="checkbox" name="individual" id="individual"> Individual</label>
                                                                                                                        <label for="dealer"><input type="checkbox" name="dealer" id="dealer"> Dealer</label>
                                                                                                                        <label for="reseller"><input type="checkbox" name="reseller" id="reseller"> Reseller</label>
                                                                                                                        <label for="manufacturer"><input type="checkbox" name="manufacturer" id="manufacturer"> Manufacturer</label>
                                                                                                                    </div> panel-body 
                                                                                                                </div>
                                                                                                            </div> panel -->

                                    <!-- panel -->
                                    <!--                                    <div class="panel-default panel-faq">
                                                                             panel-heading 
                                                                            <div class="panel-heading">
                                                                                <a data-toggle="collapse" data-parent="#accordion" href="#accordion-five">
                                                                                    <h4 class="panel-title">
                                                                                        Brand
                                                                                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                                                                                    </h4>
                                                                                </a>
                                                                            </div> panel-heading 
                                    
                                                                            <div id="accordion-five" class="panel-collapse collapse">
                                                                                 panel-body 
                                                                                <div class="panel-body">
                                                                                    <input type="text" placeholder="Search Brand" class="form-control">
                                                                                    <label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
                                                                                    <label for="htc"><input type="checkbox" name="htc" id="htc"> HTC</label>
                                                                                    <label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
                                                                                    <label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
                                                                                    <label for="others"><input type="checkbox" name="others" id="others"> Others</label>
                                                                                    <label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
                                                                                    <span class="border"></span>
                                                                                    <label for="acer"><input type="checkbox" name="acer" id="acer"> Acer</label>
                                                                                    <label for="bird"><input type="checkbox" name="bird" id="bird"> Bird</label>
                                                                                    <label for="blackberry"><input type="checkbox" name="blackberry" id="blackberry"> Blackberry</label>
                                                                                    <label for="celkon"><input type="checkbox" name="celkon" id="celkon"> Celkon</label>
                                                                                    <label for="ericsson"><input type="checkbox" name="ericsson" id="ericsson"> Ericsson</label>
                                                                                    <label for="fly"><input type="checkbox" name="fly" id="fly"> Fly</label>
                                                                                    <label for="g-fone"><input type="checkbox" name="g-fone" id="g-fone"> g-Fone</label>
                                                                                    <label for="gionee"><input type="checkbox" name="gionee" id="gionee"> Gionee</label>
                                                                                    <label for="haier"><input type="checkbox" name="haier" id="haier"> Haier</label>
                                                                                    <label for="hp"><input type="checkbox" name="hp" id="hp"> HP</label>
                                                                                </div> panel-body 
                                                                            </div>
                                                                        </div>  panel    -->
                                </div><!-- panel-group -->
                            </div>
                        </div><!-- accordion-->

                        <!-- recommended-ads -->
                        <div class="col-sm-8 col-md-7">				
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


                                                <a href="<?php echo base_url(); ?>Single_Ad/Get_Ad_details/<?php echo $data->AD_Code ?>"><img class="imgres" style="object-fit: cover; width:95%; height:148px" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $data->Img_Folder; ?>/<?php echo $data->IMG1 ?>" alt="Image" class="img-responsive"></a>

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
                                                </div><!-- item-info-right -->
                                            </div><!-- ad-meta -->
                                        </div><!-- item-info -->
                                    </div><!-- ad-item -->
                                    <hr>

                                <?php } ?>

                                <div class="pagination_links"> 
                                    <?php
                                    if (strlen($pagination)) {
                                        echo $pagination;
                                    }
                                    ?>
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
                        </div><!-- recommended-ads -->

                        <div class="col-md-2 hidden-xs hidden-sm">
                            <div class="advertisement text-center">
                                <a href="#"><img src="images/ads/2.jpg" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>	
                </div>






            </div><!-- container -->
        </section><!-- main -->


        <?php $this->load->view('Template_Site/Footer_Up.php'); ?>

        <!-- footer -->
        <?php $this->load->view('Template_Site/Footer.php'); ?>
        <!-- footer -->



        <!-- JS -->
        <?php $this->load->view('Site/CSS_JS/js.php'); ?>

        <script>
            $(function () {
                // init plugin (with callback)
                $('.clearable').clearSearch({callback: function () {
                        console.log("cleared");
                    }});

                // update value
                $('.clearable').val('sample value').change();

                // change width
                $('.clearable').width('200px').change();
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