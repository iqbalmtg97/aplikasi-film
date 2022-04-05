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

    <link rel="shortcut icon" href={{ asset('landing/images/favicon.ico') }}>

    <link href={{ asset('landing/css/bootstrap.min.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('landing/css/icons.css') }} rel="stylesheet" type="text/css">
    <link href={{ asset('landing/css/style.css') }} rel="stylesheet" type="text/css">

    {{-- Toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>


<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!--<a href="index.html" class="logo">-->
                    <!--Annex-->
                    <!--</a>-->
                    <!-- Image Logo -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo-sm.png" alt="" height="22" class="logo-small">
                        <img src="assets/images/logo.png" alt="" height="16" class="logo-large">
                    </a>

                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">

                    <ul class="list-inline float-right mb-0">

                        @if (auth()->user() == null)
                        @else
                            <!-- User-->
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
                        @endif
                        <li class="menu-item list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="{{ url('/') }}"><i
                                    class="mdi mdi-airplay {{ request()->is('/') ? 'active' : '' }}"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ url('/sedang_tayang') }}"><i
                                    class="mdi mdi-airplay {{ request()->is('/') ? 'active' : '' }}"></i>Sedang
                                Tayang</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ url('/segera_hadir') }}"><i
                                    class="mdi mdi-airplay {{ request()->is('/') ? 'active' : '' }}"></i>Segera
                                Hadir</a>
                        </li>

                        @if (auth()->user() != null)
                            <li class="has-submenu">
                                <a href="{{ url('/favorit') }}"><i
                                        class="mdi mdi-airplay {{ request()->is('/') ? 'active' : '' }}"></i>Daftar
                                    Favorit</a>
                            </li>
                        @endif

                        @if (auth()->user() == null)
                            <li class="has-submenu">
                                <a href="{{ url('/register') }}"><i class="mdi mdi-airplay"></i>Register</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ url('/login') }}"><i class="mdi mdi-airplay"></i>Login</a>
                            </li>
                        @else
                        @endif

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">

            @yield('content')

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © 2018 Annex by Mannatthemes.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery  -->
    <script src={{ asset('landing/js/jquery.min.js') }}></script>
    <script src={{ asset('landing/js/popper.min.js') }}></script>
    <script src={{ asset('landing/js/bootstrap.min.js') }}></script>
    <script src={{ asset('landing/js/modernizr.min.js') }}></script>
    <script src={{ asset('landing/js/waves.js') }}></script>
    <script src={{ asset('landing/js/jquery.slimscroll.js') }}></script>
    <script src={{ asset('landing/js/jquery.nicescroll.js') }}></script>
    <script src={{ asset('landing/js/jquery.scrollTo.min.js') }}></script>
    <script src={{ asset('assets/plugins/bootstrap-rating/bootstrap-rating.min.js') }}></script>
    <script src={{ asset('assets/pages/rating-init.js') }}></script>

    {{-- Toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- App js -->
    <script src={{ asset('landing/js/app.js') }}></script>

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
