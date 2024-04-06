<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/assets/images/favicon.png') }}" />
    <!-- Custom CSS -->
    <link href="{{ url('assets/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ url('assets/dist/css/style.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body style="background-color: #073B4C;">

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <div class="navbar top-navbar navbar-expand-md navbar-dark" style="background-color: #0E566E;">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5" style="background-color: #136885;">
                        <a class="navbar-brand" href="/workspace" style="height: 65px">
                            <!-- logo program -->
                            <b class="logo-icon" style="display: block; margin-bottom: 10px;">
                                <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="homepage"
                                    class="light-logo" width="35" style="display: block;" />
                            </b>
                            <span class="logo-text ms-2"
                                style="font-family: 'Inter', sans-serif; font-weight: bold; font-size: 30px;">
                                S P E C
                            </span>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse" style="background-color: #0E566E;">
                        <ul class="navbar-nav float-start me-auto">
                            <li class="nav-item d-none d-lg-block">
                                <div style="background-color: #0E566E;">
                                    <a class="nav-link sidebartoggler waves-effect waves-light"
                                        href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                                            class="mdi mdi-menu font-24"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div style="width:1000px; font-size: 36px; color:white; font-weight:bold"><center>Workspace</center></div>
                </nav>
            </div>
        </header>

        <aside class="left-sidebar" style="background-color: #136885;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="background-color: #136885;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/"
                                aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"
                                    style="font-size:20px">Workspace</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/account"
                                aria-expanded="false"><i class="fa fa-user" style="font-size:20px"></i>
                                <span class="hide-menu" style="font-size:20px">Account</span></a>
                        </li>
                        </head>

                        <body>

                            <li class="sidebar-item" style="position: absolute; bottom: 15px;">
                                <a class="sidebar-link sidebar-link" href="#"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    aria-expanded="false">
                                    <i class="fa fa-sign-out"></i>
                                    <span class="hide-menu" style="font-size:20px">Sign out</span>
                                </a>
                            </li>

                    </ul>
                </nav>

            </div>
        </aside>


        <div class="page-wrapper" style="background-color: #073B4C;">


            <div class="container-fluid" style="background-color: #073B4C;">

                @yield('content')
            </div>

        </div>
    </div>


    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <script src="{{ url('assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('assets/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ url('assets/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('assets/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('assets/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('assets/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ url('assets/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ url('assets/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('assets/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ url('assets/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ url('assets/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ url('assets/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ url('assets/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ url('assets/dist/js/pages/chart/chart-page-init.js') }}"></script>
</body>

</html>
