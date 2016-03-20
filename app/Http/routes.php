<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



// Contact Page
Route::get('/contact', function(){
   return view('contact') ;
});


Route::group(['middleware' => 'web'], function () {

    Route::auth();



    /* --- ARTICLES ROUTES --- */

    Route::resource('articles', 'ArticlesController');

    /* --- PROJECT ROUTES --- */
    Route::resource('projects', 'ProjectsController');

    Route::get('foo', ['middleware' => [ 'auth', 'manager' ], function(){
        return "this page may only be viewed by manager";
    }]);


    Route::get('/', function () {
        return view('welcome');
    });

    /* --- PROFILE ROUTES */

    Route::get('profile', 'UsersController@index');

    Route::get('profile/editName', 'UsersController@editName');
    Route::get('profile/editPassword', 'UsersController@editPassword');

    Route::patch('profile/updateName', 'UsersController@updateName');
    Route::patch('profile/updatePassword', 'UsersController@updatePassword');




});
