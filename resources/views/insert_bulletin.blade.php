@extends('layouts.app')

@section('content')

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Upload News Bulletin</h2>
        </div>

        <div class="row">

          <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Title</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                
              </div>
              
              <div class="form-group mt-3">
                <label for="name">Upload File</label>
                 <input type="file" name="name" class="form-control" id="name" required>
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