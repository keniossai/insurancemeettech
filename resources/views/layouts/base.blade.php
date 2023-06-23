<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name')) | Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.html" class="brand-wrap">
                <img src="{{ asset('assets/images/logo/IMT 2.0-02.png') }}" class="logo" alt="Imt Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i>
                </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="index.html"> <i class="icon material-icons md-home"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                        <span class="text">Speakers</span>
                    </a>
                    <div class="submenu">
                        <a href="page-account-login.html">View All</a>
                        <a href="page-account-register.html">Add Speaker</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-stars"></i>
                        <span class="text">Sponsors</span>
                    </a>
                    <div class="submenu">
                        <a href="page-account-login.html">View All</a>
                        <a href="page-account-register.html">Add Sponsors</a>
                    </div>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="#"> <i class="icon material-icons md-pie_chart"></i>
                        <span class="text">Event Schedules</span>
                    </a>
                    <div class="submenu">
                        <a href="page-account-login.html">View All</a>
                        <a href="page-account-register.html">Add Schedule</a>
                    </div>
                </li>

            </ul>
            <hr>
            <ul class="menu-aside">
                <li class="menu-item">
                    <a class="menu-link" href="page-blank.html"> <i class="material-icons md-cast"></i>
                        <span class="text"> Go to website </span>
                    </a>
                </li>
            </ul>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"> <i
                                class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i
                        class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount"
                            aria-expanded="false"> <img src="{{ user('photo') }}" alt="Photo" width="50"
                            class="rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">

                            <a class="dropdown-item text-danger" href="#"><i
                                    class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>

        @yield('content')

        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="{{ asset('js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/vendors/select2.min.js')}}"></script>
    <script src="{{ asset('js/vendors/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('js/vendors/jquery.fullscreen.min.js')}}"></script>
    <script src="{{ asset('js/vendors/chart.js')}}"></script>
    <!-- Main Script -->
    <script src="{{ asset('js/main.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/custom-chart.js')}}" type="text/javascript"></script>
</body>

</html>
