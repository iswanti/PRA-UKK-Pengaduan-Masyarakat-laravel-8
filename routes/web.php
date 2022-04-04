<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users',[App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/create',[App\Http\Controllers\UserController::class, 'create']);
Route::post('/users/store',[App\Http\Controllers\UserController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

//Complaint
Route::post('/complaints/storecomplaint', [App\Http\Controllers\ComplaintController::class, 'complaint']);
Route::get('/complaints',[App\Http\Controllers\ComplaintController::class, 'index'])->middleware('auth');
Route::get('/complaints/detail/{id}', [App\Http\Controllers\ComplaintController::class, 'detail']);
Route::get('/complaints/update/{id}', [App\Http\Controllers\ComplaintController::class, 'update']);
Route::get('/complaints/done/{id}', [App\Http\Controllers\ComplaintController::class, 'done']);