<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/articles/create', [ArticleController::class,'create'])->name('article.create');

Route::post('/articles/store', [ArticleController::class,'store'])->name('article.store');

Route::get('/articles/index', [ArticleController::class,'index'])->name('article.index');

Route::get('/articles/show/{article}', [ArticleController::class,'show'])->name('article.show');

Route::get('/articles/show/{category}', [ArticleController::class,'byCategory'])->name('article.byCategory');

Route::get('/careers', [PublicController::class,'careers'])->name('careers');

Route::post('/careers/submit',[PublicController::class,'careersSubmit'])->name('careers.submit');

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::patch('/admin/{user}/set-admin',[AdminController::class,'setAdmin'])->name('admin.setAdmin');
    Route::patch('/admin/{user}/set-revisor',[AdminController::class,'setRevisor'])->name('admin.setRevisor');
    Route::patch('/admin/{user}/set-writer',[AdminController::class,'setWriter'])->name('admin.setWriter');

});