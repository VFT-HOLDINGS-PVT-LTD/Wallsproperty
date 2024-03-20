
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>Sellfree.lk Sri Lanka Largest Classifieds Portal by VFT HOLDINGS (PVT) LTD.</title>


        <style>
            .img_responsive_fixed_small {
                display: block;
                max-width: 100%;
                height: 400px;
                border-radius: 3px;
                display: inline-block;
                vertical-align: top; /*not required*/
                position: relative;

            }
            @media only screen and (max-width: 768px) {
                .img_responsive_fixed_small {
                    width: 100%;
                    max-width: 440px;
                    max-height: 340px;
                }
            }
            .img_tumb_fixed_small {
                display: flex; justify-content: center;margin: 5px;padding: 5px;display: block;width: 100%;object-fit: cover;height: 80px;
                border: #999999 1px solid; border-radius: 3px;
            }
            @media only screen and (max-width: 768px) {
                .img_tumb_fixed_small {
                    max-width: 240px;
                    max-height: 50px;
                }
            }
        </style>

        <!-- CSS -->
        <?php $this->load->view('Site/CSS_JS/css.php'); ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Template Developed By ThemeRegion -->
    </head>
    <body>
        <!-- header -->
        <?php $this->load->view('Template_Site/Header_Home.php'); ?>
        <!-- header -->

        <!-- main -->
        <section id="main" class="clearfix details-page">
            <div class="container">
                <div  class="breadcrumb-section" >
                    <!-- breadcrumb -->
                    <ol  class="breadcrumb">
                        <li ><a style="color: #000" href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a style="color: #000" href="#"><?php echo $data_set_all_ads[0]->Ad_Cat_Name; ?></a></li>
                        <li style="color: #000"><?php echo $data_set_all_ads[0]->Ad_Sub_Cat_Name; ?> </li>
                    </ol><!-- breadcrumb -->						
                    <h2 style="color: #000" class="title"><?php echo $data_set_all_ads[0]->Ad_Sub_Cat_Name; ?> </h2>
                </div>




                <div class="section slider" style="border: 2px #0099cc solid; border-color: #999999; box-shadow: 6px 6px 6px 7px #bbbbbb; ">					
                    <div class="row" >
                        <!-- carousel -->
                        <div class="col-md-7">
                            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">

                                    <?php
                                    foreach ($data_set_all_ads as $t_data) {

//                                             var_dump($t_data);
//     var_dump($t_data->AD_ID);
                                        ?>

                                        <?php
                                        if (!empty($t_data->IMG1)) {
                                            ?>
                                            <li style="" data-target="#product-carousel" data-slide-to="0" class="active">
                                                <img  class="img_tumb_fixed_small" style=""  src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG1 ?>" alt="Carousel Thumb" class="img-responsive">
                                            </li>
                                        <?php }
                                        ?>
                                        <?php
                                        if (!empty($t_data->IMG2)) {
                                            ?>
                                            <li style="" data-target="#product-carousel" data-slide-to="1" class="active">
                                                <img class="img_tumb_fixed_small" style=""   src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG2 ?>" alt="Carousel Thumb" class="img-responsive">
                                            </li>
                                        <?php }
                                        ?>

                                        <?php
                                        if ($t_data->IMG3) {
                                            ?>
                                            <li style="" data-target="#product-carousel" data-slide-to="2" class="active">
                                                <img class="img_tumb_fixed_small" style=""   src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG3 ?>" alt="Carousel Thumb" class="img-responsive">
                                            </li>
                                        <?php }
                                        ?>


                                        <?php
                                        if ($t_data->IMG4) {
                                            ?>
                                            <li style="" data-target="#product-carousel" data-slide-to="3" class="active">
                                                <img class="img_tumb_fixed_small" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG4 ?>" alt="Carousel Thumb" class="img-responsive">
                                            </li>
                                        <?php }
                                        ?>

                                        <?php
                                        if ($t_data->IMG5) {
                                            ?>
                                            <li style="" data-target="#product-carousel" data-slide-to="4" class="active">
                                                <img class="img_tumb_fixed_small"   src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG5 ?>" alt="Carousel Thumb" class="img-responsive">
                                            </li>
                                        <?php }
                                        ?>



                                    <?php } ?> 

                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <!--                                    <div class="item active">
                                                                            <div class="carousel-image">
                                                                                 image-wrapper 
                                                                                <img style=" height: 400px;border: #999999 1px solid; border-radius: 3px;" src="<?php echo base_url(); ?>assets/Ad_Images/Vehicle/<?php echo $data_set_all_ads[0]->Image_Name ?>" alt="Featured Image" class="img-responsive">
                                                                            </div>
                                                                        </div>-->
                                    <!-- item -->
                                    <?php
//                                    $i = 0;
//                                    $len = count($data_set_all_ads);
//
//                                    foreach ($data_set_all_ads as $t_data) {
//                                        if ($i == 0) {
//                                            $Active = 'active';
//                                        } elseif ($i >= 1) {
//                                            $Active = '';
//                                        }
//                                        $i++;
                                    ?>
                                    <!-- item -->
                                    <?php //}
                                    ?> 



                                    <?php
                                    if ($t_data->IMG1) {
                                        ?>
                                        <div  class="item active">
                                            <div class="carousel-image <?php echo $t_data->IMG1; ?>">
                                                <!-- image-wrapper -->
                                                <img id="<?php echo $t_data->IMG1; ?>" class="img_responsive_fixed_small" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG1 ?>" alt="Featured Image" class="img-responsive">
                                            </div>
                                        </div> 
                                    <?php }
                                    ?>

                                    <?php
                                    if ($t_data->IMG2) {
                                        ?>
                                        <div  class="item">
                                            <div class="carousel-image <?php echo $t_data->IMG2; ?>">
                                                <!-- image-wrapper -->
                                                <img id="<?php echo $t_data->IMG2; ?>" class="img_responsive_fixed_small" style=" " src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG2 ?>" alt="Featured Image" class="img-responsive">
                                            </div>
                                        </div> 
                                    <?php }
                                    ?>

                                    <?php
                                    if ($t_data->IMG3) {
                                        ?>
                                        <div class="item">
                                            <div class="carousel-image <?php echo $t_data->IMG3; ?>">
                                                <!-- image-wrapper -->
                                                <img id="<?php echo $t_data->IMG3; ?>" class="img_responsive_fixed_small" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG3 ?>" alt="Featured Image" class="img-responsive">
                                            </div>
                                        </div> 
                                    <?php }
                                    ?>

                                    <?php
                                    if ($t_data->IMG4) {
                                        ?>
                                        <div class="item">
                                            <div class="carousel-image <?php echo $t_data->IMG4; ?>">
                                                <!-- image-wrapper -->
                                                <img id="<?php echo $t_data->IMG4; ?>" class="img_responsive_fixed_small" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG4 ?>" alt="Featured Image" class="img-responsive">
                                            </div>
                                        </div> 
                                    <?php }
                                    ?>

                                    <?php
                                    if ($t_data->IMG5) {
                                        ?>
                                        <div class="item">
                                            <div class="carousel-image <?php echo $t_data->IMG5; ?>">
                                                <!-- image-wrapper -->
                                                <img id="<?php echo $t_data->IMG5; ?>" class="img_responsive_fixed_small" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $t_data->Img_Folder ?>/<?php echo $t_data->IMG5 ?>" alt="Featured Image" class="img-responsive">
                                            </div>
                                        </div> 
                                    <?php }
                                    ?>









                                </div><!-- carousel-inner -->

                                <!-- Controls -->
                                <a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                                <a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                </a><!-- Controls -->
                            </div>
                        </div><!-- Controls -->	

                        <!-- slider-text -->
                        <div class="col-md-5">
                            <div class="slider-text">

                                <h4 style="font-size: 28px;" class="title"><?php echo $data_set_all_ads[0]->Ad_Title ?></h4>
                                <h2 style="font-size: 27px; color: #009900; ">LKR: &nbsp;<?php echo number_format($data_set_all_ads[0]->Price) ?> <span>
                                        <?php
                                        if ($data_set_all_ads[0]->Negotiable == 1) {
//                                        $nego = 'Negotiable';
                                            echo 'Negotiable';
                                        }
                                        ?>
                                    </span></h2>
                                <p><span>Sale by: <a href="#"><?php echo $data_set_all_ads[0]->Users_Name ?></a></span>
                                    <!--<span> Ad ID:<a href="#" class="time"> 251716763</a></span></p>-->
                                    <span class="icon"><i class="fa fa-clock-o"></i><a href="#"><?php echo $data_set_all_ads[0]->Date ?>, <?php echo (date("h:i:a", strtotime($data_set_all_ads[0]->Time))) ?></a></span>

                                    <span class="icon"><i class="fa fa-map-marker"></i><a href="#"><?php echo $data_set_all_ads[0]->CTY_Name ?>, <?php echo $data_set_all_ads[0]->DST_Name ?></a></span>

                                    <?php if ($data_set_all_ads[0]->Is_member == 1) { ?>
                                        <span class="icon"><i class="fa fa-suitcase online"></i><a href="#">Member <strong>(online)</strong></a></span>
                                    <?php } ?>
                                    <?php if ($data_set_all_ads[0]->Is_member == 0) { ?>
        <!--                                <span class="icon"><i class="fa fa-suitcase online"></i><a href="#">Dealer <strong>(online)</strong></a></span>-->
                                    <?php } ?>

                                    <!-- short-info -->
                                <div class="short-info">
                                    <!--                                    <h4>Short Info</h4>-->




                                    <table class="table table-borderless">

                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1) { ?>
                                            <tr>
                                                <td><strong>Brand: </strong><a><strong><?php echo $data_set_all_ads[0]->BRD_Name ?></strong></a> </td>
                                                <td><strong>Model: </strong><a href="#"><?php echo $data_set_all_ads[0]->Model ?></a> </td>


                                            </tr>
                                        <?php } ?>

                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 2) { ?>
                                            <tr>
                                                <td><strong>Brand: </strong><a><strong><?php echo $data_set_all_ads[0]->Brand_Name_Oth ?></strong></a> </td>
                                                <td><strong>Model: </strong><a href="#"><?php echo $data_set_all_ads[0]->Model ?></a> </td>


                                            </tr>
                                        <?php } ?>


                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 3) { ?>
                                            <tr>
                                                <td><strong>Land size: </strong><a href="#"><?php echo $data_set_all_ads[0]->Land_Size ?> <?php echo $data_set_all_ads[0]->Land_mesure ?></a> </td>
                                                <td><strong>Land type: </strong><a><strong><?php echo $data_set_all_ads[0]->LND_TP_Name ?></strong></a> </td>



                                            </tr>
                                            <tr>
                                                <td><strong>Address: </strong><a><strong><?php echo $data_set_all_ads[0]->Land_address ?></strong></a> </td>
                                                <!--<td><strong>Land size: </strong><a href="#"><?php echo $data_set_all_ads[0]->Land_Size ?></a> </td>-->


                                            </tr>

                                        <?php } ?>


                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1) { ?>
                                            <tr>
                                                <td><strong>Mileage: </strong><a href="#"><?php echo $data_set_all_ads[0]->Mileage ?> KM</a></td>
                                                <td><strong>Model Year: </strong><a href="#"><?php echo $data_set_all_ads[0]->Year ?></a></td>


                                            </tr>
                                        <?php } ?>


                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1) { ?>
                                            <tr>
                                                <td><strong>Condition: </strong><a ><?php
                                                        if ($data_set_all_ads[0]->Brand_Condition == 1) {
                                                            echo 'New';
                                                        } elseif ($data_set_all_ads[0]->Brand_Condition == 2) {
                                                            echo 'Used';
                                                        } elseif ($data_set_all_ads[0]->Brand_Condition == 3) {
                                                            echo 'Reconditioned';
                                                        }
                                                        ?></a> </td>
                                                <td><strong>Transmission: </strong><a href="#"><?php echo $data_set_all_ads[0]->TRNS_Name ?></a></td>

                                            </tr>
                                        <?php } ?>

                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1 && $data_set_all_ads[0]->Ad_Cat_ID == 2) { ?>
                                            <tr>
                                                <td><strong>Condition: </strong><a ><?php
                                                        if ($data_set_all_ads[0]->Brand_Condition == 1) {
                                                            echo 'New';
                                                        } elseif ($data_set_all_ads[0]->Brand_Condition == 2) {
                                                            echo 'Used';
                                                        }
                                                        ?></a> </td>
                                            </tr>
                                        <?php } ?>

                                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1) { ?>
                                            <tr>
                                                <td><strong>Fuel Type: </strong><a href="#"><?php echo $data_set_all_ads[0]->Fual_name ?></a></td>
                                                <td><strong>Engine Capacity: </strong><a href="#"><?php echo $data_set_all_ads[0]->Engine_Capacity ?> CC</a></td>


                                            </tr>
                                        <?php } ?>
                                    </table>



                                </div><!-- short-info -->

                                <!-- contact-with -->
                                <div class="contact-with">
                                    <h4>Contact with </h4>
                                    <span class="btn btn-default show-number">
                                        <i class="fa fa-phone-square"></i>
                                        <span class="hide-text">Click to show phone number </span> 
                                        <span class="hide-number"><?php echo $data_set_all_ads[0]->Phone_No ?></span>
                                    </span><br>
                                    <a href="https://api.whatsapp.com/send?phone=+94<?php echo (int) $data_set_all_ads[0]->Phone_No ?>" style="background-color: #009900" class="btn"><i class="fa fa-whatsapp"></i>Reply by WhatsApp</a>
                                </div><!-- contact-with -->
                                <br>
                                <!--social-links--> 
                                <div class="">
                                    <!--<h4>Share this ad</h4>-->
                                    <ul class="list-inline">
                                        <li><i style="color: #cc9900" class="fa fa-heart-o"></i><a style="color: #000" href="#">&nbsp;Save ad as Favorite</a></li>
                                        <li><i style="color: #cc0033" class="fa fa-exclamation-triangle"></i><a style="color: #cc0033" href="<?php echo base_url(); ?>Ad_Report/Rpt_Ad/<?php echo $data_set_all_ads[0]->AD_Code ?>">&nbsp;Report this ad</a></li>
<!--                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>-->
                                    </ul>
                                </div> 
                                <!--social-links--> 						
                            </div>
                        </div><!-- slider-text -->				
                    </div>				
                </div><!-- slider -->
                <hr>
                <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1) { ?>
                    <div class="description-info">
                        <div class="row">
                            <div class="col-md-12">
                                <p><strong>Features: </strong><?php
                                    if ($data_set_all_ads[0]->AC) {
                                        echo ' AC ,';
                                    }
                                    if ($data_set_all_ads[0]->Remote) {
                                        echo ' Remote ,';
                                    }
                                    if ($data_set_all_ads[0]->Power_Mir) {
                                        echo ' Power Mirror ,';
                                    }
                                    if ($data_set_all_ads[0]->Power_Mir) {
                                        echo ' Power Mirror ,';
                                    }
                                    if ($data_set_all_ads[0]->Power_W) {
                                        echo ' Power Window ,';
                                    }
                                    if ($data_set_all_ads[0]->Power_S) {
                                        echo ' Power Steering ,';
                                    }
                                    if ($data_set_all_ads[0]->MF_S) {
                                        echo ' Multi-Function Steering ,';
                                    }
                                    if ($data_set_all_ads[0]->Cruise) {
                                        echo ' Cruise Control ,';
                                    }
                                    if ($data_set_all_ads[0]->AirBG) {
                                        echo ' Air Bags ,';
                                    }
                                    if ($data_set_all_ads[0]->Seat_H) {
                                        echo ' Seat heaters ,';
                                    }
                                    ?> 
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="description-info">
                    <div class="row">


                        <!-- description -->
                        <div class="col-md-8">
                            <div class="description">
                                <h4>Description</h4>
                                <p><?php echo nl2br($data_set_all_ads[0]->Description); ?></p><br>
                            </div>
                        </div><!-- description -->


                        <!-- description -->
                        <?php if ($data_set_all_ads[0]->Ad_Cat_ID == 1) { ?>
                            <div  class="col-md-8">
                                <div class="description">
                                    <h4 style="color: #cc0033">SECURITY TIPS</h4>
                                    <h5>Do not make any payments to advertiser before inspecting the vehicle.
                                        sellfree.lk shall not be held responsible for any transaction or agreement reached between the advertiser and you.</h5><br>
                                    <h5>වාහනය පරික්ෂා කර බැලීමෙන් තොරව වාහන අයිතිකරුවන්ට මුදල් ගෙවීමෙන් වලකින්න. එසේ කරනු ලබන කිසිදු ගෙවීමක් සදහා

                                        sellfree.lk වෙබ් අඩවිය වගකීමක් නොදරන බව දන්වා සිටිමු     </h5><br>
                                    <h5>சொத்தை அல்லது உடமையை ஆய்வு செய்வதற்கு முன்பு விளம்பரதாரருக்கு பணம் செலுத்த வேண்டாம்.

                                        sellfree.lk வளையதளமானது உங்களுடைய எந்த ஒரு வாகனக்கட்டணத்துக்கும்பொறுப்பு கூற மாட்டாது.     </h5>            </div>
                            </div><!-- description -->

                        <?php } ?>

                        <!-- description-short-info -->
                        <div class="col-md-4">					
                            <div class="short-info">
                                <h4>ADs</h4>
                                <!-- social-icon -->
                                <ul>
                                    <img src="<?php echo base_url(); ?>assets/Sponse/zkteco01.jpg ">
<!--                                    <li><i class="fa fa-shopping-cart"></i><a href="#">Delivery: Meet in person</a></li>
                                    <li><i class="fa fa-user-plus"></i><a href="#">More ads by <span>Yury Corporation</span></a></li>
                                    <li><i class="fa fa-print"></i><a href="#">Print this ad</a></li>
                                    <li><i class="fa fa-reply"></i><a href="#">Send to a friend</a></li>-->

                                </ul><!-- social-icon -->
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- description-info -->	

                <div class="recommended-info">
                    <div class="row">
                        <div class="col-sm-8">				
                            <div class="section recommended-ads">
                                <div class="featured-top">
                                    <h4>Recommended Ads for You</h4>
                                </div>



                                <?php foreach ($data_similar_ads as $data_simi) { ?>
                                    <!-- ad-item -->
                                    <div class="ad-item row">
                                        <!-- item-image -->
                                        <div class="item-image-box col-sm-4">
                                            <div class="item-image">
                                                <a href="<?php echo base_url(); ?>Single_Ad/Get_Ad_details/<?php echo $data_simi->AD_Code ?>"><img  style="object-fit: cover; width: 200px; height: 150px;border: #999999 1px solid; border-radius: 3px;" src="<?php echo base_url(); ?>assets/Ad_Images/<?php echo $data_simi->Img_Folder ?>/<?php echo $data_simi->IMG1 ?>" alt="Image" class="img-responsive"></a>
                                            </div><!-- item-image -->
                                        </div>								

                                        <div class="item-info col-sm-8">
                                            <!-- ad-info -->
                                            <div class="ad-info">
                                                <h4 class="item-title"><a href="<?php echo base_url(); ?>Single_Ad/Get_Ad_details/<?php echo $data_simi->AD_Code ?>"><?php echo $data_simi->Ad_Title ?></a></h4><br>
                                                <h4 style="font-size: 16px;" class="item-price">LKR:&nbsp;<?php echo number_format($data_simi->Price); ?><span>&nbsp;  <?php
                                                        if ($data_simi->Negotiable == 1) {
//                                        $nego = 'Negotiable';
                                                            echo '(Negotiable)';
                                                        }
                                                        ?></span></h4>


                                                <div class="item-cat">
                                                    <span><a href="#"><?php echo $data_simi->Ad_Cat_Name ?></a></span> /
                                                    <span><a href="#"><?php echo $data_simi->Ad_Sub_Cat_Name ?></a></span><br>
                                                    <span><a href="#"><?php
                                                            if ($data_simi->Ad_Cat_ID == 1) {
                                                                echo $data_simi->Mileage;
                                                            }
                                                            ?>KM</a></span>
                                                </div>										
                                            </div><!-- ad-info -->

                                            <!-- ad-meta -->
                                            <div class="ad-meta">
                                                <div class="meta-content">
                                                    <span class="dated"><a href="#"><?php echo $data_simi->Date ?> <?php echo (date("h:i:a", strtotime($data_simi->Time))) ?> </a></span>
                                                    <a style="color: #000" href="#" class="tag"><i class="fa fa-tags"></i>&nbsp;<?php
                                                        if ($data_simi->Brand_Condition == 1) {
                                                            echo 'New';
                                                        } elseif ($data_simi->Brand_Condition == 2) {
                                                            echo 'Used';
                                                        } elseif ($data_simi->Brand_Condition == 3) {
                                                            echo 'Reconditioned';
                                                        }
                                                        ?> &nbsp;&nbsp;&nbsp; <?php echo $data_simi->CTY_Name ?></a>

                                                </div>										
                                                <!-- item-info-right -->
                                                <div class="user-option pull-right">
                                                    <a href="#" data-toggle="tooltip1" data-placement="top" title="<?php echo $data_simi->CTY_Name ?>, <?php echo $data_simi->DST_Name ?>"><i class="fa fa-map-marker"></i> </a>
                                                    <?php if ($data_simi->Is_member == 1) { ?>
                                                        <a class="online" href="#" data-toggle="tooltip1" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
                                                    <?php } ?>
                                                </div><!-- item-info-right -->
                                            </div><!-- ad-meta -->
                                        </div><!-- item-info -->
                                    </div><!-- ad-item -->
                                <?php } ?>

                            </div>
                        </div><!-- recommended-ads -->

                        <div class="col-sm-4 text-center">
                            <div class="recommended-cta">					
                                <div class="cta">
                                    <!-- single-cta -->						
                                    <div class="single-cta">
                                        <!-- cta-icon -->
                                        <div class="cta-icon icon-secure">
                                            <img src="<?php echo base_url(); ?>assets/Site/images/icon/13.png" alt="Icon" class="img-responsive">
                                        </div><!-- cta-icon -->

                                        <h4>Secure Trading</h4>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
                                    </div><!-- single-cta -->

                                    <!-- single-cta -->
                                    <div class="single-cta">
                                        <!-- cta-icon -->
                                        <div class="cta-icon icon-support">
                                            <img src="<?php echo base_url(); ?>assets/Site/images/icon/14.png" alt="Icon" class="img-responsive">
                                        </div><!-- cta-icon -->

                                        <h4>24/7 Support</h4>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
                                    </div><!-- single-cta -->


                                    <!-- single-cta -->
                                    <div class="single-cta">
                                        <!-- cta-icon -->
                                        <div class="cta-icon icon-trading" >
                                            <img src="<?php echo base_url(); ?>assets/Site/images/icon/15.png" alt="Icon" class="img-responsive">
                                        </div><!-- cta-icon -->

                                        <h4>Easy Trading</h4>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
                                    </div><!-- single-cta -->

                                    <!-- single-cta -->
                                    <div class="single-cta">
                                        <h5>Need Help?</h5>
                                        <p><span>Give a call on</span><a href="tellto:+94117111050">+94117111050</a></p>
                                        <p><span>Email :</span><a href="tellto:08048100000">info@sellfree.lk</a></p>
                                    </div><!-- single-cta -->
                                </div>
                            </div><!-- cta -->
                        </div><!-- recommended-cta-->
                    </div><!-- row -->
                </div><!-- recommended-info -->
            </div><!-- container -->
        </section><!-- main -->



        <?php $this->load->view('Template_Site/Footer_Up.php'); ?>

        <!-- footer -->
        <?php $this->load->view('Template_Site/Footer.php'); ?>
        <!-- footer -->

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

<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
    </body>


</html>