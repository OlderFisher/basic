<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return "Category Index";
    }
    public function create()
    {
        return "Category Create";
    }
    public function store(Request $request)
    {
        dd($request->all());
        return "Category Store";
    }
    public function show($id)
    {
        return "Category Show: $id";
    }
    public function edit($id)
    {
        return "Category Edit: $id";
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
        return "Category Update: $id";
    }
    public function destroy($id)
    {
        return "Category Destroy: $id";
    }
}
