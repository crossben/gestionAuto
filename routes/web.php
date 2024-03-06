<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\Auth\ChauffeurController;

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

Route::middleware('auth')->group(function () {
    //User routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', [ChauffeurController::class, 'create']);
    Route::get('/index', [ChauffeurController::class, 'index'])->name('add_chauffeur');
    Route::post('/index', [ChauffeurController::class, 'store'])->name('store_chauffeur');

    //Chauffeurs routes
    Route::get('/supprimer_chauffeur/{id}', [ChauffeurController::class, 'supprimer_chauffeur']);
    Route::get('/modifier_chauffeur/{id}', [ChauffeurController::class, 'modifier_chauffeur']);
    Route::post('/modifier/traitement', [ChauffeurController::class, 'modifier_chauffeur_traitement']);
    Route::get('/chauffeurs', [ChauffeurController::class, 'index']);
    Route::get('/ajouter', [ChauffeurController::class, 'ajouter_chauffeur'])->name("ajouter_chauffeur");
    Route::post('/ajouter/traitement', [ChauffeurController::class, 'ajouter_chauffeur_traitement'])->name('ajouter_chauffeur_traitement');

    //Vehicule routes
    Route::get('/create', [VehiculeController::class, 'create'])->name("add_vehicule_form");
    Route::get('/index', [VehiculeController::class, 'index'])->name('add_vehicule');
    Route::get('/vehicules', [VehiculeController::class, 'show'])->name('vehicules');
    // Route::get('/edit', [VehiculeController::class, 'edit'])->name('edit_vehicule');
    Route::get('/update', [VehiculeController::class, 'update'])->name('update');
    Route::get('/destroy', [VehiculeController::class, 'destroy'])->name('destroy_vehicule');
    Route::post('/destroy', [VehiculeController::class, 'store'])->name('vehicules_traitement');
});




require __DIR__ . '/auth.php';
