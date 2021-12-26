<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TripListController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\ReseverationController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AddTripController;
use App\Http\Controllers\TripDetailsController;
use App\models\User;
use App\models\Trip;



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

Route::get('/admins', function () {
    $user = User::all();
    $trip = Trip::all();


    // $admins = User::where('role_type','admin')->count();
    return view('admin.index', compact('user', 'trip'));
})->name("admin");

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('admin');

// Hazem

Route::resource("/reservation", ReseverationController::class);

//
Route::get('/', [CategoryController::class, 'homeDestination'])->name('home2');

// Hazem
Route::resource('/user', UserController::class);

// Sahar
Route::resource('/userprofile', UserProfileController::class);
Route::resource('/addtrip', AddTripController::class);
Route::get('/addtrip.{id}', [AddTripController::class, 'create'])->name('addtrip');

Route::get('/guide.{id}', [TourController::class, 'getGuide'])->name('guide');

Route::get("/filter", [FilterController::class, "roles"])->name("roles");
Route::get("/search", [FilterController::class, "search"])->name("search");
Route::get("/tour-guide", [TourController::class, "index"])->name("tourGuide.index");


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/admin', [HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

Route::resource('/trips',TripController::class);
Route::resource('trips-list',TripListController::class);
Route::resource('trips-details',TripDetailsController::class);
Route::resource('/categories',CategoryController::class);
Route::get('/destination', [CategoryController::class,'destination'])->name('distination');
Route::get('/contact', [CategoryController::class,'contact']);

