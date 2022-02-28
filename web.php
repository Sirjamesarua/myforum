<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','MainController@index');

Route::resource('posts','PostsController');

//Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout',function(){
	Auth::logout();
	return Redirect::to('login');
});

//Route::resource('me','PostsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/delete', [App\Http\Controllers\DeleteController::class, 'index']));

