<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/trips', function () {
    return view('admin.trips');
});

// user routes
Route::get('/user', [UserController::class, 'index']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/delete.{id}', [UserController::class, 'destroy']);
Route::get('/edit_user{id}', [UserController::class, 'edit']);
Route::post('/update', [UserController::class, 'update']);






