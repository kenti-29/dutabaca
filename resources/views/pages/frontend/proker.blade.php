<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Duta Baca Indramayu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('landing/img/logo.png')}}" rel="icon">
    <link href="{{asset('landing/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('landing/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('includes.headerfrontend')
    <main id="main">
        <!-- ======= Program Kerja Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Program Kerja</h2>
                    <p>Duta Baca Kabupaten Indramayu</p>
                </div>
                <div class="row">
                    @foreach ($prokers as $proker)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <!--  <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                            <h4 class="title"><a href="">{{$proker->nama}}</a></h4>
                            <p class="description">{{$proker->deskripsi}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Program Kerja Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Duta Baca Kabupaten Indramayu</h3>
                        <p>
                            Jl. MT Haryono Nomor 49 <br>
                            Kabupaten Indramayu, 45222<br>
                            Jawa Barat <br>
                            <strong>Phone:</strong> +6289123456987<br>
                            <strong>Email:</strong> dutabaca@gmail.com<br>
                        </p>
                        {{-- <p>Sosial Media Kami, Mari Join!</p> --}}
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/disarpusindramayu" class="facebook" target="_blank"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/dpa_indramayu/" class="instagram" target="_blank"><i
                                    class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 footer-links">

                    </div>
                    <div class="col-lg-4 col-md-3 footer-links"> <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.002000962684!2d108.3195666!3d-6.329133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x56b333828a7c4ce8!2sDINAS%20PERPUSTAKAAN%20DAN%20ARSIP%20KABUPATEN%20INDRAMAYU!5e0!3m2!1sid!2sid!4v1657360540039!5m2!1sid!2sid"
                            width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Kenti-1903016</span></strong>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('landing/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('landing/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('landing/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('landing/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('landing/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('landing/js/main.js')}}"></script>

</body>

</html>