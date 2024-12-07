<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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

// Ruta para listar proyectos (index)
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');

// Ruta para mostrar el formulario de creación de proyectos (create)
Route::get('/proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');

// Ruta para almacenar el nuevo proyecto (store)
Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');

Route::get('/proyectos/{project}', [ProyectoController::class, 'show'])->name('proyectos.show');

// Ruta para actualizar un proyecto (update)
Route::put('/proyectos/{project}', [ProyectoController::class, 'update'])->name('proyectos.update');

Route::get('/proyectos/{project}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');

Route::delete('/proyectos/{project}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');

