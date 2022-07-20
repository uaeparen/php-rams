<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
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

Route::get('/detail/{slug}/{id}', 'App\Http\Controllers\CatalogController@like');
Route::get('/detail/{slug}/{id}', 'App\Http\Controllers\CatalogController@show');
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/articles', 'App\Http\Controllers\CatalogController@index');
Route::get('/tags', 'App\Http\Controllers\TagController@index');
//Route::get('/all-categories',[TagController::class,'all_category']);
//Route::get('/category/{slug}/{id}',[TagController::class,'category']);
