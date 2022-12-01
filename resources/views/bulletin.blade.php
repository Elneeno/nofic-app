@extends('layouts.app2')

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
    <form action="{{route('bulletin.destroy', $bulletin->id); }}" method="post" role="form">
    <tr>
        <td>{{$loop->iteration}}</td>
        <td> <a href="{{ asset('bulletins/'. $bulletin->pdf) }}" target="_blank"> {{ $bulletin->title }}</a> </td>
        <td>{{ date('M-Y', strtotime($bulletin->date)) }}</td>
        <td>
            <a href="{{ asset('bulletins/'. $bulletin->pdf) }}" target="_blank"> Open </a> |
            @csrf    
            @method('DELETE') 
            <button type="submit" class="btn btn-outline-success" name="delete" onclick="confirm('Are you sure you want to Delete. This action cannot be undone!')">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>

</div>
</section> 
@endsection