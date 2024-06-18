<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CsvController;
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

//Rutas de administrador
Route::get('/admin/proyectos/nuevo', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/proyectos/nuevo', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/proyectos/editar/{user_id}/proyecto{project_id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/proyectos/modificar/{user_id}/proyecto{project_id}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/proyectos/detalle/{user_id}/proyecto{project_id}', [AdminController::class, 'show'])->name('admin.show');
Route::delete('/admin/proyectos/delete/{user_id}/proyecto{project_id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/admin/proyectos/', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/proyectos/{dep}', [AdminController::class, 'allProjects'])->name('admin.projects');
Route::get('/admin/proyectos/grado/{grado}', [AdminController::class, 'searchByGrade'])->name('admin.grade');
Route::get('/admin/proyectos/titulo/{titulo}', [AdminController::class, 'searchByTitle'])->name('admin.title');
Route::get('/admin/proyectos/clave/{clave}', [AdminController::class, 'searchByKeyWord'])->name('admin.keyword');

// Rutas para registro de usuarios
Route::get('/admin/usuarios/nuevo', [RegisterController::class, 'create'])->name('user.newuser');
Route::post('/admin/usuarios/nuevo', [RegisterController::class, 'store']);
Route::get('/admin/usuarios/editar/{user_id}', [RegisterController::class, 'edit'])->name('user.edit');
Route::post('/admin/usuarios/modificar/{user_id}', [RegisterController::class, 'update'])->name('user.update');
Route::get('/admin/usuarios/detalle/{user_id}', [RegisterController::class, 'show'])->name('user.show');
Route::delete('/admin/usuarios/delete/{user_id}', [RegisterController::class, 'destroy'])->name('user.destroy');

Route::get('/admin/usuarios/', [RegisterController::class, 'index'])->name('user.index');
Route::get('/admin/usuarios/{dep}', [RegisterController::class, 'allUsers'])->name('user.users');
Route::get('/admin/usuarios/grado/{grado}', [RegisterController::class, 'searchByDepartment'])->name('user.department');
Route::get('/admin/usuarios/titulo/{titulo}', [RegisterController::class, 'searchByTitle'])->name('user.title');
Route::get('/admin/usuarios/clave/{clave}', [RegisterController::class, 'searchByKeyWord'])->name('user.keyword');

// Rutas para insertar usuarios desde CSV
Route::get('/admin/csv',[CsvController::class,'index'])->name('csv.index');
Route::post('/admin/csv/import',[CsvController::class,'import'])->name('csv.import');
Route::get('/admin/csv/export',[CsvController::class,'export'])->name('csv.export');

// Rutas de usuario
Route::get('/proyectos/nuevo', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/proyectos/nuevo', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/proyectos/editar/{user_id}/proyecto{project_id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::post('/proyectos/modificar/{user_id}/proyecto{project_id}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/proyectos/detalle/{user_id}/proyecto{project_id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/proyectos/{dep}', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/proyectos/grado/{grado}', [ProjectController::class, 'searchByGrade'])->name('projects.grade');
Route::get('/proyectos/titulo/{titulo}', [ProjectController::class, 'searchByTitle'])->name('projects.title');
Route::get('/proyectos/clave/{clave}', [ProjectController::class, 'searchByKeyWord'])->name('projects.keyword');



// // Rutas para que un usuario pueda reestablecer contraseña
// Route::post('/forgot-password', [ForgotPasswordLinkController::class, 'store']);
// Route::post('/forgot-password/{token}', [ForgotPasswordController::class, 'reset']);


