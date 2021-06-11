<?php

use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\SpecialitiesController;
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
    return view('index');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::resource('patients', PatientsController::class);
Route::resource('specialities', SpecialitiesController::class);
Route::resource('doctors', DoctorsController::class);
Route::resource('reservations', ReservationsController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
