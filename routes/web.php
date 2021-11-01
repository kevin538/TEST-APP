<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Auth::routes();
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Auth::routes();

/* Route::get('/login', function () {
    return redirect('/');
}); */
Route::get('/', function () {
    return view('login');
})->name('logi');

Route::get('/UseRegister', function () {
    return view('register');
})->name('regist');

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/admin', 'App\Http\Controllers\DashBoard@index')->name('admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    /* Routes pour les enregistrement des Produits */
    Route::get('/stock', 'App\Http\Controllers\StockController@index')->name('stock');
    Route::get('/stock/add', 'App\Http\Controllers\StockController@add')->name('stock/add');
    Route::post('/stock/store', 'App\Http\Controllers\StockController@store')->name('stock/store');
    Route::get('/stock/delete/{id}', 'App\Http\Controllers\StockController@destroy')->name('stock/stock');
    Route::get('/stock/edit/{id}', 'App\Http\Controllers\StockController@edit')->name('stock/edit');
    Route::put('/stock/update/{id}', 'App\Http\Controllers\StockController@update')->name('updatestock');
    /* Routes pour la recherche des Produits */
    Route::get('/search', 'App\Http\Controllers\StockController@search')->name('search');
});
