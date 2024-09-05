<div>
@livewire('header')
        <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image:url('{{ asset('images/background/page-title.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Billing Details</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Billing Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- checkout-section -->
        <section class="checkout-section p_relative pt_120 pb_120 bg-color-4">
            <div class="container">
                <div class="shape-box">
                    <div class="shape-1 p_absolute l_70 t_40 w_130 h_130" style="background-image: url('{{ asset('images/shape/shape-1.png') }}');"></div>
                    <div class="shape-2 p_absolute b_45 r_40 w_130 h_130" style="background-image: url('{{ asset('images/shape/shape-1.png') }}');"></div>
                </div>
                <div class="coupon-box p_relative d_block mb_40 pl_30 pt_19 pr_30 pb_17"><h6 class="d_block fs_16 fw_medium" style="color: #eb7328;">Welcome {{ $cusAccounts->cusName }} !!</h6></div>
                <div class="row"> 
                    <div class="col-lg-12 col-md-12 col-sm-12 right-column">
                        <div class="inner-box">
                            <div class="order-info p_relative d_block pt_45 pr_50 pb_25 pl_50 mb_50">
                                <h4 class="sub-title d_block fs_24 lh_30 mb_25">Bill Information</h4>
                                
                                <div class="order-product">
                                    <ul class="order-list clearfix">
                                        <li class="p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_15 lh_20 pull-left fw_medium">Last reading date:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black">{{ $lastRow->date }}</span>
                                        </li>
                                        <li class="p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_15 lh_20 pull-left fw_medium">Previous (before the last one) meter reading:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black">{{ $previousRow->mReadng }}</span>
                                        </li>
                                        <li class="p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_15 lh_20 pull-left fw_medium">Last meter reading:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black">{{ $lastRow->mReadng }}</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">Previous (before the last one) meter reading:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">{{ $previousRow->mReadng }}</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">Duration:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">{{ $duration }} Days</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">Fixed charge amount:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">Rs. {{ $fixedCharge }} .00</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">First range billed amount:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">Rs. {{ $firstRangeBill }} .00</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">Second range billed amount:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">Rs. {{ $secondRangeBill }} .00</span>
                                        </li>
                                        <li class="sub-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_medium lh_20 pull-left">Third range billed amount:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_medium font_family_inter color_black light">Rs. {{ $thirdRangeBill }} .00</span>
                                        </li>
                                        <li class="order-total p_relative d_block clearfix pt_17 pb_16">
                                            <h6 class="fs_16 fw_bold lh_20 pull-left">Total billed amount:</h6>
                                            <span class="p_relative d_block pull-right fs_15 fw_bold font_family_inter color_black">Rs. {{ $totalBill }} .00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-info p_relative d_block pt_45 pr_50 pb_50 pl_50">
                                <h4 class="sub-title d_block fs_24 lh_30 mb_40">Payment</h4>
                                <div class="payment-inner p_relative d_block pt_25 pr_30 pb_20 pl_30 mb_30">
                                    <div class="option-block pb_12 mb_13">
                                        <div class="check-box">
                                            <input class="check" type="checkbox" id="checkbox2" checked>
                                            <label for="checkbox2" class="fs_16 fw_medium font_family_inter color_black">Direct Bank Transfer</label>
                                        </div>
                                        <p class="fs_14 font_family_poppins pl_30">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                    <div class="option-block clearfix">
                                        <div class="check-box pull-left mr_25">
                                            <input class="check" type="checkbox" id="checkbox3">
                                            <label for="checkbox3" class="fs_16 fw_medium font_family_inter color_black">Visa/Master Card</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="/" class="theme-btn btn-one">Pay Bill <i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->
        @livewire('footer')
</div>

