<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta content="National Obstetrics Fistula Centre" name="description">
        <meta content="Fistula Ningi" name="keywords">
        <meta content="NOFIC" name="keywords">
        <meta content="NOFCN" name="keywords">
        <meta content="Ningi" name="keywords">
        <meta content="noficningi" name="keywords">
        <meta content="obstetrics" name="keywords">

        <title>National Obstetric Fistula Centre, Ningi,Bauchi State</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

         <!-- Favicons -->
          <link rel="icon" href="img/nofcn-favicon 16x16.png">
          <link rel="apple-touch-icon" sizes="180x180" href="{{URL::to('/')}}/assets/img/nofcn-favicon 16x16.png">
          <link rel="icon" type="image/png" sizes="32x32" href="{{URL::to('/')}}/assets/img/nofcn-favicon 32x32.png">
          <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('/')}}/assets/img/nofcn-favicon 16x16.png">
          <link rel="manifest" href="img/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      
      <link href="{{URL::to('/')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="{{URL::to('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{URL::to('/')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="{{URL::to('/')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="{{URL::to('/')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="{{URL::to('/')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

         <!-- Template Main CSS File -->
          <link href="{{URL::to('/')}}/assets/css/style.css" rel="stylesheet">
          <link href="{{URL::to('/')}}/assets/css/icofont.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    
    <!-- Page Header and Navigation-->    
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      
        
        <i class="bi bi-phone-fill phone-icon"></i> +23480-2904 3746
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://www.facebook.com/profile.php?id=100063879880987" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/NoficNingi" class="twitter"><i class="bi bi-twitter"></i></a>
        <!-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>--> 
      </div>
    </div>
  </section>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="border-bottom: 1px ridge #ece5e5;">
    <div class="container d-flex align-items-center">
      <a href="{{ route('home') }}" class="logo me-auto"><img src="{{URL::to('/')}}/assets/img/banner.jpg" alt="" class="img-fluid"></a>

      @include('layouts.navigation')

    </div>
  </header>
  <!-- End Header -->

  <!-- Page Content -->
    <main id="main">

    @yield('content')

    </main>
    @include('layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::to('/')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{URL::to('/')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{URL::to('/')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{URL::to('/')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::to('/')}}/assets/js/main.js"></script>
  
  <script src="{{URL::to('/')}}/assets/js/swipe.js"></script>


</body>
</html>
