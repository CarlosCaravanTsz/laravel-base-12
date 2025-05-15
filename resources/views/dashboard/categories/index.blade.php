@extends('dashboard.master')

@section('content')

<a href="{{route('category.create')}}" target="blank">Create</a>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Slug</td>
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
                <a href="{{route('category.edit',$category->id)}}">Edit</a>
                <a href="{{route('category.show',$category->id)}}">Show</a>
                <form action="{{route('category.destroy',$category->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $categories->links() }}
@endsection
