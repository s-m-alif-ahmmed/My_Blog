<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;



Route::middleware(['user'])->group(function () {

    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    Route::get('/user-detail/{id}',[HomeController::class,'detail'])->name('user-detail');
    Route::get('/search',[HomeController::class,'searchBlogs'])->name('search');


    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

        Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

//        Category

        Route::resource('category',CategoryController::class);
        Route::get('/category-change-status/{id}',[CategoryController::class,'categoryChangeStatus'])->name('category-change-status');


//        Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add-blog');
//        Route::post('/new-blog',[BlogController::class,'create'])->name('new-blog');
//        Route::get('/edit-blog/{id}',[BlogController::class,'edit'])->name('edit-blog');
//        Route::post('/update-blog/{id}',[BlogController::class,'update'])->name('update-blog');
//        Route::get('/admin-detail/{id}',[BlogController::class,'detail'])->name('admin-detail');
//        Route::get('/delete-blog/{id}',[BlogController::class,'delete'])->name('delete-blog');
//        Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage-blog');

//        Blog

        Route::resource('blog',BlogController::class);
        Route::get('/blog-change-status/{id}',[BlogController::class,'blogChangeStatus'])->name('blog-change-status');


//        User

        Route::get('/users',[DashboardController::class,'users'])->name('users');
        Route::get('/users-detail/{id}',[DashboardController::class,'usersDetail'])->name('users-detail');
        Route::get('/delete-user/{id}',[DashboardController::class,'deleteUser'])->name('delete-user');
        Route::get('/change-role/{id}',[DashboardController::class,'changeRole'])->name('change-role');
        Route::get('/change-ban-status/{id}',[DashboardController::class,'changeBanStatus'])->name('change-ban-status');


    });

});

