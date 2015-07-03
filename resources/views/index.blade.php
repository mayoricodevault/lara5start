@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home | Laravel 5 Start Up Kit
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl-carousel/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/ihover/src/ihover.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/demo/css/styles.css') }}">
    <!--end of page level css-->

@stop


{{-- Page content --}}
<!-- Container Section Start -->
@section('content')
    <div class="container">
        <!-- Recent works Section Start -->
        <div class="services">
            <h3>
            <label class="border-bottom">Recent Works</label>
        </h3>
            <div class="row rcnt-wrk">
                <div class="ih-item square colored effect13 left_to_right">
                    <a href="#">
                        <div class="img"> <img src="{{ asset('assets/images/recent_works/1.jpg') }}" class="img-responsive"></div>
                        <div class="info">
                            <h3>Macaroon jujubess</h3>
                            <p>consectetur adipiscing elit</p>
                        </div>
                    </a>
                </div>
                <div class="ih-item square colored effect13 left_to_right">
                    <a href="#">
                        <div class="img"> <img src="{{ asset('assets/images/recent_works/2.jpg') }}" class="img-responsive"></div>
                        <div class="info">
                            <h3>Macaroon sweet roll </h3>
                            <p>consectetur adipiscing elit</p>
                        </div>
                    </a>
                </div>
                <div class="ih-item square colored effect13 left_to_right">
                    <a href="#">
                        <div class="img"> <img src="{{ asset('assets/images/recent_works/3.jpg') }}" class="img-responsive"></div>
                        <div class="info">
                            <h3>Explorations take root</h3>
                            <p>consectetur adipiscing elit</p>
                        </div>
                    </a>
                </div>
                <div class="ih-item square colored effect13 left_to_right">
                    <a href="#">
                        <div class="img"> <img src="{{ asset('assets/images/recent_works/4.jpg') }}" class="img-responsive"></div>
                        <div class="info">
                            <h3>Emerged consciousness </h3>
                            <p>consectetur adipiscing elit</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- //Recent works Section End -->

        <!-- Text-bg Section Start -->
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="left_text_box">
                    <h3> Admin & Frontend Start Up Kit</h3> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    <br />
                </div>
            </div>
        </div>
        <!-- //TYxt-bg Section End -->
        <!-- Services Heading Section Start -->
        <div class="row services">
            <h3>
                <label class="border-bottom">Services
                </label>
            </h3>
        </div>
        <!-- //Services Heading Section End -->
        <!-- Services Section Start -->
        <div class="row">
            <!-- Web Design Section Start -->
            <div class="col-md-4">
                <h4 class="primary"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Web Design</h4>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            </div>
            <!-- //Web Design Section End-->
            <!-- Graphic Design -->
            <div class="col-md-4">
                <h4 class="primary"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Graphic Design</h4>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            </div>
            <!-- //Graphic Design End -->
            <!-- Internet Marketing Section Start  -->
            <div class="col-md-4">
                <h4 class="primary"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;Internet Marketing</h4>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
            </div>
            <!-- //Internet Marketing Section End -->
        </div>
        <!-- //Services Section End -->
    </div>



    <!-- //Container Section End -->
@stop

@section('footer_scripts')
    <!--page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/demo/js/scrollview.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
    <!--page level js End-->
@stop