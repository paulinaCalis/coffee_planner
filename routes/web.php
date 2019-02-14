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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::post('/pick', 'DashboardController@pick')->name('pick');
Route::resource('team', 'TeamController');
Route::resource('member', 'MemberController');