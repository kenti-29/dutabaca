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
    <link rel="stylesheet" href="{{asset('web/node_modules/jqvmap/dist/jqvmap.min.css')}}"> --}}
    {{--
    <link rel="stylesheet" href="{{asset('web/node_modules/weathericons/css/weather-icons.min.css')}}"> --}}
    {{--
    <link rel="stylesheet" href="{{asset('web/node_modules/weathericons/css/weather-icons-wind.min.css')}}"> --}}
    {{--
    <link rel="stylesheet" href="{{asset('web/node_modules/summernote/dist/summernote-bs4.css')}}"> --}}
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
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            --}}
                            <div class="d-sm-none d-lg-inline-block">{{Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{url('profile-juri')}}" class="dropdown-item has-icon">
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
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="nav-item {{Request::segment(1)=='dashboard-juri'? 'active':''}}">
                            <a href="{{ url('dashboard-juri') }}" class="nav-link "><i
                                    class=""></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-item {{Request::segment(1)=='peserta-juri'? 'active':''}}">
                            <a href="{{ url('peserta-juri') }}" class="nav-link"><i class="far fa-user"></i>
                                <span>Peserta</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                <span>Input Nilai</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('administrasi-juri') }}">Administrasi</a></li>
                                <li><a class="nav-link" href="{{ url('testulis-juri') }}">Tes Tulis</a></li>
                                <li><a class="nav-link" href="{{ url('wawancara-juri') }}">Wawancara</a></li>
                                <li><a class="nav-link" href="{{ url('karantina-juri') }}">Sikap</a></li>
                                <li><a class="nav-link" href="{{ url('speech-juri') }}">Speech</a></li>
                                <li><a class="nav-link" href="{{ url('tanyajawab-juri') }}">Tanya Jawab</a></li>
                            </ul>
                        </li>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="footer-right">
                    Copyright &copy;Kenti-1903016</a>
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