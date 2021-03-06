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

Route::get('/home', 'HomeController@index')->name('home');


/**
 * Dashboard Index
 *
 * @var [type]
 */
Route::group([
    'prefix' => 'dashboard',
], function () {
    Route::get('{path?}', function () {
        return view('dashboard');
    })->where('path', '[\/\w\.-]*');
});


Route::group(['namespace' => 'Dashboard'], function () {
    Route::resource('nav', 'NavigationsController');
});


