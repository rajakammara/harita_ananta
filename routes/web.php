<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlantCollectionController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/plantscollection', [PlantCollectionController::class, 'index'])->name('plantscollection');

    Route::get('/mandalplantscollection/{mandal}/{village}', [PlantCollectionController::class, 'plantcollection_mandal_village'])->name('mandalplantscollection');

    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Mandal Report
    Route::get('/mandalcollection', [DashboardController::class, 'getMandalReport'])->name('mandalcollection');

    // Village Report
    Route::get('/villagecollection/{mandal}', [DashboardController::class, 'getVillageReport'])->name('villagecollection');
});



require __DIR__ . '/auth.php';
