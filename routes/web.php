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

Auth::routes();

Route::get('/', function () {
    return view('homepage');
});

Route::middleware('auth')->group(function () {
    Route::resource('themes', ThemeController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('references', ReferenceController::class);
    Route::resource('users', UserController::class);
});

//Route::resource('auth', AuthController::class); //This command actually bug because the route bellow has been manually created
Route::get('login', 'AuthController@login')->name('login'); //Is is the best way to do that ?
Route::get('register', 'AuthController@register')->name('register'); 
Route::get('connection', 'AuthController@connection')->name('connection'); 
Route::get('logout', 'AuthController@logout')->name('logout'); 
