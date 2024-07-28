<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\API\ApiResponseController;
use App\Http\Controllers\DepartmentMasterController;
use App\Http\Controllers\PlantCollectionController;
use App\Http\Controllers\PlantsMasterController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MandalMasterController;
use App\Models\VillageMaster;


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
        Route::get('/userprofile', [UserProfileController::class, 'index']);
        Route::post('/userprofile', [UserProfileController::class, 'store']);
        Route::get('/getUserPlantCollection', [ApiResponseController::class, 'getUserPlantCollection']);
        Route::get('/getAllPlantCollection', [ApiResponseController::class, 'getAllPlantCollection']);
        Route::post('/createPlantCollection', [PlantCollectionController::class, 'store']);
    }
);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json($request->user());
});

Route::get('/fetchdepartments', [DepartmentMasterController::class, "index"]);
Route::get('/fetchplants', [PlantsMasterController::class, "index"]);

Route::get('fetchMandals', [MandalMasterController::class, 'fetchMandals']);
Route::get('fetchVillages', function (Request $request) {
    $id = $request->query("id");
    $data['villages'] = VillageMaster::where('mandal_id', '=', $id)->get();
    return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
});
