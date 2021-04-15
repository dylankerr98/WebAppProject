<?php

use Carbon\Carbon;

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


Route::get('/about', function () {
    return view('about', [
        'links' => App\Link::take(3)->latest()->get()
    ]);
});

Route::get('/links', 'LinksController@index');
Route::post('/links', 'LinksController@store');
Route::get('/share', 'LinksController@create');
Route::get('/links/{link}', 'LinksController@show');
Route::get('/links/{link}/edit', 'LinksController@edit');
Route::put('/links/{link}', 'LinksController@update');
Route::Delete('/links/{link}/edit', 'LinksController@destroy');


