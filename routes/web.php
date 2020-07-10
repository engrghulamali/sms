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
Route::get('/',"StudentsController@index") ;
Route::get('/edit/{id}',"StudentsController@edit") ;
Route::get('/show/{id}',"StudentsController@show") ;
Route::get('/shows/{id}',"StudentsController@shows") ;
Route::get('/create',"StudentsController@create") ;
Route::post('/store',"StudentsController@store") ;
Route::post('/update/{id}',"StudentsController@update") ;
Route::post('/update/{id}',"StudentsController@update") ;
Route::post('/update/{id}',"StudentsController@update") ;
Route::get('/delete/{id}',"StudentsController@destroy") ;