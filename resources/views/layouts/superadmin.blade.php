<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <link href="{{asset('landing/img/logo.png')}}" rel="icon">
    <link href="{{asset('landing/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    {{--
    <link rel="stylesheet" href="{{asset('web/node_modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/node_modules/weathericons/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/node_modules/weathericons/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/node_modules/summernote/dist/summernote-bs4.css')}}"> --}}
    {{--
    <link rel="stylesheet" href="{{asset('web/assets/modules/datatables/datatables.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('web/assets/modules/datatables/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/modules/datatables/select.bootstrap4.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/components.css')}}">
    @yield('css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li> --}}
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            --}}
                            <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('profile-superadmin') }}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{url ('/')}}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Duta Baca Indramayu</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                    </div>
                    <ul class="sidebar-menu">
                        <li class="nav-item {{Request::segment(1)=='dashboard-superadmin'? 'active':''}}">
                            <a href="{{ url('dashboard-superadmin') }}" class="nav-link "><i
                                    class=""></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item {{Request::segment(1)=='user-superadmin'? 'active':''}}">
                            <a href="{{ url('user-superadmin') }}" class="nav-link"><i class="far fa-user"></i>
                                <span>
                                    User</span></a>
                        </li>
                        <li class="nav-item {{Request::segment(1)=='peserta-superadmin'? 'active':''}}">
                            <a href="{{ url('peserta-superadmin') }}" class="nav-link"><i class="far fa-file-alt"></i>
                                <span>Peserta</span></a>
                        </li>
                        {{-- <li class="nav-item ">
                            <a href="{{ url('berita-superadmin') }}" class="nav-link"><i class="far fa-file-alt"></i>
                                <span>Berita</span></a>
                        </li> --}}

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <div class="bullet"></div> Kenti-1903016</a>
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
    <script src="{{asset('/web/assets/modules/datatables/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{asset('web/node_modules/simpleweather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('web/node_modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('web/node_modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('web/node_modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('web/node_modules/summernote/dist/summernote-bs4.js')}}"></script>
    {{-- <script src="{{asset('web/node_modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script> --}}
    <script src="{{asset('/web/assets/modules/datatables/datatables.min.js')}}"></script>

    <script src="{{asset('/web/assets/modules/datatables/dataTables.bootstrap4.min.js')}}">
    </script>
    {{-- <script src="{{asset('/web/assets/modules/datatables/dataTables.select.min.js')}}"></script> --}}
    {{-- <script src="{{asset('/web/assets/modules/datatables/jquery-ui.min.js')}}"></script> --}}

    <!-- Template JS File -->
    <script src="{{asset('web/assets/js/scripts.js')}}"></script>
    <script src="{{asset('web/assets/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('web/assets/js/page/index-0.js')}}"></script>
    {{-- <script src="{{asset('/web/assets/modules/datatables/modules-datatables.js')}}"></script> --}}
    @yield('js')
</body>

</html>