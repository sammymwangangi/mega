@extends('layouts.base')

@section('content')
    <!-- Content -->
    <div class="page-content  bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Projects</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
			<div class="section-full content-inner">
				<!-- Product details -->
				<div class="container-fluid">
					<!-- Gallery -->
                <div class="site-filters clearfix center m-b40" id="portfolio">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Show All</span></a> </li>
                        <li data-filter="home" class="btn">
                            <input type="radio" >
                            <a href="#" class="site-button-secondry button-skew"><span>Electrical Services</span></a> </li>
                        <li data-filter="office" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Solar Energy</span></a> </li>
                        <li data-filter="commercial" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Civil</span></a> </li>
                        <li data-filter="window" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Plumbing & Sewerage</span></a> </li>
                        <li data-filter="ict" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>ICT</span></a> </li>
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 gallery mfp-gallery">
                        <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/services/service1.png"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/services/service1.png" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/electrical/reinsurance.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/electrical/reinsurance.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/electrical/reinsurance1.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/electrical/reinsurance1.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/electrical/ruiru_flats.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/electrical/ruiru_flats.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/electrical/southc.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/electrical/southc.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="office card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="images/services/service2.png"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/services/service2.png" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="office card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="images/photos/solar/james2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/solar/james2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="office card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="images/photos/solar/joy_flats.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/solar/joy_flats.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ict card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/services/service4.png"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/services/service4.png" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/civil/civil5.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/civil/civil5.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/civil/civil.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/civil/civil.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/civil/civil2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/civil/civil2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/civil/civil3.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/civil/civil3.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/civil/civil4.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/civil/civil4.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/civil/civil6.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/civil/civil6.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/plumbing/plumbing4.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/plumbing/plumbing4.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/plumbing/plumbing3.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/plumbing/plumbing3.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="dez-box dez-gallery-box">
                                <div class="dez-media dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/photos/plumbing/plumbing2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/photos/plumbing/plumbing2.jpg" class="mfp-link" title="Title Come Here"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
					<!-- Gallery END -->
				</div>
				<!-- Product details -->
			</div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection