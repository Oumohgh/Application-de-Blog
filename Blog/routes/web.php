<?php

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
// use App\Http\Controllers\PostController;

// Route::get('/post', [PostController::class, 'index']);{
//     return 'hii';
// }
