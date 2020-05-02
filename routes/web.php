<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/{id}', 'BlogController@fullBlog');
Route::get('/create', 'BlogController@create');
Route::post('/store', 'BlogController@store');


### vue controller ###
Route::get('/vue', 'VueController@index');

#### auto generated ####
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
