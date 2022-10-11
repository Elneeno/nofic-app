@extends('layouts.app')

@section('content')

<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Gallery Showing Various Sections and Facilities of the Centre.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Facilities</li>
              <li data-filter=".filter-app">Theatre Rooms</li>
              <li data-filter=".filter-card">Admin Section</li>
              <li data-filter=".filter-web">Premises</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/dd.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/gate.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/34.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/mhwun.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/33.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/fistula.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/md_office.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/slide.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/mhwun.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/34.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/security.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/surgical.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/slide.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{URL::to('/')}}/assets/img/img/tmc.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="{{URL::to('/')}}/assets/img/img/34.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


@endsection