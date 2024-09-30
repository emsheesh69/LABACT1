<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/services', function () {
    return view('services');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/profile', function () {
        return view('profile');
    });

    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::post('/assign-role/{id}', [UserController::class, 'assignRole']);
Route::get('/assign-admin/{id}', [UserController::class, 'assignAdminRole']);

Route::middleware("roleAuth:admin")->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/admin/submissions', [PostController::class, 'index'])->name('admin.submissions');
});

Route::middleware("auth")->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); 
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); 
    Route::get('/my-posts', [PostController::class, 'myPosts'])->name('posts.my');
});

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
