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

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }

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

                    <section id="main" class="clearfix user-page" style="background-color: white;">
                        <div class="container">
                            <div class="row">
                                <!-- user-login -->
                                <div class="col-sm-6 col-md-12">
                                    <div class="user-account">
                                        <h2>Create a Account</h2>
                                        <form action="<?php echo base_url(); ?>Register/Register_user" method="POST"
                                            id="frm_register" name="frm_register">
                                            <div class="form-group">#
                                                <input type="text" id="txt_name" name="txt_name" required="required"
                                                    class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <!-- <span>Your email will be login Username</span> -->
                                                <input type="email" id="txt_mail" name="txt_mail" required="required"
                                                    class="form-control" placeholder="Email Address">
                                                <span id="email_result"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="txt_password" id="txt_password" required=""
                                                    class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="txt_conf_password" id="txt_conf_password"
                                                    required="" class="form-control" placeholder="Confirm Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" id="txt_mobile" name="txt_mobile"
                                                    class="form-control" placeholder="Mobile Number">
                                                <span id="phone_result"></span>
                                            </div>

                                            <div class="checkbox">
                                                <label class="pull-left checked" for="signing"><input type="checkbox"
                                                        name="signing" id="signing"> By signing up for an account you
                                                    agree to our Terms and Conditions
                                                </label>
                                            </div><!-- checkbox -->
                                            <br>
                                            <button type="submit" href="#" class="btn btn-primary">Submit</button>
                                            <span style="margin-right: 10px;"></span>
                                            <button type="clear" href="#" class="btn btn-danger">Clear</button>
                                        </form>
                                        <!-- checkbox -->

                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- container -->
                    </section>




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
    <?php $this->load->view('Site/CSS_JS/js.php'); ?>




    <script src="<?php echo base_url(); ?>assets/vendor/datepicker/js/bootstrap-datepicker.js"></script>



    <!--Date Format-->
    <script>

        //            $('#txt_Date').datepicker({
        //                format: "yyyy-mm-dd",
        //                "todayHighlight": true,
        //                autoclose: true,
        //                format: 'yyyy-mm-dd'
        //            }).on('changeDate', function (ev) {
        //                $(this).datepicker('hide');
        //            });
        //            $('#txt_realize_date').datepicker({
        //                format: "dd/mm/yyyy",
        //                "todayHighlight": true,
        //                autoclose: true,
        //                format: 'yyyy/mm/dd'
        //            }).on('changeDate', function (ev) {
        //                $(this).datepicker('hide');
        //            });


    </script>


    <!--JQuary Validation-->
    <script type="text/javascript">
        $(document).ready(function () {
            //                                                                                        $("#frm_designation").validate();
            $("#spnmessage").hide("shake", { times: 4 }, 2000);
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
            $(document).on("change", ".uploadFile", function () {
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
                if (email != '') {
                    $.ajax({
                        url: "<?php echo base_url(); ?>Register/check_email_avalibility",
                        method: "POST",
                        data: { email: email },
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
                if (phone != '') {
                    $.ajax({
                        url: "<?php echo base_url(); ?>Register/check_phone_avalibility",
                        method: "POST",
                        data: { phone: phone },
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
