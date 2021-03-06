<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="From concept to creation." />
    <meta property="og:title" content="Megatricity - From concept to creation" />
    <meta property="og:description" content="From concept to creation." />
    <meta property="og:image" content="og_img/index1.png" />
    <meta name="format-detection" content="telephone=no">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Megatricity - From Concept to Creation</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset ('css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('css/style.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{asset ('css/skin/skin-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('css/templete.css')}}">
    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{asset ('plugins/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset ('plugins/revolution/css/navigation.css')}}">
    <!-- Revolution Navigation Style -->   
</head>

<body id="bg"><div id="loading-area"></div>
    <div class="page-wraper">
        <!-- header -->
        <header class="site-header header mo-left header-style-1 ">
            <!-- top bar -->
            <div class="top-bar clearfix">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="dez-topbar-left"> </div>
                        <div class="dez-topbar-right">
                            <ul class="social-bx list-inline pull-right">
                                <li><a href="https://www.fb.com/megatricity" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.twitter.com/megatricity" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.instagram.com/megatricity" class="fa fa-instagram"></a></li>
                                <li><a href="https://www.youtube.com/channel/UCqjR25muSHsaJobHevUHVGg" class="fa fa-youtube"></a></li>
                                <li><a href="https://houzz.com/pro/megatricity" class="fa fa-houzz"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top bar END-->
            <!-- main header -->
            <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
                <div class="main-bar bg-primary clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion">
                            <a href="index-2.html">
                                <img src="images/logo-white.png" width="193" height="89" alt="">
                            </a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Quik search -->
                        <div class="dez-quik-search bg-primary">
                            <form action="#">
                                <input name="search" value="search" type="text" class="form-control" placeholder="Type to search">
                                <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                            </form>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="nav navbar-nav">
                                <li class="{{Request::is('/') ? 'active': ''}}"> <a href="{{url ('/')}}">Home</a>
                                </li>
                                <li class="{{Request::is('about') ? 'active': ''}}"> <a href="{{url ('about')}}">About Us</a>
                                </li>
                                <li class="{{Request::is('services') ? 'active': ''}} "> <a href="{{url ('services')}}">Our Services</a>
                                </li>
                                <li class="{{Request::is('projects') ? 'active': ''}}"> <a href="{{url ('projects')}}">Our Projects</a>
                                </li>
                                <li class="{{Request::is('blog') ? 'active': ''}}"> <a href="{{url ('blog')}}">Blog</a>
                                </li>
                                <li class="{{Request::is('contact') ? 'active': ''}}"> <a href="{{url ('contact')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->

        @yield('content')

        <!-- Footer -->
        <footer class="site-footer">
            <!-- newsletter part -->
            <div class="bg-primary dez-newsletter">
                <div class="container equal-wraper">
                    <form class="dzSubscribe" action="#" method="post">
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="icon-bx-wraper equal-col p-t30 p-b20 left">
                                    <div class="icon-lg text-primary radius"> <a href="#" class="icon-cell"><i class="fa fa-envelope-o"></i></a> </div>
                                    <div class="icon-content"> <strong class="text-black text-uppercase font-18">Subscribe</strong>
                                        <h2 class="dez-tilte text-uppercase">Our Newsletter</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="dzSubscribeMsg"></div>
                                <div class="input-group equal-col p-t40 p-b20">
                                    <input name="dzEmail" required placeholder="Email address" required="required" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 offset-lg-1 offset-md-1">
                                <div class="equal-col p-t40 p-b20 skew-subscribe">
                                    <button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1"> 
                                        <span>Subscribe</span><i class="fa fa-angle-right"></i> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- footer top part -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                            <div class="widget widget_about">
                                <div class="logo-footer"><img src="images/logo-dark.png" alt=""></div>
                                <p><strong>Our mission </strong>is to build trust with leadership, certainty and value to ensure successful construction projects for our clients.</p>
                                <ul class="dez-social-icon dez-border">
                                    <li><a href="https://www.fb.com/megatricity" class="fa fa-facebook"></a></li>
                                    <li><a href="https://www.twitter.com/megatricity" class="fa fa-twitter"></a></li>
                                    <li><a href="https://www.instagram.com/megatricity" class="fa fa-instagram"></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCqjR25muSHsaJobHevUHVGg" class="fa fa-youtube"></a></li>
                                    <li><a href="https://houzz.com/pro/megatricity" class="fa fa-houzz"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                            <div class="widget recent-posts-entry">
                                <h4 class="m-b15 text-uppercase">Recent Post</h4>
                                <div class="dez-separator-outer m-b10">
                                    <div class="dez-separator bg-white style-skew"></div>
                                </div>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                            </div>
                                            <div class="dez-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                            </div>
                                            <div class="dez-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dez-post-media"> <img src="images/blog/recent-blog/pic3.jpg" alt="" width="200" height="160"> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title  text-uppercase"><a href="blog-single.html">Title of first blog</a></h6>
                                            </div>
                                            <div class="dez-post-meta">
                                                <ul>
                                                    <li class="post-author">By <a href="#">Admin</a></li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                            <div class="widget widget_services">
                                <h4 class="m-b15 text-uppercase">Our services</h4>
                                <div class="dez-separator-outer m-b10">
                                    <div class="dez-separator bg-white style-skew"></div>
                                </div>
                                <ul>
                                    <li><a href="{{url('electrical')}}">Electrical Services</a></li>
                                    <li><a href="{{url('solar')}}">Solar Energy</a></li>
                                    <li><a href="{{url('civil')}}">Civil</a></li>
                                    <li><a href="{{url('plumbing')}}">Plumbing</a></li>
                                    <li><a href="{{url('ict')}}">ICT</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                            <div class="widget widget_getintuch">
                                <h4 class="m-b15 text-uppercase">Contact us</h4>
                                <div class="dez-separator-outer m-b10">
                                    <div class="dez-separator bg-white style-skew"></div>
                                </div>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><strong>address</strong> Ground Floor, Murerwa Flats, Donholm Rd – Emabakasi Nairobi, Kenya </li>
                                    <li><i class="fa fa-phone"></i><strong>phone</strong>+254 (708) 054 155 <br>+254 (738) 445 381</li>
                                    <li><i class="fa fa-fax"></i><strong>POST OFFICE</strong>P.O. Box 35370-00200 Nairobi</li>
                                    <li><i class="fa fa-envelope"></i><strong>email</strong>info@megatricity.co.ke</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bottom part -->
            <div class="footer-bottom footer-line">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 text-left">
                            <span>© Copyright 2019</span> 
                        </div>
                        <div class="col-lg-4 col-md-4 text-center">
                            <span> Design With <i class="fa fa-heart text-primary heart"></i> By Craftsof </span>
                        </div>
                        <div class="col-lg-4 col-md-4 text-right">
                            <a href="{{url('about')}}"> About Us</a> 
                            <a href="{{url('404')}}"> FAQs</a> 
                            <a href="{{url('contact')}}"> Contact Us</a> 
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer END-->
        <!-- scroll top button -->
        <button class="scroltop fa fa-arrow-up style5" ></button>
    </div>

    <!-- JavaScript  files ========================================= -->
    <script src="{{asset ('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script src="{{asset ('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset ('plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{asset ('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
    <script src="{{asset ('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
    <script src="{{asset ('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{asset ('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
    <script src="{{asset ('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script src="{{asset ('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
    <script src="{{asset ('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
    <script src="{{asset ('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
    <script src="{{asset ('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
    <script src="{{asset ('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{asset ('js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
    <script src="{{asset ('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
    <!-- CONTACT JS  -->
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset ('plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset ('plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset ('js/rev.slider.js')}}"></script>
    <script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_1();
    }); /*ready*/
    </script>    
</body>

</html>