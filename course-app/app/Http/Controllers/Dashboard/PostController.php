<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
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

    public function edit(string $id)
    {
        return view('dashboard.post.edit');
    }

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}
}
