<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadosController;
use App\Http\Controllers\UsuariosController;





Route::get('/', function () {
    return view('layout.index');
    
});

Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados');
Route::get('/chamados/novo', [ChamadosController::class, 'novo'])->name('chamados.novo');
Route::post('/chamados/salvar', [ChamadosController::class, 'salvar'])->name('chamados.salvar');
Route::get('/chamados/editar/{id}', [ChamadosController::class, 'editar'])->name('chamados.editar');
Route::get('/chamados/deletar/{id}', [ChamadosController::class, 'deletar'])->name('chamados.deletar');

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/usuarios/novo', [UsuariosController::class, 'novo'])->name('usuarios.novo');
Route::post('/usuarios/salvar', [UsuariosController::class, 'salvar'])->name('usuarios.salvar');
Route::get('/usuarios/editar/{id}', [UsuariosController::class, 'editar'])->name('usuarios.editar');
Route::get('/usuarios/deletar/{id}', [UsuariosController::class, 'deletar'])->name('usuarios.deletar');





