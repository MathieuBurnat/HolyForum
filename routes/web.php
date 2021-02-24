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
    return view('homepage');
});

Route::resource('themes', ThemeController::class);
Route::resource('roles', RoleController::class);
Route::resource('references', ReferenceController::class);
Route::resource('auth', AuthController::class);

