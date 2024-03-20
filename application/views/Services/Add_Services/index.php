
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <?php $this->load->view('template/css.php'); ?>

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









                        <!-- Content Row -->





                        <form style="color: #000"  id="frm_data" name="frm_data" action="<?php echo base_url(); ?>Data_Feed/New_Cus/insert_Data" method="POST" enctype="multipart/form-data">

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



                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Company Name</label>
                                    <select required=""  name="txt_ds_office" id="txt_ds_office" class="form-control">
                                        <option value="" default>-- Select --</option>
                                        <?php foreach ($data_cus as $t_data) { ?>
                                            <option value="<?php echo $t_data->Cus_ID; ?>" ><?php echo $t_data->Customer_name; ?></option>

                                        <?php }
                                        ?>     
                                    </select>
                                </div>



                                <div class="form-group col-md-6">

                                    <label for="">Branch</label>
                                    <select required=""  name="txt_ds_office" id="txt_ds_office" class="form-control">
                                        <option value="" default>-- Select --</option>
                                        <?php foreach ($data_cus as $t_data) { ?>
                                            <option value="<?php echo $t_data->Cus_ID; ?>" ><?php echo $t_data->Customer_name; ?></option>

                                        <?php }
                                        ?>     
                                    </select>

                                </div>
                            </div>

                            <!--                            <div class="form-group">
                                                            <label for="inputAddress2">Phone Number / දුරකතන අංකය</label>
                                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                                        </div>-->
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="">Service Person</label>
                                    <select required=""  name="txt_ds_office" id="txt_ds_office" class="form-control">
                                        <option value="" default>-- Select --</option>
                                        <?php foreach ($data_set_tech as $t_data) { ?>
                                            <option value="<?php echo $t_data->TCH_ID; ?>" ><?php echo $t_data->Technician_Name; ?></option>

                                        <?php }
                                        ?>     
                                    </select>

                                </div>


                            </div>
                            <!--<table class="table table-hover m-n" id="item_table">-->
                            <div class="form-row" style="border: #d8d8d8 4px solid; border-radius: 7px;" id="item_table">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Service Type</label>
                                    <select required="required" name="txt_section" id="txt_section" class="form-control">
                                        <option value="" default>-- Select --</option>
                                        <?php foreach ($data_set_sv_type as $t_data) { ?>
                                            <option value="<?php echo $t_data->SC_ID; ?>" ><?php echo $t_data->SC_Name; ?></option>

                                        <?php }
                                        ?>     
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Company Comment</label>
                                    <input type="text" required="required" autocomplete="off" class="form-control" name="txt_name" id="txt_name" placeholder="Ex: All Service are done">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Customer Comment</label>
                                    <input type="text" required="required" autocomplete="off" class="form-control" name="txt_name" id="txt_name" placeholder="Ex: All Service are done">
                                </div>

                            </div>

                            <div class="form-row" style="border: #d8d8d8 4px solid; border-radius: 7px;" id="item_table">
                            </div>

                            <button type="button" class="addmore btn btn-primary fa fa-close fa fa-save"> Add Another Service</button>
                            <!--<button class="btn btn-success addmore fa fa-plus-square" type="button">&nbsp;ADD</button>-->


                            <hr>
                            <button type="button" class="btn btn-danger fa fa-close">අවලංගු කරන්න</button>
                            <button type="submit" class="btn btn-success fa fa-save">&nbsp;ගබඩා කරන්න</button>

                        </form>




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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <!-- Bootstrap core JavaScript-->
<!--        <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jqueryui-1.9.2.min.js"></script>-->
<!--        <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

        <!-- Core plugin JavaScript-->
        <!--<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>-->

        <!-- Custom scripts for all pages-->
        <!--<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>-->

        <!-- Page level plugins -->
        <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

<!--        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->





        <!--JQuary Validation-->
        <script type="text/javascript">
            $(document).ready(function () {
//                                                                                        $("#frm_designation").validate();
                $("#spnmessage").hide("shake", {times: 4}, 2000);
            });
        </script>



        <script>
            count = 1;
            $(".addmore").click(function () {

                alert("sss");
                $("#item_table").append('<tr id="itemRow_' + count + '">' +
                        '<td style="width: 70px;"> <input type="text" class="form-control autocomplete_txt" data-type="tbl_inventory.P_ID" class="form-control autocomplete_txt" required="required" name="itemNo[]" id="itemNo_' + count + '"  autocomplete="off"></td>' +
                        '<td style="width: 150px;"> <input type="text" class="form-control autocomplete_txt" data-type="tbl_inventory.P_Name" required="required" name="itemName[]" id="itemName_' + count + '" placeholder=""></td>' +
                        '<td style="width:30px;" class="text-right"> <input type="text" class="form-control" required="required" name="serial[]" id="serial_' + count + '" placeholder=""></td>' +
                        '<td style="width:30px;" class="text-right"> <input type="text" class="form-control changesNo" required="required" name="price[]" id="price_' + count + '" placeholder=""></td>' +
//                            '<td style="width: 10px;"  class="text-right"> <input type="text" readonly="readonly" class="form-control commiss" name="commiss[]" id="commiss_' + count + '" placeholder=""></td>' +
//                            '<td style="width: 10px;" class="text-right"> <input type="text" class="form-control commiss_w_price" name="commiss_w_price[]" id="commiss_w_price_' + count + '" placeholder=""></td>' +
//                            '<td style="width: 30px;" class="text-right"> <input type="text" class="form-control changesNo" required="required" name="cur[]" id="cur_' + count + '" placeholder=""></td>' +
                        '<td style="width: 30px;" class="text-right"> <input type="text" class="form-control Qty" required="required" name="quantity[]" id="quantity_' + count + '" placeholder=""></td>' +
                        '<td style="width: 25px;" class="text-right">   <select class="form-control"  name="warrenty[]" id="warrenty_' + count + '" ><option value="" default>-- Select --</option><?php foreach ($data_warrty as $t_data) { ?><option value="<?php echo $t_data->W_ID; ?>" ><?php echo $t_data->W_Period; ?></option><?php } ?>     </select>    </td>' +
                        '<td style="width: 10px;" class="text-right"> <input type="text" class="form-control Discount" name="discount[]" id="discount_' + count + '" placeholder=""></td>' +
                        '<td style="width: 50px;" class="text-right"> <input type="text" class="form-control totalLinePrice" required="required" name="total[]" id="total_' + count + '" placeholder=""></td>' +
                        '<td style="width: 20px;"><button id="bntRemove" class="fa fa-remove btn btn-danger"></button></td>' +
                        '</tr>');
                count++;
            });


        </script>




    </body>

</html>
