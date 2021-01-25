<?php

use App\Http\Controllers\EquipmentController;
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
Route::get('/equipment_shop', function () {
    return view('shop');
});
Route::get('/contact_us', function () {
    return view('contact');
});

Auth::routes();

Route::get('/equipment_registration', [App\Http\Controllers\HomeController::class, 'equipment_registration'])->name('equipment_registration');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('save_equipment', 'App\Http\Controllers\EquipmentController@store');
