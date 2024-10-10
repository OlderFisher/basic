<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\CategoryResource;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return CategoryResource::collection(Category::all());
    }

    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }
}
