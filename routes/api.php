<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\API\ApiResponseController;
use App\Http\Controllers\PlantCollectionController;

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

Route::post('/register', [ApiAuthController::class, "register"]);
Route::post('/login', [ApiAuthController::class, 'login']);
// Protected Routes
Route::middleware(['auth:sanctum'])->group(
    function () {
        Route::post('/logout', [ApiAuthController::class, 'logout']);
        Route::get('/getUserPlantCollection', [ApiResponseController::class, 'getUserPlantCollection']);
        Route::get('/getAllPlantCollection', [ApiResponseController::class, 'getAllPlantCollection']);
        Route::post('/createPlantCollection', [PlantCollectionController::class, 'store']);
    }
);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json($request->user());
});
