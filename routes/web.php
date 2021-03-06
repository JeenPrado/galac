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

/*Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/inicio',);*/

Route::get('/','App\Http\Controllers\ProductController@index');
Route::name('listar')->get('/list', 'App\Http\Controllers\ProductController@listar');
Route::name('producto')->get('/product/{cod}', 'App\Http\Controllers\ProductController@show');
Route::name('buscar')->get('/find', 'App\Http\Controllers\ProductController@find');
Route::name('mostrar')->post('/see','App\Http\Controllers\ProductController@result');


Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    
    Route::name('crear')->get('/create','App\Http\Controllers\ProductController@create');
    Route::name('guardar')->post('/list','App\Http\Controllers\ProductController@store');
    Route::name('editar')->get('/edit/{id}', 'App\Http\Controllers\ProductController@edit');
    Route::name('update_product')->put('/product/{id}','App\Http\Controllers\ProductController@update');
    Route::name('eliminar')->delete('/delete/{id}', 'App\Http\Controllers\ProductController@delete');

    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
