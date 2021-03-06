<?php

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

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/categories/{id}', 'CategoriesController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
