<div>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>Easton - HTML 5 Template Preview</title>

        <!-- Fav Icon -->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.bunny.net">
                <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css'])

    </head>
    <div class="boxed_wrapper">
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
      
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
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
                            <li><i class="icon-2"></i>380 Albert St, Melborne</li>
                            <li><i class="icon-3"></i><a href="mailto:needhelp@info.com">needhelp@info.com</a></li>
                        </ul>
                    </div>
                    <div class="right-column">
                        <ul class="social-links clearfix">
                            <li><p>Follow Us:</p></li>
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="outer-box">
                    <div class="menu-area clearfix">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="index.html">Services</a>
                                        <ul>
                                            <li><a href="service.html">Services 1</a></li>
                                            <li><a href="service-2.html">Services 2</a></li>
                                            <li><a href="service-3.html">Services 3</a></li>
                                            <li><a href="air-conditioning.html">Air Conditioning</a></li>
                                            <li><a href="heating-service.html">Heating Service</a></li>
                                            <li><a href="power-outlets.html">Power Outlets</a></li>
                                            <li><a href="indoor-lighting.html">Indoor Lighting</a></li>
                                            <li><a href="security-system.html">Security System</a></li>
                                            <li><a href="electrical-panels.html">Electrical Panels</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index.html">Pages</a>
                                        <ul>
                                            <li class="dropdown"><a href="index.html">Team</a>
                                                <ul>
                                                    <li><a href="team.html">Our Team 1</a></li>
                                                    <li><a href="team-2.html">Our Team 2</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index.html">Project</a>
                                                <ul>
                                                    <li><a href="project.html">Projects 1</a></li>
                                                    <li><a href="project-2.html">Projects 2</a></li>
                                                    <li><a href="project-details.html">Project Details 1</a></li>
                                                    <li><a href="project-details-2.html">Project Details 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="pricing.html">Pricing Table</a></li>
                                            <li><a href="faq.html">Faq’s</a></li>
                                            <li><a href="appointment.html">Appointment</a></li>
                                            <li><a href="error.html">404</a></li>
                                        </ul>
                                    </li>  
                                    <li class="dropdown"><a href="index.html">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Our Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="index.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid</a></li>
                                            <li><a href="blog-2.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>  
                                    <li><a href="contact.html">Contact</a></li> 
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="nav-right">
                        <div class="support-box">
                            <h6><i class="icon-4"></i>Call: <a href="tel:123045615523">+1 (230)-456-155-23</a></h6>
                        </div>
                        <div class="search-box-outer search-toggler">
                            <i class="icon-5"></i>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="menu-area clearfix">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <nav class="main-menu clearfix">
                        </nav>
                    </div>
                    <div class="nav-right">
                        <div class="support-box">
                            <h6><i class="icon-4"></i>Call: <a href="tel:123045615523">+1 (230)-456-155-23</a></h6>
                        </div>
                        <div class="search-box-outer search-toggler">
                            <i class="icon-5"></i>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
</div>
