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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include Font Awesome CSS for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!--<link href="<?php echo base_url(); ?>assets/vendor/datepicker/css/datepicker.css" type="text/css" rel="stylesheet">  Datepicker -->



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

        .btn-primary {
            display: block;
            border-radius: 0px;
            box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
            margin-top: -5px;
        }

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

        .action-buttons button {
            margin-right: 5px;
        }


        .action-buttons button.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }


        .action-buttons button.btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }


        .action-buttons button.btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }


        .action-buttons button.btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }


        .action-buttons button i {
            margin-right: 5px;
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Customer List</h1>
                        <!-- <h1 class="h3 mb-0 text-gray-800 fa fa-user">නම : <?php echo $User_Name; ?></h1> -->

                    </div>
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                    style="font-size: 14px;">
                                    <thead>
                                        <tr style="color: #000000">
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>E-mail</th>
                                            <th>Contact</th>
                                            <!-- <th>Job Type</th>
                                            <th>Job</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data_set_users as $data) {
                                            ?>
                                            <tr style="color: #000000" class='odd gradeX'>

                                                <td width='50'>
                                                    <?php echo $data->U_ID ?>
                                                </td>


                                                <td width='100' style='font-weight: bold'>
                                                    <?php echo $data->Users_Name ?>
                                                </td>
                                                <td width='100' style='font-weight: bold'>
                                                    <?php echo $data->Email ?>
                                                </td>
                                                <td width='100' style='font-weight: bold'>
                                                    <?php echo $data->Phone_No ?>
                                                </td>
                                                <!-- <td width='100'>
                                                    <?php echo $data->Is_member ?>
                                                </td>
                                                <td width='100'>
                                                    <?php echo $data->is_allow_login ?>
                                                </td> -->
                                                <td width='300'>
                                                    <button class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i>
                                                        View</button>
                                                    <a class="btn btn-sm btn-info" href="<?php echo base_url() ?>Users/Edit/<?php echo $data->U_ID; ?>"><i class="fas fa-edit"></i>
                                                        Edit</a>
                                                    <button class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $data->U_ID ?>)" ><i class="fas fa-trash-alt"></i>
                                                        Delete</button>
                                                    <button class="btn btn-sm btn-success"><i class="fas fa-envelope"></i>
                                                        Send</button>
                                                </td>


                                                <!--                                                    <td width='10'>
                                                                            <a class='get_data btn btn-success grid_button' style=""   href='<?php echo base_url(); ?>Employee_Management/Edit_Employees/edit/<?php echo $data->TD_JB_ID ?>'> <i class='fa fa-edit'></i> </a>
                                                                        </td>-->




                                            </tr>



                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="panel-footer"></div>
                            </div>
                        </div>
                    </div>




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

        function confirmDelete(userId) {
            if (confirm("Are you sure you want to delete this user?")) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('Register/delete_user'); ?>",
                    data: { user_id: userId },
                    success: function (response) {         
                        alert("User deleted successfully");
                        location.reload(); 
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        alert("Error deleting user");
                    }
                });
            }
        }
        
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>