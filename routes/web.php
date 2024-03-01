<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ChauffeurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\vehiculesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Chauffeur routes
Route::get('/create', [ChauffeurController::class, 'create']);
Route::get('/index', [ChauffeurController::class, 'index'])->name('add_chauffeur');
Route::post('/index', [ChauffeurController::class, 'store'])->name('store_chauffeur');

//Vehicule routes
Route::get('/create', [VehiculeController::class, 'create']);
Route::get('/index', [VehiculeController::class,'index'])->name('add_vehicule');
Route::post('/index', [VehiculeController::class,'index'])->name('store_vehicule');
Route::get('/edit', [VehiculeController::class,'edit'])->name('edit_vehicule');
Route::get('/update', [VehiculeController::class,'update'])->name('update');
Route::get('/destroy', [VehiculeController::class,'destroy'])->name('destroy_vehicule');

});



require __DIR__.'/auth.php';