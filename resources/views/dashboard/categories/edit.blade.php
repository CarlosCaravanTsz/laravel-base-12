@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

<form action="{{ route('category.update', $category->id)}}" method="post" enctype="multipart/form-data">

    @method('PATCH ') <!-- SImulamos el metodo -->

    @include('dashboard.fragment._categories-form')
</form>
@endsection
