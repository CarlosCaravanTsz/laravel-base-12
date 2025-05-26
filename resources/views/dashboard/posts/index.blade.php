@extends('dashboard.master')

@section('content')

<a class="my-3 btn btn-primary" href="{{route('post.create')}}" target="blank">Create</a>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
            <th>Options</th>
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
                <a class="mt-2 btn btn-success" href="{{route('post.edit',$post->id)}}">Edit</a>
                <a class="mt-2 btn btn-success" href="{{route('post.show',$post->id)}}">Show</a>
                <form action="{{route('post.destroy',$post->id)}}" method="post">
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
    {{ $posts->links() }}
</div>
@endsection
