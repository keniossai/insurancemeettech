<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="NBA Conference">

    <meta name="keywords" content="NBA Conference">
    <meta name="author" content="Krystal Digital Solutions">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index,follow">

    <link rel="icon" type="image/png" href="{{ asset('images/logos/NBA_logo1.png') }}">

    <!-- Site Title -->
    <title>@yield('title', config('app.name'))</title>

    <!-- CSS ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- magnific -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- isotop -->
    <link rel="stylesheet" href="{{ asset('css/isotop.css') }}">
    <!-- ico fonts -->
    <link rel="stylesheet" href="{{ asset('css/xsIcon.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('css/style.css?v=3') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    {{-- coming soon --}}
    <link rel="stylesheet" href="{{ asset('scss/loader.scss') }}">

    <script src="{{ asset('js/jquery.js') }}"></script>

    <style>
        .preloader {
            display: none
        }

        html {
            scroll-behavior: smooth;
        }

        .header.header-transparent.nav-border {
            border-bottom: none;
        }

        .header.sticky,
        .btn,
        .single-intro-text .count-number {
            background-color: #7C4C64;
            box-shadow: 0 0 10px rgba(0, 0, 0, .50);
        }

        .btn:hover {
            background: linear-gradient(144deg, #1d2b5f 0%, #3b3335 100%, #1d2b5f 100%);
        }

        /* #header{
            background-color: #fff;
         }

         #header .navbar ul li a{
            color: #000;
         } */
    </style>
</head>

<body>

    <div class="body-inner">

        <!-- Header start -->
        <header id="header" class="header header-transparent nav-border">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- logo-->
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logos/NBA_logo1.png') }}" alt="NBA Logo" width="60">
                        <!--NBA CONFERENCE 2020-->
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item active show">
                                <a href="/" class="" data-toggle="dropdown" aria-expanded="true">Home<i
                                        class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>

                            @if (false)
                                <li class=" nav-item  show">
                                    <a target="_blank"
                                        href="{{ asset('Conference-Brochure.pdf') }}">Program/Sessions</a>
                                </li>
                            @endif
                            <li class=" nav-item  show">
                                <a href="{{ route('speakers.index') }}">Speakers</a>
                            </li>
                            @if (false)
                            <li class="dropdown nav-item active show">
                                <a href="/" class="" data-toggle="dropdown"
                                    aria-expanded="true">Hotel/Travel<i class="fa fa-angle-down"></i></a>
                                {{-- <ul class="dropdown-menu" role="menu">
                                <li><a target="_blank" href="https://nacobooking.com/special-offer">Hotels</a></li>

                            </ul> --}}
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Hotels</a></li>

                                </ul>
                            </li>
                            @endif

                            <li class="nav-item">
                                <a target="_blank"
                                    href="{{ cloudinary_url('nbaconference/misc/conference_Fees_2023_jpeg_edyhcl') }}">Registration
                                    Fee Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank"
                                    href="{{ asset('document/nba_agc_2023_faqs.pdf') }}">
                                    FAQs
                                </a>
                            </li>
                            <li class=" nav-item">
                                <a href="https://www.nigerianbar.org.ng/" target="_blank">NBA</a>
                            </li>
                            @auth
                                <li class="dropdown nav-item active show">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ user('photo') }}" alt="Photo" width="30"
                                            class="rounded-circle">
                                        {{ user('name') }}
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('users.show', user()) }}">My Profile</a></li>

                                        @admin
                                            <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                                            <li><a href="#">Generate IDs</a></li>
                                        @endadmin

                                        <li><a href="{{ route('logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="header-ticket nav-item">
                                    <a style="background-color: #ffb20d;" class="ticket-btn btn"
                                        href="{{ route('register') }}"> Register</a>
                                </li>
                                @endif

                            </ul>
                        </div>
                    </nav>
                </div><!-- container end-->
            </header>
            <!--/ Header end -->

            @yield('content')

            <div class="footer-area">
                <!-- ts-book-seat start-->
                <!-- book seat  end-->

                <!-- footer start-->
                <footer class="ts-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="ts-footer-social text-center mb-30">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/NBAConferenceNG" target="_blank"><i
                                                    class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="mailto:info@nbaconference.com" target="_blank"><i
                                                    class="fa fa-envelope"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/nbaconferenceng" target="_blank"><i
                                                    class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- footer social end-->
                                <div class="footer-menu text-center mb-25">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{{ route('speakers.index') }}">Speakers</a></li>
                                        <li><a href="{{ url(route('privacy-policy')) }}">Privacy Policy</a></li>

                                        @auth
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                        @endauth
                                    </ul>
                                </div><!-- footer menu end-->
                                <hr>
                                <div class="copyright-text text-center">
                                    <p>Copyright ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script><a href="https://nigerianbar.org.ng"> Nigerian Bar
                                            Association</a>.
                                        Powered by <a href="https://krystaldigitalng.com">Krystal Digital</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->

                <div class="BackTo">
                    <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
                </div>
            </div>
            <!-- ts footer area end-->


            <!-- Javascript Files ================================================== -->
            <!-- initialize jQuery Library -->

            <script src="{{ asset('js/popper.min.js') }}"></script>
            <!-- Bootstrap jQuery -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <!-- Counter -->
            <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
            <!-- Countdown -->
            <script src="{{ asset('js/jquery.jCounter.js') }}"></script>
            <!-- magnific-popup -->
            <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
            <!-- carousel -->
            <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
            <!-- Waypoints -->
            <script src="{{ asset('js/wow.min.js') }}"></script>
            <!-- isotop -->
            <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
            <!-- scrollme -->
            <script src="{{ asset('js/jquery.scrollme.js') }}"></script>
            <!-- Template custom -->
            <script src="{{ asset('js/main.js?v=0') }}"></script>

            <!-- Bootstrap Notify -->
            <script src="{{ asset('js/bootstrap-notify.js?v=1.0') }}"></script>
            <!-- Custom App JS -->
            <script src="{{ asset('js/request.js?v=1.01') }}"></script>
            <!-- SweetAlert -->
            <script src="{{ asset('js/sweetalert.min.js') }}"></script>

            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
                var Tawk_API = Tawk_API || {},
                    Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script"),
                        s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = 'https://embed.tawk.to/6123b638d6e7610a49b19247/1fdpnvjj7';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                })();
            </script>
            <!--End of Tawk.to Script-->

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176419729-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'UA-176419729-1');
            </script>

            <script>
                $('[data-toggle=tooltip]').tooltip();
            </script>

        @if(false)
            <script>
                if (!localStorage.hotels) {
                    setTimeout(() => {
                        swal({
                            title: "Hotel Booking",
                            text: "Information on hotel booking is now available",
                            icon: "info",
                            buttons: ["Cancel", "Show me..."]
                        }).then((confirm) => {
                            if (confirm) location.href = "https://nacobooking.com/special-offer";
                        });
                    }, 3000);

                    localStorage.hotels = 'seen';
                }
            </script>
        @endif

            @stack('script')

        </div>

    </body>

    </html>
