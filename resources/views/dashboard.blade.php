@extends('layouts.app')

@section('content')
<section id="contact" class="contact">
  <div class="container">
<div class="section-title">
      <h2>Dashboard</h2>
    </div>
 <div class="row"> <h3 align=""><strong>Welcome, Admin</strong></h3>
   <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
      <div class="info">
         <img src="{{URL::to('/')}}/assets/img/admin.png" class="img-fluid" alt="" height="150" width="150"> 
      </div>
          </div>
         <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
           <h3><strong>Menu</strong></h3>
          <div class="email"><a href="{{ route('news.index') }}">News</a></div><br>
          <div class="phone"><a href="{{ route('bulletin.index') }}">Bulletin</a></div>
          </div>
          </div>
        </div>
</div>
</div>
</section>
@endsection