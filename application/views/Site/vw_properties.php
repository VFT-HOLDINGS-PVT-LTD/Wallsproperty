<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>DreamHome - Real Estate HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>app/dist/font-awesome.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>app/dist/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app/dist/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>app/dist/owl.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/logo/Favicon.png">

</head>
<style>
 .top-filters {
    margin: 0 auto;
    position: center; /* Optional: if you want to center the content within the top-filters */
}
hr {
    margin: 0 auto;
    width: auto; /* Adjust the width as needed */
}
.flat-property-grid-1 .post {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.container6 {
    max-width: 1600px;
}
.tf-section2 {
    display: flex;
    justify-content: center;
    align-items: center;
}
.wg-dream .wrap-item {
    position: relative;
    margin-left: -24px;
    flex-wrap: wrap;
    width:70%;
}
</style>
<body class="body  ">

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
                <?php $this->load->view('Templates/header1.php'); ?>
            <!-- End Main Header -->
            <hr>
            <!-- title page -->
            <!-- <section class="tf-map">
                <div class="container-fuild">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <iframe class="map-content"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </section> -->
            <div class="top-filters">
                <div class="container6">
                    <div class="row" >                      
                        <div class="col-lg-12" >
                            <div class="flat-tabs style2 flex" >
                                <div class="content-tab">
                                    <div class="content-inner tab-content">
                                        <div class="form-sl">
                                            <form method="post">
                                                <div class="wd-find-select flex">
                                                    <div class="form-group-1 search-form form-style relative">
                                                        <i class="far fa-search"></i>
                                                        <input type="search" class="search-field" placeholder="Type keyword..." value="" name="s" title="Search for" required="">
                                                    </div>                                                  
                                                    <div class="form-group-2 form-style">
                                                        <div class="group-select">
                                                            <div class="nice-select" tabindex="0"><span class="current">Property type</span>
                                                                <ul class="list">    
                                                                    <li data-value class="option selected">Property type</li>
                                                                    <li data-value="bungalow" class="option">Rent</li>
                                                                    <li data-value="apartment" class="option">Sale</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-3 form-style">
                                                        <div class="group-select">
                                                            <div class="nice-select" tabindex="0"><span class="current">Location</span>
                                                                <ul class="list">  
                                                                    <li data-value class="option selected">Location</li>                                                        
                                                                    <li data-value="Japan" class="option">Japan</li>
                                                                    <li data-value="America" class="option d">America</li>
                                                                    <li data-value="England" class="option ">England</li>   
                                                                    <li data-value="Japan" class="option">Belgium</li>  
                                                                    <li data-value="England" class="option ">France</li>                                                             
                                                                    <li data-value="VietNam" class="option">VietNam</li>
                                                                </ul>
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                    <div class="form-group-2 form-style">
                                                        <div class="group-select">
                                                            <div class="nice-select" tabindex="0"><span class="current">Price Range</span>
                                                                <ul class="list">    
                                                                    <li data-value class="option selected">Baths</li>                                                       
                                                                    <li data-value="floating" class="option">Floating baths</li>
                                                                    <li data-value="massage" class="option">Massage baths</li>
                                                                    <li data-value="floor-standing" class="option">Floor-standing bath</li>
                                                                    <li data-value="built-in" class="option">Built-in baths</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="button-search sc-btn-top">
                                                        <a class="sc-button button-top" href="#">
                                                            <span>Search Now</span>
                                                            <i class="far fa-search"></i>
                                                        </a>
                                                    </div> 
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <section class="flat-title" >
                <div class="container6">
                    <div class="row">                      
                        <div class="col-lg-12">
                            <div class="title-inner style">
                                <div class="title-group fs-12"><a class="home fw-6 text-color-3" href="index.html">Home</a><span >Property Listing</span></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section> -->
           
          
            <section class="flat-featured flat-property flat-property-grid-2 tf-section2 wg-dream style5" >  <!-- changed grid -->
                <div class="container6 ">
                    <div class="row flex  ">                      
                        <div class="post">
                            <div class="category-filter flex justify-space align-center">
                                <div class="box-1 flex align-center">
                                    <div class="heading-listing fs-30 lh-45 fw-7">Property Listing</div><div class="">There are currently <?php echo count($data_set_cat_pro); ?> properties.</div> 
                                </div>
                                <div class="box-2 flex">
                                    <a href="#" class="btn-view grid active">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.04883 6.40508C5.04883 5.6222 5.67272 5 6.41981 5C7.16686 5 7.7908 5.62221 7.7908 6.40508C7.7908 7.18801 7.16722 7.8101 6.41981 7.8101C5.67241 7.8101 5.04883 7.18801 5.04883 6.40508Z" stroke="#8E8E93"/>
                                            <path d="M11.1045 6.40508C11.1045 5.62221 11.7284 5 12.4755 5C13.2229 5 13.8466 5.6222 13.8466 6.40508C13.8466 7.18789 13.2227 7.8101 12.4755 7.8101C11.7284 7.8101 11.1045 7.18794 11.1045 6.40508Z" stroke="#8E8E93"/>
                                            <path d="M19.9998 6.40514C19.9998 7.18797 19.3757 7.81016 18.6288 7.81016C17.8818 7.81016 17.2578 7.18794 17.2578 6.40508C17.2578 5.62211 17.8813 5 18.6288 5C19.3763 5 19.9998 5.62215 19.9998 6.40514Z" stroke="#8E8E93"/>
                                            <path d="M7.74249 12.5097C7.74249 13.2926 7.11849 13.9147 6.37133 13.9147C5.62411 13.9147 5 13.2926 5 12.5097C5 11.7267 5.62419 11.1044 6.37133 11.1044C7.11842 11.1044 7.74249 11.7266 7.74249 12.5097Z" stroke="#8E8E93"/>
                                            <path d="M13.7976 12.5097C13.7976 13.2927 13.1736 13.9147 12.4266 13.9147C11.6795 13.9147 11.0557 13.2927 11.0557 12.5097C11.0557 11.7265 11.6793 11.1044 12.4266 11.1044C13.1741 11.1044 13.7976 11.7265 13.7976 12.5097Z" stroke="#8E8E93"/>
                                            <path d="M19.9516 12.5097C19.9516 13.2927 19.328 13.9147 18.5807 13.9147C17.8329 13.9147 17.209 13.2925 17.209 12.5097C17.209 11.7268 17.8332 11.1044 18.5807 11.1044C19.3279 11.1044 19.9516 11.7265 19.9516 12.5097Z" stroke="#8E8E93"/>
                                            <path d="M5.04297 18.5947C5.04297 17.8118 5.66709 17.1896 6.4143 17.1896C7.16137 17.1896 7.78523 17.8116 7.78523 18.5947C7.78523 19.3778 7.16139 19.9997 6.4143 19.9997C5.66714 19.9997 5.04297 19.3773 5.04297 18.5947Z" stroke="#8E8E93"/>
                                            <path d="M11.0986 18.5947C11.0986 17.8118 11.7227 17.1896 12.47 17.1896C13.2169 17.1896 13.8409 17.8117 13.8409 18.5947C13.8409 19.3778 13.2169 19.9997 12.47 19.9997C11.7225 19.9997 11.0986 19.3774 11.0986 18.5947Z" stroke="#8E8E93"/>
                                            <path d="M17.252 18.5947C17.252 17.8117 17.876 17.1896 18.6229 17.1896C19.3699 17.1896 19.9939 17.8117 19.9939 18.5947C19.9939 19.3778 19.3702 19.9997 18.6229 19.9997C17.876 19.9997 17.252 19.3774 17.252 18.5947Z" stroke="#8E8E93"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="btn-view list">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.7016 18.3317H9.00246C8.5615 18.3317 8.2041 17.9743 8.2041 17.5333C8.2041 17.0923 8.5615 16.7349 9.00246 16.7349H19.7013C20.1423 16.7349 20.4997 17.0923 20.4997 17.5333C20.4997 17.9743 20.1426 18.3317 19.7016 18.3317Z" fill="#8E8E93"/>
                                            <path d="M19.7016 13.3203H9.00246C8.5615 13.3203 8.2041 12.9629 8.2041 12.5219C8.2041 12.081 8.5615 11.7236 9.00246 11.7236H19.7013C20.1423 11.7236 20.4997 12.081 20.4997 12.5219C20.5 12.9629 20.1426 13.3203 19.7016 13.3203Z" fill="#8E8E93"/>
                                            <path d="M19.7016 8.30919H9.00246C8.5615 8.30919 8.2041 7.95179 8.2041 7.51083C8.2041 7.06986 8.5615 6.71246 9.00246 6.71246H19.7013C20.1423 6.71246 20.4997 7.06986 20.4997 7.51083C20.4997 7.95179 20.1426 8.30919 19.7016 8.30919Z" fill="#8E8E93"/>
                                            <path d="M5.5722 8.64465C6.16436 8.64465 6.6444 8.16461 6.6444 7.57245C6.6444 6.98029 6.16436 6.50024 5.5722 6.50024C4.98004 6.50024 4.5 6.98029 4.5 7.57245C4.5 8.16461 4.98004 8.64465 5.5722 8.64465Z" fill="#8E8E93"/>
                                            <path d="M5.5722 13.5942C6.16436 13.5942 6.6444 13.1141 6.6444 12.522C6.6444 11.9298 6.16436 11.4498 5.5722 11.4498C4.98004 11.4498 4.5 11.9298 4.5 12.522C4.5 13.1141 4.98004 13.5942 5.5722 13.5942Z" fill="#8E8E93"/>
                                            <path d="M5.5722 18.5438C6.16436 18.5438 6.6444 18.0637 6.6444 17.4716C6.6444 16.8794 6.16436 16.3994 5.5722 16.3994C4.98004 16.3994 4.5 16.8794 4.5 17.4716C4.5 18.0637 4.98004 18.5438 5.5722 18.5438Z" fill="#8E8E93"/>
                                        </svg>
                                    </a>
                                    <div class="wd-find-select flex">
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0"><span class="current">Show: 50</span>
                                                <ul class="list style">                                                          
                                                  <li data-value="10" class="option">Show: 10</li>
                                                  <li data-value="30" class="option">Show: 30</li>
                                                  <li data-value="50" class="option selected">Show: 50</li>
                                                  <li data-value="100" class="option">Show: 100</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="group-select">
                                            <div class="nice-select" tabindex="0"><span class="current">Default order</span>
                                                <ul class="list style">                                                          
                                                  <li data-value class="option selected">Default order</li>
                                                  <li data-value="by-latest" class="option">All </li>
                                                  <li data-value="low-to-high" class="option">Low to high</li>
                                                  <li data-value="high-to-low" class="option">High to low</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap-item flex ">
                        <!-- col 16 -->
                        <?php
                                foreach ($data_set_cat_pro as $propertyrent) {
                                ?>
                                <div class="box box-dream hv-one style-dream">
                                    <div class="image-group relative ">
                                        <span class="featured fs-12 fw-6">Featured</span>  
                                        <span class="featured style fs-12 fw-6">For sale</span>   
                                        <!-- <span class="icon-bookmark"><i class="far fa-bookmark"></i></span>  -->
                                        <div class="swiper-container noo carousel-2 img-style" >    
                                            <a href="property-detail-v1.html" class="icon-plus"><img src="<?php echo base_url(); ?>assets/images/icon/plus.svg" alt="images"></a>
                                            <div class="swiper-wrapper ">
                                                <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG1 ?>" alt="images"></div>
                                                <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG2 ?>" alt="images"></div>
                                                <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG3 ?>" alt="images"></div>
                                                <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG4 ?>" alt="images"></div>
                                                <div class="swiper-slide"><img src="<?php echo base_url(); ?>assets/Ad_Images/Property/<?php echo $propertyrent->IMG5 ?>" alt="images"></div>
                                            </div>
                                            <div class="pagi2"><div class="swiper-pagination2">  </div> </div>
                                            <div class="swiper-button-next2 "><i class="fal fa-arrow-right"></i></div>
                                            <div class="swiper-button-prev2 "><i class="fal fa-arrow-left"></i> </div>                                        
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3 class="link-style-1"><a href="#"><?php echo $propertyrent->Ad_Name ?></a> </h3>
                                        <div class="text-address"><p class="p-12"><?php echo $propertyrent->Land_address ?></p></div>
                                        <div class="money fs-18 fw-6 text-color-3"><a href="#"><?php echo $propertyrent->Price ?></a></div>  
                                        <div class="icon-box flex">
                                            <!-- <div class="icons icon-1 flex"><span>Beds: </span><span class="fw-6">4</span></div>
                                            <div class="icons icon-2 flex"><span>Baths: </span><span class="fw-6">2</span></div> -->
                                            <div class="icons icon-3 flex"><span>Sqft: </span><span class="fw-6"> <?php echo $propertyrent->Land_Size ?></span></div>
                                        </div>   
                                        <!-- <div class="days-box flex justify-space align-center">
                                            <a class="compare flex align-center fw-6" href="#">Compare</a>
                                            <div class="img-author hv-tool" data-tooltip="Kathryn Murphy"><img src="assets/images/author/author-19.jpg" alt="images"></div>
                                            <div class="days">3 years ago</div>
                                        </div>                                            -->
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="themesflat-pagination clearfix center style">
                                <ul>
                                    <li><a href="#" class="page-numbers style"><i class="far fa-angle-left"></i></a></li>
                                    <li><a href="#" class="page-numbers">1</a></li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers current">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">...</a></li>
                                    <li><a href="#" class="page-numbers style"><i class="far fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>


            <section class="flat-contact2 relative" >
                <div class="container">
                    <div class="row">                      
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h2>Find for your dream home and increase your investment opportunities</h2>
                                <p class="text-color-2 font-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed tristique metus proin id lorem odio</p>
                                <div class="button-footer">
                                    <a class="sc-button center btn-icon" href="contact.html">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>                               
                                        <span>Contact Seller</span>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="mark-img">
                                <img src="assets/images/mark/mark-contact2.png" alt="images">
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer id="footer" class="clearfix home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="group-icon">
                                <div class="box-icons flex">
                                    <div class="images">
                                        <img src="assets/images/icon/footer-icon-1.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="title-icon fs-30 lh-45 fw-7 text-color-2">You need a house</div>
                                        <p class="font-2 text-color-2">Tell us your needs, we will give you thousands of suggestions for the dream home.</p>
                                    </div>
                                </div>
                                <div class="button-footer center">
                                    <a class="sc-button" href="contact.html">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.25 6.75C2.25 15.034 8.966 21.75 17.25 21.75H19.5C20.0967 21.75 20.669 21.5129 21.091 21.091C21.5129 20.669 21.75 20.0967 21.75 19.5V18.128C21.75 17.612 21.399 17.162 20.898 17.037L16.475 15.931C16.035 15.821 15.573 15.986 15.302 16.348L14.332 17.641C14.05 18.017 13.563 18.183 13.122 18.021C11.4849 17.4191 9.99815 16.4686 8.76478 15.2352C7.53141 14.0018 6.58087 12.5151 5.979 10.878C5.817 10.437 5.983 9.95 6.359 9.668L7.652 8.698C8.015 8.427 8.179 7.964 8.069 7.525L6.963 3.102C6.90214 2.85869 6.76172 2.6427 6.56405 2.48834C6.36638 2.33397 6.1228 2.25008 5.872 2.25H4.5C3.90326 2.25 3.33097 2.48705 2.90901 2.90901C2.48705 3.33097 2.25 3.90326 2.25 4.5V6.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>                               
                                        <span>Contact Seller</span>
                                    </a>
                                </div>  
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="group-icon group-2">
                                <div class="box-icons flex">
                                    <div class="images">
                                        <img src="assets/images/icon/footer-icon-2.png" alt="images">
                                    </div>
                                    <div class="content">
                                        <div class="title-icon fs-30 lh-45 fw-7 text-color-2">Sell your house</div>
                                        <p class="font-2 text-color-2">We will connect you to thousands of people who need to buy a home.</p>
                                    </div>
                                </div>
                                <div class="button-footer center">
                                    <a class="sc-button" href="properties-grid.html">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.25 15.75V15H11.375C10.7547 15 10.25 14.4953 10.25 13.875V12.375C10.25 11.7547 10.7547 11.25 11.375 11.25H11.75V10.5H13.25V11.25H14C14.1989 11.25 14.3897 11.329 14.5303 11.4697C14.671 11.6103 14.75 11.8011 14.75 12C14.75 12.1989 14.671 12.3897 14.5303 12.5303C14.3897 12.671 14.1989 12.75 14 12.75H11.75V13.5H13.625C14.2453 13.5 14.75 14.0047 14.75 14.625V16.125C14.75 16.7453 14.2453 17.25 13.625 17.25H13.25V18H11.75V17.25H11C10.8011 17.25 10.6103 17.171 10.4697 17.0303C10.329 16.8897 10.25 16.6989 10.25 16.5C10.25 16.3011 10.329 16.1103 10.4697 15.9697C10.6103 15.829 10.8011 15.75 11 15.75H13.25Z" fill="white"/>
                                            <path d="M22.469 10.6447L14.315 2.96925C13.8234 2.50736 13.1742 2.25024 12.4996 2.25024C11.825 2.25024 11.1759 2.50736 10.6842 2.96925L8.74998 4.791V3C8.74998 2.80109 8.67096 2.61032 8.53031 2.46967C8.38966 2.32902 8.19889 2.25 7.99998 2.25H4.99998C4.80107 2.25 4.6103 2.32902 4.46965 2.46967C4.329 2.61032 4.24998 2.80109 4.24998 3V9.027L2.55273 10.6252C2.03748 11.0722 1.86348 11.784 2.10798 12.4387C2.34873 13.0837 2.93823 13.5 3.60948 13.5H4.24998V21C4.24998 21.1989 4.329 21.3897 4.46965 21.5303C4.6103 21.671 4.80107 21.75 4.99998 21.75H20C20.1989 21.75 20.3897 21.671 20.5303 21.5303C20.671 21.3897 20.75 21.1989 20.75 21V13.5H21.389C22.061 13.5 22.6512 13.083 22.892 12.438C23.1357 11.7832 22.961 11.0715 22.469 10.6447ZM5.74998 3.75H7.24998V6.2025L5.74998 7.61475V3.75ZM21.4865 11.9138C21.4542 12 21.4047 12 21.389 12H20C19.8011 12 19.6103 12.079 19.4697 12.2197C19.329 12.3603 19.25 12.5511 19.25 12.75V20.25H5.74998V12.75C5.74998 12.5511 5.67096 12.3603 5.53031 12.2197C5.38966 12.079 5.19889 12 4.99998 12H3.60948C3.59373 12 3.54498 12 3.51273 11.9138C3.50022 11.8834 3.49792 11.8498 3.50617 11.818C3.51442 11.7862 3.53278 11.7579 3.55848 11.7375L11.7125 4.062C11.9257 3.86178 12.2071 3.75032 12.4996 3.75032C12.7921 3.75032 13.0735 3.86178 13.2867 4.062L21.4625 11.7578C21.5187 11.8058 21.4977 11.883 21.4865 11.9138Z" fill="white"/>
                                        </svg>
                                        <span>Sell Property</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-info">
                                <h3>Office Address</h3>
                                <p class="sub-title">Head office:</p>
                                <h5 class="text-color-1">2118 Thornridge Cir. Syracuse, Connecticut 35624</h5>
                                <p class="sub-title">Branch:</p>
                                <p class="text-1 text-color-8">3891 Ranchview Dr. Richardson, California 62639</p>
                                <p class="text-2 text-color-8">3517 W. Gray St. Utica, Pennsylvania 57867</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-menu style-2">
                                <h3>Contact Seller</h3>                       
                                <div class="box-icon flex align-center justify-space">
                                    <div class="img-group flex align-center">
                                        <div class="images flex-none">
                                            <img src="assets/images/author/author-footer.jpg" alt="images">
                                        </div>
                                        <div class="content">
                                            <p>Darrell Steward</p>
                                            <a href="tel:012345678"><h5>(405) 555-0128</h5></a>
                                        </div>
                                    </div>
                                    <a href="#" class="button-author"><i class="far fa-chevron-right"></i></a>
                                </div>
                                <div class="box-icon flex align-center">
                                    <div class="icon flex-none">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26135 17.3176L10.3744 14.2041C10.8085 13.7699 11.3522 13.5664 11.9646 13.6085C12.577 13.6507 13.0877 13.9271 13.4581 14.4166L18.0679 20.5097C18.6893 21.331 18.611 22.4676 17.8827 23.1959L15.7252 25.3537C19.0452 28.1764 21.8211 30.9536 24.6433 34.2735L26.8013 32.1152C27.5296 31.3868 28.666 31.3086 29.4872 31.9301L35.5794 36.5405C36.0689 36.9109 36.3452 37.4216 36.3874 38.0341C36.4296 38.6466 36.226 39.1904 35.7919 39.6245L32.6783 42.7385C25.5089 49.909 0.0917082 24.4882 7.26135 17.3176ZM33.8537 6C39.4572 6 43.9997 10.2467 43.9997 15.4854C43.9997 20.724 39.4572 24.9707 33.8537 24.9707C31.9295 24.9707 30.1305 24.4699 28.5975 23.6002C27.3492 24.1528 26.0098 24.3125 24.728 24.123C25.208 23.2144 25.5656 22.2462 25.7915 21.2437C24.4847 19.647 23.7077 17.6511 23.7077 15.4854C23.7077 10.2467 28.2502 6 33.8537 6Z" stroke="white" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M33.8308 20.0552V14.4344H32.5506M32.4907 20.1123H35.171M33.8308 10.7305V10.7595" stroke="white" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <p>Hotline:</p>
                                        <a href="tel:012345678"><h5>(201) 555-0124</h5></a>
                                    </div>
                                </div>
                                <div class="box-icon flex align-center">
                                    <div class="icon flex-none">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.3">
                                            <mask id="mask0_2290_9114" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="6" width="39" height="38">
                                            <path d="M43.5001 43.5V6.49987H6.5V43.5H43.5001Z" fill="white" stroke="white"/>
                                            </mask>
                                            <g mask="url(#mask0_2290_9114)">
                                            <path d="M27.1876 21.5002C27.1876 23.3585 26.0473 24.75 24.6819 24.75C23.3166 24.75 22.1093 23.3778 22.1093 21.5195C22.1093 19.6614 23.3837 18.4233 24.7491 18.4233C26.1143 18.4233 27.1876 19.6421 27.1876 21.5002Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M24.868 27.8945C22.1524 27.8194 19.6763 25.9815 18.9411 23.1859C18.0924 19.9591 19.9485 16.5889 23.1278 15.5769C26.4903 14.5065 30.0664 16.3982 31.0824 19.7644C31.4419 21.1114 31.2321 22.2832 30.7557 23.481C30.5668 23.956 29.9439 25.0679 28.5581 25.0679C27.8016 25.0679 27.1708 24.3429 27.175 23.5078L27.2024 17.9739" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M31.0829 19.7649C31.4424 21.1118 31.2326 22.2836 30.7562 23.4814" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M30.366 11.5664L24.9999 7.11327L19.6339 11.5664" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.3828 17.5839L7.11328 21.957V42.8867H42.8868V21.957L37.6173 17.5839" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M25 33.0898L37.6173 25.2368V11.5663H12.3828V25.2368L25 33.0898Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M42.8868 21.957L25.0001 33.0898L7.11328 21.957V42.8867H42.8868V21.957Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            </g>
                                        </svg>                                     
                                    </div>
                                    <div class="content">
                                        <p>Email:</p>
                                        <a href="https://themesflat.co/cdn-cgi/l/email-protection#2c7e494d40495f584d58494f5c6c4b414d4540024f4341"><h5 class="fw-4 text-color-8"><span class="__cf_email__" data-cfemail="2d7f484c41485e594c59484e5d6d4a404c4441034e4240">[email&#160;protected]</span></h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-menu style-3 ">
                                <h3>Our Company</h3>   
                                <ul class="box-menu">
                                    <li><a href="properties-list.html">Property For Sale</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="agents.html">Our Agents</a></li>
                                    <li><a href="portfolio.html">FAQ</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>  
                                    <li><a href="contact.html">Contact Us</a></li>               
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-menu widget-form">
                                <h3>Newsletter</h3>  
                                <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                    <p class="font-2 text-color-8">Sign up to receive the latest articles</p>  
                                    <div class="text-wrap clearfix">
                                        <fieldset class="email-wrap style-text">
                                            <input type="email" class="tb-my-input" name="email" placeholder="Your email address" required="">
                                        </fieldset>                                 
                                    </div>
                                    <button name="submit" type="submit" class="button btn-submit-comment btn-1 btn-8">
                                        <span>Sign Up</span>
                                    </button>
                                    <label class="flex">
                                        <input type="checkbox">
                                        <span class="btn-checkbox flex-two"></span>
                                        <span class="fs-12 text-color-8 lh-18">I have read and agree to the terms & conditions</span>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- /#footer -->

            <div class="widget-logo-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-logo flex align-center justify-space">
                                <div class="logo-footer style box-1" id="logo-footer">
                                    <a href="index.html">
                                        <img src="assets/images/logo/logo-footer%402x.png" alt="img" width="197" height="48">
                                    </a>
                                </div>
                                <div class="box-menu box-2">
                                    <ul class="menu-bottom flex align-center fs-16 fw-6">
                                        <li><a href="index.html">Home</a> </li>
                                        <li><a href="properties-grid.html">Property</a> </li>
                                        <li><a href="agents.html">Agents</a> </li>
                                        <li><a href="blog.html">Blog</a> </li>
                                        <li><a href="contact.html">Contact</a> </li>
                                    </ul>
                                </div>
                                <div class="icon-social box-3 text-color-1">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>                            
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget-bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-bottom center"> Copyright © 2023. Designed & Developed by <a href="https://themeforest.net/user/themesflat/portfolio" class="text-color-1">Themesflat.</a> </div>
                        </div>
                    </div>
                </div>
            </div>
           
        <!-- Bottom -->
        </div>
        <!-- /#page -->

    </div>

    <!-- Modal Popup Bid -->

    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <div class="wrap-modal flex">
                        <div class="images flex-none">
                            <img src="assets/images/section/bg-login.jpg" alt="images">
                            <div class="mark-logo">
                                <img src="assets/images/logo/logo2.png" alt="images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="title-login fs-30 fw-7 lh-45">Login</div>
                            <div class="comments">
                                <div class="respond-comment">
                                    <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                        <fieldset class="">
                                            <label class="fw-6">Account</label>
                                            <input type="email" id="email" class="tb-my-input" name="email" placeholder="Email or user name" >
                                            <img class="img-icon img-email" src="assets/images/icon/icon-gmail.svg" alt="images">
                                        </fieldset>   
                                        <fieldset class="style-wrap">
                                            <label class="fw-6">Password</label>
                                            <input type="password" class="input-form password-input" placeholder="Your password" >
                                            <img class="img-icon" src="assets/images/icon/icon-password.svg" alt="images">
                                        </fieldset> 
                                        <div class="title-forgot"><a class="fs-13" >Forgot password</a> </div>                                    
                                        <button class="sc-button"  name="submit" type="submit">
                                            <span>Login</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-box text-center fs-13">Don’t you have an account?  <a class="font-2 fw-7 fs-13 color-popup text-color-3" data-toggle="modal" data-target="#popup_bid2" data-dismiss="modal" aria-label="Close">Register</a></div>
                            <p class="texts fs-13 text-center">or login with</p>
                            <div class="button-box flex">
                                <a href="#" class="flex align-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z" fill="#FBBB00"/>
                                        <path d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z" fill="#518EF8"/>
                                        <path d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z" fill="#28B446"/>
                                        <path d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z" fill="#F14336"/>
                                    </svg>
                                    <span class="fw-6">Google</span> 
                                </a>
                                <a href="#" class="flex align-center">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z" fill="#1877F2"/>
                                        <path d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z" fill="white"/>
                                    </svg>
                                    <span class="fw-6">Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>

    <div class="modal fade popup " id="popup_bid2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40 style2">
                    <div class="wrap-modal flex">
                        <div class="images flex-none relative">
                            <img src="assets/images/section/bg-register.jpg" alt="images">
                            <div class="mark-logo">
                                <img src="assets/images/logo/logo2.png" alt="images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="title-login fs-30 fw-7 lh-45">Register</div>
                            <div class="comments">
                                <div class="respond-comment">
                                    <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8"  novalidate="novalidate" >

                                        <fieldset class="">
                                            <label class="fw-6">User name</label>
                                            <input type="text" class="tb-my-input" name="text" placeholder="User name" >
                                            <img class="img-icon img-name" src="assets/images/icon/login-user.svg" alt="images">
                                        </fieldset>   
                                        <fieldset class="t">
                                            <label class="fw-6">Email</label>
                                            <input type="email"  class="tb-my-input" name="email" placeholder="Email" >
                                            <img class="img-icon" src="assets/images/icon/icon-gmail.svg" alt="images">
                                        </fieldset> 
                                        <fieldset class="">
                                            <label class="fw-6">Password</label>
                                            <input type="password" class="input-form password-input" placeholder="Your password" >
                                            <img class="img-icon" src="assets/images/icon/icon-password.svg" alt="images">
                                        </fieldset> 
                                        <fieldset class="">
                                            <label class="fw-6">Confirm password</label>
                                            <input type="password" class="input-form password-input" placeholder="Confirm password" >
                                            <img class="img-icon" src="assets/images/icon/icon-password.svg" alt="images">
                                        </fieldset>                                   
                                        <button class="sc-button"  name="submit" type="submit">
                                            <span>Sign Up</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="text-box text-center fs-13">Allready have an account? <a class="font-2 fw-7 fs-13 color-popup text-color-3" data-toggle="modal" data-target="#popup_bid" data-dismiss="modal" aria-label="Close">Login</a></div>
                            <p class="texts fs-13 text-center">or Register with</p>
                            <div class="button-box flex">
                                <a href="#" class="flex align-center">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.43242 12.5863L3.73625 15.1852L1.19176 15.239C0.431328 13.8286 0 12.2149 0 10.5C0 8.84179 0.403281 7.27804 1.11812 5.90112H1.11867L3.38398 6.31644L4.37633 8.56815C4.16863 9.17366 4.05543 9.82366 4.05543 10.5C4.05551 11.2341 4.18848 11.9374 4.43242 12.5863Z" fill="#FBBB00"/>
                                        <path d="M19.8242 8.6319C19.939 9.23682 19.9989 9.86155 19.9989 10.5C19.9989 11.216 19.9236 11.9143 19.7802 12.588C19.2934 14.8803 18.0214 16.8819 16.2594 18.2984L16.2588 18.2978L13.4055 18.1522L13.0017 15.6314C14.1709 14.9456 15.0847 13.8726 15.566 12.588H10.2188V8.6319H19.8242Z" fill="#518EF8"/>
                                        <path d="M16.2595 18.2978L16.2601 18.2984C14.5464 19.6758 12.3694 20.5 9.99965 20.5C6.19141 20.5 2.88043 18.3715 1.19141 15.239L4.43207 12.5863C5.27656 14.8401 7.45074 16.4445 9.99965 16.4445C11.0952 16.4445 12.1216 16.1484 13.0024 15.6313L16.2595 18.2978Z" fill="#28B446"/>
                                        <path d="M16.382 2.80219L13.1425 5.45437C12.2309 4.88461 11.1534 4.55547 9.99906 4.55547C7.39246 4.55547 5.17762 6.23348 4.37543 8.56812L1.11773 5.90109H1.11719C2.78148 2.6923 6.13422 0.5 9.99906 0.5C12.4254 0.5 14.6502 1.3643 16.382 2.80219Z" fill="#F14336"/>
                                    </svg>
                                    <span class="fw-6">Google</span> 
                                </a>
                                <a href="#" class="flex align-center">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.5 10.5C20.5 15.4914 16.843 19.6285 12.0625 20.3785V13.3906H14.3926L14.8359 10.5H12.0625V8.62422C12.0625 7.8332 12.45 7.0625 13.6922 7.0625H14.9531V4.60156C14.9531 4.60156 13.8086 4.40625 12.7145 4.40625C10.4305 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C4.15703 19.6285 0.5 15.4914 0.5 10.5C0.5 4.97734 4.97734 0.5 10.5 0.5C16.0227 0.5 20.5 4.97734 20.5 10.5Z" fill="#1877F2"/>
                                        <path d="M14.3926 13.3906L14.8359 10.5H12.0625V8.62418C12.0625 7.83336 12.4499 7.0625 13.6921 7.0625H14.9531V4.60156C14.9531 4.60156 13.8088 4.40625 12.7146 4.40625C10.4304 4.40625 8.9375 5.79063 8.9375 8.29688V10.5H6.39844V13.3906H8.9375V20.3785C9.44664 20.4584 9.96844 20.5 10.5 20.5C11.0316 20.5 11.5534 20.4584 12.0625 20.3785V13.3906H14.3926Z" fill="white"/>
                                    </svg>
                                    <span class="fw-6">Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>

    <a id="scroll-top" class="button-go"></a>

    <!-- Javascript -->
 
    <script data-cfasync="false" src="<?php echo base_url(); ?>../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url(); ?>app/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>app/js/jquery.easing.js"></script>
    <script src="<?php echo base_url(); ?>app/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>app/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>app/js/owl.js"></script>
    <script src="<?php echo base_url(); ?>app/js/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>app/js/swiper.js"></script>

    <script src="<?php echo base_url(); ?>app/js/plugin.js"></script>
    <script src="<?php echo base_url(); ?>app/js/shortcodes.js"></script>
    <script src="<?php echo base_url(); ?>app/js/main.js"></script>
    <script src="<?php echo base_url(); ?>app/js/price-ranger.js"></script>

</body>

</html>