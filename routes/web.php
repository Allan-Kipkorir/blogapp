<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Home view
Route::get('/blog',[BlogController::class, 'home']);


//view Single blog
Route::get('/blog/{id}', [BlogController::class,'show']);

//storing a new  blog to my database
Route::post('/store',[BlogController::class, 'store']);


//update/edit page
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

//store update
Route::put('/blog/{id}', [BlogController::class, 'update']);

//Delete blog
Route::DELETE('/blog/{id}/delete', [BlogController::class, 'delete']);





