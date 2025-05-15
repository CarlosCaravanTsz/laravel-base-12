@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

<form action="{{ route('category.store')}}" method="post">

    @include('dashboard.fragment._categories-form')
</form>
@endsection
