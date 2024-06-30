<?php

use App\Http\Controllers\APP\API\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MandalMasterController;
use App\Http\Controllers\PlantCollectionController;
use App\Http\Controllers\VillageMasterController;
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

Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('fetchMandals', [MandalMasterController::class, 'fetchMandals']);
Route::get('fetchVillages', function (Request $request) {
    $id = $request->query("id");
    $data['villages'] = VillageMaster::where('mandal_id', '=', $id)->get();
    return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
});


// Protected Routes
Route::middleware(['auth:sanctum'])->group(function () {
    //Create New Plant Collection
    Route::post("/create_plant_collection", [PlantCollectionController::class, "store"]);

    //Get Plant Collection
    Route::post("/get_plant_collection", [PlantCollectionController::class, "show"]);
});
