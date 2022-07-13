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

//Rutas iniciales
Route::get('/', function () {
    if(Auth::check()) {
        return view('home');
    } else {
        return view('auth.login');
    }
});
Route::get('/home', 'App\Http\Controllers\HomeController@index');

//Middleware
//Rutas productos
Route::middleware(['auth:sanctum','verified'])->get('/productos', 'App\Http\Controllers\ProductoController@index');
Route::middleware(['auth:sanctum','verified'])->get('/productos/create', 'App\Http\Controllers\ProductoController@create')->name('producto.create');
Route::middleware(['auth:sanctum','verified'])->post('/productos/store', 'App\Http\Controllers\ProductoController@store')->name('producto.store');
Route::middleware(['auth:sanctum','verified'])->get('/productos/edit/{id}', 'App\Http\Controllers\ProductoController@edit')->name('producto.edit');
Route::middleware(['auth:sanctum','verified'])->put('/productos/update/{id}', 'App\Http\Controllers\ProductoController@update')->name('producto.update');
Route::middleware(['auth:sanctum','verified'])->get('/productos/editImagen/{id}', 'App\Http\Controllers\ProductoController@editImagen')->name('producto.editImagen');
Route::middleware(['auth:sanctum','verified'])->put('/productos/updateImagen/{id}', 'App\Http\Controllers\ProductoController@updateImagen')->name('producto.updateImagen');
Route::middleware(['auth:sanctum','verified'])->delete('/productos/destroy/{id}', 'App\Http\Controllers\ProductoController@destroy')->name('producto.destroy');
Route::middleware(['auth:sanctum','verified'])->get('/productos/comentarios/{id}', 'App\Http\Controllers\ProductoController@getComentarios')->name('producto.getComentarios');

//Rutas categorias
Route::middleware(['auth:sanctum','verified'])->get('/categorias', 'App\Http\Controllers\CategoriaController@index');
Route::middleware(['auth:sanctum','verified'])->get('/categorias/create', 'App\Http\Controllers\CategoriaController@create')->name('categoria.create');
Route::middleware(['auth:sanctum','verified'])->post('/categorias/store', 'App\Http\Controllers\CategoriaController@store')->name('categoria.store');
Route::middleware(['auth:sanctum','verified'])->get('/categorias/edit/{id}', 'App\Http\Controllers\CategoriaController@edit')->name('categoria.edit');
Route::middleware(['auth:sanctum','verified'])->put('/categorias/update/{id}', 'App\Http\Controllers\CategoriaController@update')->name('categoria.update');
Route::middleware(['auth:sanctum','verified'])->delete('/categorias/destroy/{id}', 'App\Http\Controllers\CategoriaController@destroy')->name('categoria.destroy');

Auth::routes(['register' => false]);
