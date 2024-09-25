<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/',[DashboardController::class, 'Index'])->name('Index');

Route::get('/produtos',[DashboardController::class, 'IndexProdutos'])->name('Produtos.Index');