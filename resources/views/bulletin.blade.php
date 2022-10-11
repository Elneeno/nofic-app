@extends('layouts.app')

@section('content')

@if (session('message'))
    <div class="alert alert-info text-center">
        {{ session('message') }}
    </div>
@endif

<table class="table">
    <b>Bulletin List Here</b> <a href="{{ route('bulletin.create') }}">New Bulletin</a>
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
@endsection