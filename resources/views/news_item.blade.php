@extends('layouts.app')

@section('content')

 <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
<h2>News</h2>
        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{URL::to('/')}}/assets/img/img/slide-4.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{URL::to('/')}}/assets/img/img/1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{URL::to('/')}}/assets/img/img/2.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-description">
              <h2>100 Days of Dr. Halima Mukaddas as MD NOFIC</h2>
              <p>Dr. Halima Mukaddas celebrates 100 as the MD National Obstetrics Fistula Centre Ningi. The MD marked the event with unveiling of the new GOPD department, launching of a staff bus and gradution of 1oo beneficiaries of free fistula treatment. The beneficiaries also went through a rehabilitation exercise that includes skills acquisition training. </p>
            </div>
          </div>
        </div>
  <div class="container">
    <p></p>
    <p></p>
    <p></p>
   </div>
      </div>
    </section><!-- End Portfolio Details Section -->

@endsection