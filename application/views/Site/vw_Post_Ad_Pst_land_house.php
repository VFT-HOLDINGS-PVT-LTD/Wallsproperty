<!DOCTYPE html>
<html lang="en">
<?php
$currentUser = $this->session->userdata('login_user');

$user_name = $currentUser[0]->Users_Name;
?>

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
	<style>
		.quick-rules {
			background-color: #f9f9f9;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
		}

		.quick-rules h4 {
			color: #333;
			font-size: 20px;
			margin-bottom: 15px;
		}

		.quick-rules p {
			font-size: 16px;
			color: #666;
			margin-bottom: 15px;
		}

		.quick-rules ul {
			list-style: none;
			padding: 0;
		}

		.quick-rules li {
			font-size: 16px;
			color: #666;
			margin-bottom: 10px;
		}

		.quick-rules a {
			color: #007bff;
			text-decoration: none;
		}

		.quick-rules a:hover {
			text-decoration: underline;
		}

		.ad-details-page {
			padding: 30px 0;
		}

		.ad-details-page .postdetails {
			background-color: #f9f9f9;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
		}

		.ad-details-page .postdetails h4 {
			color: #333;
			font-size: 20px;
			margin-bottom: 15px;
		}

		.ad-details-page .postdetails p {
			font-size: 16px;
			color: #666;
			margin-bottom: 15px;
		}

		.ad-details-page .postdetails ul {
			list-style: none;
			padding: 0;
		}

		.ad-details-page .postdetails li {
			font-size: 16px;
			color: #666;
			margin-bottom: 10px;
		}

		.ad-details-page .postdetails a {
			color: #007bff;
			text-decoration: none;
		}

		.ad-details-page .postdetails a:hover {
			text-decoration: underline;
		}

		.ad-details-page .quick-rules {
			background-color: #f9f9f9;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
			margin-top: 30px;
		}

		.ad-details-page .quick-rules h4 {
			color: #333;
			font-size: 20px;
			margin-bottom: 15px;
		}

		.ad-details-page .quick-rules p {
			font-size: 16px;
			color: #666;
			margin-bottom: 15px;
		}

		.ad-details-page .quick-rules ul {
			list-style: none;
			padding: 0;
		}

		.ad-details-page .quick-rules li {
			font-size: 16px;
			color: #666;
			margin-bottom: 10px;
		}

		.ad-details-page .quick-rules a {
			color: #007bff;
			text-decoration: none;
		}

		.ad-details-page .quick-rules a:hover {
			text-decoration: underline;
		}

		.select-category {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.select-category li {
			display: inline-block;
			margin-right: 10px;
		}

		.select-category li:last-child {
			margin-right: 0;
		}

		.select-category li a {
			text-decoration: none;
			color: #333;
			/* Adjust color as needed */
		}

		.select-category li a:hover {
			color: #007bff;
			/* Adjust hover color as needed */
		}

		.select-category li.active a {
			font-weight: bold;
			color: #007bff;
			/* Adjust active color as needed */
		}

		.edit {
			margin-left: 10px;
			color: #007bff;
			/* Adjust color as needed */
			text-decoration: none;
		}

		.edit:hover {
			text-decoration: underline;
		}

		.edit {
			color: #007bff;
			text-decoration: none;
		}

		.edit:hover {
			text-decoration: underline;
		}

		.agreement {
			margin-top: 20px;
			font-size: 14px;
			color: #555;
		}

		.agreement input[type="checkbox"] {
			margin-right: 5px;
		}

		.agreement a {
			color: #007bff;
			text-decoration: none;
		}

		.agreement a:hover {
			text-decoration: underline;
		}

		/* add */
		/* Styles for form elements */
		input[type="text"],
		select {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		/* Style for labels */
		label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		/* Style for submit button */
		button[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			width: 20%;
		}

		/* Style for checkbox */
		input[type="checkbox"] {
			margin-right: 5px;
		}

		/* Style for links */
		a {
			color: blue;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		/* Custom styles for specific sections */
		.selected-product {
			background-color: #f0f0f0;
			padding: 20px;
			border-radius: 10px;
			margin-bottom: 20px;
		}

		.quick-rules {
			background-color: #f9f9f9;
			padding: 20px;
			border-radius: 10px;
			margin-bottom: 20px;
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

					<section id="main" class="clearfix ad-details-page">
						<div class="container" style="max-width: 1500px;">
							<div class="adpost-details">
								<div class="row">
									<div class="col-lg-8">
										<form style="color: #000" id="frm_data" name="frm_data"
											action="<?php echo base_url(); ?>Post_Ad/Publish_Post_Lnd" method="POST"
											enctype="multipart/form-data">
											<fieldset>
												<div class="section postdetails" style="margin-top: 30px;">

													<h4><span class="select">
														</span>&nbsp; Sell an item or service <span class="pull-right"
															style="color:red; margin-left: 350px;">*
															Mandatory
															Fields</span></h4>
													<div class="form-group selected-product">
														<div class="row">
															<div class="col-6">
																<ul class="select-category list-inline">
																	<li>
																		<a href="#">
																			<span class="select">
																				<img src="<?php echo base_url(); ?>assets/Site/images/icon/<?php echo $cat_img[0]->Image ?>"
																					alt="Images" class="img-fluid">
																			</span>
																			<a href="#"
																				style="color:Black; margin-left: 10px;">
																				<?php echo $cat_img[0]->Ad_Cat_Name ?>
																			</a>
																			<input type="text"
																				value="<?php echo $cat_img[0]->Ad_Cat_ID ?> "
																				name="txt_cat" id="txt_cat" hidden="">
																		</a>
																		&nbsp; >>
																	</li>

																	<li class="active">
																		<a href="#" style="color:green;">
																			<?php echo $sb_cat_nm[0]->Ad_Sub_Cat_Name ?>
																		</a>
																		<input type="text"
																			value="<?php echo $sb_cat_nm[0]->Ad_sub_Cat_ID ?>"
																			name="txt_sub_cat" id="txt_sub_cat"
																			hidden="">
																	</li>
																</ul>
															</div>

															<div class="col-6">
																<div class="row">
																	<div class="col-2 mt-2">
																		<span>Name</span>
																	</div>
																	<div class="col-9">
																		<select class="form-control" required=""
																			id="cmb_name" name="cmb_name">
																			<option value="" default>-- Select Name
																				--
																			</option>
																			<?php foreach ($user_data as $t_data) { ?>
																				<option
																					value="<?php echo $t_data->U_ID; ?>">
																					<?php echo $t_data->Users_Name; ?>
																				</option>

																			<?php }
																			?>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row form-group brand-name">
														<label class="col-sm-2 label-title">District<span
																class="required" style="color:red;">*</span></label>
														<div class="col-sm-4">
															<select class="form-control" required="" id="cmb_dist"
																name="cmb_dist">
																<option value="" default>-- Select District --
																</option>
																<?php foreach ($data_dist as $t_data) { ?>
																	<option value="<?php echo $t_data->DST_ID; ?>">
																		<?php echo $t_data->DST_Name; ?>
																	</option>

																<?php }
																?>
															</select>
														</div>

														<label class="col-sm-1 label-title">City<span class="required"
																style="color:red;">*</span></label>
														<div class="col-sm-4">
															<select class="form-control" required="" id="cmb_city"
																name="cmb_city">
																<option value="" default>-- Select City --</option>
																<!--                                                    <?php //foreach ($data_brand as $t_data) {                         ?>
																											<option value="<?php //echo $t_data->BRD_ID;                         ?>" ><?php // echo $t_data->BRD_Name;                         ?></option>
													
													<?php // }
													?>   -->
															</select>
														</div>


													</div>

													<div class="row form-group brand-name">
														<!--                                            <label class="col-sm-3 label-title">Brand Name<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" required="" id="txt_brand" name="txt_brand" class="form-control" placeholder="Ex: Samsung">
											</div>-->
														<label class="col-sm-2 label-title">Title<span class="required"
																style="color:red;">*</span></label>
														<div class="col-sm-9">
															<input type="text" required="" id="txt_title"
																name="txt_title" class="form-control"
																placeholder="Short Title (Ex: Land for Sale Kottawa)">
														</div>

													</div>
													<div class="row form-group brand-name">
														<label class="col-sm-2 label-title">Land Type<span
																class="required" style="color:red;">*</span></label>
														<div class="col-sm-4">
															<select class="form-control" required="" id="cmb_land_tp"
																name="cmb_land_tp">
																<option value="" default>-- Select Type --</option>
																<?php foreach ($data_l_type as $t_data) { ?>
																	<option value="<?php echo $t_data->LND_TP_ID; ?>">
																		<?php echo $t_data->LND_TP_Name; ?>
																	</option>

																<?php }
																?>
															</select>
														</div>
													</div>


													<div class="row form-group brand-name">

														<label class="col-sm-2 label-title">Land size<span
																class="required" style="color:red;">*</span></label>
														<div class="col-sm-4">
															<input type="number" required="" id="txt_size"
																name="txt_size" class="form-control"
																placeholder="-- Short Title --">
														</div>

														<label class="col-sm-1 label-title">
															Unit<span class="required"
																style="color:red;">*</span></label>
														<div class="col-sm-4">
															<select class="form-control" required="" id="cmb_mesure"
																name="cmb_mesure">
																<!--<option value="" default>-- Select Type --</option>-->

																<option value="perches">Perches</option>
																<option value="acres">Acres</option>


															</select>
														</div>
													</div>

													<div class="row form-group brand-name">
														<!--                                            <label class="col-sm-3 label-title">Brand Name<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" required="" id="txt_brand" name="txt_brand" class="form-control" placeholder="Ex: Samsung">
											</div>-->
														<label class="col-sm-2 label-title">Address<span
																class="required" style="color:red;">*</span></label>
														<div class="col-sm-9">
															<input type="text" id="txt_address" name="txt_address"
																class="form-control" placeholder="">
														</div>

													</div>
													<div class="row form-group select-price">

														<label class="col-sm-2 label-title">Price<span class="required"
																style="color:red;">*</span></label>

														<div class="col-sm-5">
															<input required="" type="text" class="form-control"
																id="txt_price" name="txt_price">

														</div>
														<div class="col-sm-3">
															<select class="form-control" required="" id="cmb_price_unit"
																name="cmb_price_unit">

																<option value="total">Total Price</option>
																<option value="perches">Perches</option>
																<option value="acres">Acres</option>


															</select>
														</div>
														<div class="col-sm-1">
															<input type="checkbox" name="txt_Negotiable"
																id="txt_Negotiable">
															<label for="negotiable">Negotiable </label>
														</div>
													</div>
													<div class="row form-group item-description">
														<label class="col-sm-2 label-title">Description<span
																class="required" style="color:red;">*</span></label>
														<div class="col-sm-9">
															<textarea class="form-control" id="txt_desc" name="txt_desc"
																placeholder="Write few lines about your ad"
																rows="4"></textarea>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-9 offset-sm-3">
															<p>5000 characters left</p>
														</div>
													</div>
													<!-- photose -->
													<div class="row form-group">
														<label class="col-sm-3 label-title">Photos for your ad
															<span></span> </label>
														<!--<div class="col-sm-9">-->
														<!--<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>-->
														<!--                                                <div class="upload-section">-->

														<div style="margin-right: 5px;" class="form-group col-md-3">
															<!--<label for="inputState">Select Image</label>-->

															<div class="row">
																<div class="col-sm-12 imgUp">
																	<div class="imagePreview"
																		style="width: 150px; height: 120px;"></div>
																	<label class="btn btn-success">
																		Select Image<input type="file" name="img_pro1"
																			id="img_pro1" class="uploadFile img"
																			style="width: 0px;height: 0px;overflow: hidden;">
																	</label>
																</div><!-- col-2 -->
																<!--<i class="fa fa-plus imgAdd"></i>-->
															</div><!-- row -->

														</div>
														<div style="margin-right: 5px;" class="form-group col-md-3">
															<!--<label for="inputState">Select Image</label>-->

															<div class="row">
																<div class="col-sm-12 imgUp">
																	<div class="imagePreview"
																		style="width: 150px; height: 120px;"></div>
																	<label class="btn btn-success">
																		Select Image<input type="file" name="img_pro2"
																			id="img_pro2" class="uploadFile img"
																			style="width: 0px;height: 0px;overflow: hidden;">
																	</label>
																</div><!-- col-2 -->
																<!--<i class="fa fa-plus imgAdd"></i>-->
															</div><!-- row -->

														</div>


														<div style="margin-right: -50px;" class="form-group col-md-3">
															<!--<label for="inputState">Select Image</label>-->

															<div class="row">
																<div class="col-sm-12 imgUp">
																	<div class="imagePreview"
																		style="width: 150px; height: 120px;"></div>
																	<label class="btn btn-success">
																		Select Image<input type="file" name="img_pro3"
																			id="img_pro3" class="uploadFile img"
																			style="width: 0px;height: 0px;overflow: hidden;">
																	</label>
																</div><!-- col-2 -->
																<!--<i class="fa fa-plus imgAdd"></i>-->
															</div><!-- row -->

														</div>



														<div style="margin-left: 200px;" class="form-group col-md-3">
															<!--<label for="inputState">Select Image</label>-->

															<div class="row">
																<div class="col-sm-12 imgUp">
																	<div class="imagePreview"
																		style="width: 150px; height: 120px;"></div>
																	<label class="btn btn-success">
																		Select Image<input type="file" name="img_pro4"
																			id="img_pro4" class="uploadFile img"
																			style="width: 0px;height: 0px;overflow: hidden;">
																	</label>
																</div><!-- col-2 -->
																<!--<i class="fa fa-plus imgAdd"></i>-->
															</div><!-- row -->

														</div>
														<div style="margin-left: 8px;" class="form-group col-md-3">
															<!--<label for="inputState">Select Image</label>-->

															<div class="row">
																<div class="col-sm-12 imgUp">
																	<div class="imagePreview"
																		style="width: 150px; height: 120px;"></div>
																	<label class="btn btn-success">
																		Select Image<input type="file" name="img_pro4"
																			id="img_pro4" class="uploadFile img"
																			style="width: 0px;height: 0px;overflow: hidden;">
																	</label>
																</div><!-- col-2 -->
																<!--<i class="fa fa-plus imgAdd"></i>-->
															</div><!-- row -->

														</div>

													</div>







												</div>
												<div class="checkbox section agreement">

													<input type="checkbox" required="" name="send" id="send">
													<a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
													and
													acknowledge that
													you are the rightful owner of this item and using Trade to find
													a
													genuine buyer.
												</div>
											</fieldset>
											<br>
											<button type="submit" class="btn btn-success">Post Your Ad</button>
										</form>
										<br>
									</div>

									<div class="col-lg-4">
										<div class="section quick-rules" style="margin-top: 30px; max-width: 400px;">
											<!-- <h3 style="color: #000" class="">Welcome :
												<?php echo $user_name; ?>
											</h3> -->
											<h4>Quick rules</h4>
											<p class="lead">Posting an ad on <a href="#">WPS.LK</a> is free! However,
												all ads must
												follow our rules:</p>
											<ul>
												<li>Make sure you post in the correct category.</li>
												<li>Do not post the same ad more than once or repost an ad within 48
													hours.</li>
												<li>Do not upload pictures with water marks.</li>
												<li>Do not post ads containing multiple items unless it's a package
													deal.</li>
												<li>Do not put your email or phone numbers in the title or description.
												</li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
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
