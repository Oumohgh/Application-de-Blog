<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'bonjour';
});

// use App\Http\Controllers\PostController;

// Route::get('/post', [PostController::class, 'index']);{
//     return 'hii';
// }
