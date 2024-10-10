<?php

use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\CompanyController;
use App\Http\Controllers\Api\v1\EmployeeController;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function () {
    // Categories
    Route::prefix('/categories')->group(function () {
        Route::get('', [CategoryController::class, 'index']);
        Route::get('{category}', [ CategoryController::class, 'show']);
    });
    //Posts
    Route::prefix('/posts')->group(function () {
        Route::get('', [PostController::class, 'index']);
        Route::get('{post}', [ PostController::class, 'show']);
    });
    //Companies
    Route::prefix('/companies')->group(function () {
        Route::get('', [CompanyController::class, 'index']);
        Route::get('{company}', [ CompanyController::class, 'show']);
    });
    //Employees
    Route::prefix('/employees')->group(function () {
        Route::get('', [EmployeeController::class, 'index']);
        Route::get('{employee}', [ EmployeeController::class, 'show']);
    });
    //Users
    Route::prefix('/users')->group(function () {
        Route::get('', [UserController::class, 'index']);
        Route::get('{user}', [ UserController::class, 'show']);
    });
});
