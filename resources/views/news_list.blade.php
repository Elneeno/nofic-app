@extends('layouts.app2')

@section('content')

<section id="about" class="about">
  <div class="container">
    <div class="section-title">
      <h2>News</h2>
    </div>
<strong>News List</strong> | <a href="{{ route('news.create') }}">Create News</a>
<table class="table">
    <thead>
        <th>S/N</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($news as $item)
        <form action="" method="post" role="form">
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> <a href="{{route('news.show', $item->id) }}"> {{$item->title}} </a> </td>
            <td>{{date('d M, Y', strtotime($item->date))}}</td>
            <td>Edit | 
            <button type="button" class="btn btn-outline-success" name="delete" onclick="confirm('Confirm Delete. This action cannot be undone!')">Delete</button></td>
             </form>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</section
@endsection