<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/articles/create', [ArticleController::class,'create'])->name('article.create');

Route::post('/articles/store', [ArticleController::class,'store'])->name('article.store');