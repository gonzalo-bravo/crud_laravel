<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin','AdminController@inicio')->name('admin');
Route::get('/admin/actividades', function () {
    return view('admin/actividades');
})->name('actividades');
Route::get('/admin/nosotros', function () {
    return view('admin/nosotros');
})->name('nosotros');
