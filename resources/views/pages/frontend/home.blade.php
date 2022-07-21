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
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>DUTA BACA KABUPATEN INDRAMAYU</h1>
          <h2>Berilmu, Berdaya, Bermartabat</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('landing/img/hero-img.svg')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero --> --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @php
      $no=1;
      @endphp
      @foreach ($beritas as $berita)
      <div class="carousel-item {{$no==1?'active':''}}">
        <img src="{{asset('images/berita/'.$berita->gambar)}}" class="d-block w-100" alt="...">
      </div>
      @php
      $no++;
      @endphp
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <main id="main">
    <!-- ======= Berita Section ======= -->
    <section id="berita" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Berita</h2>
          <p>Duta Baca Kabupaten Indramayu</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Umum</li>
              <li data-filter=".filter-card">Pendaftaran</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($beritas as $berita)
          <div class="col-lg-4 col-md-6 portfolio-item {{$berita->kategori=='umum'?'filter-app':'filter-card'}} ">
            <div class="portfolio-wrap text-center">
              <img src="{{asset('images/berita/'.$berita->gambar)}}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{asset('images/berita/'.$berita->gambar)}}" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="{{($berita->judul)}}"><i class="bi bi-plus"></i></a>
                <a href="{{route('show', $berita->id)}}" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>{{$berita->judul}}</h4>
                <p>{{$berita->tanggal}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Berita Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Pertanyaan Yang sering Diajukan</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apa itu Duta Baca? <i
                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Duta Baca salah satu program Dinas Perpustakaan dan Arsip Kabupaten Indramayu yang menampilkan sosok
                inspiratif untuk menjadi motivator dalam membangkitkan kegemaran membaca dan pembudayaan kegemaran
                membaca melalui berbagai media di Kabupaten Indramayu.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Duta baca berada dinaungan dinas apa?
              <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Duta Baca Kabupaten Indramayu berada di naungan Dinas Perpustakaan dan Arsip Kabupaten Indramayu
                khususnya pada bidang Perpustakaan
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

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