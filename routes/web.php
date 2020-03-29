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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::group(['middleware'=>'auth'], function () {
	Route::get('/admin',['middleware'=>'check-role:admin','uses'=>'HomeController@admin'])->middleware('verified');
	Route::get('/trader',['middleware'=>'check-role:trader','uses'=>'HomeController@trader'])->middleware('verified');
	Route::get('/customer',['middleware'=>'check-role:customer','uses'=>'HomeController@index'])->middleware('verified');
});

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/register', function () {
// 	abort(404);
// });;


