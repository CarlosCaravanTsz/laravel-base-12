@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

<form action="{{ route('post.store')}}" method="post">

    @include('dashboard.fragment._posts-form')
</form>
@endsection
