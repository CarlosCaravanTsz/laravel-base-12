@extends('dashboard.master')

@section('content')

@include('dashboard.fragment._errors-form')

<form action="{{ route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">

    @method('PATCH ') <!-- SImulamos el metodo -->

    @include('dashboard.fragment._posts-form', ['task' => 'edit'])

</form>
@endsection
