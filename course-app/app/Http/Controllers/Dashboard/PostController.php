<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->paginate(5);
        return view('dashboard.post.index',  compact(['posts']));
    }

    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();
        return view('dashboard.post.create', compact(['categories', 'post']));
    }


    public function store(StoreRequest $request)
    {
        Post::create($request->validated());
        return to_route('post.index');
    }

    public function show(Post $post)
    {

        return view('dashboard.post.show', compact(['post']));
    }

    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        return view('dashboard.post.edit', compact(['post', 'categories']));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $filename = time() . '.' . $data['image']->extension();
            $request->image->move(public_path('uploads/posts'), $filename);
        }

        $post->update($data);
        return to_route('post.index');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');
    }
}
