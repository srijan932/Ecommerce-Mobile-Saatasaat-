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

Route::get('/', 'DashboardController@welcome');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('posts/search_posts/{user_input}','PostController@searchPosts');
Route::resource('posts','PostController');
Route::get('/contact','ContactController@index')->name('contact');

Route::get('/admin/dashboard', 'DashboardController@adminDashboard')->middleware('admincheck');
Route::get('/admin/posts', 'DashboardController@postindex')->middleware('admincheck');;
Route::get('/admin/postshows/{id}', 'DashboardController@postshows')->middleware('admincheck');;
Route::get('/admin/users', 'DashboardController@userindex')->middleware('admincheck');;
