@extends('dashboard.master')

@section('content')

<a class="my-3 btn btn-primary" href="{{route('category.create')}}" target="blank">Create</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
                {{ $category->id }}
            </td>
            <td>
                {{ $category->title }}
            </td>
            <td>
                {{ $category->slug }}
            </td>
            <td>
                <a class="mt-2 btn btn-success" href="{{route('category.edit',$category->id)}}">Edit</a>
                <a  class="mt-2 btn btn-success" href="{{route('category.show',$category->id)}}">Show</a>
                <form action="{{route('category.destroy',$category->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="mt-2 btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-2">
    {{ $categories->links() }}
</div>
@endsection
