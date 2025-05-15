@csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{old('title',$post->title)}}">
    <label for="slug">Slug</label>
    <input type="text" name="slug" value="{{old('slug',$post->slug)}}">

    <label for="content">Content</label>
    <textarea name="content">{{old('content',$post->content)}}</textarea>

    <label for="category_id">Category</label>
    <select name="category_id">
        @foreach ($categories as $title => $id)
        <option {{ old('category_id',$post->category_id) == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>

    <label for="description">Description</label>
    <textarea name="description">{{old('description',$post->description)}}</textarea>

    <label for="posted">Posted</label>
    <select name="posted">
        <option {{ old('posted',$post->posted) == 'yes' ? 'selected' : ''}} value="yes">Yes</option>
        <option {{ old('posted',$post->posted_) == 'no' ? 'selected' : ''}} value="no">No</option>
    </select>


    @if(isset($task) && $task == 'edit')
    <label for="image">Imagen</label>
    <input type="file" name="image">
    @endif
    <button type="submit">Send</button>
