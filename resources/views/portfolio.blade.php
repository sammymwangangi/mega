@extends('layouts.base')

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Portfolio 1</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Portfolio 1</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- Portfolio -->
            <div class="container">
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Show All</span></a> </li>
                        <li data-filter="home" class="btn">
                            <input type="radio" >
                            <a href="#" class="site-button-secondry button-skew"><span>Builder</span></a> </li>
                        <li data-filter="office" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Electric</span></a> </li>
                        <li data-filter="commercial" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Painting</span></a> </li>
                        <li data-filter="window" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry button-skew"><span>Hammer</span></a> </li>
                    </ul>
                </div>
                <div class="clearfix">
                    <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 mfp-gallery">
                        <li class="home card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/pic1.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="office card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic2.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="children-aid card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic3.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/pic3.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="commercial card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic4.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic4.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="window card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic5.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic5.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="apartment card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic6.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic6.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="construction card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a href="images/gallery/pic1.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="home card-container col-lg-6 col-md-6 col-sm-6 col-6 m-b30">
                            <div class="dez-gallery-bx">
                                <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon"> <a href="javascript:void(0);"> <i class="fa fa-link icon-bx-xs"></i> </a> <a  href="images/gallery/pic2.jpg" class="mfp-link"> <i class="fa fa-picture-o icon-bx-xs"></i> </a> </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Pagination start -->
                <div class="pagination-bx clearfix">
                    <ul class="pagination">
                        <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Portfolio END-->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection