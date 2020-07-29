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

Route::get('admin', 'AdminCtrl@index');
Route::get('article', 'AdminCtrl@article');
Route::post('article/create', 'AdminCtrl@article_create');
Route::get('article/delete/{id}', 'AdminCtrl@article_delete');