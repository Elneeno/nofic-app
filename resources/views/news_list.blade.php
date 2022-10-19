@extends('layouts.app')

@section('content')


<b>News List</b> | <a href="{{ route('news.create') }}">Create News</a>
<table class="table">
    <thead>
        <th>S/N</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($news as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> <a href="{{route('news.show', $item->id) }}"> {{$item->title}} </a> </td>
            <td>{{date('d M, Y', strtotime($item->date))}}</td>
            <td>Edit | Delete</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection