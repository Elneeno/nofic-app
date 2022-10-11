@extends('layouts.app')

@section('content')

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>News Form</h2>
        </div>

        <div class="row">

          <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Title</label>
                  <input type="text" name="title" class="form-control" id="title" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">News Content</label>
                <textarea class="form-control" name="news_content" rows="10" required></textarea>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pictures</label>
                <input type="file" class="form-control" name="pictures" id="pictures" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Upload</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection