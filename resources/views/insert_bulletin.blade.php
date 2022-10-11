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
            <form action="{{ route('bulletin.store'); }}" method="post"  enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf
              <div class="row">

                <div class="form-group col-md-6">
                  <label for="name">Title</label>
                  <input type="text" name="title" class="form-control" id="title" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Date</label>
                  <input type="month" min="2014-01" name="date" class="form-control" id="date" required>
                </div>
                
              </div>
              
              <div class="form-group mt-3">
                <label for="name">Upload File</label>
                 <input type="file" name="document" class="form-control" id="document" required>
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