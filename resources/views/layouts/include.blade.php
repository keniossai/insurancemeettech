<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="NBA Conference">

<meta name="keywords" content="NBA Conference">
<meta name="author" content="Krystal Digital Solutions">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="robots" content="index,follow">

<link rel="icon" type="image/png" href="{{ asset('images/logos/NBA_logo1.png') }}">
<title>@yield('title', config('app.name'))</title>

<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet" type="text/css" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<script src="{{ asset('assets/js/jquery.js') }}"></script>

</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header / Header Style Two -->
        <header class="main-header header-style-two">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-box">
                            <div class="logo"><a href="{{ url('/') }}"><img
                                        src="{{ asset('images/logos/NBA_logo1.png') }}" alt="" title=""
                                        width="60"></a></div>
                        </div>

                        <div class="nav-outer clearfix">

                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="dropdown"><a href="#events">Events</a></li>
                                        @if (false)
                                            <li class="dropdown"><a target="_blank"
                                                    href="{{ asset('Conference-Brochure.pdf') }}">Program/Sessions</a>
                                            </li>
                                        @endif
                                        <li class="dropdown"><a href="{{ route('speakers.index') }}">Speakers</a></li>
                                        @if (false)
                                        <li class="dropdown"><a href="#">Hotel/Travel</a> </li>
                                        @endif
                                        <li class="dropdown">
                                            <a
                                                href="{{ cloudinary_url('nbaconference/misc/conference_Fees_2023_jpeg_edyhcl') }}">Registration
                                                Fee Schedule</a>
                                        </li>

                                        <li class="dropdown">
                                            <a  <a target="_blank" href="{{ asset('document/nba_agc_2023_faqs.pdf') }}">
                                                FAQs</a>
                                        </li>

                                        <li class="dropdown"><a href="https://www.nigerianbar.org.ng/"
                                                target="_blank">NBA</a></li>

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
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            <div class="btn-box register-btn" style="margin-left: 20px; margin-top:10px;">
                                                <a href="{{ route('register') }}"
                                                   class="theme-btn btn-style-one">Register</a>
                                            </div>

                                        @endif
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->

                            @guest
                            <!-- Outer Box -->
                            <div class="outer-box">
                                <!-- Button Box -->
                                <div class="btn-box">
                                    <a href="{{ route('register') }}" class="theme-btn btn-style-one">Register</a>
                                </div>
                            </div>
                            @endguest
                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt=""
                                title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/NBA_logo1.png') }}"
                                alt="" title=""></a></div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>



        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer style-two" style="margin-top: 60px;">
            <div class="auto-container">
                <div class="content">
                    <!-- Footer Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('images/logos/NBA_logo1.png') }}" width="100"
                                alt="" /></a>
                    </div>
                    <h2 class="section-title" style="font-size: 20px; color: #fff;">
                        <span>Need help? </span>
                    </h2>
                    <div class="text" style="font-size: 30px;">With Registration<br> 09166929240</div>
                    <ul class="social-icons">
                        <li><a href="https://twitter.com/NBAConferenceNG" target="_blank"><span
                                    class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                        <li><a href="https://instagram.com/nbaconferenceng" target="_blank"><span
                                    class="fab fa-instagram"></span></a></li>
                        <li><a href="mailto:info@nbaconference.com" target="_blank"><span
                                    class="fab fa-envelope"></span></a></li>

                    </ul>
                </div>
            </div>

            <!-- Footer Nav -->
            <div class="footer-nav">
                <div class="auto-container">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('speakers.index') }}">Speakers</a></li>
                        <li><a href="{{ url(route('privacy-policy')) }}">Privacy Policy</a></li>

                        @auth
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright">
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

        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="http://html.commonsupport.xyz/2019/miexpo/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value=""
                                placeholder="Search Here" required>
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>

                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Logistics</a></li>
                    <li><a href="#">Freedom</a></li>
                </ul>

            </div>

        </div>
    </div>


    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/parallax.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.scrollTo.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.fancybox.js"></script>
    <script src="{{ asset('assets') }}/js/owl.js"></script>
    <script src="{{ asset('assets') }}/js/wow.js"></script>
    <script src="{{ asset('assets') }}/js/magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/appear.js"></script>
    <script src="{{ asset('assets') }}/js/swiper.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.countdown.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('assets') }}/js/paroller.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('js/bootstrap-notify.js?v=1.0') }}"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('assets/js/map-script.js') }}"></script>
    <!--End Google Map APi-->

    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/request.js') }}"></script>

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

    {{-- start of register modal script --}}

    {{-- end of register modal script --}}
    <script>
        // import $ from 'jquery';

        (function() {
            let registerModal = $('#register-modal');
            let closeRegister = $('#close-register');

            closeRegister.on('click', function() {
                let openClass = 'd-flex'
                let closeClass = 'd-none'

                if (registerModal.hasClass(openClass)) {
                    registerModal.removeClass(openClass);
                    registerModal.addClass(closeClass)
                } else {
                    registerModal.addClass(openClass)
                }
            })
        })()
    </script>
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

</body>

<!-- Mirrored from html.commonsupport.xyz/2019/miexpo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 19:46:35 GMT -->

</html>
