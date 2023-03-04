<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Requests list route;
Route::get('/requests_list', [\App\Http\Controllers\RequestsListController::class, 'index']);
// Details of request by ID;
Route::get('/request/{request}', [\App\Http\Controllers\RequestsListController::class, 'detail']);
// Authentication form route;
Route::get('/authentication', [\App\Http\Controllers\AuthenticationController::class, 'index']);
// Registration form route;
Route::get('/registration', [\App\Http\Controllers\RegistrationController::class, 'index']);
// Request form route;
Route::get('/request_form', [\App\Http\Controllers\RequestFormController::class, 'index']);
