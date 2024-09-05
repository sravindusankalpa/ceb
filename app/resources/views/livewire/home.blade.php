<div>
<!-- page wrapper -->
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
                        <h6>Calculate Bill Today</h6>
                    </div>
                    <div class="search-area">
                        <form action="{{ route('bill-cal') }}" method="post">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-1 col-md-6 col-sm-12 form-group">
                                </div>
                                <div class="col-lg-11 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="account" placeholder="Enter Your Account Number" required>
                                </div>
                               
                            </div>
                            <div class="btn-box">
                                <button type="submit" class="theme-btn btn-one">Calculate</button>
                            </div>
                        </form>
                    </div>
                    @if(session()->has('error'))
                        <div class="alert alert-danger">{{session('error')}}</div>
                    @endif

                    @if(session()->has('error1'))
                        <div class="alert alert-danger">{{session('error1')}}</div>
                    @endif
                </div>
            </div>
        </section>
        <!-- search-field end -->


        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="pattern-layer" style="background-image:  url('{{ asset('images/shape/shape-2.png') }}');"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div data-animation-box class="image-box p_relative d_block pl_120 pb_100 mr_30">
                                <div class="shape-box">
                                    <div class="shape-1 p_absolute l_70 t_40 w_130 h_130" style="background-image: url('{{ asset('images/shape/shape-1.png') }}');"></div>
                                    <div class="shape-2 p_absolute b_45 r_40 w_130 h_130" style="background-image: url('{{ asset('images/shape/shape-1.png') }}');"></div>
                                </div>
                                <figure data-animation-text class="overlay-anim-black-bg image p_relative d_block" data-animation="overlay-animation"><img src="{{ asset('images/resource/about-1.jpg') }}" alt=""></figure>
                                <div class="icon p_absolute l_25 float-bob-y"><img src="{{ asset('images/icons/icon-1.png') }}" alt=""></div>
                                <div class="text-box centred p_absolute l_0 b_0 z_2">
                                    <div class="light-icon p_absolute"><img src="{{ asset('images/icons/icon-2.png') }}" alt="icon"></div>
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
                                <figure class="image-box p_relative d_block"><img src="{{ asset('images/resource/feature-1.png') }}" alt="safety"></figure>
                                <div class="content-box p_relative d_block">
                                    <div class="icon-box p_relative d_block fs_50 lh_50"><i class="icon-12"></i></div>
                                    <h3><a href="index.html">Safety Inspection</a></h3>
                                    <p>Ensuring the highest standards for safe electrical installations and systems.</p>
                                    <div class="link"><a href="index.html"><span>Read more</span><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block clearfix">
                                <figure class="image-box p_relative d_block"><img src="{{ asset('images/resource/feature-2.png') }}" alt="electric"></figure>
                                <div class="content-box p_relative d_block">
                                    <div class="icon-box p_relative d_block fs_50 lh_50"><i class="icon-13"></i></div>
                                    <h3><a href="index.html">Electric Installation</a></h3>
                                    <p>Expert installation services for residential and commercial properties.</p>
                                    <div class="link"><a href="index.html"><span>Read more</span><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block clearfix">
                                <figure class="image-box p_relative d_block"><img src="{{ asset('images/resource/feature-3.png') }}" alt="maintaince"></figure>
                                <div class="content-box p_relative d_block">
                                    <div class="icon-box p_relative d_block fs_50 lh_50"><i class="icon-14"></i></div>
                                    <h3><a href="index.html">Best Maintanance</a></h3>
                                    <p>Expert maintenance services to ensure your systems run seamlessly.</p>
                                    <div class="link"><a href="index.html"><span>Read more</span><i class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->
        <!-- chooseus-section -->
        <section class="chooseus-section p_relative">
            <div class="pattern-layer" style="background-image: url('{{ asset('images/shape/shape-5.png') }}');"></div>
            <div class=bg-layer></div>
            <div class="outer-container p_relative">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_four">
                            <div class="content-box">
                                <div class="sec-title p_relative mb_30">
                                    <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Why Choose Us</h5>
                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_25">Great Reasons For People Choose CEB</h2>
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
                                    <div class="shape-1" style="background-image: url('{{ asset('images/shape/shape-6.png') }}');"></div>
                                    <div class="shape-2" style="background-image: url('{{ asset('images/shape/shape-7.png') }}');"></div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-image">
                                        <figure class="image-1 p_relative d_block"><img src="{{ asset('images/resource/chooseus-2.jpg') }}" alt="choose"></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 video-column">
                                        <div class="video-inner p_relative d_block">
                                            <figure class="image-2 p_relative d_block"><img src="{{ asset('images/resource/chooseus-1.jpg') }}" alt="choose"></figure>
                                            <div class="video-btn">
                                                <a href="https://www.youtube.com/watch?v=ss7Uk4pN3Z0&amp;t=28s" class="lightbox-image" data-caption=""><i class="icon-27"></i></a>
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
        <!-- cta-section -->
        <section class="cta-section bg-color-1 p_relative pt_120 pb_120">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url('{{ asset('images/shape/shape-12.png') }}');"></div>
                <div class="pattern-2" style="background-image: url('{{ asset('images/shape/shape-13.png') }}');"></div>
                <div class="pattern-3" style="background-image: url('{{ asset('images/shape/shape-7.png') }}');"></div>
                <div class="pattern-4" style="background-image: url('{{ asset('images/shape/shape-7.png') }}');"></div>
            </div>
            <figure class="image-layer"><img src="{{ asset('images/resource/vector-1.png') }}" alt="resource"></figure>
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
                                    <h3><a href="tel:01243507689">1987</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->

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
</div>
