@extends('dashboard.master')

@section('content')

<a href="{{route('post.create')}}" target="blank">Create</a>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Posted</td>
            <td>Category</td>
            <td>Options</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>
                {{ $post->id }}
            </td>
            <td>
                {{ $post->title }}
            </td>
            <td>
                {{ $post->posted }}
            </td>
            <td>
                {{ $post->category->title}}
            </td>
            <td>
                <a href="{{route('post.edit',$post->id)}}">Edit</a>
                <a href="{{route('post.show',$post->id)}}">Show</a>
                <form action="{{route('post.destroy',$post->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
@endsection
