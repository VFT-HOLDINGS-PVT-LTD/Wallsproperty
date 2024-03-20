
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>VFT OLDINGS (PVT) LTD - ERP SYSTEM</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url(); ?>assetsAdmin/css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="" style="background: rgb(44,164,189);
          background: linear-gradient(90deg, rgba(44,164,189,0.6477941518404237) 0%, rgba(9,36,121,0.6365896700477065) 44%, rgba(57,77,139,0.8830882694874825) 88%);">
        <!--<body class="" style="background-color: #2892c8">-->
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5" >
                        <div class="card-body p-0" style="border: #e2dede 4px solid; border-radius: 7px;">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-lg-block ">
                                    <br>
                                    <img style="height: 100px;display: block;
                                         margin-left: auto;
                                         margin-right: auto;
                                         width: 295px;" src="<?php echo base_url(); ?>assetsAdmin/img/sellfree.png">
                                    <hr>

                                    <h3 style="text-align: center">
                                    </h3>
                                    <h3 style="text-align: center">VFT HOLDINGS (PVT) LTD</h3>
                                    <h6 style="text-align: center">Visual Future Technology Solution</h6>
                                    <h6 style="text-align: center">www.vftholdings.lk</h6>

                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <!--<h1 class="h4 text-gray-900 mb-4"> ආයුබොවන් !</h1>-->
                                            <h1 class="h4 text-gray-900 mb-4">AD MANAGER 2.0</h1>
                                        </div>
                                        <form class="user" action="<?php echo base_url() ?>Login/verifyUser" method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="txt_username" name="txt_username" aria-describedby="emailHelp" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="txt_password" name="txt_password" placeholder="Password">
                                            </div>
                                            <!--                                            <div class="form-group">
                                                                                            <div class="custom-control custom-checkbox small">
                                                                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                                                            </div>
                                                                                        </div>-->
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                LOGIN
                                            </button>
                                            <hr>

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


                                            <hr>
                                            <!--                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                                                                        </a>
                                                                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                                                                        </a>-->
                                        </form>
                                        <!--<hr>-->
                                        <!--                                        <div class="text-center">
                                                                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <a class="small" href="register.html">Create an Account!</a>
                                                                                </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <?php $this->load->view('template/js.php'); ?>	



        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>


        <!--JQuary Validation-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#frm_designation").validate();
                $("#spnmessage").hide("shake", {times: 6}, 3000);
            });
        </script>

    </body>

</html>
