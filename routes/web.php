<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\OthersProfileController;

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

//Route::get('/','pagesController@index');
Route:: get('/',[PostsController::class,'index']);
//Route::resource('/',PostsController::class);
Route::resource('posts',PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');

Route::get('/{profileName}/{profileId}/profile', [App\Http\Controllers\OthersProfileController::class, 'index']);

Route::get('/{menu}/menu', [App\Http\Controllers\PagesController::class, 'menu']);

Route::get('/mytopics', [App\Http\Controllers\HomeController::class, 'mytopics']);

Route::get('/{profileName}/{profileId}/topics', [App\Http\Controllers\OthersProfileController::class, 'otherstopics']);

Route::post('/profile', [App\Http\Controllers\HomeController::class, 'changepix']);

Route::get('/posts/{$id}', [App\Http\Controllers\PostsController::class, 'edit']);
Route::post('/posts/', [App\Http\Controllers\CommentsController::class, 'create']);