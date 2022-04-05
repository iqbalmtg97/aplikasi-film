<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Aplikasi Film</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="sweetalert2.min.css">

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link href={{ asset('assets/css/bootstrap.min.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('assets/css/icons.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="#" class="logo"><i class="mdi mdi-assistant"></i> Annex</a>
                    <!-- <a href="#" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{ url('/home') }}"
                                class="waves-effect {{ request()->is('/home') ? 'active' : '' }}">
                                <i class="mdi mdi-airplay"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/kelola_film') }}"
                                class="waves-effect {{ request()->is('/kelola_film') ? 'active' : '' }}">
                                <i class="mdi mdi-airplay"></i>
                                <span> Kelola Film </span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>
                <!-- Top Bar End -->

                <div class="page-content-wrapper ">

                    <div class="container-fluid">

                        @yield('content')

                    </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer">
                © 2018 Annex by Mannatthemes.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src={{ asset('assets/js/jquery.min.js') }}></script>
    <script src={{ asset('assets/js/popper.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
    <script src={{ asset('assets/js/modernizr.min.js') }}></script>
    <script src={{ asset('assets/js/detect.js') }}></script>
    <script src={{ asset('assets/js/fastclick.js') }}></script>
    <script src={{ asset('assets/js/jquery.slimscroll.js') }}></script>
    <script src={{ asset('assets/js/jquery.blockUI.js') }}></script>
    <script src={{ asset('assets/js/waves.js') }}></script>
    <script src={{ asset('assets/js/jquery.nicescroll.js') }}></script>
    <script src={{ asset('assets/js/jquery.scrollTo.min.js') }}></script>
    <script src={{ asset('assets/plugins/bootstrap-rating/bootstrap-rating.min.js') }}></script>
    <script src={{ asset('assets/pages/rating-init.js') }}></script>
    {{-- Sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable2').DataTable();
        });
    </script>

    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script> --}}

    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- App js -->
    <script src={{ asset('assets/js/app.js') }}></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

    <script>
        @if (Session::has('sukses'))
            toastr.success("{{ Session::get('sukses') }}", "Selamat")
        @endif

        @if (Session::has('gagal'))
            toastr.error("{{ Session::get('gagal') }}", "Gagal")
        @endif
    </script>
    @yield('footer')
</body>

</html>
