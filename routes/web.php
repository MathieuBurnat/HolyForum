<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;

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

//Public route
Route::get('/', [HomeController::class, "index"])->name('/'); 

//Need to be connected
Route::middleware('auth')->group(function () {
    Route::resource('opinions', OpinionController::class);

    Route::get('forum.themes', [ForumController::class, "showThemes"])->name('forum.themes'); 
    Route::get('forum.topics/{id}', [ForumController::class, "showTopics"])->name('forum.topics'); 
    Route::get('forum.opinions/{id}', [ForumController::class, "showOpinions"])->name('forum.opinions'); 
    Route::post('forum.newOpinion', [ForumController::class, "newOpinion"])->name('forum.newOpinion'); 
});

//Need to be admin
Route::middleware('isUserAdmin')->group(function () {
    Route::resource('themes', ThemeController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('references', ReferenceController::class);
    Route::resource('users', UserController::class);
});


//Authentification management
Route::get('login', [AuthController::class, "login"])->name('login'); 
Route::get('register', [AuthController::class, "register"])->name('register'); 
Route::get('connection', [AuthController::class, "connection"])->name('connection'); 
Route::get('logout', [AuthController::class, "logout"])->name('logout'); 

