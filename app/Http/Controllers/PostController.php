<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request):View
    {
        return view('blog.posts.index');
    }
    public function create()
    {
        return "Post Create";
    }
    public function store(Request $request)
    {
        dd($request->all());
        return "Post Store";
    }
    public function show($id)
    {
        return "Post Show: $id";
    }
    public function edit($id)
    {
        return "Post Edit: $id";
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
        return "Post Update: $id";
    }
    public function destroy($id)
    {
        return "Post Destroy: $id";
    }
}
