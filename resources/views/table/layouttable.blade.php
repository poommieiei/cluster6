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

    <title></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Sweetalert 2 -->
    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
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
            <nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background-color: #0E566E">
                <div class="navbar-header" data-logobg="skin5" style="background-color: #136885;">
                    <a class="navbar-brand" href="/workspace" style="height: 65px">
                        <!-- logo program -->
                        <b class="logo-icon" style="display: block; margin-bottom: 10px;">
                            <img src="{{ url('assets/assets/for-cluster6/LOGO API.png') }}" alt="workspcae"
                                class="light-logo" width="35" style="display: block;" />
                        </b>
                        <span class="logo-text ms-2"
                            style="font-family: 'Inter', sans-serif; font-weight: bold; font-size: 30px;">
                            S P E C
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                {{-- Collection list --}}
                <ul class="navbar-nav float-start me-auto">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                            data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="d-none d-md-block" style="font-size:20px; color:ghostwhite">Collection <i
                                    class="fa fa-angle-down"></i></span>
                            <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Collection1</a></li>
                        </ul>
                    </li>
                </ul>
                <div style="position: fixed; top: 1%; left: 45%;  font-size: 36px; color:white; front-weight:bold;">
                    <center>ชื่อ Collection</center>
                </div>
                {{-- Invite member --}}
                <div class="btn-group" style="position: fixed; top: 2%; right: 2%;">
                    <div class="container d-flex justify-content-between align-items-center">
                        <div class="rounded-circle bg-light d-flex justify-content-center align-items-center"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-person-plus-fill ms-1" style="color: #073B4C; font-size: 25px;"></i>
                        </div>
                        <i class="bi bi-caret-down-fill ms-3" id="inviteIcon"
                            style="color: white; cursor: pointer;"></i>
                    </div>
                </div>
                <div class="card text-center" id="inviteCard"
                    style="position: fixed; top: 9%; left: 80%;background-color:#000000c9; display: none;">
                    <div class="card-body"
                        style="position: fixed; top: 9%; left: 78%; border-radius: 14px; background-color:#000000c9;">
                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                            style="background-color: #118AB2; color: #ffffff; border-color:#000000c9; width: 280px;">
                        <button type="button" class="btn mt-3" id="inviteBtn"
                            style="background-color: #71A4F0; color: #ffffff;">Invite</button>
                        <style>
                            #email::placeholder {
                                color: #e0e0e0;
                            }
                        </style>
                    </div>
                </div>
                <script>
                    // ฟังก์ชันเปิด-ปิดการ์ด Invite
                    const inviteIcon = document.getElementById('inviteIcon');
                    const inviteCard = document.getElementById('inviteCard');
                    let isOpen = false;

                    inviteIcon.addEventListener('click', () => {
                        isOpen = !isOpen;
                        inviteCard.style.display = isOpen ? 'block' : 'none';
                    });
                </script>
            </nav>
        </header>

        <aside class="left-sidebar" style="background-color: #136885;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="background-color: #136885;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4" style="background-color: #136885;">
                        {{-- Method list --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html"
                                aria-expanded="false">
                                <i class="hide-menu" style="font-size:20px; color: #54FD46">GET
                                    <span style="font-size:20px; color:ghostwhite">Service Name</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper" style="background-color: #073B4C;">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ms-auto text-end"></div>

                        <!-- Button Layout -->
                        <div>
                            <!-- Export Button -->

                            <button type="button" id="export_button"class="btn rounded-pill btn-info"
                                style="margin-left: -12%; position:relative">
                                <i class="fas fa-download"></i> Export
                            </button>

                            <!-- sweetalert 2 for Export button -->
                            <script>
                                $('#export_button').click(function() {
                                    Swal.fire({
                                        title: "Are you sure you save the changes?",
                                        text: "Your changes will not appear if you  don't save them.",
                                        icon: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: "#3085d6",
                                        cancelButtonColor: "#d33",
                                        confirmButtonText: "Export"
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                                title: "Exported!",
                                                text: "Your file has been export.",
                                                icon: "success"
                                            });
                                        } else {
                                            Swal.fire({
                                                title: "Cancelled!",
                                                icon: "error"
                                            });
                                        }
                                    });
                                })
                            </script>
                        </div>
                        <div>
                            <!-- Save Button -->
                            <button type="button" id="save_btn" class="btn rounded-pill btn-success"
                                style="position:relative">
                                <i class="fas fa-download"></i> Save
                            </button>

                            <!-- sweetalert 2 for save button -->
                            <script>
                                $('#save_btn').click(function() {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        title: "Your work has been saved.",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="background-color: #073B4C;">

                @yield('content')

            </div>

        </div>
    </div>

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
