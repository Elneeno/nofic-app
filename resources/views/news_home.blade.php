@extends('layouts.app')

@section('content')

<!-- ======= News Section ======= -->
   <section id="featured-services" class="featured-services section-bg">
      <div class="container">
        <div class="section-title">
           <h2>News Home</h2>
        </div>
        <div class="row no-gutters">
     @foreach ($news as $item)
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><img src="{{ asset('news_images/'.$item ->image) }}" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="{{route('news.show', $item->id) }}"> {{$item->title}} </a></h4>
              <p class="description">{{date('d M, Y', strtotime($item->date))}}</p>
              <a href="{{route('news.show', $item->id) }}">More...</a>
            </div>
          </div> 
    @endforeach
        </div>
      </div>
    </section>
    <!-- End News Section -->
@endsection