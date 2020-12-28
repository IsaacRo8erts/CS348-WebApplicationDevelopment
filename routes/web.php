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
    return view('welcome');
});

Route::get('menu', 'App\Http\Controllers\MenuController@index');

Route::get('profiles', 'App\Http\Controllers\ProfileController@index');
Route::get('profiles/create', 'App\Http\Controllers\ProfileController@create')->name('profiles.create');
Route::post('profiles', 'App\Http\Controllers\ProfileController@store')->name('profiles.store');
Route::get('profiles/{id}', 'App\Http\Controllers\ProfileController@show')->name('profiles.show');

Route::get('posts', 'App\Http\Controllers\PostController@index');
Route::get('posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');

Route::get('/forum', function () {
    return "Post goes here";
});