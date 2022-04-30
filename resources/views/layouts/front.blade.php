<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- Author Meta -->
    <meta name="author" content="شركة الشهد">
    <!-- Meta Description -->
    <meta name="description" content="شركة الشهد لعزل الفوم والعزل الحراراي">
    <!-- Meta Keyword -->
    <meta name="keywords" content="عزل فوم , عزل حراري , افضل شركة لعزل الفوم والعزل الحراري">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>شركة الشهد لعزل الفوم والعزل الحراري</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <!-- CSS Files -->
    <!-- linearicons Icon font -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/linearicons.css')}}">
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/font-awesome.min.css')}}">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/bootstrap-rtl.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/animate.min.css')}}">
    <!--owl slider-->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/owl.carousel.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <!-- media-queries (Responsive File) -->
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">
</head>

<body id="body">

<!-- Start Preloader Area -->
<div class="preloader-area">
    <div class="loader"></div>
</div>
<!-- End Preloader Area -->


<!-- Start Header Area -->
<header id="header" class="header_area">
    <div class="container header_pt20">
        <div class="row align-items-center justify-content-between">
            <div class="logo_area">
                <!-- Logo image -->
                <a href="{{ route('welcome') }}"><img src="{{asset('front-end/assets/img/logo.png')}}" alt="logo"></a>
            </div>
            <div class="whats-btn ml-5">
                {!! WhatsappBtn::make($companies->first()->phone); !!}
            </div>
        </div>
    </div>

</header>
<!-- End Header Area -->


<!-- start Banner Area -->
<section class="home-banner-area">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center">
            <div class="banner-content col-lg-6 col-md-12 justify-content-center ">
                <div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">أهـلا بكم</div>
                <h1 class="wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="1.7s">{{ $companies->first()->name }}</h1>
                <div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
                    سنوات طويله في
                    <span class="designer">العزل</span>
                    و العمل في
                    <span class="developer">الفوم</span>
                </div>
                <a href="#footer" class="primary-btn transition" data-text="تواصل معي">
                    <span>تواصل معي</span>
                </a>
            </div>

            <div class="banner-img col-lg-6 col-md-6 align-self-end">
                <img class="img-fluid" src="{{asset('front-end/assets/img/banner-img.png')}}" alt="personal pic">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@yield('content')

<!-- start footer Area -->
<footer class="footer-area" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer-top flex-column">
                    <div class="footer-logo text-center">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('front-end/assets/img/footer-logo.png') }}" alt="لوجو الشركة">
                        </a>
                        <h4>يمكنك متابعتي علي</h4>
                    </div>
                    <div class="footer-social text-center">
                        <a href="{{ $companies->first()->facebook }}" target="_blank"><i
                                class="fa fa-facebook transition"></i></a>
                        <a href="{{ $companies->first()->twitter }}" target="_blank"><i
                                class="fa fa-twitter transition"></i></a>
                        {!! WhatsappBtn::make($companies->first()->phone); !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom text-center justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                كل الحقوق محفوظه <i class="fa fa-heart-o" aria-hidden="true"></i> بواسطه <a href="#"
                                                                                            target="_blank">شركة الشهد</a>
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<!-- Start Scroll to Top Area  -->
<div class="transition" id="back-top">
    <a title="Go to Top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
</div>
<!-- End Scroll to Top Area -->
<!-- Essential jQuery Plugins -->

<!-- Main jQuery -->
<script src="{{asset('front-end/assets/js/jquery-2.2.4.min.js')}}"></script>
<!-- Twitter Bootstrap -->
<script src="{{asset('front-end/assets/js/bootstrap.min.js')}}"></script>
<!-- owl slider-->
<script src="{{asset('front-end/assets/js/owl.carousel.min.js')}}"></script>
<!-- isotope fillter-->
<script src="{{asset('front-end/assets/js/isotope.pkgd.min.js')}}"></script>
<!-- waypoints -->
<script src="{{asset('front-end/assets/js/waypoints.min.js')}}"></script>
<!-- counterup -->
<script src="{{asset('front-end/assets/js/jquery.counterup.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset('front-end/assets/js/wow.min.js')}}"></script>
<!-- Custom Functions -->
<script src="{{asset('front-end/assets/js/main.js')}}"></script>
</body>

</html>
