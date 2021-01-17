<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

    Route::get('/normal-users', 'HomeController@index')->name('home');

    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}/edit', 'UserController@edit');
    Route::post('/users/{id}/update', 'UserController@update');

    Route::get('/managers','ManagerController@index');
    Route::get('/supervisors','SupervisorController@index');
    Route::get('/staffs','StaffController@index');

    Route::get('/roles','RoleController@index');
});

