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

	Route::get('/trader',['middleware'=>'check-role:admin|trader','uses'=>'TraderController@index'])->middleware('verified');

	Route::get('/trader/category',['middleware'=>'check-role:admin|trader','uses'=>'CategoryController@index'])->middleware('verified');
	Route::get('/trader/category/create',['middleware'=>'check-role:admin|trader','uses'=>'CategoryController@create'])->middleware('verified');
	Route::post('/trader/category',['middleware'=>'check-role:admin|trader','uses'=>'CategoryController@store'])->middleware('verified');
	Route::get('/trader/category/{category}/edit',['middleware'=>'check-role:admin|trader','uses'=>'CategoryController@edit'])->middleware('verified')->name('category.edit');
	Route::put('/trader/category/update/{category}',['middleware'=>'check-role:admin|trader','uses'=>'CategoryController@update'])->middleware('verified')->name('category.update');
	Route::delete('/trader/category/{category}',['middleware'=>'check-role:admin|trader','uses'=>'CategoryController@destroy'])->middleware('verified')->name('category.destroy');

	

	Route::get('/customer',['middleware'=>'check-role:customer','uses'=>'HomeController@index'])->middleware('verified');
});

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/register', function () {
// 	abort(404);
// });;


