<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('dashboard/category/index');
    }

    public function create()
    {
        return view('dashboard/category/create');
    }

    public function store(Request $request) {}

    public function show(string $id)
    {
        return view('dashboard/category/show');
    }

    public function edit(string $id)
    {
        return view('dashboard/category/edit');
    }

    public function update(Request $request, string $id) {}

    public function destroy(string $id) {}
}
