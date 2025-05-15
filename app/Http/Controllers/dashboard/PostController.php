<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = Post::get();

        $posts = Post::paginate(2);

        // $post->delete();

        //$post->update([
        //    'title' => 'NEW TITLE'
        //]);
        // Post::create([
        //     'title' => 'test title',
        //     'slug' => 'test slug',
        //     'content' => 'This is the content of my first post.',
        //     'description' => 'This is the description of my first post.',
        //     'category_id' => 1,
        //     'posted' => 'no',
        //     'image' => 'test.jpg',
        // ]);
        return view('dashboard.posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::pluck('id', 'title');
        $post = new Post();

        return view('dashboard.posts.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        //dd($request->all()[]);
        //Post::create($request->all());

        Post::create( $request->validated());
        return to_route('post.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {

        $data = $request->validated();

        if(isset($data['image'])) {
            $data['image'] = $filename = time() .'.'. $data['image']->extension();
            $request->image->move(public_path('uploads/posts'), $filename);
        }


        $post->update($data);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');

    }
}
