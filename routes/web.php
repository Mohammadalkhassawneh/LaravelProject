<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ReseverationController;
use App\Http\Controllers\TourController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/admin', function () {
    return view('admin.index');
})->name("admin");

// Hazem

Route::resource("/reservation",ReseverationController::class);

//


Route::get('/', function () {
    return view('publicSite.index');
});
Route::get('/trips', function () {
    return view('admin.trips');
});

// Hazem
Route::resource('/user',UserController::class);
Route::get("/filter",[FilterController::class,"roles"])->name("roles");
Route::get("/tour-guide",[TourController::class,"index"])->name("tourGuide.index");



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::resource('/trips',TripController::class);

Route::resource('/categories',CategoryController::class);



