<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function() {
    return view('app');

});

Route::get('/categories', function(){
return view('categories.index');
}
);


Route::get('/posts',function(){
    return view('posts.index');
});
// Route::get('/categories',[CategorieController::class,'index'])->name('categories.index');




// Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

// Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');

// Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');

// Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');

// Route::patch('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');

// Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');

