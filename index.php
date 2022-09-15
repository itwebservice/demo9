<?php

include 'config.php';



$service = $_GET['service'];

global $app_contact_no;

//Include header

include 'layouts/header.php';

$date = date('m-d-Y');

$date1 = str_replace('-', '/', $date);

?>

<!-- Landing Section Start -->
<section class="landing-section">
    <div class="landing-content">
        <div class="landing-slider">

            <div class="landing-slider-item">
                <div class="landing-slider-img">
                    <img src="images/landing_1.jpg" alt="" class="img-fluid">
                    <div class="landing-slider-details">
                        <h2 class="landing-slider-title animated fadeInDown">Where Do You Want To Go?</h2>
                        <p class="landing-slider-discription animated fadeInUp">Experience the various exciting tour and travel packages and Make hotel reservations, find vacation packages, search cheap hotels and events<br class="d-none d-lg-block"> find vacation packages, search cheap hotels and events</p>
                        <a href="#" class="btn landing-slider-btn animated fadeInUp">Read More</a>
                    </div>
                </div>
            </div>
            <div class="landing-slider-item">
                <div class="landing-slider-img">
                    <img src="images/landing_3.jpg" alt="" class="img-fluid">
                    <div class="landing-slider-details">
                        <h2 class="landing-slider-title animated zoomIn">We Make Awesome Tour</h2>
                        <p class="landing-slider-discription animated zoomIn">Find Best deals for Tour Packages, Hotels, Holidays, Flights world wide. <br class="d-none d-lg-block"> Visit these top destinations.</p>
                        <a href="#" class="btn landing-slider-btn animated zoomIn">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="landing-slider-item">
                <div class="landing-slider-img">
                    <img src="images/landing_2.jpg" alt="" class="img-fluid">
                    <div class="landing-slider-details">
                        <h2 class="landing-slider-title animated fadeInLeft">Find Your Tour Today</h2>
                        <p class="landing-slider-discription animated fadeInLeft">Explore popular domestic & international destinations with our company.</p>
                        <a href="#" class="btn btn-info landing-slider-btn animated fadeInLeft">Find a tour</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Services Section Start -->
<section class="service-section section-padding">
    <div class="home-container container">
        <div class="services-content">
            <div class="services-heading section-heading">
                <h2 class="services-main-title section-title">Services</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="services-list animated fadeInUp">
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="services-item">
                            <div class="service-item-img">
                                <i class="fa-solid fa-train"></i>
                            </div>
                            <div class="services-item-body">
                                <h5 class="service-item-name card-title">Rail Booking</h5>
                                <p class="services-item-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="services-item">
                            <div class="service-item-img">
                                <i class="fa-solid fa-bed"></i>
                            </div>
                            <div class="services-item-body">
                                <h5 class="service-item-name card-title">HOTEL BOOKING</h5>
                                <p class="services-item-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="services-item">
                            <div class="service-item-img services-img-rotate">
                                <i class="fa-solid fa-plane"></i>
                            </div>
                            <div class="services-item-body">
                                <h5 class="service-item-name card-title">FLIGHT BOOKING</h5>
                                <p class="services-item-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="services-item">
                            <div class="service-item-img services-img-rotate">
                                <i class="fa-solid fa-ticket"></i>
                            </div>
                            <div class="services-item-body">
                                <h5 class="service-item-name card-title">TICKET BOOKING</h5>
                                <p class="services-item-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="services-item">
                            <div class="service-item-img">
                                <i class="fa-solid fa-ship"></i>
                            </div>
                            <div class="services-item-body">
                                <h5 class="service-item-name card-title">CRUISES BOOKING</h5>
                                <p class="services-item-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="services-item">
                            <div class="service-item-img">
                                <i class="fa-solid fa-house-chimney"></i>
                            </div>
                            <div class="services-item-body">
                                <h5 class="service-item-name card-title">AMAZING TOUR</h5>
                                <p class="services-item-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Packages Section Start -->
<section class="Packages-section section-padding section-bg-color">
    <div class="home-container container">
        <div class="Packages-content">
            <div class="services-heading section-heading">
                <h2 class="services-main-title section-title">Special Packages</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="package-card-list animated fadeInUp">
                <div class="row justify-content-around">
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="Packages-card">
                            <a href="#">
                                <div class="package-card-img">
                                    <img src="images/package_1.jpg" alt="" class="img-fluid">
                                    <div class="package-card-duraction">
                                        <p class="mb-0">
                                            5 days <br> 4 nights
                                        </p>
                                    </div>
                                </div>
                                <div class="package-card-body">
                                    <h5 class="package-card-title card-title">Australia</h5>
                                    <p class="package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                    <div class="package-card-footer">
                                        <div class="package-card-review">
                                            <span class="package-review-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="package-review-rating"> - 100 review</span>
                                        </div>
                                        <div class="package-card-price">
                                            <h5 class="mb-0">$1400</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="Packages-card">
                            <a href="#">
                                <div class="package-card-img">
                                    <img src="images/package_2.jpg" alt="" class="img-fluid">
                                    <div class="package-card-duraction">
                                        <p class="mb-0">
                                            5 days <br> 4 nights
                                        </p>
                                    </div>
                                </div>
                                <div class="package-card-body">
                                    <h5 class="package-card-title card-title">France</h5>
                                    <p class="package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                    <div class="package-card-footer">
                                        <div class="package-card-review">
                                            <span class="package-review-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </span>
                                            <span class="package-review-rating"> - 190 review</span>
                                        </div>
                                        <div class="package-card-price">
                                            <h5 class="mb-0">$1500</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="Packages-card">
                            <a href="#">
                                <div class="package-card-img">
                                    <img src="images/package_3.jpg" alt="" class="img-fluid">
                                    <div class="package-card-duraction">
                                        <p class="mb-0">
                                            5 days <br> 4 nights
                                        </p>
                                    </div>
                                </div>
                                <div class="package-card-body">
                                    <h5 class="package-card-title card-title">Germany</h5>
                                    <p class="package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                    <div class="package-card-footer">
                                        <div class="package-card-review">
                                            <span class="package-review-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </span>
                                            <span class="package-review-rating"> - 120 review</span>
                                        </div>
                                        <div class="package-card-price">
                                            <h5 class="mb-0">$1300</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="Packages-card">
                            <a href="#">
                                <div class="package-card-img">
                                    <img src="images/package_4.jpg" alt="" class="img-fluid">
                                    <div class="package-card-duraction">
                                        <p class="mb-0">
                                            5 days <br> 4 nights
                                        </p>
                                    </div>
                                </div>
                                <div class="package-card-body">
                                    <h5 class="package-card-title card-title">Lorem Ipsum</h5>
                                    <p class="package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                    <div class="package-card-footer">
                                        <div class="package-card-review">
                                            <span class="package-review-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="package-review-rating"> - 90 review</span>
                                        </div>
                                        <div class="package-card-price">
                                            <h5 class="mb-0">$1200</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="Packages-card">
                            <a href="#">
                                <div class="package-card-img">
                                    <img src="images/package_5.jpg" alt="" class="img-fluid">
                                    <div class="package-card-duraction">
                                        <p class="mb-0">
                                            5 days <br> 4 nights
                                        </p>
                                    </div>
                                </div>
                                <div class="package-card-body">
                                    <h5 class="package-card-title card-title">Lorem Ipsum</h5>
                                    <p class="package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                    <div class="package-card-footer">
                                        <div class="package-card-review">
                                            <span class="package-review-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </span>
                                            <span class="package-review-rating"> - 160 review</span>
                                        </div>
                                        <div class="package-card-price">
                                            <h5 class="mb-0">$1500</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="Packages-card">
                            <a href="#">
                                <div class="package-card-img">
                                    <img src="images/package_6.jpg" alt="" class="img-fluid">
                                    <div class="package-card-duraction">
                                        <p class="mb-0">
                                            5 days <br> 4 nights
                                        </p>
                                    </div>
                                </div>
                                <div class="package-card-body">
                                    <h5 class="package-card-title card-title">Lorem Ipsum</h5>
                                    <p class="package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                    <div class="package-card-footer">
                                        <div class="package-card-review">
                                            <span class="package-review-star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </span>
                                            <span class="package-review-rating"> - 90 review</span>
                                        </div>
                                        <div class="package-card-price">
                                            <h5 class="mb-0">$1800</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Packages Section End -->

<!-- Promotional Section Start -->
<section class="promotional-section section-padding">
    <div class="home-container container">
        <div class="promotinal-content">
            <div class="services-heading section-heading">
                <h2 class="services-main-title section-title">Hot Deals</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0">
        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="promotional-card">
                <div class="promotional-card-img">
                    <img src="images/deals_1.jpg" alt="" class="img-fluid">
                    <div class="promotional-card-overlay">
                        <div class="promotional-card-overlay-inner">
                            <h4 class="promotional-card-title">Promotional Tour</h4>
                            <p class="promotional-card-discription card-discription"><em>Australia, Air/3 Nights</em></p>
                            <a href="#" class="btn btn-info promotion-card-btn landing-slider-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="promotional-card">
                <div class="promotional-card-img">
                    <img src="images/deals_2.jpg" alt="" class="img-fluid">
                    <div class="promotional-card-overlay">
                        <div class="promotional-card-overlay-inner">
                            <h4 class="promotional-card-title">Promotional Tour</h4>
                            <p class="promotional-card-discription card-discription"><em>Australia, Air/3 Nights</em></p>
                            <a href="#" class="btn btn-info promotion-card-btn landing-slider-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="promotional-card">
                <div class="promotional-card-img">
                    <img src="images/deals_3.jpg" alt="" class="img-fluid">
                    <div class="promotional-card-overlay">
                        <div class="promotional-card-overlay-inner">
                            <h4 class="promotional-card-title">Promotional Tour</h4>
                            <p class="promotional-card-discription card-discription"><em>Australia, Air/3 Nights</em></p>
                            <a href="#" class="btn btn-info promotion-card-btn landing-slider-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="promotional-card">
                <div class="promotional-card-img">
                    <img src="images/deals_4.jpg" alt="" class="img-fluid">
                    <div class="promotional-card-overlay">
                        <div class="promotional-card-overlay-inner">
                            <h4 class="promotional-card-title">Promotional Tour</h4>
                            <p class="promotional-card-discription card-discription"><em>Australia, Air/3 Nights</em></p>
                            <a href="#" class="btn btn-info promotion-card-btn landing-slider-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="promotional-card">
                <div class="promotional-card-img">
                    <img src="images/deals_5.jpg" alt="" class="img-fluid">
                    <div class="promotional-card-overlay">
                        <div class="promotional-card-overlay-inner">
                            <h4 class="promotional-card-title">Promotional Tour</h4>
                            <p class="promotional-card-discription card-discription"><em>Australia, Air/3 Nights</em></p>
                            <a href="#" class="btn btn-info promotion-card-btn landing-slider-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-12 col-md-4 col-lg-4 col-xl-4 p-0">
            <div class="promotional-card">
                <div class="promotional-card-img">
                    <img src="images/deals_6.jpg" alt="" class="img-fluid">
                    <div class="promotional-card-overlay">
                        <div class="promotional-card-overlay-inner">
                            <h4 class="promotional-card-title">Promotional Tour</h4>
                            <p class="promotional-card-discription card-discription"><em>Australia, Air/3 Nights</em></p>
                            <a href="#" class="btn btn-info promotion-card-btn landing-slider-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promotional Section End -->

<!-- Discounts Section Start -->
<section class="discount-section section-padding section-bg-color">
    <div class="home-container container">
        <div class="discount-content">
            <div class="services-heading section-heading">
                <h2 class="services-main-title section-title">Deals and Discounts</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="discount-slider-list">

                <div class="discount-card">
                    <div class="discount-card-img package-card-img">
                        <img src="images/discount_1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="discount-card-body position-relative">
                        <div class="discount-card-price">
                            <del>$430</del>
                            <span>$380</span>
                        </div>
                        <h5 class="discount-card-title card-title">Surfing</h5>
                        <p class="discount-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                        <div class="discount-card-footer package-card-footer">
                            <a href="#" class="discount-card-more">View Details <i class="fa-solid fa-right-long"></i></a>
                            <div class="discount-card-review package-card-review">
                                <span class="package-review-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discount-card">
                    <div class="discount-card-img package-card-img">
                        <img src="images/discount_2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="discount-card-body position-relative">
                        <div class="discount-card-price">
                            <del>$430</del>
                            <span>$380</span>
                        </div>
                        <h5 class="discount-card-title card-title">Surfing</h5>
                        <p class="discount-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                        <div class="discount-card-footer package-card-footer">
                            <a href="#" class="discount-card-more">View Details <i class="fa-solid fa-right-long"></i></a>
                            <div class="discount-card-review package-card-review">
                                <span class="package-review-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discount-card">
                    <div class="discount-card-img package-card-img">
                        <img src="images/discount_3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="discount-card-body position-relative">
                        <div class="discount-card-price">
                            <del>$430</del>
                            <span>$380</span>
                        </div>
                        <h5 class="discount-card-title card-title">Surfing</h5>
                        <p class="discount-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                        <div class="discount-card-footer package-card-footer">
                            <a href="#" class="discount-card-more">View Details <i class="fa-solid fa-right-long"></i></a>
                            <div class="discount-card-review package-card-review">
                                <span class="package-review-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="discount-card">
                    <div class="discount-card-img package-card-img">
                        <img src="images/discount_1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="discount-card-body position-relative">
                        <div class="discount-card-price">
                            <del>$430</del>
                            <span>$380</span>
                        </div>
                        <h5 class="discount-card-title card-title">Surfing</h5>
                        <p class="discount-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                        <div class="discount-card-footer package-card-footer">
                            <a href="#" class="discount-card-more">View Details <i class="fa-solid fa-right-long"></i></a>
                            <div class="discount-card-review package-card-review">
                                <span class="package-review-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Discounts Section End -->

<!-- Counter Section Start -->
<section class="counter-section section-padding">
    <div class="home-container container">
        <div class="counter-content">
            <div class="row">
                <div class="col col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="counter-item">
                        <div class="counter-img">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="counter-item-body">
                            <h4 class="counter-item-title promotional-card-title">3890</h4>
                            <p class="counter-item-name">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="counter-item">
                        <div class="counter-img">
                            <i class="fa-solid fa-bed"></i>
                        </div>
                        <div class="counter-item-body">
                            <h4 class="counter-item-title promotional-card-title">281</h4>
                            <p class="counter-item-name">Popular Hotels</p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="counter-item">
                        <div class="counter-img">
                            <i class="fa-solid fa-flag-checkered"></i>
                        </div>
                        <div class="counter-item-body">
                            <h4 class="counter-item-title promotional-card-title">618</h4>
                            <p class="counter-item-name">Top Destinations</p>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="counter-item">
                        <div class="counter-img">
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <div class="counter-item-body">
                            <h4 class="counter-item-title promotional-card-title">178</h4>
                            <p class="counter-item-name">Cruises</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!-- Gallery Section Start -->
<section class="gallery-section section-padding">
    <div class="home-container container">
        <div class="services-heading section-heading">
            <h2 class="services-main-title section-title">Gallery</h2>
            <div class="services-heading-img section-title-style text-center">
                <img src="images/service_title_style.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="gallery-content">

        <ul class="gallery-filter-menu">
            <li data-target="all" class="gallery-filter-menu-link active">
                All
            </li>
            <li data-target="tours" class="gallery-filter-menu-link">
                tours
            </li>
            <li data-target="flights" class="gallery-filter-menu-link">
                flights
            </li>
            <li data-target="cruises" class="gallery-filter-menu-link">
                cruises
            </li>
            <li data-target="hotels" class="gallery-filter-menu-link">
                hotels
            </li>
        </ul>

        <ul class="gallery-filter-list">
            <li data-item="tours" class="gallery-filter-item">
                <img src="images/gallery_1.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="flights" class="gallery-filter-item">
                <img src="images/gallery_2.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="cruises" class="gallery-filter-item">
                <img src="images/gallery_3.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="hotels" class="gallery-filter-item">
                <img src="images/gallery_4.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="tours" class="gallery-filter-item">
                <img src="images/gallery_5.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="flights" class="gallery-filter-item">
                <img src="images/gallery_6.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="cruises" class="gallery-filter-item">
                <img src="images/gallery_7.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="tours" class="gallery-filter-item">
                <img src="images/gallery_8.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
            <li data-item="cruises" class="gallery-filter-item">
                <img src="images/gallery_9.jpg" alt="" class="img-fluid">
                <div class="promotional-card-overlay">
                    <div class="promotional-card-overlay-inner">
                        <h4 class="gallery-filter-title promotional-card-title">Gallery Title</h4>
                        <a href="#" class="btn gallery-filter-camera promotion-card-btn landing-slider-btn"><i class="fa-solid fa-camera"></i></a>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</section>
<!-- Gallery Section End -->

<!-- Recent Section Start -->
<section class="recent-sectiom section-padding section-bg-color">
    <div class="home-container container">
        <div class="recent-content">
            <div class="services-heading section-heading">
                <h2 class="services-main-title section-title">RECENT POSTS</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="recent-card Packages-card">
                        <div class="recent-card-img package-card-img">
                            <img src="images/post_1.jpg" alt="" class="img-fluid">
                            <a href="#" class="recent-card-link package-card-duraction"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <div class="recent-card-body package-card-body">
                            <h5 class="recent-card-title package-card-title card-title">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="recent-card-discription package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            <div class="recent-card-footer package-card-footer">
                                <div class="recent-card-calendar package-card-price">
                                    <h5 class="mb-0"><i class="fa-regular fa-calendar-days"></i> 14 March 2016</h5>
                                </div>
                                <div class="recent-crad-comment">
                                    <a href="#"><i class="fa-regular fa-comment"></i> 12</a>
                                </div>
                                <div class="recent-card-review package-card-review">
                                    <span class="recent-review-star package-review-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="recent-card Packages-card">
                        <div class="recent-card-img package-card-img">
                            <img src="images/post_2.jpg" alt="" class="img-fluid">
                            <a href="#" class="recent-card-link package-card-duraction"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <div class="recent-card-body package-card-body">
                            <h5 class="recent-card-title package-card-title card-title">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="recent-card-discription package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            <div class="recent-card-footer package-card-footer">
                                <div class="recent-card-calendar package-card-price">
                                    <h5 class="mb-0"><i class="fa-regular fa-calendar-days"></i> 14 March 2016</h5>
                                </div>
                                <div class="recent-crad-comment">
                                    <a href="#"><i class="fa-regular fa-comment"></i> 12</a>
                                </div>
                                <div class="recent-card-review package-card-review">
                                    <span class="recent-review-star package-review-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="recent-card Packages-card">
                        <div class="recent-card-img package-card-img">
                            <img src="images/post_3.jpg" alt="" class="img-fluid">
                            <a href="#" class="recent-card-link package-card-duraction"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <div class="recent-card-body package-card-body">
                            <h5 class="recent-card-title package-card-title card-title">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="recent-card-discription package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            <div class="recent-card-footer package-card-footer">
                                <div class="recent-card-calendar package-card-price">
                                    <h5 class="mb-0"><i class="fa-regular fa-calendar-days"></i> 14 March 2016</h5>
                                </div>
                                <div class="recent-crad-comment">
                                    <a href="#"><i class="fa-regular fa-comment"></i> 12</a>
                                </div>
                                <div class="recent-card-review package-card-review">
                                    <span class="recent-review-star package-review-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="recent-card Packages-card">
                        <div class="recent-card-img package-card-img">
                            <img src="images/post_4.jpg" alt="" class="img-fluid">
                            <a href="#" class="recent-card-link package-card-duraction"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <div class="recent-card-body package-card-body">
                            <h5 class="recent-card-title package-card-title card-title">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="recent-card-discription package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            <div class="recent-card-footer package-card-footer">
                                <div class="recent-card-calendar package-card-price">
                                    <h5 class="mb-0"><i class="fa-regular fa-calendar-days"></i> 14 March 2016</h5>
                                </div>
                                <div class="recent-crad-comment">
                                    <a href="#"><i class="fa-regular fa-comment"></i> 12</a>
                                </div>
                                <div class="recent-card-review package-card-review">
                                    <span class="recent-review-star package-review-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="recent-card Packages-card">
                        <div class="recent-card-img package-card-img">
                            <img src="images/post_5.jpg" alt="" class="img-fluid">
                            <a href="#" class="recent-card-link package-card-duraction"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <div class="recent-card-body package-card-body">
                            <h5 class="recent-card-title package-card-title card-title">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="recent-card-discription package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            <div class="recent-card-footer package-card-footer">
                                <div class="recent-card-calendar package-card-price">
                                    <h5 class="mb-0"><i class="fa-regular fa-calendar-days"></i> 14 March 2016</h5>
                                </div>
                                <div class="recent-crad-comment">
                                    <a href="#"><i class="fa-regular fa-comment"></i> 12</a>
                                </div>
                                <div class="recent-card-review package-card-review">
                                    <span class="recent-review-star package-review-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="recent-card Packages-card">
                        <div class="recent-card-img package-card-img">
                            <img src="images/post_6.jpg" alt="" class="img-fluid">
                            <a href="#" class="recent-card-link package-card-duraction"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <div class="recent-card-body package-card-body">
                            <h5 class="recent-card-title package-card-title card-title">LOREM IPSUM DOLOR SIT AMET</h5>
                            <p class="recent-card-discription package-card-discription card-discription">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                            <div class="recent-card-footer package-card-footer">
                                <div class="recent-card-calendar package-card-price">
                                    <h5 class="mb-0"><i class="fa-regular fa-calendar-days"></i> 14 March 2016</h5>
                                </div>
                                <div class="recent-crad-comment">
                                    <a href="#"><i class="fa-regular fa-comment"></i> 12</a>
                                </div>
                                <div class="recent-card-review package-card-review">
                                    <span class="recent-review-star package-review-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent Section End -->

<!-- Testimonial Section Start -->
<section class="testimonial-section section-padding">
    <div class="home-container container">
        <div class="testimonial-content">
            <div class="services-heading section-heading">
                <h2 class="services-main-title section-title">What our clients say?</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="testimonial-slider-list">

                        <div class="testimonial-slider-item text-center">
                            <div class="testimonial-to-style">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <p class="testimonial-slider-discription card-discription">Desirous of doing a Jain pilgrimage tour of Uttar Pradesh which has many important Jain temples, I wrote to four tour operators. But only Tour My India replied positively. It was a first for them too, but they took up the challenge and worked out a plan for me.</p>
                            <h5 class="testimonial-company-name">Philip Josep - <strong>Company Name</strong></h5>
                            <div class="testimonial-slider-img">
                                <img src="images/testimonial_1.png" alt="" class="img-fluid rounded-circle">
                            </div>
                        </div>
                        <div class="testimonial-slider-item text-center">
                            <div class="testimonial-to-style">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <p class="testimonial-slider-discription card-discription">It was a wonderful experience for us. All your arrangements were up to the mark. All hotels and transportation arrangements were excellent. Though we had faced some problems with hotel at Kedarnath you handled it</p>
                            <h5 class="testimonial-company-name">Sonia bill - <strong>Company Name</strong></h5>
                            <div class="testimonial-slider-img">
                                <img src="images/testimonial_1.png" alt="" class="img-fluid rounded-circle">
                            </div>
                        </div>
                        <div class="testimonial-slider-item text-center">
                            <div class="testimonial-to-style">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <p class="testimonial-slider-discription card-discription">Thank you very much for all your assistance for my safe trip to Kedarnath. Your driver Mahesh was excellent. Will contact you again for my future trips.</p>
                            <h5 class="testimonial-company-name">Alvia Josep - <strong>Company Name</strong></h5>
                            <div class="testimonial-slider-img">
                                <img src="images/testimonial_1.png" alt="" class="img-fluid rounded-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Contact Section Start -->
<section class="contact-section section-padding">
    <div class="home-container container">
        <div class="contact-content">
            <div class="services-heading section-heading">
                <h2 class="contact-main-title section-title">Get in touch</h2>
                <div class="services-heading-img section-title-style text-center">
                    <img src="images/service_title_style.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="contact-list">
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-item-address">
                                <p class="contact-link card-discription">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-item-address">
                                <p class="contact-link card-discription">
                                    Phone:+880 1798078632 <br> Fax: 02 9635 0247
                                </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-item-address">
                                <a href="#" class="contact-link card-discription">
                                    info@example.com
                                </a> <br>
                                <a href="#" class="contact-link card-discription">
                                    support@example.com
                                </a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div class="contact-item-address">
                                <p class="contact-link card-discription">
                                    Monday-Friday: 9am - 5pm <br> Saturday: 10am - 2pm <br> Sunday - Closed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-8 col-xl-8">
                    <div class="contact-form">
                        <div class="row">
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="contact-form-input">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-6 col-xl-6">
                                <div class="contact-form-input">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="contact-form-input">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="contact-form-input">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="contact-form-input">
                                    <textarea class="form-control" cols="30" rows="5" placeholder="Write Something"></textarea>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12 col-xl-12">
                                <a href="#" class="btn landing-slider-btn animated zoomIn">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


<a href="#" class="scrollup">Scroll</a>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields

    (function() {

        'use strict';

        window.addEventListener('load', function() {

            // Fetch all the forms we want to apply custom Bootstrap validation styles to

            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission

            var validation = Array.prototype.filter.call(forms, function(form) {

                form.addEventListener('submit', function(event) {

                    if (form.checkValidity() === false) {

                        event.preventDefault();

                        event.stopPropagation();

                    }

                    form.classList.add('was-validated');

                }, false);

            });

        }, false);

    })();
</script>

<?php

include 'layouts/footer.php';

?>

<script type="text/javascript" src="view/hotel/js/index.js"></script>

<script type="text/javascript" src="view/transfer/js/index.js"></script>

<script type="text/javascript" src="view/activities/js/index.js"></script>

<script type="text/javascript" src="view/tours/js/index.js"></script>

<script type="text/javascript" src="view/group_tours/js/index.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>

<script>
    $(document).ready(function() {

        // Landing Slider Start
        $('.landing-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            fade: true,
            cssEase: 'linear',
            arrows: true,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,

        });
        // Landing Slider End


        // Discount Slider Start
        $('.discount-slider-list').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
        // Discount Slider End


        // Number Counter Start
        $('.counter-item-title').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        // Number Counter End



        // Gallery Filter Start
        let sortBtn = document.querySelector('.gallery-filter-menu').children;
        let sortItem = document.querySelector('.gallery-filter-list').children;

        for (let i = 0; i < sortBtn.length; i++) {
            sortBtn[i].addEventListener('click', function() {
                for (let j = 0; j < sortBtn.length; j++) {
                    sortBtn[j].classList.remove('current');
                }

                this.classList.add('current');


                let targetData = this.getAttribute('data-target');

                for (let k = 0; k < sortItem.length; k++) {
                    sortItem[k].classList.remove('active');
                    sortItem[k].classList.add('delete');

                    if (sortItem[k].getAttribute('data-item') == targetData || targetData == "all") {
                        sortItem[k].classList.remove('delete');
                        sortItem[k].classList.add('active');
                    }
                }
            });
        }
        // Gallery Filter End

        $(".gallery-filter-menu-link").click(function() {
            $(".gallery-filter-menu-link").removeClass("active");
            $(this).addClass("active")
        })

        // Testimonial Slider Start
        $('.testimonial-slider-list').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,

        });
        // Testimonial Slider End


        var tomorrow = new Date();

        tomorrow.setDate(tomorrow.getDate() + 10);

        var day = tomorrow.getDate();

        var month = tomorrow.getMonth() + 1

        var year = tomorrow.getFullYear();

        $('#travelDate').datetimepicker({
            timepicker: false,
            format: 'm/d/Y',
            minDate: tomorrow
        });



        $('#checkInDate, #checkOutDate, #checkDate').datetimepicker({
            timepicker: false,
            format: 'm/d/Y',
            minDate: new Date()
        });

        $('#pickup_date').datetimepicker({
            format: 'm/d/Y H:i',
            minDate: new Date()
        });

        document.getElementById('return_date').readOnly = true;



        var service = '<?php echo $service; ?>';

        if (service && (service !== '' || service !== undefined)) {

            var checkLink = $('.c-searchContainer .c-search-tabs li');

            var checkTab = $('.c-searchContainer .search-tab-content .tab-pane');

            checkLink.each(function() {

                var child = $(this).children('.nav-link');

                if (child.data('service') === service) {

                    $(this).siblings().children('.nav-link').removeClass('active');

                    child.addClass('active');

                }

            });

            checkTab.each(function() {

                if ($(this).data('service') === service) {

                    $(this).addClass('active show').siblings().removeClass('active show');

                }

            })

        }



        AOS.init();
    });
</script>