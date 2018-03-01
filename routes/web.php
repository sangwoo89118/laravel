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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);

Route::group(['middleware'=>'admin'], function(){


    Route::get('/admin', function(){
        return view('admin.index');
    });


    Route::resource('admin/users', 'AdminUsersController',['as'=>'admin']);

    Route::resource('admin/posts', 'AdminPostsController',['as'=>'admin']);

    Route::resource('admin/categories', 'AdminCategoriesController',['as'=>'admin']);

    Route::resource('admin/media', 'AdminMediaController',['as'=>'admin']);

    Route::resource('admin/comments', 'PostCommentsController', ['as'=>'admin']);

    Route::resource('admin/comments/replies', 'CommentRepliesController', ['as'=>'admin']);

});

