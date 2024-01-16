<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::post('login', [Controllers\UserController::class, 'login']);
Route::post('register', [Controllers\UserController::class, 'register']);
Route::get('a', function () {
    return "not authenticated";
})->name("a");

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('details', [Controllers\UserController::class, 'details'])->name("details");

});
