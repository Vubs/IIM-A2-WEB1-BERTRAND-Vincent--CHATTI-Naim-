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


Route::get('/hello', function(){
    return 'Hello boyyyyz';
});



// Contact Page
Route::get('/contact', function(){
   return 'Here will be my contact page' ;
});






Route::group(['middleware' => ['web']], function () {


    Route::resource('articles', 'ArticlesController');

    Route::get('foo', ['middleware' => [ 'auth', 'manager' ], function(){
        return "this page may only be viewed by manager";
    }]);


});




Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

//    Route::get('/home', 'HomeController@index');
});
