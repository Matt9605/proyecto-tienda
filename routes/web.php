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
Route::group(['middleware'=>'auth','namespace'=>'App\Http\Controllers'],function(){
    Route::resource('usuarios','UsersController');
    Route::resource('proveedores','ProveedoresController');
    Route::resource('tiendas','TiendasController');
    Route::resource('ventas','VentasController');
    Route::resource('productos','ProductosController');
   
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
