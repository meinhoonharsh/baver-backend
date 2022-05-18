<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



  
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('googleauth', [AuthController::class, 'googleauth']);
     
Route::middleware("auth:api")->group(function () {
    Route::get('profile', [ProfileController::class, 'getProfile']);
    Route::prefix('getall')->group(function () {
        Route::get('horecas', [APIController::class, 'getAllHorecas']);
        Route::get('categories', [APIController::class, 'getAllCategories']);
        Route::get('offers', [APIController::class, 'getAllOffers']);
        Route::get('users', [APIController::class, 'getAllUsers']);
        Route::get('cities', [APIController::class, 'getAllCities']);
        Route::get('states', [APIController::class, 'getAllStates']);

    });
    
});