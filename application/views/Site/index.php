<!DOCTYPE html>

<head>
	<?php $this->load->view('Site/CSS_JS/css.php'); ?>

</head>
<style>
	.main-header .main-menu .navigation>li:hover>a,
	.main-header .main-menu .navigation>li.current>a {
		opacity: 1;
		color: #fff;
	}

	.main-header .main-menu .navigation>li>ul>.current>a {
		color: #12114e;
	}

	.main-header .main-menu .navigation>li>ul>li:hover>a {
		color: #12114e;
		padding-left: 20px;
	}

	.slider .flat-tabs .tab-title li:hover,
	.slider .flat-tabs .tab-title li.active {
		background-color: #12114e;
	}

	h1 {
		font-size: 40px;
		line-height: 92px;
		font-weight: 700;
	}

	.carousel-inner {
		height: 700px;
		width: auto;
	}

	.carousel-caption {
		height: 750px;
	}

	.flat-featured .flat-tabs .tab-title li:hover h5,
	.flat-featured .flat-tabs .tab-title li.active h5 {
		font-weight: 600;
		color: #12114e;
	}

	.button-go::before {
		z-index: -1;
		background-color: #12114e;
	}

	.widget-menu .box-menu li a::before {
		content: "\f105";
		font-family: "Font Awesome 5 Pro";
		color: green;
		font-size: 14px;
		margin-right: 11px;
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease;
		-ms-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
	}

	.widget-menu .box-menu li:hover a {
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease;
		-ms-transition: all 0.3s ease;
		-o-transition: all 0.3s ease;
		transition: all 0.3s ease;
		color: Green;
	}

	.mobile-button::before,
	.mobile-button::after,
	.mobile-button span {
		background-color: #12114e;
		-webkit-transition: all ease 0.3s;
		-moz-transition: all ease 0.3s;
		transition: all ease 0.3s;
	}
</style>

<body class="body">

	<div id="wrapper">
		<div id="pagee" class="clearfix">

			<?php $this->load->view('Templates/header.php'); ?>

			<!-- slider-start -->
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<section class="slider">
					<ol class="carousel-caption">
						<div class="slider-item">
							<div class="container  relative">
								<div class="row">
									<div class="col-lg-12">
										<div class="content po-content-two">
											<div class="heading center" style="width: 100%;">
												<h1 class="text">Welcome to Walls
													Property Services
												</h1>
												<p class="fs-16 lh-24 text-color-1 fw-6" style="color: white;">Find a variety of properties
													that
													suit
													you very easily, forget all difficulties in finding a residence for
													you
												</p>
											</div>

											<div class="flat-tabs themes flat-tabs">
												<div class="box-tab center">
													<ul class="menu-tab tab-title flex justify-center">
														<li class="item-title active">
															<h4 class="inner">Rent</h4>
														</li>
														<li class="item-title style">
															<h4 class="inner"> Buy </h4>
														</li>
													</ul>
												</div>

												<div class="content-tab">
													<div class="content-inner tab-content flex-center">
														<div class="form-sl">
															<form method="post">
																<div class="wd-find-select flex">
																	<div class="inner-group">
																		<div
																			class="form-group-1 search-form form-style">
																			<input type="search" class="search-field"
																				placeholder="Type keyword..." value=""
																				name="s" title="Search for" required="">
																		</div>
																		<div class="form-group-2 form-style">
																			<div class="group-select">
																				<div class="nice-select" tabindex="0">
																					<span class="current">Property
																						type</span>
																					<ul class="list">
																						<li data-value
																							class="option selected">
																							Property type</li>
																						<li data-value="bungalow"
																							class="option">
																							Bungalow</li>
																						<li data-value="apartment"
																							class="option">
																							Apartment</li>
																						<li data-value="house"
																							class="option">
																							House</li>
																						<li data-value="smart-home"
																							class="option">
																							Smart Home</li>
																						<li data-value="Single family home"
																							class="option">Office</li>
																						<li data-value="Multi family home"
																							class="option">Villa</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="form-group-3 form-style">
																			<div class="group-select">
																				<div class="nice-select" tabindex="0">
																					<span
																						class="current">Location</span>
																					<ul class="list">
																						<li data-value
																							class="option selected">
																							Location</li>
																						<li data-value="Japan"
																							class="option">
																							Japan</li>
																						<li data-value="America"
																							class="option d">
																							America</li>
																						<li data-value="England"
																							class="option ">
																							England</li>
																						<li data-value="Japan"
																							class="option">
																							Belgium</li>
																						<li data-value="England"
																							class="option ">
																							France</li>
																						<li data-value="VietNam"
																							class="option">
																							VietNam</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- <div class="form-group-4 form-style">
																<a class="icon-filter pull-right ">
																	<svg width="18" height="18" viewBox="0 0 18 18"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M3 10.5V0.75M3 10.5C3.39782 10.5 3.77936 10.658 4.06066 10.9393C4.34196 11.2206 4.5 11.6022 4.5 12C4.5 12.3978 4.34196 12.7794 4.06066 13.0607C3.77936 13.342 3.39782 13.5 3 13.5M3 10.5C2.60218 10.5 2.22064 10.658 1.93934 10.9393C1.65804 11.2206 1.5 11.6022 1.5 12C1.5 12.3978 1.65804 12.7794 1.93934 13.0607C2.22064 13.342 2.60218 13.5 3 13.5M3 17.25V13.5M15 10.5V0.75M15 10.5C15.3978 10.5 15.7794 10.658 16.0607 10.9393C16.342 11.2206 16.5 11.6022 16.5 12C16.5 12.3978 16.342 12.7794 16.0607 13.0607C15.7794 13.342 15.3978 13.5 15 13.5M15 10.5C14.6022 10.5 14.2206 10.658 13.9393 10.9393C13.658 11.2206 13.5 11.6022 13.5 12C13.5 12.3978 13.658 12.7794 13.9393 13.0607C14.2206 13.342 14.6022 13.5 15 13.5M15 17.25V13.5M9 4.5V0.75M9 4.5C9.39782 4.5 9.77936 4.65804 10.0607 4.93934C10.342 5.22064 10.5 5.60218 10.5 6C10.5 6.39782 10.342 6.77936 10.0607 7.06066C9.77936 7.34196 9.39782 7.5 9 7.5M9 4.5C8.60218 4.5 8.22064 4.65804 7.93934 4.93934C7.65804 5.22064 7.5 5.60218 7.5 6C7.5 6.39782 7.65804 6.77936 7.93934 7.06066C8.22064 7.34196 8.60218 7.5 9 7.5M9 17.25V7.5"
																			stroke="#12114e" stroke-width="1.5"
																			stroke-linecap="round"
																			stroke-linejoin="round" />
																	</svg>
																</a>
															</div> -->

																	<div class="button-search sc-btn-top">
																		<a class="sc-button" href="#">
																			<span>Search</span>
																			<i class="far fa-search text-color-1"></i>
																		</a>
																	</div>
																</div>
																<div class="wd-find-select wd-search-form ">
																	<div class="box1 flex flex-wrap form-wg">
																		<div class="form-group wg-box3">
																			<div class="group-select">
																				<div class="nice-select" tabindex="0">
																					<span class="current">Baths:
																						Any</span>
																					<ul class="list">
																						<li data-value
																							class="option selected">
																							Baths: Any</li>
																						<li data-value="1"
																							class="option">1
																						</li>
																						<li data-value="2"
																							class="option">2
																						</li>
																						<li data-value="3"
																							class="option">3
																						</li>
																						<li data-value="4"
																							class="option">4
																						</li>
																						<li data-value="5"
																							class="option">5
																						</li>
																						<li data-value="6"
																							class="option">6
																						</li>
																						<li data-value="7"
																							class="option">7
																						</li>
																						<li data-value="8"
																							class="option">8
																						</li>
																						<li data-value="9"
																							class="option">9
																						</li>
																						<li data-value="9"
																							class="option">10
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="form-group wg-box3">
																			<div class="group-select">
																				<div class="nice-select" tabindex="0">
																					<span class="current">Beds:
																						Any</span>
																					<ul class="list">
																						<li data-value
																							class="option selected">
																							Beds: Any</li>
																						<li data-value="1"
																							class="option">1
																						</li>
																						<li data-value="2"
																							class="option">2
																						</li>
																						<li data-value="3"
																							class="option">3
																						</li>
																						<li data-value="4"
																							class="option">4
																						</li>
																						<li data-value="5"
																							class="option">5
																						</li>
																						<li data-value="6"
																							class="option">6
																						</li>
																						<li data-value="7"
																							class="option">7
																						</li>
																						<li data-value="8"
																							class="option">8
																						</li>
																						<li data-value="9"
																							class="option">9
																						</li>
																						<li data-value="9"
																							class="option">10
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="form-group wg-box3">
																			<div class="widget widget-price ">
																				<div class="caption flex-two">
																					<div>
																						<span class="fw-6">Form</span>
																						<span
																							id="slider-range-value1"></span>
																						<span
																							id="slider-range-value2"></span>
																					</div>
																				</div>
																				<div id="slider-range"></div>
																				<div class=" slider-labels">
																					<div>
																						<input type="hidden"
																							name="min-value" value="">
																						<input type="hidden"
																							name="max-value" value="">
																					</div>
																				</div>
																			</div><!-- /.widget_price -->
																		</div>
																		<div class="form-group wg-box3">
																			<div class="widget widget-price ">
																				<div class="caption flex-two">
																					<div>
																						<span class="fw-6">Size</span>
																						<span
																							id="slider-range-value01"></span>
																						<span
																							id="slider-range-value02"></span>
																					</div>
																				</div>
																				<div id="slider-range2"></div>
																				<div class="slider-labels">
																					<div>
																						<input type="hidden"
																							name="min-value2" value="">
																						<input type="hidden"
																							name="max-value2" value="">
																					</div>
																				</div>
																			</div><!-- /.widget_price -->
																		</div>
																	</div>
																	<div class="boder-wg"></div>
																	<div class="box2 flex flex-wrap form-wg">
																		<div class="form-group wg-box3">
																			<div class="tf-amenities bg-white">
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Swimming
																						pool</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Garage</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Alarm
																						system</span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group wg-box3">
																			<div class="tf-amenities bg-white">
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Balcony</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Outdoor
																						area</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Broadband</span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group wg-box3">
																			<div class="tf-amenities bg-white">
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Ensuite</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Built in
																						robes</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13 ">Gym</span>
																				</label>
																			</div>
																		</div>
																		<div class="form-group wg-box3">
																			<div class="tf-amenities bg-white">
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Tennis
																						court</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Study</span>
																				</label>
																				<label class="flex"><input
																						name="newsletter"
																						type="checkbox" />
																					<span
																						class="btn-checkbox"></span><span
																						class="fs-13">Outdoor spa</span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</form>
															<!-- End Job  Search Form-->
														</div>
													</div>

												</div>
											</div>
											<!-- <div class="wrap-icon flex align-center justify-center link-style-3">
										<div class="icon-box fs-13 "><span class="icons-house icon-house-1"></span><a
												href="#">Houses</a></div>
										<div class="icon-box fs-13"><span class="icons-house icon-house-2"></span><a
												href="#">Villa</a></div>
										<div class="icon-box fs-13"><span class="icons-house icon-house-3"></span><a
												href="#">Office</a></div>
										<div class="icon-box fs-13"><span class="icons-house icon-house-4"></span><a
												href="#">Apartments</a></div>
									</div> -->
										</div>
									</div>
								</div>
							</div>

						</div>
					</ol>
					<ol class="carousel-indicators">

						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/images/slider/slider 5.jpg" class="d-block w-100"
								style="width:50px; height: 1000px;" alt="...">
						</div>
						<div class="carousel-item">
							<img src="assets/images/slider/slider 8.jpg" class="d-block w-100"
								style="width:50px; height: 1000px;" alt="...">
						</div>
						<div class="carousel-item">
							<img src="assets/images/slider/slider 9.jpg" class="d-block w-100"
								style="width:50px; height: 1000px;" alt="...">
						</div>
					</div>
				</selection>
			</div>
			<!-- slider-end -->

			<section class="flat-featured wg-dream home2 tf-section">
				<div class="container5">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading-section center">

								<h2><img src="assets/images/icon/fire.png" alt="" style="width:40px; height:40px;"> Hot
									Deal Properties</h2>
								<p class="text-color-4">Make your property decisions smart and informed.</p>
							</div>
						</div>
						<div class="col-lg-12 wrap-tabs">
							<div class="flat-tabs themesflat-tabs">
								<div class="box-tab center">
									<ul class="menu-tab tab-title flex justify-center">
										<li class="item-title active hv-tool"
											data-tooltip="<?php echo count($data_set_cat); ?> Property">
											<h5 class="inner">Rent</h5>
										</li>
										<li class="item-title hv-tool"
											data-tooltip="<?php echo count($data_set_cat_sale); ?> Property">
											<h5 class="inner"> Sale </h5>
										</li>

									</ul>
								</div>

								<div class="content-tab">
									<div class="content-inner tab-content">
										<div class="swiper-container2">
											<div class="three-carousel owl-carousel owl-theme ">
												<?php
												foreach ($data_set_cat as $propertyrent) {
													?>
													<div class="slide-item">
														<div class="box box-dream hv-one">
															<div class="image-group relative ">
																<span class="featured fs-12 fw-6">Featured</span>
																<span class="featured style fs-12 fw-6">For Rent</span>
																<div class="swiper-container noo carousel-2 img-style">
																	<div class="swiper-wrapper ">
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																	</div>
																	<div class="pagi2">
																		<div class="swiper-pagination2"> </div>
																	</div>
																	<div class="swiper-button-next2 "><i
																			class="fal fa-arrow-right"></i></div>
																	<div class="swiper-button-prev2 "><i
																			class="fal fa-arrow-left"></i> </div>
																</div>
															</div>
															<div class="content">
																<h3 class="link-style-1"><a href="property-detail-v1.html">
																		<?php echo $propertyrent->Ad_Name ?>
																	</a> </h3>
																<div class="text-address">
																	<p class="p-12"></i>
																		<?php echo $propertyrent->Land_address ?>
																	</p>
																</div>
																<div class="money fs-18 fw-6 text-color-3"><a
																		href="property-detail-v1.html"><span>Rs.</span>
																		<?php echo $propertyrent->Price ?>
																	</a></div>
																<div class="icon-box flex">
																	<div class="icons icon-1 flex text-color-4"><span>Land
																			Size:
																		</span><span class="fw-6">
																			<?php echo $propertyrent->Land_Size ?>
																		</span></div>
																</div>
																<!-- <div class="days-box flex justify-space align-center"> -->
																<!-- <a class="compare flex align-center fw-6"
																	href="#"><?php echo $propertyrent->Time ?></a>
																<div class="img-author hv-tool"
																	data-tooltip="Kathryn Murphy"><img
																		src="assets/images/author/author-16.jpg"
																		alt="images"></div>
																<div class="days"><Span>Date: </Span><?php echo $propertyrent->Date ?></div> -->
																<!-- </div> -->
															</div>
														</div>
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</div>
									<div class="content-inner tab-content">
										<div class="swiper-container2">
											<div class="three-carousel owl-carousel owl-theme ">
												<?php
												foreach ($data_set_cat_sale as $propertysale) {
													?>
													<div class="slide-item">
														<div class="box box-dream hv-one">
															<div class="image-group relative ">
																<span class="featured fs-12 fw-6">Featured</span>
																<span class="featured style fs-12 fw-6">For Sale</span>
																<!-- <span class="icon-bookmark"><i
																	class="far fa-bookmark"></i></span> -->
																<div class="swiper-container noo carousel-2 img-style">
																	<!-- <a href="property-detail-v1.html" class="icon-plus"><img
																		src="assets/images/icon/plus.svg"
																		alt="images"></a> -->
																	<div class="swiper-wrapper ">
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																	</div>
																	<div class="pagi2">
																		<div class="swiper-pagination2"> </div>
																	</div>
																	<div class="swiper-button-next2 "><i
																			class="fal fa-arrow-right"></i></div>
																	<div class="swiper-button-prev2 "><i
																			class="fal fa-arrow-left"></i> </div>
																</div>
															</div>
															<div class="content">
																<h3 class="link-style-1"><a href="property-detail-v1.html">
																		<?php echo $propertysale->Ad_Name ?>
																	</a> </h3>
																<div class="text-address">
																	<p class="p-12"></i>
																		<?php echo $propertysale->Land_address ?>
																	</p>
																</div>
																<div class="money fs-18 fw-6 text-color-3"><a
																		href="property-detail-v1.html"><span>Rs.</span>
																		<?php echo $propertysale->Price ?>
																	</a></div>
																<div class="icon-box flex">
																	<div class="icons icon-1 flex text-color-4"><span>Land
																			Size:
																		</span><span class="fw-6">
																			<?php echo $propertysale->Land_Size ?>
																		</span></div>
																</div>
																<!-- <div class="days-box flex justify-space align-center"> -->
																<!-- <a class="compare flex align-center fw-6"
																	href="#"><?php echo $propertysale->Time ?></a>
																<div class="img-author hv-tool"
																	data-tooltip="Kathryn Murphy"><img
																		src="assets/images/author/author-16.jpg"
																		alt="images"></div>
																<div class="days"><Span>Date: </Span><?php echo $propertysale->Date ?></div> -->
																<!-- </div> -->
															</div>
														</div>
													</div>
													<?php
												}
												?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="flat-rent flat-are-interested wg-dream tf-section dots-style2">
				<div class="container5">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading-section center">
								<h2>Properties For Rent</h2>
							</div>
						</div>
						<div class="col-lg-12 wrap-tabs">
							<div class="flat-tabs themesflat-tabs">
								<div class="content-tab">
									<div class="content-inner tab-content">
										<div class="swiper-container2">
											<div class="three-carousel owl-carousel owl-theme ">
												<?php
												foreach ($data_set_cat as $propertyrent) {
													?>
													<div class="slide-item">
														<div class="box box-dream hv-one">
															<div class="image-group relative ">
																<span class="featured fs-12 fw-6">Featured</span>
																<span class="featured style fs-12 fw-6">For Rent</span>
																<div class="swiper-container noo carousel-2 img-style">
																	<div class="swiper-wrapper ">
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
																				alt="images"></div>
																	</div>
																	<div class="pagi2">
																		<div class="swiper-pagination2"> </div>
																	</div>
																	<div class="swiper-button-next2 "><i
																			class="fal fa-arrow-right"></i></div>
																	<div class="swiper-button-prev2 "><i
																			class="fal fa-arrow-left"></i> </div>
																</div>
															</div>
															<div class="content">
																<h3 class="link-style-1"><a href="property-detail-v1.html">
																		<?php echo $propertyrent->Ad_Name ?>
																	</a> </h3>
																<div class="text-address">
																	<p class="p-12"></i>
																		<?php echo $propertyrent->Land_address ?>
																	</p>
																</div>
																<div class="money fs-18 fw-6 text-color-3"><a
																		href="property-detail-v1.html"><span>Rs.</span>
																		<?php echo $propertyrent->Price ?>
																	</a></div>
																<div class="icon-box flex">
																	<div class="icons icon-1 flex text-color-4"><span>Land
																			Size:
																		</span><span class="fw-6">
																			<?php echo $propertyrent->Land_Size ?>
																		</span></div>
																</div>
																<!-- <div class="days-box flex justify-space align-center"> -->
																<!-- <a class="compare flex align-center fw-6"
																	href="#"><?php echo $propertyrent->Time ?></a>
																<div class="img-author hv-tool"
																	data-tooltip="Kathryn Murphy"><img
																		src="assets/images/author/author-16.jpg"
																		alt="images"></div>
																<div class="days"><Span>Date: </Span><?php echo $propertyrent->Date ?></div> -->
																<!-- </div> -->
															</div>
														</div>
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="flat-featured wg-dream home2 tf-section">
				<div class="container5">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading-section center">
								<h2>Properties For Sale</h2>
							</div>
						</div>
						<div class="col-lg-12 wrap-tabs">
							<div class="flat-tabs themesflat-tabs">
								<div class="content-tab">
									<div class="content-inner tab-content">
										<div class="swiper-container2">
											<div class="three-carousel owl-carousel owl-theme ">
												<?php
												foreach ($data_set_cat_sale as $propertysale) {
													?>
													<div class="slide-item">
														<div class="box box-dream hv-one">
															<div class="image-group relative ">
																<span class="featured fs-12 fw-6">Featured</span>
																<span class="featured style fs-12 fw-6">For Sale</span>
																<div class="swiper-container noo carousel-2 img-style">
																	<div class="swiper-wrapper ">
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																		<div class="swiper-slide"><img
																				src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG1 ?>"
																				alt="images"></div>
																	</div>
																	
																</div>
															</div>
															<div class="content">
																<h3 class="link-style-1"><a href="property-detail-v1.html">
																		<?php echo $propertysale->Ad_Name ?>
																	</a> </h3>
																<div class="text-address">
																	<p class="p-12"></i>
																		<?php echo $propertysale->Land_address ?>
																	</p>
																</div>
																<div class="money fs-18 fw-6 text-color-3"><a
																		href="property-detail-v1.html"><span>Rs.</span>
																		<?php echo $propertysale->Price ?>
																	</a></div>
																<div class="icon-box flex">
																	<div class="icons icon-1 flex text-color-4"><span>Land
																			Size:
																		</span><span class="fw-6">
																			<?php echo $propertysale->Land_Size ?>
																		</span></div>
																</div>
																<!-- <div class="days-box flex justify-space align-center"> -->
																<!-- <a class="compare flex align-center fw-6"
																	href="#"><?php echo $propertysale->Time ?></a>
																<div class="img-author hv-tool"
																	data-tooltip="Kathryn Murphy"><img
																		src="assets/images/author/author-16.jpg"
																		alt="images"></div>
																<div class="days"><Span>Date: </Span><?php echo $propertysale->Date ?></div> -->
																<!-- </div> -->
															</div>
														</div>
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>



			<section class="flat-rent flat-are-interested wg-dream tf-section dots-style2 mb-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="heading-section">
								<h2 class="font-2 fw-8 ">We provide the most suitable and quality real estate.</h2>
								<p class="text-color-">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
									sed tristique metus proin id lorem odio</p>
							</div>
							<div class="contact-thumb">
								<div style="overflow:hidden;resize:none;height:500px;">
									<div id="embed-map-display" style="height:100%;width: 100%;"><iframe
											style="height:100%;border:0;width: 100%;" frameborder="0"
											src="https://www.google.com/maps/embed/v1/place?q=Colombo,+Sri+Lanka&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
									</div><a class="googlemaps-made" href="https://www.bootstrapskins.com/themes"
										id="enable-map-info">premium bootstrap themes</a>
									<style>
										#embed-map-display img {
											max-width: none !important;
											background: none !important;
											font-size: inherit;
											font-weight: inherit;
										}
									</style>
								</div>
							</div>
						</div>
						<div class="col-lg-6 ms-5">
							<section class="flat-contact-page page" style="margin-top: 0px;">
								<div class="container">
									<div class="row">
										<div class="col-lg-12">
											<div id="comments" class="comments bg-white">
												<div class="heading-box center">
													<div class="heading-title fs-30 fw-7 lh-45">Contact form</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
														sed tristique metus proin id lorem odio</p>
												</div>
												<div>
													<div class="respond-comment">
														<form class="comment-form form-submit"
															action="<?php echo base_url(); ?>Contact_us/contact_user"
															method="POST" id="frm_register" name="frm_register"
															accept-charset="utf-8" novalidate="novalidate">
															<fieldset class="name-wrap">
																<label class="font-2 fw-8 fs-16"
																	style="margin-top: 20px;">Your
																	name</label>
																<input type="text" class="tb-my-input" name="txt_name"
																	id="txt_name" placeholder="Your name" required="">

															</fieldset>
															<div class="text-wrap flex">
																<fieldset class="email-wrap style-text">
																	<label class="font-2 fw-8 fs-16">Email</label>
																	<input type="email" class="tb-my-input"
																		id="txt_mail" name="txt_mail"
																		placeholder="Email" required="">

																</fieldset>
																<fieldset class="phone-wrap style-text">
																	<label class="font-2 fw-8 fs-16">Phone</label>
																	<input type="tel" class="tb-my-input"
																		id="txt_mobile" name="txt_mobile"
																		placeholder="Phone" required="">

																</fieldset>
															</div>
															<div class="wd-find-select">
																<label class="font-2 fw-8 fs-16"
																	for="property-type">Property
																	type</label>
																<select id="property-type" name="property-type"
																	class="nice-select relative ">
																	<option>Select
																	<option value="land">Land</option>
																	<option value="rent">Rent</option>
																</select>
															</div>
															<fieldset class="message-wrap">
																<label class="font-2 fw-8 fs-16">Message</label>
																<textarea id="comment-message" name="txt_message"
																	id="txt_message" rows="4" tabindex="4"
																	placeholder="Your message"></textarea>
															</fieldset>
															<div class="button-boxs">
																<button class="sc-button" id="submit" name="submit"
																	type="submit">
																	<svg width="19" height="18" viewBox="0 0 19 18"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<g clip-path="url(#clip0_1505_28737)">
																			<path
																				d="M17.7381 0.0295345L0.899726 5.53166C0.424186 5.68706 0.355417 6.33388 0.788208 6.58552L7.1516 10.2857C7.24979 10.3428 7.36258 10.3699 7.47599 10.3635C7.5894 10.3572 7.69846 10.3177 7.78965 10.2499L9.57844 8.92152L8.25002 10.7103C8.1823 10.8015 8.14281 10.9106 8.13645 11.024C8.13009 11.1374 8.15714 11.2502 8.21424 11.3484L11.9144 17.7118C12.1664 18.1449 12.813 18.0754 12.9683 17.6003L18.4705 0.76186C18.618 0.309727 18.1881 -0.117584 17.7381 0.0295345ZM12.2669 16.0078L9.41045 11.0954L12.8548 6.45741C12.9378 6.34558 12.9779 6.20763 12.9676 6.06873C12.9574 5.92984 12.8976 5.79924 12.7991 5.70076C12.7006 5.60228 12.57 5.54247 12.4311 5.53225C12.2923 5.52203 12.1543 5.56207 12.0425 5.64507L7.40447 9.08947L2.49215 6.233L17.0112 1.48874L12.2669 16.0078ZM6.59633 12.7247L2.74099 16.58C2.51425 16.8067 2.1466 16.8068 1.91987 16.58C1.69309 16.3533 1.69309 15.9856 1.91987 15.7589L5.77521 11.9036C6.00202 11.6769 6.36967 11.6768 6.59633 11.9036C6.82311 12.1303 6.82311 12.498 6.59633 12.7247ZM1.50311 12.8706C1.27634 12.6438 1.27634 12.2762 1.50311 12.0495L3.02438 10.5282C3.25112 10.3014 3.61877 10.3014 3.8455 10.5282C4.07228 10.7549 4.07228 11.1226 3.8455 11.3493L2.32424 12.8706C2.09754 13.0973 1.72985 13.0973 1.50311 12.8706ZM7.97175 14.6544C8.19852 14.8811 8.19852 15.2488 7.97175 15.4755L6.45045 16.9968C6.3966 17.0508 6.33261 17.0936 6.26215 17.1228C6.1917 17.152 6.11617 17.167 6.0399 17.1669C5.52724 17.1669 5.26254 16.5424 5.62936 16.1756L7.15066 14.6544C7.37736 14.4276 7.74501 14.4276 7.97175 14.6544Z"
																				fill="white" />
																		</g>
																		<defs>
																			<clipPath id="clip0_1505_28737">
																				<rect width="18" height="18"
																					fill="white"
																					transform="translate(0.5)" />
																			</clipPath>
																		</defs>
																	</svg>
																	<span>Send request</span>
																</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>

					</div>
				</div>
			</section>

			<a id="scroll-top" class="button-go"></a>
		</div>
	</div>


	<?php $this->load->view('Templates/footer.php'); ?>


	<?php $this->load->view('Site/CSS_JS/js.php'); ?>

</body>

</html>
