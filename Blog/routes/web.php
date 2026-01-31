<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

use Illuminate\Support\Facades\Route;

// Route::get('/',[Controller::class, 'index']);






Route::get('/', function () {
    return view('app');
});


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');




Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');




Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
Route::put('/tags/{tag}', [TagController::class, 'update'])->name('tags.update');
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');

/**
Route::resource('categories', CategoryController::class);
 *
 */


// Route::get('/posts',function(){
//     return view('Posts.index');
// });

// Route::get('/posts.create',function(){
//     return view('Posts.create');
// });
// Route::post('/posts',function(){
// dd(request()->all());
// });
// Route::get('/categories',[CategorieController::class,'index'])->name('categories.index');




// Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

// Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');

// Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');

// Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');

// Route::patch('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');

// Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');

