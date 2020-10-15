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
    return view('welcome');
});

Route::get('/registration-received', function () {
    return view('registration_received');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Leads
Route::get('/leads', [App\Http\Controllers\LeadController::class, 'index'])->name('lead.index');
Route::post('save_lead', [App\Http\Controllers\LeadController::class, 'save']);
Route::delete('destroy_lead/{id}', [App\Http\Controllers\LeadController::class, 'destroy']);

// Users
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::delete('destroy_user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);