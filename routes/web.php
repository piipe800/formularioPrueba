<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormularioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('pruebas', [FormularioController::class, 'index'])->name('pruebas.index');

Route::get('pruebas/create', [FormularioController::class, 'create'])->name('pruebas.create');

Route::get('pruebas/show', [FormularioController::class, 'show'])->name('pruebas.show');

Route::post('pruebas', [FormularioController::class, 'store'])->name('pruebas.store');

Route::get('pruebas/edit', [FormularioController::class, 'edit'])->name('pruebas.edit');
