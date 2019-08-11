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
                    <li><a href="#">Home</a></li>
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
					<div class="site-filters clearfix center m-b40">
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
						<ul id="masonry" class="row dez-gallery-listing m-b0 gallery-grid-4 mfp-gallery">
							<li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Construction</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic1.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="office card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow dez-img-effect zoom"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Architecture</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic2.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="children-aid card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic3.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Consulting</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic3.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="commercial card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic4.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Architecture</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic4.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="window card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic5.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Mechanical</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic5.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="apartment card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic6.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Construction</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic6.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="construction card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic1.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Architecture</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic1.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="home card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Mechanical</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic2.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="office card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic9.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Architecture</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic9.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="office card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic8.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Consulting</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic8.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="office card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic2.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Construction</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic2.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="office card-container col-lg-3 col-md-3 col-sm-6 col-6">
								<div class="dez-box dez-gallery-box">
									<div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="images/gallery/pic5.jpg"  alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon"> 
												<h2 class="m-t0 text-white">Mechanical</h2>
												<div class="clearfix m-b15"><div class="dez-separator bg-white"></div></div>
												<a href="javascript:void(0);"> 
													<i class="fa fa-link icon-bx-xs radius-sm"></i> 
												</a> 
												<a href="images/gallery/pic5.jpg" class="mfp-link" title="Tile Come Here"> 
													<i class="fa fa-picture-o icon-bx-xs radius-sm"></i> 
												</a> 
											</div>
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