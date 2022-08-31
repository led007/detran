<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadosController;




Route::get('/', function () {
    return view('layout.index');
    
});

Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados');
Route::get('/chamados/novo', [ChamadosController::class, 'novo'])->name('chamados.novo');
Route::post('/chamados/salvar', [ChamadosController::class, 'salvar'])->name('chamados.salvar');
Route::get('/chamados/editar/{id}', [ChamadosController::class, 'editar'])->name('chamados.editar');
Route::get('/chamados/deletar/{id}', [ChamadosController::class, 'deletar'])->name('chamados.deletar');

