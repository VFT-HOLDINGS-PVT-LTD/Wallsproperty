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
</style>

<body class="body  ">


    <div id="wrapper">
        <div id="pagee" class="clearfix">

    		<?php $this->load->view('Templates/header.php'); ?>

           <!-- slider -->
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
                                                <p class="fs-16 lh-24 text-color-1 fw-6">Find a variety of properties
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
                                                                            stroke="#FFA920" stroke-width="1.5"
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
                            <img src="assets/images/slider/slider-detail-12.jpg" class="d-block w-100"
                                style="width:50px; height: 1000px;" alt="...">
                            <!-- <div class="c">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slider/slider-detail-14.jpg" class="d-block w-100"
                                style="width:50px; height: 1000px;" alt="...">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/slider/slider-detail-24.jpg" class="d-block w-100"
                                style="width:50px; height: 1000px;" alt="...">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div> -->
                        </div>
                    </div>
                    </selection>
            </div>

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
                                        <!-- <li class="item-title hv-tool" data-tooltip="5 Property">
                                            <h5 class="inner ">Apartments</h5>
                                        </li>
                                        <li class="item-title hv-tool" data-tooltip="7 Property">
                                            <h5 class="inner"> Office </h5>
                                        </li>
                                        <li class="item-title hv-tool" data-tooltip="6 Property">
                                            <h5 class="inner">Villa</h5>
                                        </li>
                                        <li class="item-title hv-tool" data-tooltip="3 Property">
                                            <h5 class="inner"> Bungalow </h5>
                                        </li> -->
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
                                                                <!-- <span class="icon-bookmark"><i
                                                                    class="far fa-bookmark"></i></span> -->
                                                                <div class="swiper-container noo carousel-2 img-style">
                                                                    <!-- <a href="property-detail-v1.html" class="icon-plus"><img
                                                                        src="assets/images/icon/plus.svg"
                                                                        alt="images"></a> -->
                                                                    <div class="swiper-wrapper ">
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG2 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG3 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG4 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG5 ?>"
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
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG2 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG3 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG4 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG5 ?>"
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

            <!-- <section class="flat-find-neighborhood wg-search-area home2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>Find your neighborhood</h2>
                                <p class="text-color-4">Find your dream apartment with our listing</p>
                            </div>
                            <div class="swiper-container carousel-11">
                                <div class="swiper-wrapper ">
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="images">
                                                <img src="assets/images/img-box/find-neighborhood-1.jpg" alt="images">
                                                <a href="properties-map-v1.html" class="icon-plus"><img
                                                        src="assets/images/icon/plus.svg" alt="images"></a>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-3"><a href="properties-map-v1.html">Chicago</a>
                                                </h3>
                                                <p class="text-color-1">1570 listing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="images">
                                                <img src="assets/images/img-box/find-neighborhood-2.jpg" alt="images">
                                                <a href="properties-map-v1.html" class="icon-plus"><img
                                                        src="assets/images/icon/plus.svg" alt="images"></a>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-3"><a href="properties-map-v1.html">
                                                        California</a></h3>
                                                <p class="text-color-1">1570 listing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="images">
                                                <img src="assets/images/img-box/find-neighborhood-3.jpg" alt="images">
                                                <a href="properties-map-v1.html" class="icon-plus"><img
                                                        src="assets/images/icon/plus.svg" alt="images"></a>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-3"><a href="properties-map-v1.html">New York</a>
                                                </h3>
                                                <p class="text-color-1">1570 listing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="images">
                                                <img src="assets/images/img-box/find-neighborhood-1.jpg" alt="images">
                                                <a href="properties-map-v1.html" class="icon-plus"><img
                                                        src="assets/images/icon/plus.svg" alt="images"></a>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-3"><a href="properties-map-v1.html">Chicago</a>
                                                </h3>
                                                <p class="text-color-1">1570 listing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="images">
                                                <img src="assets/images/img-box/find-neighborhood-2.jpg" alt="images">
                                                <a href="properties-map-v1.html" class="icon-plus"><img
                                                        src="assets/images/icon/plus.svg" alt="images"></a>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-3"><a href="properties-map-v1.html">
                                                        California</a></h3>
                                                <p class="text-color-1">1570 listing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagi center">
                                    <div class="swiper-pagination1"> </div>
                                </div>

                            </div>
                            <div class="swiper-button-next "></div>
                            <div class="swiper-button-prev "> </div>
                        </div>
                    </div>
                </div>
            </section> -->



            <section class="flat-rent flat-are-interested wg-dream tf-section dots-style2">
                <div class="container5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>Properties For Rent</h2>
                                <!-- <img src="assets/images/logo/rent.png" alt="" style="width:40px; height:40px;">  -->
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
                                                                <!-- <span class="icon-bookmark"><i
                                                                    class="far fa-bookmark"></i></span> -->
                                                                <div class="swiper-container noo carousel-2 img-style">
                                                                    <!-- <a href="property-detail-v1.html" class="icon-plus"><img
                                                                        src="assets/images/icon/plus.svg"
                                                                        alt="images"></a> -->
                                                                    <div class="swiper-wrapper ">
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG2 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG3 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG4 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG5 ?>"
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
                                                <!-- col 2 -->
                                                <!-- col 3 -->
                                                <!-- col 4 -->
                                                <!-- col 5 -->
                                                <!-- col 6 -->
                                                <!-- col 2 -->
                                                <!-- col 3 -->
                                                <!-- col 4 -->
                                                <!-- col 5 -->
                                                <!-- col 6 -->
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
                                <!-- <img src="assets/images/logo/sale.png" alt="" style="width:40px; height:40px;">  -->
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
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG2 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG3 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG4 ?>"
                                                                                alt="images"></div>
                                                                        <div class="swiper-slide"><img
                                                                                src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertysale->IMG5 ?>"
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
                                                <!-- col 2 -->
                                                <!-- col 3 -->
                                                <!-- col 4 -->
                                                <!-- col 5 -->
                                                <!-- col 6 -->
                                                <!-- col 2 -->
                                                <!-- col 3 -->
                                                <!-- col 4 -->
                                                <!-- col 5 -->
                                                <!-- col 6 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- <section class="flat-meet ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>Meet the agents</h2>
                                <p class="text-color-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                    vel lobortis justo</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="box hover-img">
                                <div class="images relative img-style">
                                    <a href="agents-detail.html"><img src="assets/images/img-box/meet-1.jpg"
                                            alt="images"></a>
                                    <div class="icon-socials">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="content flex justify-space">
                                    <div class="inner">
                                        <h3 class="link-style-1"><a href="agents-detail.html">Wade Warren</a></h3>
                                        <p class="fs-12 text-color-2">Salesperson</p>
                                    </div>
                                    <div class="icon-box flex">
                                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                                        <a href="#"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="box hover-img">
                                <div class="images relative img-style">
                                    <a href="agents-detail.html"><img src="assets/images/img-box/meet-2.jpg"
                                            alt="images"></a>
                                    <div class="icon-socials">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="content flex justify-space">
                                    <div class="inner">
                                        <h3 class="link-style-1"><a href="agents-detail.html">Leslie Alexander</a></h3>
                                        <p class="fs-12 text-color-2">Commercial Broker</p>
                                    </div>
                                    <div class="icon-box flex">
                                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                                        <a href="#"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 ">
                            <div class="box hover-img">
                                <div class="images relative img-style">
                                    <a href="agents-detail.html"><img src="assets/images/img-box/meet-3.jpg"
                                            alt="images"></a>
                                    <div class="icon-socials">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="content flex justify-space">
                                    <div class="inner">
                                        <h3 class="link-style-1"><a href="agents-detail.html">Darlene Robertson</a></h3>
                                        <p class="fs-12 text-color-2">Realtor</p>
                                    </div>
                                    <div class="icon-box flex">
                                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                                        <a href="#"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="box-text flex justify-center">
                                <p>Become an agent and get the commission you deserve. </p> <a href="contact.html"
                                    class="text-color-3 font-2 fw-7"> Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <hr style="margin-top: 10px;"> -->
            <!-- <section class="tf-section flat-testimonial section-mb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>From our happy customers</h2>
                                <p class="text-color-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                    sed tristique metus proin id lorem odio</p>
                            </div>
                            <div class="swiper-container carousel-6">
                                <div class="swiper-wrapper ">
                                    <div class="swiper-slide">
                                        <div class="box center">
                                            <div class="inner">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z"
                                                        fill="#FFA920" />
                                                    <path
                                                        d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z"
                                                        fill="#FFA920" />
                                                    <path
                                                        d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z"
                                                        fill="#FFA920" />
                                                </svg>
                                                <div class="texts font-2 fs-16 fw-5 lh-24">
                                                    “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    vel tortor justo. Vestibulum vitae vulputate lacus. Aliquam
                                                    sollicitudin mauris odio. Fusce egestas consectetur semper vulputate
                                                    ”
                                                </div>
                                            </div>
                                            <div class="author-box">
                                                <div class="images">
                                                    <img src="assets/images/author/author-testimonial.jpg" alt="images">
                                                </div>
                                                <h4>Esther Howard</h4>
                                                <p>Internet Security Assistant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box center">
                                            <div class="inner">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z"
                                                        fill="#FFA920" />
                                                    <path
                                                        d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z"
                                                        fill="#FFA920" />
                                                    <path
                                                        d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z"
                                                        fill="#FFA920" />
                                                </svg>
                                                <div class="texts font-2 fs-16 fw-5 lh-24">
                                                    “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    vel tortor justo. Vestibulum vitae vulputate lacus. Aliquam
                                                    sollicitudin mauris odio. Fusce egestas consectetur semper vulputate
                                                    ”
                                                </div>
                                            </div>
                                            <div class="author-box">
                                                <div class="images">
                                                    <img src="assets/images/author/author-testimonial.jpg" alt="images">
                                                </div>
                                                <h4>Esther Howard</h4>
                                                <p>Internet Security Assistant</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box center">
                                            <div class="inner">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M28.0934 11.3076H25.2697V15.9908C25.2697 18.3363 23.3615 20.2445 21.0159 20.2445H14.1609V21.9843C14.1609 23.0355 15.0162 23.8909 16.0675 23.8909H22.1349L25.0277 27.3976C25.201 27.6074 25.4569 27.7249 25.7222 27.7249C25.7881 27.7249 25.8547 27.7175 25.9208 27.7027C26.252 27.6278 26.513 27.3726 26.5954 27.043L27.3836 23.8909H28.0934C29.1446 23.8909 30 23.0358 30 21.9843V13.2142C30 12.1627 29.1446 11.3076 28.0934 11.3076Z"
                                                        fill="#FFA920" />
                                                    <path
                                                        d="M21.0159 0H2.45361C1.10069 0 0 1.10069 0 2.45361V15.9906C0 17.3435 1.10069 18.444 2.45361 18.444H4.25743L5.56664 23.6799C5.6488 24.0097 5.90973 24.2647 6.24115 24.3398C6.3073 24.3546 6.37367 24.362 6.43982 24.362C6.70509 24.3617 6.96098 24.2443 7.13402 24.0344L11.7462 18.444H21.0159C22.3689 18.444 23.4695 17.3435 23.4695 15.9906V2.45361C23.4695 1.10069 22.3689 0 21.0159 0V0ZM17.021 8.59955L15.0309 10.5396L15.5008 13.2786C15.5587 13.6164 15.4198 13.9577 15.1426 14.1591C14.9858 14.2731 14.8002 14.331 14.6134 14.331C14.4701 14.331 14.3264 14.2969 14.1946 14.2275L11.7348 12.9343L9.27475 14.2275C8.97148 14.3871 8.60413 14.3605 8.32672 14.1591C8.04955 13.9577 7.91084 13.6164 7.96875 13.2786L8.43864 10.5393L6.44829 8.59955C6.20316 8.36037 6.11481 8.00262 6.22055 7.67693C6.32652 7.351 6.60828 7.11342 6.94725 7.06421L9.69749 6.66458L10.9275 4.17229C11.0793 3.86513 11.3921 3.67058 11.7348 3.67058C12.0774 3.67058 12.3903 3.86513 12.5418 4.17229L13.7718 6.66458L16.5221 7.06421C16.8613 7.11342 17.143 7.351 17.2488 7.67693C17.3547 8.00285 17.2664 8.36037 17.021 8.59955Z"
                                                        fill="#FFA920" />
                                                    <path
                                                        d="M12.367 7.8858L11.7348 6.60498L11.1026 7.8858C10.9715 8.15154 10.7181 8.33556 10.4249 8.37836L9.01111 8.58366L10.034 9.5809C10.2462 9.78758 10.343 10.0856 10.2928 10.3776L10.0514 11.7855L11.3159 11.1208C11.578 10.983 11.8914 10.983 12.1537 11.1208L13.418 11.7855L13.1765 10.3776C13.1264 10.0856 13.2232 9.78758 13.4354 9.5809L14.4583 8.58366L13.0447 8.37836C12.7515 8.33556 12.4981 8.15154 12.367 7.8858Z"
                                                        fill="#FFA920" />
                                                </svg>
                                                <div class="texts font-2 fs-16 fw-5 lh-24">
                                                    “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    vel tortor justo. Vestibulum vitae vulputate lacus. Aliquam
                                                    sollicitudin mauris odio. Fusce egestas consectetur semper vulputate
                                                    ”
                                                </div>
                                            </div>
                                            <div class="author-box">
                                                <div class="images">
                                                    <img src="assets/images/author/author-testimonial.jpg" alt="images">
                                                </div>
                                                <h4>Esther Howard</h4>
                                                <p>Internet Security Assistant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-title flex justify-center">
                                <div class="inner-title flex justify-center align-center">
                                    <h4 class="title-1 fw-4">Become our next customer, and find your dream home </h4> <a
                                        href="tel:0123456789">
                                        <h4 class="text-color-3">Contact us: 314-555-0123</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="flat-rent flat-are-interested wg-dream tf-section dots-style2">
                <div class="container3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>Maybe you are interested</h2>
                                <p class="text-color-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                    vel lobortis justo</p>
                            </div>
                            <div class="swiper-container">
                                <div class="two-carousel owl-carousel owl-theme ">
                                    <div class="slide-item">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-25.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-22.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-10.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-14.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-15.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-22.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-26.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-20.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-11.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-18.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-19.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-23.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-27.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-22.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-10.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-14.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-15.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-24.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-28.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-2.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-1.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-4.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-5.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-25.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-25.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-22.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-10.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-14.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-15.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-22.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-26.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-20.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-11.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-18.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-19.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-23.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-27.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-22.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-10.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-14.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-15.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-24.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item ">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-28.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-2.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-1.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-4.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-5.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-25.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item">
                                        <div class="box box-dream hv-one">
                                            <div class="image-group relative ">
                                                <span class="featured fs-12 fw-6">Featured</span>
                                                <span class="featured style fs-12 fw-6">For sale</span>
                                                <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>
                                                <div class="swiper-container noo carousel-2 img-style">
                                                    <a href="property-detail-v1.html" class="icon-plus"><img
                                                            src="assets/images/icon/plus.svg" alt="images"></a>
                                                    <div class="swiper-wrapper ">
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-25.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-22.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-10.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-14.jpg" alt="images">
                                                        </div>
                                                        <div class="swiper-slide"><img
                                                                src="assets/images/house/featured-15.jpg" alt="images">
                                                        </div>
                                                    </div>
                                                    <div class="pagi2">
                                                        <div class="swiper-pagination2"> </div>
                                                    </div>
                                                    <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h3 class="link-style-1"><a href="property-detail-v1.html">Gorgeous
                                                        Apartment Building</a> </h3>
                                                <div class="text-address">
                                                    <p class="p-12">58 Hullbrook Road, Billesley, B13 0LA</p>
                                                </div>
                                                <div class="money fs-18 fw-6 text-color-3"><a
                                                        href="property-detail-v1.html">$7,500</a></div>
                                                <div class="icon-box flex">
                                                    <div class="icons icon-1 flex"><span>Beds: </span><span
                                                            class="fw-6">4</span></div>
                                                    <div class="icons icon-2 flex"><span>Baths: </span><span
                                                            class="fw-6">2</span></div>
                                                    <div class="icons icon-3 flex"><span>Sqft: </span><span
                                                            class="fw-6">1150</span></div>
                                                </div>
                                                <div class="days-box flex justify-space align-center">
                                                    <a class="compare flex align-center fw-6" href="#">Compare</a>
                                                    <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img
                                                            src="assets/images/author/author-22.jpg" alt="images"></div>
                                                    <div class="days">3 years ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="flat-rent flat-are-interested wg-dream tf-section dots-style2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="heading-section">
                                <h2 class="font-2 fw-8" style="font-size:20px;">We provide the most suitable and quality
                                    real estate.</h2>
                                <!-- <p class="text-color-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                    sed tristique metus proin id lorem odio</p> -->
                            </div>
                            <div class="wrap-info">
                                <div class="box-info flex align-center">
                                    <div class="icon-info">
                                        <svg width="50" height="80" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M42.5742 38.0897L42.7 38.0394V37.904V23.749C42.7 23.1695 43.1704 22.699 43.75 22.699C44.3295 22.699 44.8 23.1695 44.8 23.749V38.749C44.8 39.179 44.5378 39.5638 44.1424 39.7261C44.1421 39.7262 44.1419 39.7263 44.1417 39.7264L31.6657 44.7158L31.7375 44.8952C31.7375 44.8974 31.7375 44.8994 31.7375 44.9015L31.6563 44.7187L31.6371 44.7272C31.3894 44.8262 31.113 44.8262 30.8654 44.7272L30.8462 44.7187L30.8074 44.7015H30.801L18.8243 39.9108L18.75 39.8811L18.6757 39.9108L6.64074 44.7233L6.64072 44.7233C6.5143 44.7739 6.382 44.799 6.25 44.799C6.04199 44.799 5.83872 44.7382 5.66233 44.6185C5.37414 44.4229 5.2 44.0971 5.2 43.749V21.249C5.2 20.8188 5.46227 20.4344 5.85956 20.2746C5.85958 20.2746 5.8596 20.2746 5.85962 20.2746L18.3281 15.2857L18.3282 15.2863L18.3507 15.2788L18.3509 15.2791L18.3623 15.2745C18.6118 15.1739 18.8907 15.1739 19.1402 15.2745L19.1401 15.2746L19.1448 15.2763L19.1648 15.2838L19.1987 15.2965H19.1989L26.6456 18.2772C26.6456 18.2772 26.6456 18.2772 26.6457 18.2772C27.1862 18.4939 27.4479 19.1052 27.2319 19.6419L27.2318 19.6421C27.0154 20.182 26.3971 20.4421 25.8673 20.2285L25.8668 20.2283L20.0743 17.9108L19.8 17.8011V18.0965V37.9015V38.0369L19.9257 38.0872L29.9257 42.0872L30.2 42.1969V41.9015V28.749C30.2 28.1695 30.6704 27.699 31.25 27.699C31.8295 27.699 32.3 28.1695 32.3 28.749V41.904V42.1994L32.5742 42.0897L42.5742 38.0897ZM18.2775 15.134L18.265 15.1028L18.265 15.1028L18.265 15.0965L18.2775 15.134ZM17.5743 38.0872L17.7 38.0369V37.9015V18.094V17.7986L17.4257 17.9083L7.42572 21.9083L7.3 21.9586V22.094V41.9015V42.1969L7.57428 42.0872L17.5743 38.0872Z"
                                                fill="#8E8E93" stroke="white" stroke-width="0.4" />
                                            <path
                                                d="M32.6999 13.749C32.6999 11.792 34.2928 10.199 36.2499 10.199C38.2069 10.199 39.7999 11.792 39.7999 13.749C39.7999 15.7061 38.2069 17.299 36.2499 17.299C34.2928 17.299 32.6999 15.7061 32.6999 13.749ZM34.7999 13.749C34.7999 14.5495 35.4494 15.199 36.2499 15.199C37.0503 15.199 37.6999 14.5495 37.6999 13.749C37.6999 12.9486 37.0503 12.299 36.2499 12.299C35.4494 12.299 34.7999 12.9486 34.7999 13.749Z"
                                                fill="#8E8E93" stroke="white" stroke-width="0.4" />
                                            <path
                                                d="M36.0971 24.4704L36.25 24.6518L36.4029 24.4704C37.7722 22.8466 39.3407 20.7865 40.5681 18.831C41.1818 17.8533 41.7126 16.8981 42.0906 16.0341C42.4666 15.1746 42.7 14.3865 42.7 13.749C42.7 10.1936 39.8054 7.29902 36.25 7.29902C32.6945 7.29902 29.8 10.1936 29.8 13.749C29.8 14.3871 30.0334 15.1755 30.4094 16.0351C30.7874 16.8993 31.3182 17.8544 31.9319 18.8319C33.1593 20.7872 34.7278 22.8466 36.0971 24.4704ZM27.7 13.749C27.7 9.03448 31.5355 5.19902 36.25 5.19902C40.9645 5.19902 44.8 9.03448 44.8 13.749C44.8 14.8262 44.3769 16.1323 43.7105 17.5145C43.0462 18.8922 42.1501 20.3255 41.2259 21.6512C39.3782 24.3016 37.43 26.5055 37.0314 26.9501C36.8312 27.1712 36.5474 27.299 36.25 27.299C35.9526 27.299 35.6688 27.1712 35.4686 26.9501C35.0699 26.5053 33.1217 24.3015 31.2741 21.6512C30.3499 20.3255 29.4538 18.8922 28.7895 17.5145C28.1231 16.1323 27.7 14.8262 27.7 13.749Z"
                                                fill="#8E8E93" stroke="white" stroke-width="0.4" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h5 class="text-color-4">Office address</h5>
                                        <h4 class="fw-4">No.78, Havelock Road, Colomobo 05,Srilanka.</h4>
                                    </div>
                                    <br>

                                </div>
                                <div class="box-info flex align-center">
                                    <div class="icon-info">
                                        <svg width="50" height="80" viewBox="0 0 50 51" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.4648 13.7812C26.4648 14.5902 27.1207 15.2461 27.9297 15.2461C28.7387 15.2461 29.3945 14.5902 29.3945 13.7812C29.3945 12.9723 28.7387 12.3164 27.9297 12.3164C27.1207 12.3164 26.4648 12.9723 26.4648 13.7812Z"
                                                fill="#8E8E93" />
                                            <path
                                                d="M32.3242 13.7812C32.3242 14.5902 32.9801 15.2461 33.7891 15.2461C34.598 15.2461 35.2539 14.5902 35.2539 13.7812C35.2539 12.9723 34.598 12.3164 33.7891 12.3164C32.9801 12.3164 32.3242 12.9723 32.3242 13.7812Z"
                                                fill="#8E8E93" />
                                            <path
                                                d="M38.1836 13.7812C38.1836 14.5902 38.8395 15.2461 39.6484 15.2461C40.4574 15.2461 41.1133 14.5902 41.1133 13.7812C41.1133 12.9723 40.4574 12.3164 39.6484 12.3164C38.8395 12.3164 38.1836 12.9723 38.1836 13.7812Z"
                                                fill="#8E8E93" />
                                            <path
                                                d="M22.6771 37.2188L27.0716 34.2891L35.8398 37.2188V43.0781C35.8398 44.6961 34.549 46.0078 32.931 46.0078C16.7508 46.0078 1.46484 30.8195 1.46484 14.6394C1.46484 13.0214 2.77656 11.7305 4.39453 11.7305H10.2539L13.1836 20.4987L10.2539 24.8933C12.1247 29.5703 18 35.3479 22.6771 37.2188Z"
                                                stroke="#8E8E93" stroke-width="1.7" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M19.1406 13.7812C19.1406 18.6354 23.0756 22.5703 27.9297 22.5703V28.4297L33.7891 22.5703H39.6484C44.5025 22.5703 48.5352 18.6354 48.5352 13.7812C48.5352 8.92715 44.5025 4.99219 39.6484 4.99219H27.9297C23.0756 4.99219 19.1406 8.92715 19.1406 13.7812Z"
                                                stroke="#8E8E93" stroke-width="1.7" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h5 class="text-color-4">Request a call back</h5>
                                        <a href="tel:0112099977">
                                            <h4 class="fw-8 font-2 fs-30 text-color-3 lh-37">011 209 9977</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-info flex align-center">
                                    <div class="icon-info">
                                        <svg width="50" height="80" viewBox="0 0 50 50" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1505_28697)">
                                                <path
                                                    d="M36.6559 17.8341L36.6559 17.8341L36.6609 17.8392C36.8315 18.0113 37.0549 18.0969 37.2788 18.0969C37.5021 18.0969 37.7258 18.0116 37.8976 17.8411C38.2409 17.5005 38.241 16.9425 37.8996 16.5985C37.5586 16.2548 37.0037 16.2526 36.66 16.5934L36.6559 17.8341ZM36.6559 17.8341L36.6551 17.8332M36.6559 17.8341L36.6551 17.8332M36.6551 17.8332C36.3141 17.4895 36.3163 16.9345 36.66 16.5935L36.6551 17.8332Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M46.4639 27.8825H46.7054L46.5346 27.7118L39.3343 20.5115C38.992 20.1691 38.992 19.6141 39.3343 19.2718C39.6767 18.9296 40.2317 18.9296 40.574 19.2718L49.6441 28.3419C49.8085 28.5063 49.9009 28.7294 49.901 28.9618C49.901 29.1943 49.8086 29.4172 49.6442 29.5816L34.0757 45.1502C33.9114 45.3145 33.6884 45.4069 33.4559 45.4069C33.2235 45.4069 33.0005 45.3145 32.8361 45.1502L9.34306 21.6572C9.34306 21.6572 9.34305 21.6572 9.34305 21.6572C9.00075 21.3148 9.00076 20.7598 9.34305 20.4175L24.9114 4.84884C25.2537 4.50664 25.8087 4.50664 26.151 4.84884C26.151 4.84884 26.151 4.84884 26.1511 4.84884L34.9723 13.67C35.3146 14.0124 35.3146 14.5675 34.9723 14.9098C34.6299 15.252 34.0749 15.2519 33.7326 14.9098L26.7811 7.95839L26.6104 7.78768V8.0291V25.1994C26.6104 26.679 27.8139 27.8825 29.2935 27.8825H46.4639ZM24.8575 7.62373V7.38231L24.6868 7.55302L12.2497 19.9901L12.079 20.1608H12.3204H24.7575H24.8575V20.0608V7.62373ZM32.4087 42.2434L32.5794 42.4141V42.1727V29.7356V29.6356H32.4794H29.2937C26.8477 29.6356 24.8575 27.6455 24.8575 25.1994V22.0139V21.9139H24.7575H12.3204H12.079L12.2497 22.0846L32.4087 42.2434ZM34.3324 42.1728V42.4142L34.5031 42.2435L46.9401 29.8064L47.1108 29.6356H46.8694H34.4324H34.3324V29.7356V42.1728Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M0.976562 24.9047H6.70225C7.18637 24.9047 7.57881 25.2972 7.57881 25.7812C7.57881 26.2654 7.18637 26.6578 6.70225 26.6578H0.976562C0.492442 26.6578 0.1 26.2653 0.1 25.7812C0.1 25.2972 0.492442 24.9047 0.976562 24.9047Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M9.59961 24.9047H9.61426C10.0984 24.9047 10.4908 25.2972 10.4908 25.7812C10.4908 26.2653 10.0984 26.6578 9.61426 26.6578H9.59961C9.11549 26.6578 8.72305 26.2653 8.72305 25.7812C8.72305 25.2972 9.11549 24.9047 9.59961 24.9047Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M0.978516 14.6508H4.10381C4.58793 14.6508 4.98037 15.0433 4.98037 15.5273C4.98037 16.0114 4.58793 16.4039 4.10381 16.4039H0.978516C0.494395 16.4039 0.101953 16.0114 0.101953 15.5273C0.101953 15.0433 0.494395 14.6508 0.978516 14.6508Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M7.29315 14.6508H10.9873C11.4714 14.6508 11.8639 15.0433 11.8639 15.5273C11.8639 16.0114 11.4714 16.4039 10.9873 16.4039H7.29315C6.80903 16.4039 6.41659 16.0114 6.41659 15.5273C6.41659 15.0433 6.80903 14.6508 7.29315 14.6508Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M7.64453 30.2758H13.1132C13.5972 30.2758 13.9897 30.6683 13.9897 31.1523C13.9897 31.6364 13.5973 32.0289 13.1132 32.0289H7.64453C7.16041 32.0289 6.76797 31.6364 6.76797 31.1523C6.76797 30.6683 7.16041 30.2758 7.64453 30.2758Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                                <path
                                                    d="M3.61328 36.5258H17.3827C17.8668 36.5258 18.2593 36.9183 18.2593 37.4023C18.2593 37.8864 17.8668 38.2789 17.3827 38.2789H3.61328C3.12916 38.2789 2.73672 37.8864 2.73672 37.4023C2.73672 36.9183 3.12916 36.5258 3.61328 36.5258Z"
                                                    fill="#8E8E93" stroke="white" stroke-width="0.2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1505_28697">
                                                    <rect width="50" height="80" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h5 class="text-color-4">Email us</h5>
                                        <a
                                            href="https://themesflat.co/cdn-cgi/l/email-protection#9af2fff6f6f5e9efeaeaf5e8eedafdf7fbf3f6b4f9f5f7">
                                            <h4 class="fw-4 text-color-3"><span class="__cf_email__"
                                                    data-cfemail="e68e838a8a8995939696899492a6818b878f8ac885898b">wallspropertyservice@gmail.com</span>
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mark-contact animate-up">
                                <img class="img-icon" style="margin-top: 70px;" src="assets/images/logo/wps-new.png"
                                    style="width:400px; height:60px;" alt="images">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wrap-contact">
                                <div class="box-title flex justify-space">
                                    <div class="inner">
                                        <div class="title-ct fs-30 fw-7">Contact us </div>
                                        <p style="margin-top: 20px;">We will respond as soon as we receive your message.
                                        </p>
                                    </div>
                                    <div class="icon-message animate-zoom">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M33.8668 1.7959H18.0927C15.6302 1.7959 13.6269 3.79882 13.6269 6.26215V14.193H6.12893C3.6681 14.1934 1.66602 16.1963 1.66602 18.6571V28.5738C1.66602 31.0347 3.6681 33.038 6.12893 33.038H6.82768V36.1263C6.82768 36.9651 7.30518 37.6959 8.07393 38.0305C8.34143 38.1472 8.62477 38.2042 8.9056 38.2042C9.43297 38.2041 9.94074 38.0043 10.3268 37.6451L15.2314 33.038H21.9077C24.3694 33.038 26.3718 31.0351 26.3718 28.5738V22.1421L29.6752 25.2367C29.9697 25.5146 30.3394 25.6999 30.7382 25.7695C31.1371 25.8391 31.5477 25.7901 31.9189 25.6284C32.2904 25.4677 32.6068 25.2018 32.8289 24.8634C33.051 24.525 33.1692 24.129 33.1689 23.7242V20.6446H33.8673C36.3293 20.6451 38.3327 18.6417 38.3327 16.1788V6.26215C38.3327 3.79923 36.3293 1.7959 33.8668 1.7959ZM21.9077 30.7838H14.7856C14.4989 30.7841 14.223 30.8934 14.0139 31.0896L9.08185 35.7234V31.9109C9.0819 31.7629 9.05279 31.6163 8.99617 31.4795C8.93954 31.3428 8.85653 31.2185 8.75186 31.1138C8.64719 31.0091 8.52292 30.9261 8.38615 30.8695C8.24938 30.8129 8.10279 30.7838 7.95477 30.7838H6.12893C5.54312 30.7832 4.98151 30.5501 4.5674 30.1357C4.15329 29.7214 3.92051 29.1596 3.92018 28.5738V18.6571C3.92051 18.0713 4.15329 17.5096 4.5674 17.0952C4.98151 16.6809 5.54312 16.4478 6.12893 16.4471H13.6406C13.7806 18.7851 15.721 20.6451 18.0927 20.6451H24.1173V28.5738C24.1169 29.1598 23.884 29.7216 23.4698 30.136C23.0555 30.5504 22.4936 30.7834 21.9077 30.7838ZM36.0785 16.1788C36.0779 16.7652 35.8446 17.3274 35.43 17.7421C35.0154 18.1568 34.4533 18.3901 33.8668 18.3909H32.0414C31.8934 18.3908 31.7468 18.42 31.6101 18.4766C31.4733 18.5332 31.349 18.6162 31.2443 18.7209C31.1397 18.8256 31.0567 18.9498 31 19.0866C30.9434 19.2234 30.9143 19.37 30.9144 19.518V23.3109L26.0218 18.7192L25.9985 18.6971L25.9956 18.7005L25.9898 18.6951C25.7808 18.4995 25.5051 18.3909 25.2189 18.3913H18.0927C17.5063 18.3905 16.9441 18.1572 16.5295 17.7425C16.1149 17.3278 15.8817 16.7656 15.881 16.1792V16.1771H15.8893L15.881 6.26298C15.8817 5.67658 16.1149 5.11437 16.5295 4.69968C16.9441 4.28499 17.5063 4.05167 18.0927 4.0509H33.8668C34.4533 4.05167 35.0154 4.28499 35.43 4.69968C35.8446 5.11437 36.0779 5.67658 36.0785 6.26298V16.1788Z"
                                                fill="#FFA920" />
                                            <path
                                                d="M30.4872 7.77051H21.4713C21.1724 7.77051 20.8857 7.88925 20.6744 8.10062C20.463 8.31199 20.3442 8.59867 20.3442 8.89759C20.3442 9.19651 20.463 9.48319 20.6744 9.69456C20.8857 9.90593 21.1724 10.0247 21.4713 10.0247H30.4876C30.6356 10.0246 30.7821 9.99547 30.9189 9.9388C31.0556 9.88213 31.1798 9.79909 31.2845 9.69441C31.3891 9.58973 31.4721 9.46547 31.5287 9.32871C31.5854 9.19196 31.6145 9.04539 31.6145 8.89738C31.6144 8.74937 31.5852 8.60282 31.5286 8.46608C31.4719 8.32935 31.3889 8.20512 31.2842 8.10048C31.1795 7.99584 31.0553 7.91284 30.9185 7.85622C30.7817 7.79961 30.6352 7.77048 30.4872 7.77051ZM30.4872 12.2784H21.4713C21.1724 12.2784 20.8857 12.3972 20.6744 12.6085C20.463 12.8199 20.3442 13.1066 20.3442 13.4055C20.3442 13.7044 20.463 13.9911 20.6744 14.2025C20.8857 14.4138 21.1724 14.5326 21.4713 14.5326H30.4876C30.6356 14.5326 30.7821 14.5034 30.9189 14.4467C31.0556 14.3901 31.1798 14.307 31.2845 14.2023C31.3891 14.0976 31.4721 13.9734 31.5287 13.8366C31.5854 13.6999 31.6145 13.5533 31.6145 13.4053C31.6144 13.2573 31.5852 13.1107 31.5286 12.974C31.4719 12.8373 31.3889 12.713 31.2842 12.6084C31.1795 12.5038 31.0553 12.4208 30.9185 12.3641C30.7817 12.3075 30.6352 12.2784 30.4872 12.2784ZM9.52049 22.5163C9.38549 22.5605 9.27258 22.6505 9.16008 22.7409C8.95716 22.9655 8.82174 23.2605 8.82174 23.553C8.82174 23.8455 8.95674 24.1384 9.16008 24.3409C9.38549 24.5655 9.65591 24.6801 9.94883 24.6801C10.1063 24.6801 10.2647 24.6338 10.3997 24.5897C10.5351 24.5434 10.6476 24.453 10.7601 24.3409C10.963 24.1384 11.0984 23.8455 11.0984 23.553C11.0984 23.2605 10.963 22.9651 10.7601 22.7409C10.4447 22.4484 9.94883 22.3359 9.52049 22.5163ZM14.9076 22.5163C14.4792 22.3359 13.9834 22.448 13.668 22.7409C13.4651 22.9655 13.3526 23.2605 13.3526 23.553C13.3526 23.8455 13.4651 24.1384 13.668 24.3409C13.7805 24.453 13.8934 24.5434 14.0284 24.5897C14.1863 24.6338 14.3213 24.6801 14.4792 24.6801C14.7726 24.6801 15.043 24.5655 15.2684 24.3409C15.4713 24.1384 15.6067 23.8455 15.6067 23.553C15.6067 23.2605 15.4713 22.9651 15.2684 22.7409C15.1555 22.6509 15.043 22.5605 14.9076 22.5163ZM19.4159 22.5163C19.1455 22.4018 18.8297 22.4018 18.5367 22.5163C18.4017 22.5605 18.2888 22.6505 18.1763 22.7409C17.9734 22.9655 17.838 23.2605 17.838 23.553C17.838 23.8455 17.973 24.1384 18.1763 24.3409C18.4017 24.5655 18.6722 24.6801 18.9655 24.6801C19.123 24.6801 19.2809 24.6338 19.4163 24.5897C19.5517 24.5434 19.6642 24.453 19.7772 24.3409C19.9801 24.1384 20.0926 23.8455 20.0926 23.553C20.0926 23.2605 19.9797 22.9651 19.7772 22.7409C19.6638 22.6509 19.5513 22.5605 19.4159 22.5163ZM7.70716 11.1518H9.96133C10.2602 11.1518 10.5469 11.033 10.7583 10.8216C10.9697 10.6103 11.0884 10.3236 11.0884 10.0247C11.0884 9.72575 10.9697 9.43908 10.7583 9.22771C10.5469 9.01634 10.2602 8.89759 9.96133 8.89759H7.70716C7.40824 8.89759 7.12156 9.01634 6.91019 9.22771C6.69882 9.43908 6.58008 9.72575 6.58008 10.0247C6.58008 10.3236 6.69882 10.6103 6.91019 10.8216C7.12156 11.033 7.40824 11.1518 7.70716 11.1518ZM32.5013 29.1838H30.2472C29.9482 29.1838 29.6616 29.3026 29.4502 29.514C29.2388 29.7253 29.1201 30.012 29.1201 30.3109C29.1201 30.6098 29.2388 30.8965 29.4502 31.1079C29.6616 31.3193 29.9482 31.438 30.2472 31.438H32.5013C32.8003 31.438 33.0869 31.3193 33.2983 31.1079C33.5097 30.8965 33.6284 30.6098 33.6284 30.3109C33.6284 30.012 33.5097 29.7253 33.2983 29.514C33.0869 29.3026 32.8003 29.1838 32.5013 29.1838Z"
                                                fill="#FFA920" />
                                        </svg>
                                    </div>
                                </div>
                                <div id="comments" class="comments">
                                    <div class="respond-comment">
                                        <form class="comment-form form-submit"
                                            action="<?php echo base_url(); ?>Contact_us/contact_user" method="POST"
                                            id="frm_register" name="frm_register" accept-charset="utf-8"
                                            novalidate="novalidate">
                                            <fieldset class="name-wrap">
                                                <label class="font-2 fw-8 fs-16" style="margin-top: 20px;">Your
                                                    name</label>
                                                <input type="text" class="tb-my-input" name="txt_name" id="txt_name"
                                                    placeholder="Your name" required="">
                                                <img class="img-icon" style="margin-top: 20px;"
                                                    src="assets/images/icon/contact-name.svg" alt="images">
                                            </fieldset>
                                            <div class="text-wrap flex">
                                                <fieldset class="email-wrap style-text">
                                                    <label class="font-2 fw-8 fs-16">Email</label>
                                                    <input type="email" class="tb-my-input" id="txt_mail"
                                                        name="txt_mail" placeholder="Email" required="">
                                                    <img class="img-icon img-email"
                                                        src="assets/images/icon/contact-email.svg" alt="images">
                                                </fieldset>
                                                <fieldset class="phone-wrap style-text">
                                                    <label class="font-2 fw-8 fs-16">Phone</label>
                                                    <input type="tel" class="tb-my-input" id="txt_mobile"
                                                        name="txt_mobile" placeholder="Phone" required="">
                                                    <img class="img-icon" src="assets/images/icon/contact-phone.svg"
                                                        alt="images">
                                                </fieldset>
                                            </div>
                                            <div class="wd-find-select">
                                                <label class="font-2 fw-8 fs-16" for="property-type">Property
                                                    type</label>
                                                    <select id="property-type" name="property-type" class="nice-select relative">
                                                        <option data-value class="option selected">Choose</li>
                                                        <option value="land">Land</option>
                                                        <option value="rent">Rent</option>
                                                    </select>
                                                    <!-- <img class="img-icon icon-style"
                                                        src="assets/images/icon/contact-choose.svg" alt="images"> -->
                                    
                                            </div>
                                            <fieldset class="message-wrap">
                                                <label class="font-2 fw-8 fs-16">Message</label>
                                                <textarea id="comment-message" name="txt_message" id="txt_message"
                                                    rows="4" tabindex="4" placeholder="Your message"></textarea>
                                            </fieldset>
                                            <div class="button-boxs">
                                                <button class="sc-button" id="submit" name="submit" type="submit">
                                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_1505_28737)">
                                                            <path
                                                                d="M17.7381 0.0295345L0.899726 5.53166C0.424186 5.68706 0.355417 6.33388 0.788208 6.58552L7.1516 10.2857C7.24979 10.3428 7.36258 10.3699 7.47599 10.3635C7.5894 10.3572 7.69846 10.3177 7.78965 10.2499L9.57844 8.92152L8.25002 10.7103C8.1823 10.8015 8.14281 10.9106 8.13645 11.024C8.13009 11.1374 8.15714 11.2502 8.21424 11.3484L11.9144 17.7118C12.1664 18.1449 12.813 18.0754 12.9683 17.6003L18.4705 0.76186C18.618 0.309727 18.1881 -0.117584 17.7381 0.0295345ZM12.2669 16.0078L9.41045 11.0954L12.8548 6.45741C12.9378 6.34558 12.9779 6.20763 12.9676 6.06873C12.9574 5.92984 12.8976 5.79924 12.7991 5.70076C12.7006 5.60228 12.57 5.54247 12.4311 5.53225C12.2923 5.52203 12.1543 5.56207 12.0425 5.64507L7.40447 9.08947L2.49215 6.233L17.0112 1.48874L12.2669 16.0078ZM6.59633 12.7247L2.74099 16.58C2.51425 16.8067 2.1466 16.8068 1.91987 16.58C1.69309 16.3533 1.69309 15.9856 1.91987 15.7589L5.77521 11.9036C6.00202 11.6769 6.36967 11.6768 6.59633 11.9036C6.82311 12.1303 6.82311 12.498 6.59633 12.7247ZM1.50311 12.8706C1.27634 12.6438 1.27634 12.2762 1.50311 12.0495L3.02438 10.5282C3.25112 10.3014 3.61877 10.3014 3.8455 10.5282C4.07228 10.7549 4.07228 11.1226 3.8455 11.3493L2.32424 12.8706C2.09754 13.0973 1.72985 13.0973 1.50311 12.8706ZM7.97175 14.6544C8.19852 14.8811 8.19852 15.2488 7.97175 15.4755L6.45045 16.9968C6.3966 17.0508 6.33261 17.0936 6.26215 17.1228C6.1917 17.152 6.11617 17.167 6.0399 17.1669C5.52724 17.1669 5.26254 16.5424 5.62936 16.1756L7.15066 14.6544C7.37736 14.4276 7.74501 14.4276 7.97175 14.6544Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1505_28737">
                                                                <rect width="18" height="18" fill="white"
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

            <!-- <section class="flat-testimonial2 tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <div class="heading-tesi">
                                <h2 class="font-2 fw-8 lh-56">From our happy customers</h2>
                                <p class="text-1 text-color-4 font-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Fusce sed tristique metus proin id lorem odio</p>
                                <div class="icon-testi"><img src="assets/images/icon/testimonial.svg" alt="images">
                                </div>
                                <div class="text-testi fs-20 font-2 fw-5 lh-30 relative">“ Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Integer vel tortor justo. Vestibulum vitae vulputate
                                    lacus. Aliquam sollicitudin mauris odio. Fusce egestas consectetur elit, eu semper
                                    ex vulputate id. “</div>
                                <div class="author-box flex align-center">
                                    <div class="img-author"><img src="assets/images/author/author-testimonial2.jpg"
                                            alt="images"></div>
                                    <div class="content">
                                        <h4 class="font-2 fw-8">Esther Howard</h4>
                                        <p class="font-2">Internet Security Assistant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-5">
                            <div class="wrap-testi flex relative">
                                <div class="box box-1">
                                    <div class="media"><img src="assets/images/img-box/testimonial-1.jpg" alt="images">
                                    </div>
                                    <div class="media"><img src="assets/images/img-box/testimonial-2.jpg" alt="images">
                                    </div>
                                </div>
                                <div class="box box-2">
                                    <div class="media"><img src="assets/images/img-box/testimonial-3.jpg" alt="images">
                                    </div>
                                    <div class="media"><img src="assets/images/img-box/testimonial-4.jpg" alt="images">
                                    </div>
                                    <div class="button-testi">
                                        <a class="sc-button" href="properties-map-v3.html">
                                            <i class="far fa-search text-color-1"></i>
                                            <span>Find your wonderful home</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="curved-group">
                                    <div class="curved-text animate-rotate">estate find your dreams real</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->



            <!-- <section class="flat-brand home2 tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>Trusted by over 150+ major companies</h2>
                                <p class="text-color-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                    vel lobortis justo</p>
                            </div>
                            <div class="swiper-container carousel-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-1.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-5.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-7.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-3.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-8.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-9.png" alt="images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container carousel-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-10.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-6.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-11.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-12.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-13.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-14.png" alt="images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container carousel-5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-15.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-16.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-17.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-18.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-19.png" alt="images"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slogan-logo">
                                            <a href="#"><img src="assets/images/img-box/brand-20.png" alt="images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="flat-agents">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="heading-section center">
                                <h2>Become Our Agents</h2>
                                <p class="text-1 text-color-4">Become an agent and get the commission you deserve</p>
                                <div class="icon-img">
                                    <img src="assets/images/icon/agents.svg" alt="images">
                                </div>
                                <h4 class="text-2 fw-5">With a history of 30 years, we have built strong relationships
                                    with more than 5000 real estate business partners, providing profitable
                                    opportunities for investors from more than 100 countries. We are proud to work with
                                    agents and business partners who are just as passionate about bringing the best
                                    homes to everyone as we are.</h4>
                                <div class="title-content">
                                    <h4 class="fs-16">Esther Howard</h4>
                                    <p>CEO and founder at Real estate CP</p>
                                </div>

                                <div class="signature">
                                    <img src="assets/images/img-box/agents-signature.png" alt="images">
                                </div>
                                <div class="button-box flex justify-center">
                                    <div class="button-one">
                                        <a class="sc-button" href="agents-detail.html">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.75 15L15.75 12M15.75 12L12.75 9M15.75 12H8.25M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <span>Join Us</span>
                                        </a>
                                    </div>
                                    <div class="button-two">
                                        <a class="sc-button" href="contact.html">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <span>Contact Us</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="video-box ">
                                <div class="post-video text-end ">
                                    <img class="img-2" src="assets/images/img-box/video-agents.jpg" alt="images">
                                    <a href="https://youtu.be/MLpWrANjFbI" class="lightbox-image">
                                        <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.3919 7.31221C14.6269 8.09812 14.6269 9.90095 13.3919 10.6869L3.3346 17.087C2.00315 17.9343 0.260849 16.9778 0.260849 15.3997L0.26085 2.5994C0.26085 1.02122 2.00315 0.0647914 3.3346 0.912078L13.3919 7.31221Z"
                                                fill="#FFA920" />
                                        </svg>
                                        <i class="ripple"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="flat-blog tf-section home2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section center">
                                <h2>Form our blog</h2>
                                <p class="text-color-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                    sed tristique metus proin id lorem odio</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="box hover-img">
                                <div class="images img-style relative ">
                                    <img src="assets/images/img-box/blog-7.jpg" alt="images">
                                    <div class="sub-box flex align-center fs-13 fw-6">
                                        <div class="title-1">April</div><a class="title-2 text-color-3">Housing</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="link-style-1"><a href="blog-detail.html">Building gains into housing
                                            stocks and how to trade the sector</a></h3>
                                    <div class="meta">
                                        <a href="blog-detail.html"
                                            class="btn-button flex align-center fs-13 fw-6 text-color-3"><span>Read more
                                            </span>
                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.875 6H12.125M12.125 6L7.0625 0.9375M12.125 6L7.0625 11.0625"
                                                    stroke="#FFA920" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="box hover-img">
                                <div class="images img-style relative ">
                                    <img src="assets/images/img-box/blog-8.jpg" alt="images">
                                    <div class="sub-box flex align-center fs-13 fw-6">
                                        <div class="title-1">April</div><a class="title-2 text-color-3">Housing</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="link-style-1"><a href="blog-detail.html">92% of millennial homebuyers say
                                            inflation has impacted their plans</a></h3>
                                    <div class="meta">
                                        <a href="blog-detail.html"
                                            class="btn-button flex align-center fs-13 fw-6 text-color-3"><span>Read more
                                            </span>
                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.875 6H12.125M12.125 6L7.0625 0.9375M12.125 6L7.0625 11.0625"
                                                    stroke="#FFA920" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="box hover-img">
                                <div class="images img-style relative ">
                                    <img src="assets/images/img-box/blog-9.jpg" alt="images">
                                    <div class="sub-box flex align-center fs-13 fw-6">
                                        <div class="title-1">April</div><a class="title-2 text-color-3">Housing</a>
                                    </div>
                                </div>
                                <div class="content ">
                                    <h3 class="link-style-1"><a href="blog-detail.html">We are hiring ‘moderately,’ says
                                            Compass CEO</a></h3>
                                    <div class="meta">
                                        <a href="blog-detail.html"
                                            class="btn-button flex align-center fs-13 fw-6 text-color-3"><span>Read more
                                            </span>
                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.875 6H12.125M12.125 6L7.0625 0.9375M12.125 6L7.0625 11.0625"
                                                    stroke="#FFA920" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Modal Popup Bid -->



            <a id="scroll-top" class="button-go"></a>
        </div>
    </div>


    <?php $this->load->view('Templates/footer.php'); ?>


    <?php $this->load->view('Site/CSS_JS/js.php'); ?>

</body>

</html>