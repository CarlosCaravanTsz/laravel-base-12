@csrf
    <label for="title">Name</label>
    <input class="form-control" type="text" name="title" value="{{old('title',$category->title)}}">
    <label for="slug">Slug</label>
    <input class="form-control"  type="text" name="slug" value="{{old('slug',$category->slug)}}">

    <button class="btn btn-success mt-2" type="submit">Send</button>
