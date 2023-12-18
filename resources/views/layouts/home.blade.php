<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Biogenix - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('home/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('home/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/flaticon.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/owl.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/animate.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/nice-select.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/timePicker.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/color.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('home/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="b" class="letters-loading">
                                b
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="g" class="letters-loading">
                                g
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="x" class="letters-loading">
                                x
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="{{ asset('home/images/logo-7.png')}}" alt=""></a></figure>
                    <div class="close-search pull-right"><i class="fa-solid fa-xmark"></i></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header header-style-one">
            <div class="logo-box">
                <figure class="logo"><a href="index.html"><img src="{{ asset('home/images/logo.png')}}" alt=""></a></figure>
            </div>
            <div class="btn-box">
                <a href="index.html" class="header-btn"><i class="flaticon-calendar"></i>Appointment</a>
            </div>
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <ul class="info-list clearfix">
                            <li>
                                <div class="icon-box"><i class="flaticon-map"></i></div>
                                24 Global Str, San Fransisco, SF 94112.
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-clock"></i></div>
                                24 Global Str, San Fransisco, SF 94112.
                            </li>
                        </ul>
                        <div class="top-right">
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                <li><a href="index.html"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                            <div class="language">
                                <span>Fr</span>
                                <ul class="language-list clearfix">
                                    <li><a href="index.html">English</a></li>
                                    <li><a href="index.html">Spanish</a></li>
                                    <li><a href="index.html">Turky</a></li>
                                    <li><a href="index.html">Chiness</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-3.html">Home Page 03</a></li>
                                            </ul>
                                        </li>  
                                        <li class="dropdown"><a href="index.html">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Meet Our Team</a></li>
                                                <li><a href="faq.html">Faq’s</a></li>
                                                <li class="dropdown"><a href="index.html">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Products</a></li>
                                                        <li><a href="shop-details.html">Product Single</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="error.html">404</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Services</a>
                                            <ul>
                                                <li><a href="services.html">All Services</a></li>
                                                <li><a href="service-details.html">Biochemistry Tests</a></li>
                                                <li><a href="service-details-2.html">Microbiology Test</a></li>
                                                <li><a href="service-details-3.html">Histopatology</a></li>
                                                <li><a href="service-details-4.html">Hormonal Assay</a></li>
                                                <li><a href="service-details-5.html">Clinical Pathology</a></li>
                                                <li><a href="service-details-6.html">Cytopathology</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Research</a>
                                            <ul>
                                                <li><a href="research.html">Research Style 01</a></li>
                                                <li><a href="research-2.html">Research Style 02</a></li>
                                                <li><a href="research-3.html">Research Style 03</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Blog</a>
                                            <ul>
                                                <li class="dropdown"><a href="index.html">Grid View</a>
                                                    <ul>
                                                        <li><a href="blog.html">2 Columns</a></li>
                                                        <li><a href="blog-2.html">3 Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">List View</a>
                                                    <ul>
                                                        <li><a href="blog-3.html">Large Image</a></li>
                                                        <li><a href="blog-4.html">Small Image</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>  
                                        <li><a href="contact.html">Contact</a></li> 
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content">
                            <li class="support-box"> 
                                <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                <a href="tel:80045678901">[800] 45 6789 01</a>
                            </li>
                            <li class="user-box">
                                <a href="index.html"><i class="flaticon-add-user"></i></a>
                            </li>
                            <li class="search-box-outer search-toggler">
                                <i class="flaticon-magnifying-glass"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <ul class="menu-right-content">
                            <li class="support-box"> 
                                <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                <a href="tel:80045678901">[800] 45 6789 01</a>
                            </li>
                            <li class="user-box">
                                <a href="index.html"><i class="flaticon-add-user"></i></a>
                            </li>
                            <li class="search-box-outer search-toggler">
                                <i class="flaticon-magnifying-glass"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('home/images/logo-2.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
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
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="banner-section banner-style-one">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('home/images/banner/banner-1.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content-inner">
                                <span class="count-text">01.</span>
                                <h5>The best at the test</h5>
                                <h2>Committed to Quality Laboratory Products</h2>
                                <ul class="list clearfix">
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory-1"></i></div>
                                       <h3>80+</h3> 
                                       <h4>Pathology Labs</h4>
                                    </li>
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory"></i></div>
                                       <h3>150+</h3> 
                                       <h4>Collection Centers</h4>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a href="index.html" class="theme-btn light">Read More</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('home/images/banner/banner-2.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content-inner">
                                <span class="count-text">02.</span>
                                <h5>World Class Laboratory</h5>
                                <h2>Offering Cost Effective Diagnotic Services</h2>
                                <ul class="list clearfix">
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory-1"></i></div>
                                       <h3>80+</h3> 
                                       <h4>Pathology Labs</h4>
                                    </li>
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory"></i></div>
                                       <h3>150+</h3> 
                                       <h4>Collection Centers</h4>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a href="index.html" class="theme-btn light">Read More</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('home/images/banner/banner-3.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content-inner">
                                <span class="count-text">03.</span>
                                <h5>Extraordinary care</h5>
                                <h2>Prioritize Each Individual Patients Require</h2>
                                <ul class="list clearfix">
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory-1"></i></div>
                                       <h3>80+</h3> 
                                       <h4>Pathology Labs</h4>
                                    </li>
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory"></i></div>
                                       <h3>150+</h3> 
                                       <h4>Collection Centers</h4>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a href="index.html" class="theme-btn light">Read More</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset('home/images/banner/banner-4.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content-inner">
                                <span class="count-text">04.</span>
                                <h5>Our Quality Policy</h5>
                                <h2>To Provide Clinically Assured & Accurate Results</h2>
                                <ul class="list clearfix">
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory-1"></i></div>
                                       <h3>80+</h3> 
                                       <h4>Pathology Labs</h4>
                                    </li>
                                    <li>
                                       <div class="icon-box"><i class="flaticon-laboratory"></i></div>
                                       <h3>150+</h3> 
                                       <h4>Collection Centers</h4>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a href="index.html" class="theme-btn light">Read More</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="shape-box">
                                <div class="shape shape-1 hexagon_shape"></div>
                                <div class="shape shape-2 hexagon_shape"></div>
                                <div class="shape shape-3 hexagon_shape"></div>
                            </div>
                            <div class="image-inner hexagon_shape">
                                <figure class="image"><img src="{{ asset('home/images/resource/about-1.jpg')}}" alt=""></figure>
                            </div>
                            <div class="text">
                                <div class="inner">
                                    <h2>12<span>+</span></h2>
                                    <h6>Years of <br />Experience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">About Lab</span>
                                <h2>Experiment with <br />the best lab products and service</h2>
                            </div>
                            <div class="text">
                                <p>The system and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <span class="count-text">01</span>
                                            <h3>Highly Advanced Laboratory</h3>
                                            <p>Foresee the pain and trouble that are bound to ensue.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <span class="count-text">02</span>
                                            <h3>Comprehensive Test Menu</h3>
                                            <p>Moment so blinded by desire that they can foresee trouble.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- service-section -->
        <section class="service-section bg-color-1 sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">What We offer</span>
                    <h2>Reliable diagnostic services</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-details.html"><img src="{{ asset('home/images/service/service-1.jpg')}}" alt=""></a></figure>
                                <div class="icon-box"><i class="flaticon-biochemistry"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Biochemistry Tests</a></h3>
                                <p>These cases are perfectly simple and easy distinguish free hour.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-details-2.html"><img src="{{ asset('home/images/service/service-2.jpg')}}" alt=""></a></figure>
                                <div class="icon-box"><i class="flaticon-microorganism"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-details-2.html">Microbiology Tests</a></h3>
                                <p>Mistaken idea of denouncing pleasure pain was we will give complete.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-details-3.html"><img src="{{ asset('home/images/service/service-3.jpg')}}" alt=""></a></figure>
                                <div class="icon-box"><i class="flaticon-skin"></i></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-details-3.html">Histopatology Tests</a></h3>
                                <p>Desires to obtain pain of itself because is pain but because occasionally.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- industries-section end -->
        <section class="industries-section sec-pad">
            <div class="pattern-layer" style="background-image: url({{ asset('home/images/shape/shape-3.png')}});"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="bg-layer" style="background-image: url({{ asset('home/images/background/industries-bg.jpg')}});"></div>
                    <div class="content-box">
                        <div class="shape-box">
                            <div class="shape shape-1 hexagon_shape"></div>
                            <div class="shape shape-2 hexagon_shape"></div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                                <div class="industries-block-one">
                                    
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                                <div class="industries-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-sprout"></i></div>
                                        <h6>Industry 01</h6>
                                        <h3><a href="index.html">Agriculture</a></h3>
                                        <p>The great explorers the truth the claims of duty.</p>
                                        <div class="link">
                                            <a href="index.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                                <div class="industries-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-green-earth"></i></div>
                                        <h6>Industry 02</h6>
                                        <h3><a href="index.html">Environmental</a></h3>
                                        <p>Holds in these matters to this principle of selection.</p>
                                        <div class="link">
                                            <a href="index.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                                <div class="industries-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-medicine"></i></div>
                                        <h6>Industry 03</h6>
                                        <h3><a href="index.html">Pharmaceutical</a></h3>
                                        <p>Great pleasures or else cases endures pains avoid.</p>
                                        <div class="link">
                                            <a href="index.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                                <div class="sec-title mr-0 light">
                                    <span class="sub-title">our industries</span>
                                    <h2>Industries <br />that we served</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                                <div class="industries-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-bread"></i></div>
                                        <h6>Industry 04</h6>
                                        <h3><a href="index.html">Food Solutions</a></h3>
                                        <p>The great explorers the truth the claims of duty.</p>
                                        <div class="link">
                                            <a href="index.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 industries-block">
                                <div class="industries-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="flaticon-automobile"></i></div>
                                        <h6>Industry 05</h6>
                                        <h3><a href="index.html">Automotive</a></h3>
                                        <p>Holds in these matters to this principle of selection.</p>
                                        <div class="link">
                                            <a href="index.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- industries-section end -->


        <!-- testing-section -->
        <section class="testing-section">
            <div class="bg-layer" style="background-image: url({{ asset('home/images/background/testing-bg.jpg')}});"></div>
            <div class="auto-container">
                <div class="testing-tab">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12 btn-column">
                            <div class="tab-btn-box">
                                <ul class="tab-btns testing-tab-btns clearfix">
                                    <li class="p-tab-btn active-btn" data-tab="#tab-1">
                                        <span class="count-text">01</span>
                                        <a href="index.html" class="link-btn"><i class="flaticon-right-arrow"></i></a>
                                        <h3>Microbiology</h3>
                                    </li>
                                    <li class="p-tab-btn" data-tab="#tab-2">
                                        <span class="count-text">02</span>
                                        <a href="index.html" class="link-btn"><i class="flaticon-right-arrow"></i></a>
                                        <h3>Chemistry</h3>
                                    </li>
                                    <li class="p-tab-btn" data-tab="#tab-3">
                                        <span class="count-text">03</span>
                                        <a href="index.html" class="link-btn"><i class="flaticon-right-arrow"></i></a>
                                        <h3>Environmental</h3>
                                    </li>
                                    <li class="p-tab-btn" data-tab="#tab-4">
                                        <span class="count-text">04</span>
                                        <a href="index.html" class="link-btn"><i class="flaticon-right-arrow"></i></a>
                                        <h3>Residue</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                            <div class="p-tabs-content">
                                <div class="p-tab active-tab" id="tab-1">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Microbiology</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Microbiology</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Microbiology</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-tab" id="tab-2">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Chemistry</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Chemistry</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Chemistry</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-tab" id="tab-3">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Environmental</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Environmental</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Environmental</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-tab" id="tab-4">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Residue</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Residue</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <div class="inner-box">
                                                <div class="sec-title light">
                                                    <span class="sub-title">Residue</span>
                                                    <h2>Full Range of Testing for Food & Water</h2>
                                                </div>
                                                <div class="text">
                                                    <p>Take a trivial example, which of us ever undertakes laborious physical exercise.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="index.html" class="theme-btn light">Read More</a>
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
        <!-- testing-section end -->


        <!-- excellence-section -->
        <section class="excellence-section">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="head-image"><img src="{{ asset('home/images/resource/men-head-1.png')}}" alt=""></div>
                            <figure class="image"><img src="{{ asset('home/images/resource/excellence-1.png')}}" alt=""></figure>
                            <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-6.png')}});"></div>
                            <div class="inner-box">
                                <div class="piechart"  data-fg-color="#10b1b4" data-value=".30">
                                    <span>.30</span>
                                </div>
                                <h5>Antibody Test</h5>
                                <span class="year">2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Better for You</span>
                                <h2>Excellence is our specialty</h2>
                            </div>
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-medical-report"></i></div>
                                <div class="text">
                                    <h3>Basic Health Check-up</h3>
                                    <p>One rejects, dislikes, or avoids pleasure itself, because it is pleasure but pursue pleasure.</p>
                                </div>
                                <ul class="list-style-one clearfix">
                                    <li>Complete Blood Count</li>
                                    <li>Blood Sugar-Fasting</li>
                                    <li>Post Prandial</li>
                                    <li>Liver Function test</li>
                                </ul>
                                <div class="link"><a href="index.html">All Services & Pricing<i class="flaticon-right-arrow"></i></a></div>
                            </div>
                            <div class="lower-box">
                                <div class="icon-box"><i class="flaticon-medical-checkup"></i></div>
                                <h3>Advance Health Check-up</h3>
                                <a href="https://st.ourhtmldemo.com/new/Biogenix/service.html">View Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- excellence-section end -->


        <!-- funfact-section -->
        <section class="funfact-section centred">
            <div class="bg-layer" style="background-image: url({{ asset('home/images/background/funfact-bg.jpg')}});"></div>
            <div class="auto-container">
                <div class="sec-title light">
                    <span class="sub-title">Interesting Numbers</span>
                    <h2>Facts that will blow your mind</h2>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-rating"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="4.5">0</span><span>/5</span>
                                    </div>
                                    <h3>Rating from Over 2.5k Beneficiaries</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-atom"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="36789">0</span>
                                    </div>
                                    <h3>Tests Completed Rapidly and Precisely.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-lab"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                    </div>
                                    <h3>Accurate and Precise in Test Results</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- project-section -->
        <section class="project-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Research</span>
                    <h2>Latest from case studies</h2>
                    <div class="btn-box"><a href="index.html" class="theme-btn">View More</a></div>
                </div>
                <div class="tabs-box">
                    <ul class="tab-btns tab-buttons clearfix p_relative d_iblock">
                        <li class="tab-btn active-btn" data-tab="#tab-5">All / 22</li>
                        <li class="tab-btn" data-tab="#tab-6">Hematology / 06</li>
                        <li class="tab-btn" data-tab="#tab-7">Biochemistry / 05</li>
                        <li class="tab-btn" data-tab="#tab-8">Serology / 03</li>
                        <li class="tab-btn" data-tab="#tab-9">Pathology / 02</li>
                        <li class="tab-btn" data-tab="#tab-10">Microbiology / 06</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-5">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-1.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-4.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-2.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-5.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-3.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-6.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-6">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-2.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Hematology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-5.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Hematology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-1.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Hematology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-4.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Hematology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-3.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Hematology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-6.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Hematology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-7">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-3.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-6.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-2.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-5.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-1.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-4.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Biochemistry</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-8">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-1.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-4.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-2.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-5.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-3.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-6.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Serology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-9">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-2.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Pathology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-5.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Pathology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-1.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Pathology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-4.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Pathology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-3.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Pathology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-6.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Pathology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-10">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-3.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-6.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">How to Navigate Challenges to Success</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-2.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-5.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">Clinical Trial Design Best Practices</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                                    <div class="project-block-one">
                                        <div class="inner-box">
                                            <div class="static-content">
                                                <figure class="image-box"><img src="{{ asset('home/images/project/project-1.jpg')}}" alt=""></figure>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{ asset('home/images/project/project-4.jpg')}}" alt=""></figure>
                                                    <div class="view-btn"><a href="{{ asset('home/images/project/project-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                                    <div class="link-btn"><a href="index.html"><i class="flaticon-right-arrow"></i></a></div>
                                                </div>
                                                <div class="lower-content">
                                                    <span class="category">Microbiology</span>
                                                    <h3><a href="index.html">Laboratory Medicine and Patient Care</a></h3>
                                                    <p>Able to claims of duty or the obligations pleasures have to repudiated...</p>
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
        <!-- project-section end -->


        <!-- pricing-section -->
        <section class="pricing-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Pricing & Plans</span>
                    <h2>Our convenient packages</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-table-one">
                            <div class="table-header" style="background-image: url({{ asset('home/images/resource/table-1.jpg')}});">
                                <h3>Biogenix Basic</h3>
                                <h2>$129.00<span>/ Person</span></h2>
                            </div>
                            <div class="inner-box">
                                <div class="table-content">
                                    <span class="category">Test Included (85)</span>
                                    <div class="feature-box">
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Arthritis</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Cardiac Risk Makers</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Complete Hemogram</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item"><p>Diabetes</p></div>
                                        <div class="single-item"><p>Elements</p></div>
                                        <div class="single-item"><p>Hormone</p></div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Iron Deficiency</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-footer">
                                    <a href="index.html">Book your test</a>
                                    <span>* Additional charges / Person $89.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-table-one active-block">
                            <div class="table-header" style="background-image: url({{ asset('home/images/resource/table-2.jpg')}});">
                                <div class="icon-box"><i class="flaticon-premium"></i></div>
                                <h3>Biogenix Premium</h3>
                                <h2>$159.00<span>/ Person</span></h2>
                            </div>
                            <div class="inner-box">
                                <div class="table-content">
                                    <span class="category">Test Included (126)</span>
                                    <div class="feature-box">
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Arthritis</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Cardiac Risk Makers</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Complete Hemogram</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item"><p>Diabetes</p></div>
                                        <div class="single-item"><p>Elements</p></div>
                                        <div class="single-item"><p>Hormone</p></div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Iron Deficiency</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-btn">
                                        <a href="index.html"><i class="flaticon-button"></i>View All Test</a>
                                    </div>
                                </div>
                                <div class="table-footer">
                                    <a href="index.html">Book your test</a>
                                    <span>* Additional charges / Person $120.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-table-one">
                            <div class="table-header" style="background-image: url({{ asset('home/images/resource/table-3.jpg')}});">
                                <h3>Biogenix Standard</h3>
                                <h2>$149.00<span>/ Person</span></h2>
                            </div>
                            <div class="inner-box">
                                <div class="table-content">
                                    <span class="category">Test Included (110)</span>
                                    <div class="feature-box">
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Arthritis</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Cardiac Risk Makers</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Complete Hemogram</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-item"><p>Diabetes</p></div>
                                        <div class="single-item"><p>Elements</p></div>
                                        <div class="single-item"><p>Hormone</p></div>
                                        <div class="single-item">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Iron Deficiency</button>
                                            <div class="dropdown-menu">
                                                <ul class="list clearfix">
                                                    <li>01. Blood gases</li>
                                                    <li>02. Complete blood count (CBC)</li>
                                                    <li>03. Electrolytes (sod..., pota..., chlor...)</li>
                                                    <li>04. Blood lipids (choles... & trigly...)</li>
                                                    <li>05. Blood sugar (glucose)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-footer">
                                    <a href="index.html">Book your test</a>
                                    <span>* Additional charges / Person $99.00 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Blogs & News</span>
                    <h2>Explore our latest post</h2>
                    <div class="btn-box"><a href="blog.html" class="theme-btn">View All Post</a></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('home/images/news/news-1.jpg')}}" alt=""></figure>
                                    <div class="link-btn"><a href="blog-details.html"><i class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog-details.html">Laboratory</a></div>
                                    <ul class="post-info clearfix">
                                        <li>11 August, 2022</li>
                                        <li><a href="blog-details.html">By Admin</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Ensure Your Product Quality with a Biogenix Lab</a></h3>
                                    <div class="lower-box">
                                        <div class="link"><a href="blog-details.html">Read More</a></div>
                                        <div class="right-info">
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                            </ul>
                                            <div class="comments-box"><a href="blog-details.html"><i class="fa-regular fa-comment-dots"></i>2</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('home/images/news/news-2.jpg')}}" alt=""></figure>
                                    <div class="link-btn"><a href="blog-details.html"><i class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog-details.html">Research</a></div>
                                    <ul class="post-info clearfix">
                                        <li>21 July, 2022</li>
                                        <li><a href="blog-details.html">By Admin</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">In the Pursuit of Quality a Laboratory Perspective</a></h3>
                                    <div class="lower-box">
                                        <div class="link"><a href="blog-details.html">Read More</a></div>
                                        <div class="right-info">
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                            </ul>
                                            <div class="comments-box"><a href="blog-details.html"><i class="fa-regular fa-comment-dots"></i>3</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('home/images/news/news-3.jpg')}}" alt=""></figure>
                                    <div class="link-btn"><a href="blog-details.html"><i class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a href="blog-details.html">technology</a></div>
                                    <ul class="post-info clearfix">
                                        <li>16 July, 2022</li>
                                        <li><a href="blog-details.html">By Admin</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">All you Need to Know about this Liver Disease</a></h3>
                                    <div class="lower-box">
                                        <div class="link"><a href="blog-details.html">Read More</a></div>
                                        <div class="right-info">
                                            <ul class="social-links clearfix">
                                                <li><a href="index.html"><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href="index.html"><i class="fa-brands fa-square-twitter"></i></a></li>
                                                <li><a href="index.html"><i class="fa-solid fa-basketball"></i></a></li>
                                            </ul>
                                            <div class="comments-box"><a href="blog-details.html"><i class="fa-regular fa-comment-dots"></i>6</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- booking-section -->
        <section class="booking-section sec-pad">
            <div class="bg-layer" style="background-image: url({{ asset('home/images/background/booking-bg.jpg')}});"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('home/images/shape/shape-7.png')}});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('home/images/shape/shape-8.png')}});"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <span class="rotate-text">Free Booking</span>
                            <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-9.png')}});"></div>
                            <div class="sec-title light">
                                <span class="sub-title">Book Your Test</span>
                                <h2>Health checkup packages online with Biogenix</h2>
                            </div>
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                                <h3>Request a Call Back</h3>
                                <form action="index.html" method="post">
                                    <div class="form-group">
                                        <div class="icon"><i class="fa-solid fa-phone-flip"></i></div>
                                        <input type="text" name="phone" placeholder="Your Phone" required="">
                                        <button type="submit"><i class="flaticon-right-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="form-inner">
                                <form action="index.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <i class="fa-solid fa-circle-user"></i>
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="xxxxxx" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <i class="fa-solid fa-envelope"></i>
                                            <label>Email</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <i class="fa-solid fa-calendar-check"></i>
                                            <label>Date</label>
                                            <input type="text" name="date" id="datepicker">
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                            <i class="fa-solid fa-clock"></i>
                                            <label>Time</label>
                                            <input type="text" name="time">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <label>Test Plan</label>
                                            <div class="select-box">
                                                <select class="selectmenu">
                                                    <option selected="selected">Select Plan</option>
                                                    <option>Biochemistry Tests</option>
                                                    <option>Microbiology Test</option>
                                                    <option>Histopatology</option>
                                                    <option>Hormonal Assay</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn">submit Here</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking-section end -->


        <!-- locations-section -->
        <section class="locations-section sec-pad centred">
            <div class="pattern-layer" style="background-image: url({{ asset('home/images/shape/shape-10.png')}});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Locations</span>
                    <h2>Support across 18+ countries <br />around the world</h2>
                </div>
                <div class="upper-box">
                    <div class="select-box">
                        <select class="selectmenu">
                            <option selected="selected">United States</option>
                            <option>United Kingdom</option>
                            <option>Italy</option>
                            <option>China</option>
                            <option>Japan</option>
                        </select>
                    </div>
                    <h5>We have 76 branches.</h5>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 location-block">
                        <div class="location-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('home/images/resource/location-1.jpg')}}" alt=""></figure>
                                <h6>United States</h6>
                                <h3>Rochester, Newyork</h3>
                                <p>145 Elmgrove Park Rochester, NY 14624, USA<br /> <a href="tel:18664050400">+1 866 405 0400</a></p>
                                <div class="link"><a href="contact.html">Send Mail <i class="flaticon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 location-block">
                        <div class="location-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ asset('home/images/resource/location-2.jpg')}}" alt=""></figure>
                                <h6>United States</h6>
                                <h3>New Rochelle, Newyork</h3>
                                <p>128 Golden Mall New Rochelle, NY 14624, USA <br /><a href="tel:18664050405">+1 866 405 0405</a></p>
                                <div class="link"><a href="contact.html">Send Mail <i class="flaticon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- locations-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>Who We Are</h3>
                                </div>
                                <div class="text">
                                    <p>Obligations of business it will frequently occur that pleasures have to repudiated annoyances accept therefore always holds principle of selection.</p>
                                </div>
                                <div class="lower-box">
                                    <div class="icon-box"><i class="flaticon-atom-1"></i></div>
                                    <h5>Laboratory Accreditation by ISO/IEC 17025</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Laboratory</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">History</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Our Team</a></li>
                                        <li><a href="index.html">Blogs & News</a></li>
                                        <li><a href="index.html">Research</a></li>
                                        <li><a href="index.html">Lab Brochure</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Patients</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Book a Test</a></li>
                                        <li><a href="index.html">Discounts</a></li>
                                        <li><a href="index.html">Nearest Lab</a></li>
                                        <li><a href="index.html">Packages</a></li>
                                        <li><a href="index.html">Home Collection</a></li>
                                        <li><a href="index.html">Programs</a></li>
                                        <li><a href="index.html">FAQ's</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">Appointment</a></li>
                                        <li><a href="index.html">Corporate Office</a></li>
                                        <li><a href="index.html">General Enquiry</a></li>
                                        <li><a href="index.html">Career</a></li>
                                        <li><a href="index.html">Book Your Test</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Popular Post</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset('home/images/resource/footer-post-1.jpg')}}" alt=""></a></figure>
                                        <span class="post-date">16 July, 2022</span>
                                        <h5><a href="blog-details.html">All you Need to Know about this Liver Disease</a></h5>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{ asset('home/images/resource/footer-post-2.jpg')}}" alt=""></a></figure>
                                        <span class="post-date">11 August, 2022</span>
                                        <h5><a href="blog-details.html">Ensure Your Product Quality with a Biogenix Lab</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="copyright">
                        <p>&copy; 2022 <a href="index.html">Biogenix.</a> All Rights Reserved.</p>
                    </div>
                    <ul class="download-list">
                        <li><h6>Download Your Report</h6></li>
                        <li><a href="index.html"><i class="flaticon-play-store"></i></a></li>
                        <li><a href="index.html"><i class="flaticon-apple"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-up-arrow"></i>
        </button>
        
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('home/js/jquery.js')}}"></script>
    <script src="{{ asset('home/js/popper.min.js')}}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('home/js/owl.js')}}"></script>
    <script src="{{ asset('home/js/wow.js')}}"></script>
    <script src="{{ asset('home/js/validation.js')}}"></script>
    <script src="{{ asset('home/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('home/js/appear.js')}}"></script>
    <script src="{{ asset('home/js/scrollbar.js')}}"></script>
    <script src="{{ asset('home/js/isotope.js')}}"></script>
    <script src="{{ asset('home/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('home/js/circle-progress.js')}}"></script>
    <script src="{{ asset('home/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('home/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('home/js/timePicker.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('home/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
