<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/auth/login/{id?}', [AuthController::class, 'login']);
Route::get('/auth/atualizacao', [AuthController::class, 'atualizacao']);
Route::get('/auth/insercao', [AuthController::class, 'insercao']);
Route::get('/auth/logado', [AuthController::class, 'logado']);
Route::get('/', [AuthController::class, 'index']);

Route::get('/santos', function () {
    return view('santos');
});
Route::get('/beatos', function () {
    return view('beatos');
});
Route::get('/dia_santo', function () {
    return view('dia_santo');
});
Route::get('/pesquisa', function () {
    return view('pesquisa');
});
