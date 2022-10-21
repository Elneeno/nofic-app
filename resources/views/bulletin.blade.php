@extends('layouts.app')

@section('content')

<section id="about" class="about">
  <div class="container">
    <div class="section-title">
      <h2>Bulletin</h2>
    </div>
@if (session('message'))
    <div class="alert alert-info text-center">
        {{ session('message') }}
    </div>
@endif

<table class="table">
    <strong>Bulletin List </strong> | <a href="{{ route('bulletin.create') }}">New Bulletin</a>
    <thhead> 
        <th>S/N</th>
        <th>Document</th>
        <th>Issue</th>
        <th>Action</th>
    </thead>
    @foreach($data as $bulletin)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td> <a href="{{ asset('bulletins/'. $bulletin->pdf) }}" target="_blank"> {{ $bulletin->title }} </a> </td>
        <td>{{ date('M-Y', strtotime($bulletin->date)) }}</td>
        <td>
            <a href="{{ asset('bulletins/'. $bulletin->pdf) }}" target="_blank"> Open </a> |
            <a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

</div>
</section>
@endsection