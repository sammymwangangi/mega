@extends('layouts.base')

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/main-slider/slide1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white ">All Services</h1>
					<div class="dez-separator bg-primary"></div>
					<p class="text-white max-w800">MEGATRICITY is composed of craftsmen who deliver unique products that are highly innovative and world Class</p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>All Services</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="widget_services style-2 m-b40">
							<ul>
								<li class="active"><a href="{{url('services')}}">ALL SERVICES</a> </li>
								<li><a href="{{url('electrical')}}">ELECTRICAL SERVICES</a>  </li>
								<li><a href="{{url('civil')}}">CIVIL & DESIGN</a>  </li>
								<li><a href="{{url('ict')}}">ICT</a>  </li>
								<li><a href="{{url('solar')}}">SOLAR ENERGY</a> </li>
								<li><a href="{{url('plumbing')}}">PLUMBING & SEWERAGE</a> </li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="widget-title">Get your brochures</h4>
							<div class="download-file">
								<ul>
									<li>
										<a href="files/pdf-sample.pdf" target="_blank">
											<span class="pull-left"><i class="fa fa-file-pdf-o"></i></span>
											<span class="file-name">Company Brochures</span>
											<i class="fa fa-download"></i>
										</a>
									</li>
									<li>
										<a href="files/pdf-sample.pdf" target="_blank">
											<span class="pull-left"><i class="fa fa-file-pdf-o"></i></span>
											<span class="file-name">Company Info</span>
											<i class="fa fa-download"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget  widget_getintuch">
							<h4 class="widget-title">Contact us</h4>
							<ul>
								<li><i class="fa fa-map-marker"></i><strong>address</strong> Ground Floor, Murerwa Flats, Donholm Rd – Emabakasi Nairobi, Kenya </li>
								<li><i class="fa fa-phone"></i><strong>phone</strong>+254 (708) 054 155<br>
									+254 (738) 445 381</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-6">
						<div class="row">
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="{{url('electrical')}}"><img src="images/services/service1.png" alt=""></a> </div>
                                    <div class="dez-info">
                                        <h4 class="dez-title m-t20"><a href="{{url('electrical')}}">Electrical Services</a></h4>
                                        <p>we handle all electrical projects from residential, commercial to industrial. [...] </p>
                                        <a href="{{url('electrical')}}" class="site-button">More</a>
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="{{url('civil')}}"><img src="images/photos/civil/civil5.jpg" alt=""></a> </div>
                                    <div class="dez-info">
                                        <h4 class="dez-title m-t20"><a href="{{url('civil')}}">Civil & Design</a></h4>
                                        <p>We design Structures (Schematic & 3D model) and ensure that each project however small, is Innovative, detailed and built to highest standards. [...] </p>
                                        <a href="{{url('civil')}}" class="site-button">More</a>
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="{{url('ict')}}"><img src="images/services/service4.png" alt=""></a> </div>
                                    <div class="dez-info">
                                        <h4 class="dez-title m-t20"><a href="{{url('ict')}}">ICT</a></h4>
                                        <p>We Help Clients Achieve Success through Technology. Our commitment to our clients remains our top priority. [...] </p>
                                        <a href="{{url('ict')}}" class="site-button">More</a>
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="{{url('solar')}}"><img src="images/services/service2.png" alt=""></a> </div>
                                    <div class="dez-info">
                                        <h4 class="dez-title m-t20"><a href="{{url('solar')}}">Solar Energy</a></h4>
                                        <p>It's time to maximize the benefits of solar panels and we are the company to help you with the process, from start to finish. [...] </p>
                                        <a href="{{url('solar')}}" class="site-button">More</a>
									</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="{{url('plumbing')}}"><img src="images/photos/plumbing/plumbing4.jpg" alt=""></a> </div>
                                    <div class="dez-info">
                                        <h4 class="dez-title m-t20"><a href="{{url('plumbing')}}">Plumbing & Sewerage </a></h4>
                                        <p>We give our customers choices in top-notch residential and commercial plumbing services. [...] </p>
                                        <a href="{{url('plumbing')}}" class="site-button">More</a>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
				</div>
			<!-- About Company END -->
		</div>
        <!-- contact area  END -->
	</div>
    <!-- Content END-->
@endsection