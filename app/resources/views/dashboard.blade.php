<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    @livewire('header')
    <section class="page-title centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image:url('{{ asset('images/background/page-title.jpg') }}');"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Add Meter Reading</h2>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Add Meter Reading</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('error2'))
                <div class="alert alert-danger">{{session('error2')}}</div>
            @endif

            @if(session()->has('error3'))
                <div class="alert alert-danger">{{session('error3')}}</div>
            @endif

            @if(session()->has('error4'))
                <div class="alert alert-danger">{{session('error4')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif


        <!-- appointment-section -->
        <section class="appointment-section p_relative sec-pad">
            <div class="auto-container">
                <div class="sec-title p_relative mb_40 centred">
                <h5 class="d_block fs_17 lh_25 fw_medium mb_9">Dashboard</h5>
                <h2 class="d_block fs_30 lh_40 fw_bold mb_25">Add New Meter Reading</h2>
                <p>Please enter the details below to add a new meter reading for the selected account number.</p>
                </div>
                <div class="form-inner">
                    <div class="shape-box">
                        <div class="shape-2 p_absolute b_45 r_40 w_130 h_130" style="background-image: url('{{ asset('images/shape/shape-1.png') }}');"></div>
                        <div class="shape-1 p_absolute l_70 t_40 w_130 h_130" style="background-image: url('{{ asset('images/shape/shape-1.png') }}');"></div>
                    </div>
                    <div class="content_block_13">
                        <div class="content-box p_relative d_block">
                            <div class="form-inner">
                                <form action="{{ route('add-reading') }}" method="post">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="accountNo" placeholder="Enter Account No" required="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="mReading" placeholder="Meter Reading" required="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                            <input type="date" name="date" placeholder="date" value="{{ old('date') }}" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="message-btn centred">
                                                <button type="submit" class="theme-btn btn-one">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- appointment-section end -->

        @livewire('footer')

</x-app-layout>
