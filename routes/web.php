<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;

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

    Route::get('forum.themes', [ForumController::class, "showThemes"])->name('forum.themes'); 
});

Route::get('login', [AuthController::class, "login"])->name('login'); 
Route::get('register', [AuthController::class, "register"])->name('register'); 
Route::get('connection', [AuthController::class, "connection"])->name('connection'); 
Route::get('logout', [AuthController::class, "logout"])->name('logout'); 

Route::get('show-themes', [AuthController::class, "logout"])->name('logout'); 
