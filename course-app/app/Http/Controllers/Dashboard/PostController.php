<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.post.index');
    }

    public function create()
    {
        return view('dashboard.post.create');
    }


    public function store(Request $request) {}

    public function show(string $id)
    {
        return view('dashboard.post.show');
    }

    public function edit(string $id)
    {
        return view('dashboard.post.edit');
    }

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}
}
