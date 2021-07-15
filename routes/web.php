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

Route::group(['middleware' => ['web'],'domain' => 'britishonline9.dl'], function () {
    Route::get('/', function () {
        return view('users.index');
    });
    
    Route::group(['namespace' => 'User', 'as' => 'users.'],function(){
        // Route::get('/',['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('/service',['as' => 'service', 'uses' => 'ServiceController@service']);
        Route::get('/gamezone',['as' => 'gamezone', 'uses' => 'GamezoneController@gamezone']);
        Route::get('/payment',['as' => 'payment', 'uses' => 'PaymentController@payment']);
        Route::get('/offer',['as' => 'offer', 'uses' => 'OfferController@offer']);
        Route::get('/contact',['as' => 'contact', 'uses' => 'UserController@contact']);
        Route::get('/profile',['as' => 'profile', 'uses' => 'UserController@profile']);
        Route::get('/table-game',['as' => 'wallet', 'uses' => 'GamezoneController@tableGame']);
        Route::get('/wallet',['as' => 'wallet', 'uses' => 'PaymentController@wallet']);
  
        // Authentication Routes...
        Route::group(['namespace' => 'Auth', 'as' => 'auth.'],function(){
            Route::get('login',['as' => 'login', 'uses' => 'LoginController@showLoginForm'])->middleware('guest');
            Route::post('login',['as' => 'login', 'uses' => 'LoginController@login'])->middleware('guest');

            Route::get('register',['as' => 'register', 'uses' => 'LoginController@showRegistrationForm'])->middleware('guest');
            Route::post('register',['as' => 'register', 'uses' => 'LoginController@register'])->middleware('guest');
        });
        
    });
});

Route::group(['middleware' => ['web'],'domain' => 'ag.britishonline9.dl'], function () {
    Route::get('/', function () {
        // return view('users.index');
    });
});