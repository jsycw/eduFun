<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
 
// Route::get('/', function () {
//     return view('main.home');
// });

Route::get('/', [ArticleController::class, 'getAllArticles'])->name('home.view');

Route::get('/category/{id}', [CategoryController::class, 'getCategoryById'])->name('category.view');

Route::get('/popular', [ArticleController::class, 'getPopularArticles'])->name('popular.view');

Route::get('/aboutUs', function(){
    return view('main.aboutUs');
})->name('aboutUs.view');

Route::get('/writer', [AuthorController::class, 'getAllAuthors'])->name('writer.view');

Route::get('/article/{id}', [ArticleController::class, 'getArticleById'])->name('articleDetail.view');

Route::get('/writer/{id}', [AuthorController::class, 'getAuthorById'])->name('writerDetail.view');