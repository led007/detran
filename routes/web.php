<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadosController;




Route::get('/', function () {
    return view('layout.index');
    
});

Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados');
Route::get('/chamados/novo', [ChamadosController::class, 'novo'])->name('chamados.novo');

