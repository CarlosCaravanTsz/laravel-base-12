@extends('dashboard.master')

@section('content')

    <h1>Category Id: {{$category->id}}</h1>
    <br>
    <span>{{$category->title}}</span>
    <br>
    <span>{{$category->slug}}</span>

@endsection
