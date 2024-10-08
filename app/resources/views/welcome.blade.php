<!DOCTYPE html>
<html lang="en">



<!-- page wrapper -->
<body>
    @livewire('header')

        <!-- banner-section -->
        <section class="banner-section banner-style-one p_relative">
            <div class="shape">
                <div class="shape-1 p_absolute l_0 b_0 z_2"></div>
                <div class="shape-2 p_absolute l_0 t_0 z_2"></div>
                <div class="shape-3 p_absolute l_0 t_0 z_2"></div>
            </div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute" style="background-image: url('{{ asset('images/banner/banner-1.jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Reliable <span>Power Supply</span> for Every Home</h2>
                            <p class="p_relative d_block fs_18">Our top priority is ensuring that you have consistent and dependable electricity, anytime and anywhere.</p>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute" style="background-image: url('{{ asset('images/banner/banner-2.jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">Sustainable <span>Energy Solutions</span> for the Future</h2>
                            <p class="p_relative d_block fs_18">Join us in embracing renewable energy sources to protect the environment and power your future.</p>
                        </div>  
                    </div>
                </div>
                <div class="slide-item p_relative pt_180">
                    <div class="image-layer p_absolute" style="background-image: url('{{ asset('images/banner/banner-3.jpg') }}');"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_block fs_60 lh_70 fw_bold mb_18">24/7 <span>Customer Support</span> at Your Service</h2>
                            <p class="p_relative d_block fs_18">We are here to assist you with any issues or questions, ensuring your electricity needs are always met.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- search-field -->
        <section class="search-field">
            <div class="auto-container">
                <div class="outer-container">
                    <div class="title-text centred p_relative d_block">
                        <h6>Request Service Today</h6>
                    </div>
                    <div class="search-area">
                        <form action="index.html" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your name" required>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your email" required>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                                    <div class="icon"><i class="icon-8"></i></div>
                                    <input type="text" name="date" placeholder="Date" id="datepicker">
                                </div>
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="theme-btn btn-one">Get Services</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- search-field end -->


        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div data-animation-box class="image-box p_relative d_block pl_120 pb_100 mr_30">
                                <div class="shape-box">
                                    <div class="shape-1 p_absolute l_70 t_40 w_130 h_130" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                    <div class="shape-2 p_absolute b_45 r_40 w_130 h_130" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                                </div>
                                <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block" data-animation="overlay-animation"><img src="{{ asset('images/resource/about-1.jpg') }}" alt=""></figure>
                                <div class="icon p_absolute l_25 float-bob-y"><img src="assets/images/icons/icon-1.png" alt=""></div>
                                <div class="text-box centred p_absolute l_0 b_0 z_2">
                                    <div class="light-icon p_absolute"><img src="assets/images/icons/icon-2.png" alt=""></div>
                                    <h2 class="d_block fs_40 lh_40 fw_bold mb_18">Since</h2>
                                    <h3 class="d_block fw_medium">1969</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_25">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Who We Are</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold">Residential & Commercial Electrical Services</h2>
                                </div>
                                <div class="text p_relative d_block mb_30">
                                    <p>Established in 1969, the Ceylon Electricity Board is the largest electricity provider in Sri Lanka. 
                                        We are a state-owned entity under the Ministry of Power and Energy, responsible for the generation, 
                                        transmission, distribution, and sale of electricity throughout the country. With a workforce of over 15,000 
                                        dedicated employees, we strive to ensure that every home, business, and industry has access to reliable power.</p>
                                </div>
                                <div class="inner p_relative d_block mb_40">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="icon-9"></i></div>
                                                <h4>Emergency Repairs</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box"><i class="icon-10"></i></div>
                                                <h4>Routine Maintenance</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>24/7 emergency repair services</li>
                                    <li>Regular maintenance and check-ups</li>
                                    <li>Fast response time for urgent issues</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- feature-section -->
        <section class="feature-section">
            <div class="outer-container p_relative pl_30 pr_30">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block clearfix">
                                <figure class="image-box p_relative d_block"><img src="assets/images/resource/feature-1.jpg" alt=""></figure>
                                <div class="content-box p_relative d_block">
                                    <div class="icon-box p_relative d_block fs_50 lh_50"><i class="icon-12"></i></div>
                                    <h3><a href="index.html">Safety Inspection</a></h3>
                                    <p>Lorem ipsum dolor amet cons adicing elit sed.</p>
                                    <div class="link"><a href="index.html"><span>Read more</span><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block clearfix">
                                <figure class="image-box p_relative d_block"><img src="assets/images/resource/feature-2.jpg" alt=""></figure>
                                <div class="content-box p_relative d_block">
                                    <div class="icon-box p_relative d_block fs_50 lh_50"><i class="icon-13"></i></div>
                                    <h3><a href="index.html">Electric Installation</a></h3>
                                    <p>Lorem ipsum dolor amet cons adicing elit sed.</p>
                                    <div class="link"><a href="index.html"><span>Read more</span><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block clearfix">
                                <figure class="image-box p_relative d_block"><img src="assets/images/resource/feature-3.jpg" alt=""></figure>
                                <div class="content-box p_relative d_block">
                                    <div class="icon-box p_relative d_block fs_50 lh_50"><i class="icon-14"></i></div>
                                    <h3><a href="index.html">Best Maintanance</a></h3>
                                    <p>Lorem ipsum dolor amet cons adicing elit sed.</p>
                                    <div class="link"><a href="index.html"><span>Read more</span><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


        <!-- service-section -->
        <section class="service-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Services</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">We are a Full Service Electrical <br />Contractor</h2>
                </div>
                <div class="tabs-box">
                    <div class="tab-btn-box p_relative d_block mb_60 centred">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn" data-tab="#tab-1">Domestic Services</li>
                            <li class="tab-btn active-btn" data-tab="#tab-2">Industrial Services</li>
                            <li class="tab-btn" data-tab="#tab-3">Commercial Services</li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="tab" id="tab-1">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_two">
                                            <div class="content-box p_relative d_block mr_70">
                                                <div class="text p_relative d_block">
                                                    <h3>Domestic Service</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-15"></i></div>
                                                            <h4><a href="air-conditioning.html">Air Conditioning</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-16"></i></div>
                                                            <h4><a href="heating-service.html">Heating Service</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-17"></i></div>
                                                            <h4><a href="indoor-lighting.html">Indoor Lighting</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                        <div class="single-item p_relative d_block">
                                                            <div class="icon-box"><i class="icon-18"></i></div>
                                                            <h4><a href="security-system.html">Security System</a></h4>
                                                            <p>Lorem ipsum dolor amet con adicing elit sed.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_two">
                                            <div class="image-box p_relative d_block mt_8">
                                                <figure class="image p_relative d_block"><img src="assets/images/service/service-1.jpg" alt=""></figure>
                                                <div class="icon-box"><i class="icon-45"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab active-tab" id="tab-2">
                            <div class="inner-box">
                                <div class="content_block_two">
                                    <div class="content-box p_relative d_block">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 text-column">
                                                <div class="text p_relative d_block">
                                                    <h3>Industrial Service</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>Excepteur sint occaecat cupidatat non proid ent, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                                                <div class="inner-content">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-15"></i></div>
                                                                <h4><a href="air-conditioning.html">Air Conditioning</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-16"></i></div>
                                                                <h4><a href="heating-service.html">Heating Service</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-17"></i></div>
                                                                <h4><a href="indoor-lighting.html">Indoor Lighting</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-18"></i></div>
                                                                <h4><a href="security-system.html">Security System</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-19"></i></div>
                                                                <h4><a href="power-outlets.html">Power Outlets</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                            <div class="single-item p_relative d_block">
                                                                <div class="icon-box"><i class="icon-20"></i></div>
                                                                <h4><a href="electrical-panels.html">Electrical Panels</a></h4>
                                                                <p>Lorem ipsum dolor amet con adicing elit sed.do usmod tempor ux ncididunt enim ad minim veniam.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                                        <div class="image_block_three">
                                            <div class="image-box p_relative d_block">
                                                <figure class="image p_relative d_block"><img src="assets/images/service/service-2.jpg" alt=""></figure>
                                                <div class="text">
                                                    <h5><i class="icon-45"></i>Best of Electrical Services</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                                        <div class="content_block_three">
                                            <div class="content-box">
                                                <div class="text">
                                                    <h3>Commercial Service</h3>
                                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup tate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                                </div>
                                                <div class="list-box clearfix">
                                                    <ul class="list-style-one clearfix">
                                                        <li>Air Conditioning</li>
                                                        <li>Electric Heating Systems</li>
                                                        <li>Telephone & Computer Wiring</li>
                                                        <li>Lighting</li>
                                                        <li>Power Outlets</li>
                                                        <li>Appliances Overheat</li>
                                                    </ul>
                                                    <ul class="list-style-one clearfix">
                                                        <li>Frequent Power Surges</li>
                                                        <li>Rising Power Bills</li>
                                                        <li>Flickering Lights</li>
                                                        <li>Pool & Hot Tub Wiring</li>
                                                        <li>Whole House Surge Protector</li>
                                                        <li>New Construction</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section p_relative">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="bg-layer"></div>
            <div class="outer-container p_relative">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title p_relative mb_30">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Why Choose Us</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Great Reasons For People Choose Easton</h2>
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam quis nostrud exercitation ullamco laboris nis ut aliquip ex ea commodo consequat.</p>
                                </div>
                                <div class="inner-box centred p_relative d_block">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-21"></i></div>
                                                <h5 class="fs_18 fw_sbold">Affordable Price</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-22"></i></div>
                                                <h5 class="fs_18 fw_sbold">Quality Assistance</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-23"></i></div>
                                                <h5 class="fs_18 fw_sbold">Free Estimation</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-24"></i></div>
                                                <h5 class="fs_18 fw_sbold">Advance Systems</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-25"></i></div>
                                                <h5 class="fs_18 fw_sbold">Optimized Solutions</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 fs_40 centred b_radius_50 tran_5"><i class="icon-26"></i></div>
                                                <h5 class="fs_18 fw_sbold">24/7 Availability</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_four">
                            <div class="image-box mt_8">
                                <div class="image-shape">
                                    <div class="shape-1" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image-1 p_relative d_block"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 video-column">
                                        <div class="video-inner p_relative d_block">
                                            <figure class="image-2 p_relative d_block"><img src="assets/images/resource/chooseus-2.jpg" alt=""></figure>
                                            <div class="video-btn">
                                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="icon-27"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- team-section -->
        <section class="team-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title p_relative mb_10 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Our Staff</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">Our Professional Electrician <br />Staff</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-1.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Jack Nicholson</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-2.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Robert Downey</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-3.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Gerard Butler</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-1.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Jack Nicholson</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-2.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Robert Downey</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-3.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Gerard Butler</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-1.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Jack Nicholson</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-2.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Robert Downey</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="bar-box">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                                <figure class="image">
                                    <img src="assets/images/team/team-3.jpg" alt="">
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                            </div>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="team-details.html">Gerard Butler</a></h3>
                                <span class="designation">Installation</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- project-section -->
        <section class="project-section">
            <div class="outer-container">
                <div class="project-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/project/project-1.jpg" alt=""></figure>
                            <div class="view-btn"><a href="assets/images/project/project-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/project/project-2.jpg" alt=""></figure>
                            <div class="view-btn"><a href="assets/images/project/project-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/project/project-3.jpg" alt=""></figure>
                            <div class="view-btn"><a href="assets/images/project/project-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/project/project-4.jpg" alt=""></figure>
                            <div class="view-btn"><a href="assets/images/project/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-28"></i></a></div>
                            <div class="text">
                                <h4><a href="project-details.html">House Wiring Repair</a></h4>
                                <span>Installation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project-section end -->


        <!-- faq-section -->
        <section class="faq-section p_relative">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_five">
                            <div class="image-box">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                                <figure class="image image-1"><img src="assets/images/resource/faq-1.jpg" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/resource/faq-2.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_five">
                            <div class="content-box p_relative d_block ml_30">
                                <div class="sec-title p_relative mb_50">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">FAQ’S</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Frequently Asked Question</h2>
                                    <p class="fs_16">All of our services are backed by our 100% satisfaction guarantee Our electricians.</p>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                            <h5>Do You Do Residential Work?</h5>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit elit consectur sed eiusmod tempor set aliquat enim minim veniam exercitation ullamco nis laboris aliquip commodo.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                            <h5>Are You Licensed and Insured?</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit elit consectur sed eiusmod tempor set aliquat enim minim veniam exercitation ullamco nis laboris aliquip commodo.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-angle-down"></i></div>
                                            <h5>Do You Do Commercial Electrical Repair?</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="text">
                                                <p>Lorem ipsum dolor sit elit consectur sed eiusmod tempor set aliquat enim minim veniam exercitation ullamco nis laboris aliquip commodo.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-section end -->


        <!-- clients-section -->
        <section class="clients-section p_relative">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo p_relative d_block"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo p_relative d_block"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo p_relative d_block"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo p_relative d_block"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo p_relative d_block"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section p_relative">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/testimonial-bg.jpg);"></div>
            <div class="bg-layer-2" style="background-image: url(assets/images/background/testimonial-bg-2.jpg);"></div>
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title light p_relative mb_50">
                            <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Testimonials</h5>
                            <h2 class="d_block fs_40 lh_50 fw_bold">What Our Client Say <br />About Easton.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 testimonial-column">
                        <div class="testimonial-inner p_relative d_block ml_30">
                            <div class="single-item-carousel owl-carousel owl-dots-none nav-style-one">
                                <div class="testimonial-block-one">
                                    <div class="inner-box p_relative d_block">
                                        <div class="light-icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                        <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor sit amet consectur adiptist ing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercit.</p>
                                        <div class="author-box p_relative d_block">
                                            <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                            <h5>Rachel McAdams</h5>
                                            <span class="designation p_relative d_block">Electrician</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-one">
                                    <div class="inner-box p_relative d_block">
                                        <div class="light-icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                        <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor sit amet consectur adiptist ing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercit.</p>
                                        <div class="author-box p_relative d_block">
                                            <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                            <h5>Rachel McAdams</h5>
                                            <span class="designation p_relative d_block">Electrician</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-one">
                                    <div class="inner-box p_relative d_block">
                                        <div class="light-icon"><img src="assets/images/icons/icon-3.png" alt=""></div>
                                        <div class="icon-box p_relative d_block fs_65"><i class="icon-31"></i></div>
                                        <p>Lorem ipsum dolor sit amet consectur adiptist ing elit sed eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam quis nostrud exercit.</p>
                                        <div class="author-box p_relative d_block">
                                            <figure class="author-thumb p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                            <h5>Rachel McAdams</h5>
                                            <span class="designation p_relative d_block">Electrician</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- pricing-section -->
        <section class="pricing-section p_relative sec-pad centred">
            <div class="pattern-layer">
                <div class="pattern-1 float-bob-y" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-11.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative mb_100">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Pricing Table</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">Not Any Hidden Charge, Choose <br />Pricing Plan</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pricing-table p_relative d_block">
                                <div class="inner-box p_relative d_block">
                                    <div class="light-icon"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                    <div class="table-header">
                                        <div class="icon-box"><i class="icon-34"></i></div>
                                        <h2>$19.00</h2>
                                        <p>Fruit is their fill meat abundantly place meat don't stars.</p>
                                    </div>
                                    <div class="table-content">
                                        <ul class="feature-list clearfix">
                                            <li><span>Indoor/Outdoor Lighting</span></li>
                                            <li><span>Apliance Installation</span></li>
                                            <li><span>Annual Inspection</span></li>
                                            <li><span>Ceiling Fan Installation</span></li>
                                            <li><span>Replacement Wiring</span></li>
                                            <li><span>24 hour Response</span></li>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <a href="index.html"><span>Select Plan</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="pricing-table p_relative d_block">
                                <div class="inner-box p_relative d_block">
                                    <div class="light-icon"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                    <div class="table-header">
                                        <div class="icon-box"><i class="icon-35"></i></div>
                                        <h2>$23.00</h2>
                                        <p>Fruit is their fill meat abundantly place meat don't stars.</p>
                                    </div>
                                    <div class="table-content">
                                        <ul class="feature-list clearfix">
                                            <li><span>Ceiling Fan Installation</span></li>
                                            <li><span>Install Double Power</span></li>
                                            <li><span>Install Outdoor Power</span></li>
                                            <li><span>Annual Inspection</span></li>
                                            <li><span>Surge Maintenance</span></li>
                                            <li><span>Electrical Inspection</span></li>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <a href="index.html"><span>Select Plan</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="pricing-table p_relative d_block">
                                <div class="inner-box p_relative d_block">
                                    <div class="light-icon"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                    <div class="table-header">
                                        <div class="icon-box"><i class="icon-36"></i></div>
                                        <h2>$39.00</h2>
                                        <p>Fruit is their fill meat abundantly place meat don't stars.</p>
                                    </div>
                                    <div class="table-content">
                                        <ul class="feature-list clearfix">
                                            <li><span>Annual A/C Inspection</span></li>
                                            <li><span>Electrical Inspection</span></li>
                                            <li><span>Install Double Power</span></li>
                                            <li><span>Retrofits and Upgrades</span></li>
                                            <li><span>Install Outdoor Power</span></li>
                                            <li><span>Critical Installation</span></li>
                                        </ul>
                                    </div>
                                    <div class="table-footer">
                                        <a href="index.html"><span>Select Plan</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-section end -->


        <!-- cta-section -->
        <section class="cta-section bg-color-1 p_relative pt_120 pb_120">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="pattern-3" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                <div class="pattern-4" style="background-image: url(assets/images/shape/shape-7.png);"></div>
            </div>
            <figure class="image-layer"><img src="assets/images/resource/vector-1.png" alt=""></figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_six">
                            <div class="content-box p_relative d_block mr_20">
                                <div class="sec-title p_relative mb_13">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_13">Contact</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold">Need Help with The Best Electrical Services</h2>
                                </div>
                                <div class="text">
                                    <p>All of our services are backed by our 100% satisfaction guarantee Our electricians can install anything.</p>
                                </div>
                                <div class="support-box p_relative d_block">
                                    <div class="icon-box p_absolute l_0 t_0 w_70 h_70 lh_70 b_radius_50 fs_40"><i class="icon-37"></i></div>
                                    <h5>For Emergency</h5>
                                    <h3><a href="tel:01243507689">+012-4350-7689</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- funfact-section -->
        <section class="funfact-section p_relative centred bg-color-2">
            <div class="auto-container">
                <div class="inner-container p_relative">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-38"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="90">0</span>
                            </div>
                            <p>Successful projects</p>
                        </div>
                    </div>
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-39"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2.6">0</span><span>M</span>
                            </div>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-40"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="35">0</span>
                            </div>
                            <p>Experienced Staff</p>
                        </div>
                    </div>
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box p_relative d_block fs_60"><i class="icon-41"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="10">0</span>
                            </div>
                            <p>Awards Win</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section -->


        <!-- news-section -->
        <section class="news-section p_relative sec-pad">
            <div class="auto-container">
                <div class="sec-title p_relative mb_50 centred">
                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Latest News</h5>
                    <h2 class="d_block fs_40 lh_50 fw_bold">Stay Update with <br />Easton News</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.html">The Importance Of The Air Quality.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>10 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.html">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.html">How to Repair Electricity to Car Engine.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>09 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.html">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <div class="lower-content p_relative d_block">
                                    <h3><a href="blog-details.html">Electrical Wiring For Home & Office.</a></h3>
                                    <ul class="post-info clearfix">
                                        <li><i class="icon-42"></i>08 Oct, 2021</li>
                                        <li><i class="icon-43"></i><a href="blog-details.html">Ashley Bronks</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consecte adipisicing sed eiusmod tempor incid idunt labore dolore.</p>
                                    <div class="link"><a href="blog-details.html">Read more<i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section p_relative">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text p_relative d_block">
                                <h2>Subscribe to Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner p_relative d_block">
                                <form action="index.html" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <button type="submit">Subscribe Now<i class="icon-7"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


     @livewire('footer')
</body>
</html>
