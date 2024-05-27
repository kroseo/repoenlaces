<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Rutas tras el login de usuario
Route::post('/user',[LoginController::class, 'index']);

// Rutas para registro de usuarios
Route::get('/newuser', [RegisterController::class, 'create'])->name('newuser');
Route::post('/newuser', [RegisterController::class, 'store']);

// Rutas para insertar usuarios desde CSV
Route::get('/csv',[CsvController::class,'index'])->name('csv.index');
Route::post('/csv/import',[CsvController::class,'import'])->name('csv.import');
Route::get('/csv/export',[CsvController::class,'export'])->name('csv.export');

// Rutas para que un usuario pueda reestablecer contraseña
Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store']);
Route::post('/forgot-password/{token}', [ForgotPasswordController::class, 'reset']);

// Rutas de gestión de proyectos
Route::get('/proyectos/{dep}', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/proyectos/busqueda', [ProjectController::class, 'searchByTitle'])->name('projects.title');
