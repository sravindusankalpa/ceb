<div>
  

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.bunny.net">
                <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css'])

  
    <div class="boxed_wrapper">
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
      
        

        <header class="main-header">
            <div class="header-top">
                <div class="top-inner">
                    <div class="left-column">
                        <ul class="info clearfix">
                            <li><i class="icon-1"></i>Sun-Thu  08:00AM-05:00PM</li>
                            <li><i class="icon-2"></i>Colombo, Sri Lanka</li>
                            <li><i class="icon-3"></i><a href="mailto:needhelp@ceb.lk">needhelp@ceb.lk</a></li>
                        </ul>
                    </div>
                    <div class="right-column">
                        <ul class="social-links clearfix">
                            <li><p>Follow Us:</p></li>
                            <li><a href="{{ route('home') }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ route('home') }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ route('home') }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ route('home') }}"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="outer-box">
                    <div class="menu-area clearfix">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo" title="Logo">
                            </a></figure>
                        </div>
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('home') }}">About</a></li>
                                    <li><a href="{{ route('home') }}">Services</a></li>  
                                    <li><a href="{{ route('home') }}">Branch</a></li> 
                                    <li><a href="{{ route('home') }}">Blog</a></li>  
                                    <li><a href="{{ route('home') }}">Contact</a></li> 
                                    @auth
                                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="nav-right">
                        <div class="support-box">
                            <h6><i class="icon-4"></i>Call: <a href="tel:1987">1987</a></h6>
                        </div>
                        <div class="btn-box">
                            @auth
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit" class="theme-btn btn-one">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            @else
                                <a href="/login" class="theme-btn btn-one">Login</a>
                            @endauth
                        </div>  
                    </div>
                </div>
            </div>
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="menu-area clearfix">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a></figure>
                        </div>
                        <nav class="main-menu clearfix">
                        </nav>
                    </div>
                    <div class="nav-right">
                        <div class="support-box">
                            <h6><i class="icon-4"></i>Call: <a href="tel:1987">1987</a></h6>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('home') }}" class="theme-btn btn-one">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img src="url{{ asset('images/logo.png') }}" alt="Logo" title="Logo">
                </a></div>
                <div class="menu-outer"></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Colombo, Sri Lanka</li>
                        <li><a href="tel:+1987">1987</a></li>
                        <li><a href="mailto:info@eceb.lk">info@ceb.lk</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="{{ route('home') }}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{ route('home') }}"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
</div>
<!-- <div id="google_translate_element"></div>
                    <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        includedLanguages: 'si,ta,en',
                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                        }, 'google_translate_element');
                    }
                    </script>
                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
