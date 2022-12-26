
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    {{-- @include('layouts.app') --}}
    @include('layouts.header')
    

    {{--start- contact --}}
    <section id="hero" class="d-flex align-items-center justify-content-center">
      <div class="container" data-aos="fade-up">
  
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
          <div class="col-xl-6 col-lg-8">
            <h1>
              @yield('hero')
              <span></span></h1>
              <br>
              <h4>
                <p style="text-align: left; color:aliceblue">
             Home / @yield('home')
                </p></h4>
          </div>
        </div>
  
        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          
        </div>
  
      </div>
    </section>

    
        {{-- {{-- <!--   hero area start   --> --}}
        <div class="hero-area hero2-carousel owl-carousel owl-theme">
          <div class="hero-bg-2 lazy" data-bg="assets/img/sliders/637e137382620.jpg">
       <div class="container">
          <div class="hero-txt">
             <div class="row">
                <div class="col-12">
                   <span></span>
                   <h1></h1>
                                     </div>
             </div>
          </div>
       </div>
       <div class="hero-area-overlay" style="background-color: #1F2241;opacity: 0.60;"></div>
    </div>
        <div class="hero-bg-2 lazy" data-bg="https://zdfduct.com/public/assets/front/img/sliders/637e13c5259ee.jpg">
       <div class="container">
          <div class="hero-txt">
             <div class="row">
                <div class="col-12">
                   <span></span>
                   <h1></h1>
                                     </div>
             </div>
          </div>
       </div>
       <div class="hero-area-overlay" style="background-color: #1F2241;opacity: 0.60;"></div>
    </div>
        <div class="hero-bg-2 lazy" data-bg="https://zdfduct.com/public/assets/front/img/sliders/637e13a241f06.jpg">
       <div class="container">
          <div class="hero-txt">
             <div class="row">
                <div class="col-12">
                   <span></span>
                   <h1></h1>
                                     </div>
             </div>
          </div>
       </div>
       <div class="hero-area-overlay" style="background-color: #1F2241;opacity: 0.60;"></div>
    </div>
    </div>
    

    @yield('contect')

    
   @include('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
