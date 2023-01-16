@extends('layouts.app')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('/assets/img/slide/gate.jpg')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">National Obstetric Fistula Centre Ningi,<br/>Bauchi State</h2>
              <p class="animate__animated animate__fadeInUp">The North-East Regional Centre for Prevesion, Treatment, Rehabilitation, Training and Research on Vesico Vaginal Fistula.</p>
              <a href="{{ route('about') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">About Us</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('/assets/img/slide/slide.jpg')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Mission</h2>
              <p class="animate__animated animate__fadeInUp"> To Advance the Health of Women and Family through Outstanding Education, Research and Clinical Centre</p>
              <!--<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('/assets/img/slide/slider32.jpg')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Vision</h2>
              <p class="animate__animated animate__fadeInUp">We aspire to be one of the Nation's Leading Uroganaecological Centre</p>
              <a href="{{ route('about') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


<!-- ======= Featured Services Section ======= -->
<section id="contact" class="featured-services section-bg">
  <div class="container">

    <div class="row no-gutters">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-mailbox"></i></div>
          <h4 class="title">Contact</h4>
          <p class="description">
            <span><i class="bi bi-phone"></i> (+234) 0802 9043 746</span> <br />
                            <span><i class="bi bi-envelope"></i> info@noficningi.gov.ng <br>noficningi@gmail.com</span>
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-building"></i></div>
          <h4 class="title">Address</h4>
          <p class="description">
            Kano Road, Former State Hotel Ningi, Bauchi, Nigeria.<br />
            <a href="{{ route('contact') }}" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" target="_blank"><i class="bi bi-map-fill"></i> Open in Map</a></p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="bi bi-clock-history"></i></div>
          <h4 class="title">Opening Hours</h4>
          <p class="description">
            <span><i class="bi bi-clock"></i> Available 24hrs</span> <br />
            <span> <i class="bi bi-calendar3"></i> 7 Days a Week</span>
          </p>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Featured Services Section -->

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Welcome Message</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-1">
        <img src="{{URL::to('/')}}/assets/img/team/md2.png" class="img-fluid" alt="" height="400" width="500">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
        <h4><strong>Dr. Halima Mukaddas</strong></h4><i>MBBS, FWACS, FICS, MPH, PHD</i><br><br>
        <ul>
          <li>You are welcome to NOFIC Bauchi website. At the National Obstetric Fistula Centre our motto is Service, Hope and Smile. We strive towards our motto by providing a full range of services in Obstetrics and Gynaecology with special focus on Urogynaecology.  </li><br>

          <li>The National Obstetric Fistula Centre Ningi, Bauchi State was established on 24th March 2014 by the Federal Government of Nigeria and our primary mandate was Prevention, Treatment, Rehabilitation, Training and Research in Obstetric Fistula and related ailments that affects women in the Northeast of Nigeria. </li>
        </ul>
        <p>
          
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->


<!-- ======= How it Works Section ======= -->
<section id="howitworks" class="services">
  <div class="container">

    <div class="section-title">
      <h2>Mission & Vision</h2>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-green">
          <h3><strong>MISSION</strong></h3>
          <p>To advance the Health of Women and Family through outstanding education, research and Clinical Centre.</p>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-green">
          <h3><strong>VISION</strong></h3>
          <p>We aspire to be one of the Nation's leading Uroganaecological Centre</p>
        </div>
      </div>

    </div>
  </div>
</section><!-- End How it Works Section -->
 
<!-- ======= Specialities Section ======= -->
<section id="specialities" class="specialities">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      <p>The Centre has been mandated by the Federal Government of Nigeria through the Ministry of Health to carry out activities on Prevention, Treatment, Rehabilitation, Training and Research on Vesico Vaginal Fistula and other related cases, Services Provided Include:</p>
    </div>

    <div class="row" id="specialities-flters">
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-businesswoman"></i> Obstetrics</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-medicine"></i> Internal Medicine</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-medical-sign-alt"></i> General practice</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-children-care"></i> Paediatrics</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-medical-sign"></i> Family Medicine</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-woman-in-glasses"></i> Gynaecology</div> 
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-surgeon"></i> Surgery</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-businesswoman"></i> Urogynaecology</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-medicine"></i>NHIS</div>
      <div class="col-lg-2 col-md-4 col-sm-6"><i class="icofont-look"></i> Others</div>

    </div>


  </div>
</section><!-- End Specialities Section -->

<!-- ======= News Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">
        <div class="section-title">
      <h2>News</h2>
    </div>
        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><img src="{{asset('/assets/img/slide/slide.jpg')}}" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">The managing director met with members of staff</a></h4>
              <p class="description">She met with the staff of the centre</p>
              <a href="{{ route('news_item') }}">More...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><img src="img/slide/slide.jpg" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">The managing director met with members of staff</a></h4>
              <p class="description">She met with the staff of the centre</p>
              <a href="{{ route('news_item') }}">More...</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><img src="img/slide/slide.jpg" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">The managing diresctor met with members of staff</a></h4>
              <p class="description">She met with the staff of the centre</p>
              <a href="{{ route('news_item') }}">More...</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End News Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Management</h2>
      <p>Meet our Management Staff</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{URL::to('/')}}/assets/img/team/md.png" alt="">
          <a href="#"><h4 title="See Details">Dr. Halima Mukaddas</h4></a>
          <span>MBBS, FWACS, FICS, MPH, PHD</span> 
          <h5>Medical Director</h5>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <!-- <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>-->
          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{URL::to('/')}}/assets/img/team/cmac.png" alt="">
          <a href="#"><h4 title="See Details">Dr. Ogbara Olanrewaju</a>
          <span>MBBS</span> 
          <h5>Ag. Head of Clinical Services</h5>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <!-- <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>-->
          </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="{{URL::to('/')}}/assets/img/team/ha.png" alt="">
          <a href="#"><h4 title="See Details">Dahiru Adamu Bello</h4></a>
          <span>BSC,MNIM</span> 
          <h5>Head of Administration</h5>
         
            <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <!-- <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>-->
          </div>

        </div>
      </div>
    </div>

   

  </div>
</section><!-- End Team Section -->

<!-- ======= Contact Section ======= -->
<section id="faq" class="faq">
  <div class="container">

    <div class="section-title">
      <h2>FAQs</h2>
      <p>Frequently Asked Questions</p>
    </div>

    <div class="row">
      <div class="col-lg-12">
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Q. Are all services provided free?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">No, Some services provided are payed Services</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Q. Does the Centre has a working Labrotary?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, the Centre has a full functioning Labrotary</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Q. Does the Centre provides CS services?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, the Centre provides payed CS  service</div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                Q. Is there a GOPD Department in the Centre?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">There is a GOPD Department that attends to general patients </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFifteen">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                Q. Does the Centre operate during the weekends?
              </button>
            </h2>
            <div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The Centre operates on 24/7 meaning 24 hours a day whole week.</div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</section><!-- End Contact Section -->

@endsection