<?php

use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Con esto indicamos que todas las rutas deben accederse por dashboard/category/endpoint o dashboard/post/endpoint
Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

// o otra opcion:
// Route::resources(
//     [
//         'post' => PostController::class,
//         'category' => CategoryController::class,
//     ],
//     [
//         'as' => 'dashboard',
//         'prefix' => 'dashboard',
//     ]
//     );
