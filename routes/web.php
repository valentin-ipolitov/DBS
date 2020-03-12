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
    return view('index');
});

Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::get('/registration', 'AuthController@registration');
Route::post('/registration', 'AuthController@store');

// Auth
Route::group(['middleware' => ['isAuth']], function () {

    Route::get('/users', 'UserController@index');
    
    Route::get('/addUser', function () {
        return view('pages.addUser');
    });
    
    Route::post('/addUser', 'UserController@store');
});

