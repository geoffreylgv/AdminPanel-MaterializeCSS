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

// Route::get('/', 'PrincipaleController@index')->name('home');
// Route::get('/news', 'PrincipaleController@news')->name('news');
Route::get('/', [\App\Http\Controllers\PrincipaleController::class, 'index']);
Route::get('/news', [\App\Http\Controllers\PrincipaleController::class, 'news']);