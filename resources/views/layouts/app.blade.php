<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="IMT Conference">

    <meta name="keywords" content="IMT Conference">
    <meta name="author" content="Kenneth Ossai">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index,follow">

    {{-- <link rel="icon" type="image/png" href="{{ asset('images/logos/NBA_logo1.png') }}"> --}}

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Site Title -->
    <title>@yield('title', config('app.name'))</title>

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/aos.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/lightbox.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/gijgo.min.css">
    <link rel="stylesheet" href="{{ asset('scsss/loader.scsss') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">


</head>

<body>

    <div class="main-wrapper">
        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Header Start Transparent header  -->
        <div id="header" class="section exvent-header-2">

            <div class="container">

                <!-- Header Wrap Start  -->
                <div class="header-wrap">

                    <div class="header-logo">
                        <a href="/"><img  src="{{ asset('assets/images/logo/IMT 2.0-02.png') }}" alt=""></a>
                    </div>

                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                            <li><a href="about.html">Aboute Us</a></li>
                            <li><a href="#">Why Attend</a></li>
                            <li><a href="blog.html">Sponsorship Benefits</a></li>
                            <li><a href="about.html">Organisers</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            @auth
                                <li>
                                    <a href="blog.html">
                                        <img src="{{ user('photo') }}" alt="Photo" width="30"
                                                class="rounded-circle">
                                            {{ user('name') }}
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('users.show', user()) }}">Profile</a></li>
                                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                            <li><a href="{{ route('login') }}">login</a></li>
                        </ul>
                    </div>

                    <!-- Header Meta Start -->
                    <div class="header-meta">


                        <div class="header-btn d-none d-xl-block">
                            <a href="{{ route('register') }}">
                                <button class="btn-5" style="width: 130px;">Register Now</button>
                            </a>
                        </div>
                        <!-- Header Button End -->
                        @endif
                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <!-- Header Meta End  -->

                </div>
                <!-- Header Wrap End  -->

            </div>
        </div>
        <!-- Header End -->

        <!-- Offcanvas Start-->
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>

            <!-- Offcanvas Body Start -->
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="/">Home</a></li>
                        <li>
                            <a href="about.html">Aboute Us</a>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="speaker-01.html">Speaker 01</a></li>
                                <li><a href="speaker-02.html">Speaker 02</a></li>
                                <li><a href="speaker-03.html">Speaker 03</a></li>
                                <li><a href="speaker-single.html">Speaker Single</a></li>
                                <li><a href="event-list.html">Event List</a></li>
                                <li><a href="event-schedule.html">Event Schedule</a></li>
                                <li><a href="event-single.html">Event Single</a></li>
                                <li><a href="login-register.html">Login & Register</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="faq.html">FQA's</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog list</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- Offcanvas Body End -->
        </div>
        <!-- Offcanvas End -->


        @yield('content')





    </div>
    <!-- JS
    ============================================ -->
    <script src="{{ asset('assets') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/modernizr-3.11.2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets') }}/js/plugins/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/aos.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/back-to-top.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/appear.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/lightbox.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/gijgo.min.js"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-notify.js?v=1.0') }}"></script>

    <script src="{{ asset('assets/js/request.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6484c3ec94cf5d49dc5cea72/1h2j9qm31';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

    </html>
