<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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

Route::get('/', function () {
    return view('welcome');
});

// Rutas del Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');

// Rutas del Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas del Formulario
Route::get('/filtro/documento', [FormController::class, 'index'])->name('home.index');
Route::get('/home/create', [FormController::class, 'create'])->name('home.create');
Route::post('/home/store', [FormController::class, 'store'])->name('home.store');
Route::get('/home/{documento}/edit', [FormController::class, 'edit'])->name('home.edit');
Route::patch('/home/{documento}/update', [FormController::class, 'update'])->name('home.update');
Route::delete('/filtro/{documento}/destroy', [FormController::class, 'destroy'])->name('filter.destroy');
Route::get('download', [FormController::class, 'generatePdf'])->name('filter.download');

// Rutas del historial
Route::get('/historial', [HistoryController::class, 'index'])->name('history.index');
