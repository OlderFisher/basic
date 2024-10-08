<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Companies
Route::get('/companies', [CompanyController::class, 'index'])->middleware('auth')->name('companies');
Route::middleware('auth')->name('company')->group(function () {
    Route::get('/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/company/{id}/update', [CompanyController::class, 'update'])->name('company.update');
    Route::delete('/company/{id}/delete', [CompanyController::class, 'destroy'])->name('company.destroy');
});

// Employees
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth')->name('employees');
Route::middleware('auth')->name('employee')->group(function () {
    Route::get('/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/{id}/delete', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});

// Categories
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories');
Route::middleware('auth')->name('category')->group(function () {
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
});

// Posts
Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts');
Route::middleware('auth')->name('post')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/{id}/update', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{id}/delete', [PostController::class, 'destroy'])->name('post.destroy');
});

// Just check Xdebug configuration
Route::get('/xdebug', function () { xdebug_info(); });

require __DIR__.'/auth.php';
