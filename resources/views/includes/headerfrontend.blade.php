<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            {{-- <h1 class="text-light"><a href="/landing-page"><span>Duta Baca</span></a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/"><img src="{{asset('landing/img/logo.png')}}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{Request::segment(1)==''? 'active':''}}"
                        href="{{url ('/')}}">Beranda</a></li>
                <li><a class="nav-link scrollto {{Request::segment(1)=='tentang'? 'active':''}}"
                        href="{{url('/tentang')}}">Tentang</a></li>
                <li><a class="nav-link scrollto {{Request::segment(1)=='proker'? 'active':''}}"
                        href="{{url('/proker')}}">Program Kerja</a></li>
                <li><a class="nav-link scrollto " href="{{url('/login')}}">Login</a></li>
                <li><a href="{{url('/register')}}" class="nav-link scrollto ">Daftar</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>