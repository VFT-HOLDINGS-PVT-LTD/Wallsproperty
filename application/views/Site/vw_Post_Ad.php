<?php
$currentUser = $this->session->userdata('login_user');
$Image = "";
$User_Name = $currentUser[0]->Users_Name;
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <?php $this->load->view('template/css.php'); ?>
    <!--<link href="<?php echo base_url(); ?>assets/vendor/datepicker/css/datepicker.css" type="text/css" rel="stylesheet">  Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>

        body {
            background-color: #f5f5f5;
        }

        .imagePreview {
            width: 100%;
            height: 180px;
            background-position: center center;

            background-color: #fff;
            background-size: cover;
            background-repeat: no-repeat;
            display: inline-block;
            box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
        }

        /* .btn-primary {
            display: block;
            border-radius: 0px;
            box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
            margin-top: -5px;
        } */

        .imgUp {
            margin-bottom: 15px;
        }

        .del {
            position: absolute;
            top: 0px;
            right: 15px;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background-color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
        }

        .imgAdd {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #4bd7ef;
            color: #fff;
            box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
            text-align: center;
            line-height: 30px;
            margin-top: 0px;
            cursor: pointer;
            font-size: 15px;
        }

        .user-account {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .user-account h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .checkbox label {
            font-size: 14px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* .btn-primary {
            background-color: #12114e;
            color:white;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
        } */

        .user-page .container {
            margin: auto;
            width: 1200px;
        }

        .row {
            position: center;

        }

        .error {
            color: #ff0000;
            font-size: 15px;
            position: relative;
            line-height: 1;
            width: 12.5rem;
        }
    </style>

</head>

<body id="page-top" style="background-color: #0a3f74;background-image:
          radial-gradient(ellipse farthest-corner at 80vw 15vh ,
          rgba( 228, 206, 247, 1.5) 5%, rgba( 144, 10, 255,0.0) 95%
          );">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('template/dashboard_side.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view('template/header.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 fa fa-user"> ඉදිරි වැඩසටහන්</h1>
                        <h1 class="h3 mb-0 text-gray-800 fa fa-user">නම :
                            <?php echo $User_Name; ?>
                        </h1>

                    </div> -->

                    <section id="main" class="clearfix user-page">
                        <div class="container">
                            <div class="row text-center">

                                <!--success Message-->
                                <!-- <?php if (isset($_SESSION['success_message']) && $_SESSION['success_message'] != '') { ?>
                        <div id="spnmessage" class="alert alert-dismissable alert-success">
                            <strong>Success !</strong> <?php echo $_SESSION['success_message'] ?>
                        </div>
                    <?php } ?> -->

                                <!--Error Message-->
                                <!-- <?php if (isset($_SESSION['error_message']) && $_SESSION['error_message'] != '') { ?>
                        <div id="spnmessage" class="alert alert-dismissable alert-danger error_redirect">
                            <strong>Error !</strong> <?php echo $_SESSION['error_message'] ?>
                        </div>
                    <?php } ?> -->




                                <form action="<?php echo base_url(); ?>Post_Ad/Post_to" method="POST" id="frm_register"
                                    name="frm_register">


                                    <!--<div  class="breadcrumb-section">-->

                                    <!--                        <ol class="breadcrumb">
                                                        <li><a style="color: #000" href="<?php echo base_url(); ?>">Home</a></li>
                                                        <li style="color: #000">Ad Post</li>
                                                    </ol>-->
                                    <!--<h2 style="color: #000" class="title">Post Free Ad</h2>-->

                                    <!--</div>-->
                                    <div id="ad-post">
                                        <div class="row category-tab">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="section cat-option select-category post-option">
                                                    <h2 style="font-size: 28px;"><b>Select a category</b></h2>
                                                    <!--                                    <ul role="tablist" class="nav nav-tabs">
                                        
                                        <?php foreach ($data_set_ad_cat as $t_data) { ?>
                                                                        
                                                                                                                    <li><a href="#cat1" aria-controls="cat1" role="tab" data-toggle="tab">
                                                                                                               
                                                                                                                                <span class="select">
                                                                                                                                <i class="<?php echo $t_data->Image; ?>"></i>
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
                                        
                                        
                                                                            </ul>-->
                                                    <select class="form-control" readonly="" required=""
                                                        id="cmb_category" name="cmb_category">

                                                        <option value="">-- Select Categories --</option>
                                                        <?php foreach ($data_set_ad_cat as $t_data) { ?>
                                                            <option value="<?php echo $t_data->Ad_Cat_ID; ?>">
                                                                <?php echo $t_data->Ad_Cat_Name; ?>
                                                            </option>

                                                        <?php }
                                                        ?>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <div class="section tab-content subcategory post-option">
                                                    <h2 style="font-size: 28px;"><b>Select a sub category</b></h2>
                                                    <select class="form-control" readonly="" required=""
                                                        id="cmb_sub_category" name="cmb_sub_category">
                                                        <!--<option value="" >-- All Categories --</option>-->
                                                        <?php // foreach ($data_set_ad_cat as $t_data) {     ?>
                                                        <!--<option value="<?php echo $t_data->Ad_Cat_ID; ?>" > <?php echo $t_data->Ad_Cat_Name; ?></option>-->

                                                        <?php // }
                                                        ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="section  post-option" style="border: 2px solid #ccc; border-radius: 10px; padding: 20px;">
                                                    <h2 style="font-size: 20px;">Post an Ad in just <span> 60 seconds
                                                        </span></h2>
                                                    <p style="color:red;">Please DO NOT post multiple ads for the same
                                                        items or service.
                                                        All duplicate, spam and wrongly categorized ads will be deleted.
                                                    </p>
                                                    <br>
                                                    <div class="btn-section">
                                                        <button type="submit"
                                                            style="font-size: 30px; font-weight: bold;"
                                                            href="ad-post-details.html" class="btn btn-success"
                                                            >&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;</button>
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


                                </form>





                            </div><!-- row -->
                        </div><!-- container -->
                    </section><!-- signup-page -->




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('template/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <?php $this->load->view('template/js.php'); ?>

    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




    <script src="<?php echo base_url(); ?>assets/vendor/datepicker/js/bootstrap-datepicker.js"></script>



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

</body>

</html>