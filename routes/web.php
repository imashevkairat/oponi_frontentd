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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add/form','HomeController@addForm')->name('addForm');
Route::post('add/form/store','HomeController@addFormStore')->name('addFormStore');
///opon-i
Route::get('documents/list',"CategoryesController@documents")->name('documents');
Route::get('operations/list',"CategoryesController@operations")->name('operations');
Route::get('reports/list',"CategoryesController@reports")->name('reports');
