<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="Description" content="BliJoe Coffee">

    <!-- Stylesheets
        ============================================= -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />

    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />

    <!-- One Page Module Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('one-page/onepage.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('one-page/css/et-line.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />

    <link rel="stylesheet" href="{{ asset('one-page/css/fonts.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" media="none" onload="if(media!='all')media='all'" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
        ============================================= -->
    <title>BliJoe Website</title>
</head>

<body class="stretched side-push-panel">

    <div class="body-overlay"></div>

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="full-header transparent-header border-full-header dark header-size-custom" data-sticky-shrink="false" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="" class="standard-logo" data-dark-logo="one-page/images/canvasone-dark.png"><img src="one-page/images/canvasone.png" alt="Canvas Logo"></a>
                            <a href="" class="retina-logo" data-dark-logo="one-page/images/canvasone-dark@2x.png"><img src="one-page/images/canvasone@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                            </svg>
                        </div> -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <!-- <nav class="primary-menu">

                            <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#wrapper">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-about">
                                        <div>About</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-works">
                                        <div>Works</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-services">
                                        <div>Services</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-blog">
                                        <div>Blog</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-contact">
                                        <div>Contact</div>
                                    </a>
                                </li>
                            </ul>

                        </nav>#primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Slider
        ============================================= -->
        <section id="slider" class="slider-element slider-parallax dark min-vh-60 min-vh-md-100 include-header">
            <div class="slider-inner" style="background-image: url('images/coffee/Mountain.jpg'); background-size: cover; background-position: center top;">

                <div class="vertical-middle slider-element-fade">
                    <div class="container text-center py-5">

                        <div class="heading-block center border-bottom-0">

                            <h1 data-animate="fadeInUp" class="fadeInUp animated">New Year, Same Great Coffee</h1>

                            <a href="" class="button button-border button-light button-circle button-large ml-0 topmargin-sm" data-scrollto="#section-products" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">View our Products</a>

                        </div>



                    </div>
                </div>

                <div class="video-wrap">
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                </div>

                <a href="" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

            </div>
        </section><!-- #slider end -->

        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap py-0">

                <div id="section-about" class="center page-section" style="background-color: #F5F5F5;">

                    <div class="container clearfix">

                        <div class="heading-block topmargin-lg center nobottomborder border-bottom-0">
                            <h2 class="mx-auto bottommargin font-body" style="max-width: 700px; ">It started with simple idea: <br>
                                Make great coffee.</h2>

                            <span class="mx-auto">Everything we do is rooted in that basic concept. It’s what drives us. It’s what moves us, motivates us and keeps us excited about every decision we make about our products, our services and all that we do in the community. We are coffee passionate.</span>
                        </div>

                    </div>

                </div>

                <div id="section-products" class="center page-section">

                    <div class="heading-block topmargin-lg center">
                        <h3 class="heading-block border-bottom-0">Featured Products</h3>
                    </div>

                    <div class="clear"></div>

                    <div class="row topmargin-lg mx-auto" style="max-width: 1300px;">

                        <div class="col-7 col-sm-6 col-md-3 mb-5 m-auto">

                            <div class="team">
                                <div class="team-image">
                                    <img src="https://cdn.shopify.com/s/files/1/0442/7451/6128/products/Almond-Love@3x.png?v=1603988792" loading="lazy" alt="Almond Love">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-center" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="" class="button button-dark button-rounded button-large ml-0 topmargin-sm">
                                                View Product</a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Almond Love</h4><span style="color: black;">$14.50</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-7 col-sm-6 col-md-3 mb-5 m-auto">

                            <div class="team">
                                <div class="team-image">
                                    <img src="https://cdn.shopify.com/s/files/1/0442/7451/6128/products/Billy-Goat_8351ef9e-ad79-4868-a7ec-9e364271da6b@3x.png?v=1603988799" loading="lazy" alt="Billy Goat">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-center" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="" class="button button-dark button-rounded button-large ml-0 topmargin-sm">
                                                View Product</a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Billy Goat Breakfast Blend</h4><span style="color: black;">$14.50</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-7 col-sm-6 col-md-3 mb-5 m-auto">

                            <div class="team">
                                <div class="team-image">
                                    <img src="https://cdn.shopify.com/s/files/1/0442/7451/6128/products/Goat-Tracks_5f782758-9777-493a-b637-3d327f651576@3x.png?v=1603988875" alt="Goat Tracks">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-center" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="" class="button button-dark button-rounded button-large ml-0 topmargin-sm">
                                                View Product</a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Goat Tracks</h4><span style="color: black;">$14.50</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row mx-auto" style="max-width: 1300px;">

                        <div class="col-7 col-sm-6 col-md-3 mb-5 m-auto">

                            <div class="team">
                                <div class="team-image">
                                    <img src="https://cdn.shopify.com/s/files/1/0442/7451/6128/products/Mountain-Goat@3x.png?v=1603988927" loading="lazy" alt="Mountain Goat">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-center" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="" class="button button-dark button-rounded button-large ml-0 topmargin-sm">
                                                View Product</a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Mountain Goat House Blend</h4><span style="color: black;">$14.50</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-7 col-sm-6 col-md-3 mb-5 m-auto">

                            <div class="team">
                                <div class="team-image">
                                    <img src="https://cdn.shopify.com/s/files/1/0442/7451/6128/products/Southern-Pecan@3x.png?v=1603988954" loading="lazy" alt="Southern Pecan">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-center" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="" class="button button-dark button-rounded button-large ml-0 topmargin-sm">
                                                View Product</a>
                                        </div>
                                        <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                    </div>
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title">
                                        <h4>Southern Pecan</h4><span style="color: black;">$14.50</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="section m-0" style="border-collapse: separate; border-radius: 2rem;">
                            <div class="container clearfix">

                                <div class="heading-block border-bottom-0" style="margin-bottom: 30px;">

                                    <h5 style="margin-bottom: 20px;">There's always more</h5>

                                    <h1>Keep Shopping</h1>

                                </div>

                            </div>

                            <a href="" class="button button-dark button-rounded button-large ml-0" style="margin-right:20px">
                                Shop All Coffee</a>

                            <a class="button button-border button-dark button-rounded button-large ml-0" style="margin-left: 20px;">
                                Shop Merchandise</a>

                        </div>

                    </div>


                </div>


                <div id="section-works" class="page-section pt-0">

                    <div id="section-about" class="center page-section" style="background-image: url('images/coffee/wholesale-bg.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">

                        <div class="container clearfix">

                            <div class="heading-block topmargin-lg center nobottomborder border-bottom-0 dark">

                                <h4 class="mx-auto bottommargin font-body">We're more than a cafe</h4>

                                <h1 class="mx-auto bottommargin font-body"><strong>Explore Wholesale</strong></h1>

                            </div>

                            <p class="lead mx-auto bottommargin dark">From bulk coffee orders to cafe consultation and equipment servicing and beyond, we’ve got you covered.</p>

                            <a href="" class="button button-dark button-rounded button-large ml-0 topmargin-sm">Get Started</a>

                        </div>

                    </div>

                </div>

                <div id="section-contact" class="page-section pt-0 margintop-lg lazyload" data-bgset="https://wp.luckygoatcoffee.com/wp-content/uploads/goat.svg" style="background-size: contain; background-repeat: no-repeat; background-position: center center; padding: 180px 0;">

                    <div class="container clearfix">

                        <div class="heading-block margintop-lg center nobottomborder border-bottom-0">
                            <h2 class="mx-auto bottommargin font-body" style="max-width: 700px; ">Never miss out</h2>

                            <span class="mx-auto">Join our mailing list and stay up-to-date on new products, promotions and all things coffee.</span>
                        </div>

                        <div class="input-group center" style="max-width:400px; margin-left:auto; margin-right:auto">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                            </div>
                            <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Email Address" style="font-size: 14px; height:40px">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="submit" style="background-color: #9d8460; border-color: #9d8460">Subscribe Now</button>
                            </div>
                        </div>

                    </div>

                </div>

                <div style="margin-bottom: 100px;"></div>

            </div>
        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark border-0">

            <div class="container center">
                <div class="footer-widgets-wrap">

                    <div class="row mx-auto clearfix">

                        <div class="col-lg-6">

                            <div class="widget clearfix">
                                <h4>Site Links</h4>

                                <ul class="list-unstyled footer-site-links mb-0">
                                    <li><a href="" data-scrollto="#wrapper" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Top</a></li>
                                    <li><a href="" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">About</a></li>
                                    <li><a href="" data-scrollto="#section-products" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Products</a></li>
                                    <li><a href="" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Works</a></li>
                                    <li><a href="" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Contact</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="widget clearfix">
                                <h4>Contact</h4>

                                <p class="lead">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>

                                <div class="center topmargin-sm">
                                    <a href="" class="social-icon inline-block border-0 si-small si-facebook" title="Facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="" class="social-icon inline-block border-0 si-small si-twitter" title="Twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="" class="social-icon inline-block border-0 si-small si-github" title="Github">
                                        <i class="icon-github"></i>
                                        <i class="icon-github"></i>
                                    </a>
                                    <a href="" class="social-icon inline-block border-0 si-small si-pinterest" title="Pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div id="copyrights">
                <div class="container center clearfix">
                    Copyrights Canvas 2020 | All Rights Reserved
                </div>
            </div>

        </footer><!-- #footer end -->


    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
    ============================================= -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <script src="https://afarkas.github.io/lazysizes/plugins/bgset/ls.bgset.min.js"></script>
    <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script src="{{ asset('js/functions.js') }}"></script>

</body>

</html>