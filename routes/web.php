<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdiministradorController;
use App\Http\Controllers\CadastroController;

Route::get('/',[DashboardController::class, 'Index'])->name('Index');

Route::get('/login',[LoginController::class, 'index'])->name('login.Index');
Route::get('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Adiministrador',[AdiministradorController::class, 'index'])->name('Adiministrador.Index')->middleware('auth');

Route::get('/CadastroAdiministradores',[CadastroController::class, 'index'])->name('CadastroAdiministrador.Index')->middleware('auth');
Route::POST('/CadastroAdiministradores',[CadastroController::class, 'store'])->name('Adiministrador.store')->middleware('auth');

