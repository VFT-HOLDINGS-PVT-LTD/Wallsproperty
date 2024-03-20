<!DOCTYPE html>
<html lang="en">

    <?php
    $currentUser = $this->session->userdata('login_user');

    $user_name = $currentUser[0]->Users_Name;
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>Sri Lanka Largest Classifieds Portal</title>


        <?php $this->load->view('Site/CSS_JS/css.php'); ?>

        <style>
            body
            {
                background-color:#f5f5f5;
            }
            .imagePreview {
                width: 80%;
                height: 90px;
                background-position: center center;

                background-color:#fff;
                background-size: cover;
                background-repeat:no-repeat;
                display: inline-block;
                box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
                border-radius: 5px;
            }
        
            .imgUp
            {
                margin-bottom:1px;

            }
            .del
            {
                position:absolute;
                top:0px;
                right:15px;
                width:30px;
                height:30px;
                text-align:center;
                line-height:30px;
                background-color:rgba(255,255,255,0.6);
                cursor:pointer;
            }
            .imgAdd
            {
                width:30px;
                height:30px;
                border-radius:50%;
                background-color:#4bd7ef;
                color:#fff;
                box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
                text-align:center;
                line-height:30px;
                margin-top:0px;
                cursor:pointer;
                font-size:15px;
            }
        </style>




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

        <section id="main" class="clearfix ad-details-page">
            <div class="container">
                <!--                <div class="breadcrumb-section">
                
                                    <ol class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li>Ad Post</li>
                                    </ol>
                                    <h2 class="title">Mobile Phones</h2>
                                </div>-->
                <div class="adpost-details">
                    <div class="row">
                        <div class="col-lg-8">
                            <form style="color: #000"  id="frm_data" name="frm_data" action="<?php echo base_url(); ?>Post_Ad/Publish_Post" method="POST" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="section postdetails">
                                        <h4>Sell an item or service <span class="pull-right">* Mandatory Fields</span></h4>
                                        <div class="form-group selected-product">
                                            <ul class="select-category list-inline">
                                                <li>
                                                    <a href="#">
                                                        <span class="select">
                                                            <img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $cat_img[0]->Image ?>" alt="Images" class="img-fluid">
                                                        </span>
                                                        <?php echo $cat_img[0]->Ad_Cat_Name ?>
                                                        <input type="text" value="<?php echo  $cat_img[0]->Ad_Cat_ID ?>" name="txt_cat" id="txt_cat" hidden="">
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#"><?php echo $sb_cat_nm[0]->Ad_Sub_Cat_Name ?></a>
                                                    <input type="text" value="<?php echo  $sb_cat_nm[0]->Ad_sub_Cat_ID ?>" name="txt_sub_cat" id="txt_sub_cat" hidden="">
                                                </li>
                                            </ul>
                                            <a class="edit" href="<?php echo base_url(); ?>Post_Ad"><i class="fa fa-pencil"></i>Edit</a>
                                        </div>
                                        <!--                                        <div class="row form-group">
                                                                                    <label class="col-sm-3">Type of ad<span class="required">*</span></label>
                                                                                    <div class="col-sm-9 user-type">
                                                                                        <input type="radio" name="sellType" value="newsell" id="newsell"> <label for="newsell">I want to sell </label>
                                                                                        <input type="radio" name="sellType" value="newbuy" id="newbuy"> <label for="newbuy">want to buy</label>
                                                                                    </div>
                                                                                </div>-->
                                        <!--                                        <div class="row form-group add-title">
                                                                                    <label class="col-sm-3 label-title">Title for your Ad<span class="required">*</span></label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" id="text" placeholder="ex, Sony Xperia dual sim 100% brand new ">
                                                                                    </div>
                                                                                </div>-->

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">District<span class="required">*</span></label>
                                            <div class="col-sm-3">
                                                <select class="form-control"  required="" id="cmb_dist" name="cmb_dist" >
                                                    <option value="" default>-- Select District --</option>
                                                    <?php foreach ($data_dist as $t_data) { ?>
                                                        <option value="<?php echo $t_data->DST_ID; ?>" ><?php echo $t_data->DST_Name; ?></option>

                                                    <?php }
                                                    ?>   
                                                </select>
                                            </div>
                                            
                                            <label class="col-sm-2 label-title">City<span class="required">*</span></label>
                                            <div class="col-sm-4">
                                                <select class="form-control"  required="" id="cmb_city" name="cmb_city" >
                                                    <option value="" default>-- Select City --</option>
<!--                                                    <?php //foreach ($data_brand as $t_data) { ?>
                                                        <option value="<?php //echo $t_data->BRD_ID; ?>" ><?php // echo $t_data->BRD_Name; ?></option>

                                                    <?php // }
                                                    ?>   -->
                                                </select>
                                            </div>


                                        </div>

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Brand Name<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="" id="cmb_brand" name="cmb_brand" >
                                                    <option value="" default>-- Select Brand --</option>
                                                    
                                                    <?php foreach ($data_brand as $t_data) { ?>
                                                        <option value="<?php echo $t_data->BRD_ID; ?>" ><?php echo $t_data->BRD_Name; ?></option>
                                                        
                                                    <?php }
                                                    ?>   
                                                        
                                                </select>
                                            </div>
                                            <input type="text" value="<?php echo $data_brand[0]->BRD_Name; ?>" name="txt_brand_name" id="txt_brand_name" hidden="">


                                        </div>


                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Model Name<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="" id="txt_model" name="txt_model" class="form-control" placeholder="Ex: Montero Sport">
                                            </div>
                                        </div>

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Manufactured Year<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="number" id="txt_m_year" maxlength="4" name="txt_m_year"  class="form-control" placeholder="Ex: 2012">
                                            </div>
                                        </div>

                                        <div class="row form-group select-condition">
                                            <label class="col-sm-3">Condition<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="radio" name="itemCondi" value="1" id="new">
                                                <label for="new">New</label>
                                                <input type="radio" name="itemCondi" value="2" id="used">
                                                <label for="used">Used</label>
                                                <input type="radio" name="itemCondi" value="3" id="reconditioned">
                                                <label for="reconditioned">Reconditioned</label>

                                            </div>
                                        </div>

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Transmission<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="" id="cmb_transmi" name="cmb_transmi" >
                                                    <option value="" default>-- Select Transmission --</option>
                                                    <?php foreach ($data_trans as $t_data) { ?>
                                                        <option value="<?php echo $t_data->TRNS_ID; ?>" ><?php echo $t_data->TRNS_Name; ?></option>

                                                    <?php }
                                                    ?>   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Fuel Type<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="" id="cmb_fuel" name="cmb_fuel" >
                                                    <option value="" default>-- Select Fuel Type --</option>
                                                    <?php foreach ($data_fual as $t_data) { ?>
                                                        <option value="<?php echo $t_data->FUAL_ID; ?>" ><?php echo $t_data->Fual_name; ?></option>

                                                    <?php }
                                                    ?>   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Mileage (km)<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="number" required="" id="txt_km" name="txt_km"  class="form-control" placeholder="Ex: 2000">
                                            </div>
                                        </div>

                                        <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Engine capacity (cc)<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="number"  class="form-control" id="txt_CC" name="txt_CC" placeholder="Ex: 1500">
                                            </div>
                                        </div>


                                        <div class="row form-group select-price">
                                            <label class="col-sm-3 label-title">Price<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <label>Rs.</label>
                                                <input required="" type="text" class="form-control"  id="txt_price" name="txt_price" >
                                                <input type="checkbox" name="txt_Negotiable" id="txt_Negotiable">
                                                <label for="negotiable">Negotiable </label>
                                            </div>
                                        </div>

                                        <div class="row form-group additional">
                                            <label class="col-sm-3 label-title">Additional<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <div class="checkbox">
                                                    <label for="AC"><input type="checkbox" name="AC" id="AC">AC</label>
                                                    <label for="Remote"><input type="checkbox" name="Remote" id="Remote">Remote Key</label>
                                                    <label for="Power_Mir"><input type="checkbox" name="Power_Mir" id="Power_Mir">Power Mirror</label>
                                                    <label for="Power_W"><input type="checkbox" name="Power_W" id="Power_W">Power Window</label>
                                                    <label for="Power_S"><input type="checkbox" name="Power_S" id="Power_S">Power Steering</label>
                                                    <label for="MF_S"><input type="checkbox" name="MF_S" id="MF_S"> Multi-Function Steering</label>
                                                    <label for="Cruise"><input type="checkbox" name="Cruise" id="Cruise">Cruise Control</label>
                                                    <label for="AirBG"><input type="checkbox" name="AirBG" id="AirBG">Air Bags</label>
                                                    <label for="Seat_H"><input type="checkbox" name="Seat_H" id="Seat_H">Seat heaters</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group item-description">
                                            <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="txt_desc" name="txt_desc" placeholder="Write few lines about your products" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 offset-sm-3">
                                                <p>5000 characters left</p>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <label class="col-sm-3 label-title">Photos for your ad <span></span> </label>
                                            <!--<div class="col-sm-9">-->
                                                <!--<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>-->
                                            <!--                                                <div class="upload-section">-->

                                            <div style="margin-right: -50px;"  class="form-group col-md-3">
                                                <!--<label for="inputState">Select Image</label>-->

                                                <div class="row">
                                                    <div class="col-sm-12 imgUp">
                                                        <div class="imagePreview"></div>
                                                        <label class="btn btn-success">
                                                            Select Image<input type="file" name="img_pro1" id="img_pro1" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
                                                        </label>
                                                    </div><!-- col-2 -->
                                                    <!--<i class="fa fa-plus imgAdd"></i>-->
                                                </div><!-- row -->

                                            </div>


                                            <div style="margin-right: -50px;"  class="form-group col-md-3">
                                                <!--<label for="inputState">Select Image</label>-->

                                                <div class="row">
                                                    <div class="col-sm-12 imgUp">
                                                        <div class="imagePreview"></div>
                                                        <label class="btn btn-success">
                                                            Select Image<input type="file" name="img_pro2" id="img_pro2" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
                                                        </label>
                                                    </div><!-- col-2 -->
                                                    <!--<i class="fa fa-plus imgAdd"></i>-->
                                                </div><!-- row -->

                                            </div>


                                            <div style="margin-right: -50px;"  class="form-group col-md-3">
                                                <!--<label for="inputState">Select Image</label>-->

                                                <div class="row">
                                                    <div class="col-sm-12 imgUp">
                                                        <div class="imagePreview"></div>
                                                        <label class="btn btn-success">
                                                            Select Image<input type="file" name="img_pro3" id="img_pro3" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
                                                        </label>
                                                    </div><!-- col-2 -->
                                                    <!--<i class="fa fa-plus imgAdd"></i>-->
                                                </div><!-- row -->

                                            </div>



                                            <div style="margin-right: -50px;"  class="form-group col-md-3">
                                                <!--<label for="inputState">Select Image</label>-->

                                                <div class="row">
                                                    <div class="col-sm-12 imgUp">
                                                        <div class="imagePreview"></div>
                                                        <label class="btn btn-success">
                                                            Select Image<input type="file" name="img_pro4" id="img_pro4" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
                                                        </label>
                                                    </div><!-- col-2 -->
                                                    <!--<i class="fa fa-plus imgAdd"></i>-->
                                                </div><!-- row -->

                                            </div>

                                        </div>
                                        <div style="margin-top: -60px;" class="row form-group">
                                            <label class="col-sm-3 label-title">&nbsp;<span>&nbsp;</span> </label>
                                            <div style="margin-right: -50px;"  class="form-group col-md-3">
                                                <!--<label for="inputState">Select Image</label>-->

                                                <div class="row">
                                                    <div class="col-sm-12 imgUp">
                                                        <div class="imagePreview"></div>
                                                        <label class="btn btn-success">
                                                            Select Image<input type="file" name="img_pro5" id="img_pro5" class="uploadFile img"  style="width: 0px;height: 0px;overflow: hidden;">
                                                        </label>
                                                    </div><!-- col-2 -->
                                                    <!--<i class="fa fa-plus imgAdd"></i>-->
                                                </div><!-- row -->

                                            </div>


                                        </div>



                                    </div>
                                    <!--                                    <div class="section seller-info">
                                                                            <h4>Seller Information</h4>
                                                                            <div class="row form-group">
                                                                                <label class="col-sm-3 label-title">Condition<span class="required">*</span></label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="radio" name="sellerType" value="individual" id="individual">
                                                                                    <label for="individual">Individual</label>
                                                                                    <input type="radio" name="sellerType" value="dealer" id="dealer">
                                                                                    <label for="dealer">Dealer</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <label class="col-sm-3 label-title">Your Name<span class="required">*</span></label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" name="name" class="form-control" placeholder="ex, Jhon Doe">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <label class="col-sm-3 label-title">Your Email ID<span class="required">*</span></label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="email" name="email" class="form-control" placeholder="ex, jhondoe@mail.com">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <label class="col-sm-3 label-title">Mobile Number<span class="required">*</span></label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" name="mobileNumber" class="form-control" placeholder="ex, +912457895">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row form-group">
                                                                                <label class="col-sm-3 label-title">Address</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" name="address" class="form-control" placeholder="ex, alekdera House, coprotec, usa">
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                    <!--                                    <div class="section">
                                                                            <h4>Make your Ad Premium </h4>
                                                                            <p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want. <a href="#">Learn more</a></p>
                                                                            <ul class="premium-options">
                                                                                <li class="premium">
                                                                                    <input type="radio" name="premiumOption" value="day-one" id="day-one">
                                                                                    <label for="day-one">Regular Ad Per Day</label>
                                                                                    <span>$20.00</span>
                                                                                </li>
                                                                                <li class="premium">
                                                                                    <input type="radio" name="premiumOption" value="day-two" id="day-two">
                                                                                    <label for="day-two">Top Ad for 3 days</label>
                                                                                    <span>$30.00</span>
                                                                                </li>
                                                                                <li class="premium">
                                                                                    <input type="radio" name="premiumOption" value="day-three" id="day-three">
                                                                                    <label for="day-three">Top Ad for 7 days</label>
                                                                                    <span>$50.00</span>
                                                                                </li>
                                                                                <li class="premium">
                                                                                    <input type="radio" name="premiumOption" value="day-four" id="day-four">
                                                                                    <label for="day-four">Daily Bump Up for 7 days</label>
                                                                                    <span>$100.00</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>-->
                                    <div class="checkbox section agreement">
                                      
                                            <input type="checkbox" required="" name="send" id="send">
                                            <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Trade to find a genuine buyer.
                                        
                                        
                                    </div>
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Post Your Ad</button>
                            </form>
                        </div>

                        <div class="col-lg-4">
                            <div class="section quick-rules">
                                <h3 style="color: #000" class="">Welcome : <?php echo $user_name; ?></h3>
                                <h4>Quick rules</h4>
                                <p class="lead">Posting an ad on <a href="#">sellfree.lk</a> is free! However, all ads must follow our rules:</p>
                                <ul>
                                    <li>Make sure you post in the correct category.</li>
                                    <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                    <li>Do not upload pictures with water marks.</li>
                                    <li>Do not post ads containing multiple items unless it's a package deal.</li>
                                    <li>Do not put your email or phone numbers in the title or description.</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




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


        <script type="text/javascript">


            $(document).ready(function () {
                $('select[name="cmb_category"]').on('change', function () {
                    var stateID = $(this).val();
                    if (stateID) {
                        $.ajax({
                            url: '<?php echo base_url(); ?>Post_Ad/myformAjax/' + stateID,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                $('select[name="cmb_sub_category"]').empty();


                                $('select[name="cmb_sub_category"]').append('<option value="" default>Select Sub Category</option>');
                                $.each(data, function (key, value) {
                                    $('select[name="cmb_sub_category"]').append('<option value="' + value.Ad_sub_Cat_ID + '">' + value.Ad_Sub_Cat_Name + '</option>');
                                });
                            }
                        });
                    }
                });
            });
        </script>


        <script>
            $(".imgAdd").click(function () {
                $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
            });
            $(document).on("click", "i.del", function () {
                $(this).parent().remove();
            });
            $(function () {
                $(document).on("change", ".uploadFile", function ()
                {
                    var uploadFile = $(this);
                    var files = !!this.files ? this.files : [];
                    if (!files.length || !window.FileReader)
                        return; // no file selected, or no FileReader support

                    if (/^image/.test(files[0].type)) { // only image file
                        var reader = new FileReader(); // instance of the FileReader
                        reader.readAsDataURL(files[0]); // read the local file

                        reader.onloadend = function () { // set image data as background of div
                            //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                            uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                        }
                    }

                });
            });
        </script>
        
        
        
        <script type="text/javascript">


            $(document).ready(function () {
                $('select[name="cmb_dist"]').on('change', function () {
                    var stateID = $(this).val();
                    if (stateID) {
                        $.ajax({
                            url: '<?php echo base_url(); ?>Post_Ad/myformAjaxcity/' + stateID,
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                $('select[name="cmb_city"]').empty();


                                $('select[name="cmb_city"]').append('<option value="" default>Select city</option>');
                                $.each(data, function (key, value) {
                                    $('select[name="cmb_city"]').append('<option value="' + value.CTY_ID + '">' + value.CTY_Name + '</option>');
                                });
                            }
                        });
                    }
                });
            });
        </script>
        
        


    </body>


</html>