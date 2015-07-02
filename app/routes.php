<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PostsController@Index');

// показать форму входа
Route::get('login', array('uses' => 'UsersController@showLogin'));
// проверить данные для входа
Route::post('login', array('uses' => 'UsersController@doLogin'));
// выход из учетной записи
Route::get('logout', array('uses' => 'UsersController@doLogout'));

Route::group(array('before' => 'auth'), function () {
        Route::get('/managePosts', 'PostsController@managePosts');
        Route::get('/post/create', 'PostsController@Create');
        Route::post('/post/store', 'PostsController@store');
        Route::get('/post/show/{id}', 'PostsController@Show');
        Route::get('/post/edit/{id}', 'PostsController@Edit');
        Route::post('/post/update', 'PostsController@update');
        Route::post('/post/destroy', 'PostsController@destroy');
        

    }); 
