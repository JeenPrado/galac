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
/*Route::get('/inicio',);*/

Route::name('listar')->get('/list', 'App\Http\Controllers\ProductController@listar');
Route::name('guardar')->post('/list','App\Http\Controllers\ProductController@store');
Route::name('crear')->get('/create','App\Http\Controllers\ProductController@create');
Route::name('buscar')->get('/find', 'App\Http\Controllers\ProductController@find');
Route::name('modificar')->get('/modify', 'App\Http\Controllers\ProductController@edit');
Route::name('producto')->get('/product/{cod}', 'App\Http\Controllers\ProductController@show');
/*Route::get('/inicio', function () {
    return view('layout.inicio');
});*/


/*Route::get('/list', function () {
    return view('layout.list');
});*/