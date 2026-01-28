<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('app');
});

Route::get('/Posts', function () {
    return view('/Posts/index');
});


Route::get('/categories', function () {
    return view('/categories/index');
});

Route::get('/Posts', function () {
    return view('/Posts/index');
});
Route::resource('post', PostController::class);
Route::resource('categories', CategorieController::class);

Route::resources([
    'posts' => PostController::class,
    'categories' => CategorieController::class,
]);
// use App\Http\Controllers\PostController;

// Route::get('/post', [PostController::class, 'index']);{
//     return 'hii';
// }

