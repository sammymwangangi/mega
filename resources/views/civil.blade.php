@extends('layouts.base')

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg11.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Concrete Transport</h1>
					<div class="dez-separator bg-primary"></div>
					<p class="text-white max-w800">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Concrete Transport</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full bg-white content-inner">
            <!-- About Company -->
            <div class="container">
				<div class="row">
					@include('layouts.services')
					<div class="col-lg-9 col-md-8 col-sm-6">
						<div class="row">
							<div class="col-lg-6 col-md-12 m-b30">
								<div class="dez-box">
									<div class="dez-media m-b30 p-b5"> <a href="#"><img src="images/our-services/img11.jpg" alt=""></a> </div>
									<div class="dez-media"> <a href="#"><img src="images/our-services/pic4.jpg" alt=""></a></div>
								</div>
								
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="dez-box">
									
									<div class="dez-media"> <a href="#"><img src="images/our-services/img5.jpg" alt=""></a></div>
									<div class="dez-info m-t30 ">
										<h4 class="dez-title m-t0"><a href="#">From Start To finish</a></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
										<div class="dez-info m-t30 ">
										<h4 class="dez-title m-t0"><a href="#">The Initial Planning </a></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when. </p>
									</div>
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