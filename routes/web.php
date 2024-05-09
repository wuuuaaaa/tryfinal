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

Route::get('home', 'HomeController@index');

# from tryclone repo
Route::get('reports', 'ReportsController@index');
Route::post('reports/stat', 'ReportsController@reportStatistic');

# from tryclone2 repo
Route::get('app', 'AppController@index');
Route::post('app', 'AppController@app');
