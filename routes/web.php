<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return redirect('menu');
});

Route::get('menu', 'App\Http\Controllers\MenuController@index');

Route::get('profiles', 'App\Http\Controllers\ProfileController@index')->name('profiles.index');
Route::get('profiles/create', 'App\Http\Controllers\ProfileController@create')->name('profiles.create');
Route::post('profiles', 'App\Http\Controllers\ProfileController@store')->name('profiles.store');
Route::get('profiles/{id}', 'App\Http\Controllers\ProfileController@show')->name('profiles.show');

Route::get('users', 'App\Http\Controllers\UserController@index')->name('users.index');
Route::get('users/create', 'App\Http\Controllers\UserController@create')->name('users.create');
Route::post('users', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::get('users/{id}', 'App\Http\Controllers\UserController@show')->name('users.show');
Route::delete('users/{id}', 'App\Http\Controllers\UserController@delete')->name('users.delete');

Route::get('posts', 'App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create')->middleware('auth');
Route::post('posts/store', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::post('posts', 'App\Http\Controllers\PostController@update')->name('posts.update');
Route::get('posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('posts/{id}/edit', 'App\Http\Controllers\PostController@updateview')->name('posts.edit');


Route::get('comments/create', 'App\Http\Controllers\CommentController@create')->name('comments.create')->middleware('auth');
Route::post('comments', 'App\Http\Controllers\CommentController@store')->name('comments.store');
//Route::get('comments/{id}', 'App\Http\Controllers\CommentController@show')->name('comments.show');


Route::get('/forum', function () {
    return "Post goes here";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
