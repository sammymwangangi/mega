@extends('layouts.base')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- Breadcrumb  row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>404</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb  row END -->
        <!-- contact area -->
        <div class="container">
            <!-- 404 Page -->
			<div class="section-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-notfound text-center">
                            <form method="post">
                                <strong>404</strong>
                                <h5 class="m-b20 text-uppercase">Page  <i class="fa fa-exclamation-triangle text-primary"></i> not found</h5>
                                <a href="{{url('/')}}" class="site-button-secondry"><span>Go To Home</span><i class="fa fa-angle-right m-l15"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
            <!-- 404 Page END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
@endsection
