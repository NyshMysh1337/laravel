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
    return 'a';
});

Route::get('/posts', 'PostController@index')->name('post.index');

Route::get('/hobbi', 'HobbiController@getHobbi');

Route::get('/posts/create', 'PostController@create')->name('post.create');

Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');;
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.delete');

Route::get('/posts/update', 'PostController@update');

Route::get('/posts/delete', 'PostController@delete');

Route::get('/posts/first_or_create', 'PostController@firstOrCreate');

Route::get('/posts/update_or_create', 'PostController@updateOrCreate');


Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactsController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');


