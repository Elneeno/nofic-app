@extends('layouts.app')

@section('content')

 <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
<h2><strong>News</strong></h2>
        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
              
                @foreach($images as $image)
                <div class="swiper-slide">
                  <img src="{{ asset('news_images/'.$image) }}" alt="">
                </div>
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-description">
              <h2>{{ $news->title }}</h2>
              <p>{{ $news->headline }}</p>
            </div>
          </div>
        </div>
  <div class="container">
    <p>{{ $news->news }}</p>
    <p></p>
    <p></p>
   </div>
      </div>
    </section><!-- End Portfolio Details Section -->

@endsection