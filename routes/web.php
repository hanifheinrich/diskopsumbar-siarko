<?php

use Illuminate\Support\Facades\Route;

//User
Route::get('/','App\Http\Controllers\UserController@index');
Route::get('/list-koperasi/{id}','App\Http\Controllers\UserController@detail');

//Auth
Route::get('/login','App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::post('/login','App\Http\Controllers\AuthController@auth')->middleware('guest');
Route::get('/logout','App\Http\Controllers\AuthController@logout')->middleware('auth');

//Dashboard
Route::get('/dashboard-admin', 'App\Http\Controllers\AdminController@dashboard')->middleware('auth');
Route::get('/tentang-aplikasi', 'App\Http\Controllers\AdminController@about')->middleware('auth');

//Profle
Route::get('/profil/{id}', 'App\Http\Controllers\AdminController@profile')->middleware('auth');
Route::post('/profil-edit/{id}', 'App\Http\Controllers\AdminController@updateprofile')->middleware('auth');
Route::post('/password-edit', 'App\Http\Controllers\AdminController@updatepassword')->middleware('auth');

//master-data
Route::resource('wilayah','App\Http\Controllers\WilayahController'::class)->middleware('auth');
Route::get('wilayah/{id}/delete','App\Http\Controllers\WilayahController@deletewilayah')->middleware('auth');
Route::resource('koperasi','App\Http\Controllers\KoperasiController'::class)->middleware('auth');
Route::get('koperasi/{id}/delete','App\Http\Controllers\KoperasiController@deletekoperasi')->middleware('auth');

//view-by
Route::get('/arsip-wilayah', 'App\Http\Controllers\AdminController@arsipwilayah')->middleware('auth');
Route::get('/arsip-wilayah-detail/{id}', 'App\Http\Controllers\AdminController@show')->middleware('auth');

Route::get('/arsip-pendirian', 'App\Http\Controllers\AdminController@arsippendirian')->middleware('auth');
Route::get('/arsip-pad', 'App\Http\Controllers\AdminController@arsippad')->middleware('auth');
