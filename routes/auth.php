<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as User;
use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ReformaController as Reforma;
use App\Http\Controllers\CategoriaController as Categoria;
use App\Http\Controllers\ProdutoController as Produto;



Route::middleware('guest')->group(function () {
    Route::get('primeiro-acesso', [RegisteredUserController::class, 'create'])
        ->name('primeiro-acesso');

    Route::post('primeiro-acesso', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
    Route::post('get-produtos-categoria/{id}', [Produto::class, 'getProdutosCategoria'])->name('get-produtos-categoria');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
    //adm
    Route::get('/dashboard', [Admin::class, 'index']);

    //fim adm 
    //usuarios
    Route::get('/lista-usuarios', [User::class, 'show']);
    Route::post('salvar-usuario', [RegisteredUserController::class, 'store'])->name('salvar-usuario');
    //fim usuarios
    //reforma
    Route::get('/lista-reformas', [Reforma::class, 'index']);
    Route::post('salvar-reforma', [Reforma::class, 'salvarReforma'])->name('salvar-reforma');
    Route::post('atualizar-reforma', [Reforma::class, 'atualizarReforma'])->name('atualizar-reforma');
    Route::post('get-reforma/{id}', [Reforma::class, 'getReforma'])->name('get-reforma');
    //fim reforma
    //categorias
    Route::get('/lista-categorias', [Categoria::class, 'index']);
    Route::post('salvar-categoria', [Categoria::class, 'salvarCategoria'])->name('salvar-categoria');
    Route::post('atualizar-categoria', [Categoria::class, 'atualizarCategoria'])->name('atualizar-categoria');
    Route::post('get-categoria/{id}', [Categoria::class, 'getcategoria'])->name('get-categoria');

    //fim categorias

    //produtos
    Route::get('/lista-produtos', [Produto::class, 'index']);
    Route::post('salvar-produto', [Produto::class, 'salvarProduto'])->name('salvar-produto');
    Route::post('atualizar-produto', [Produto::class, 'atualizarProduto'])->name('atualizar-produto');
    Route::post('get-produto/{id}', [Produto::class, 'getProduto'])->name('get-produto');

    //fim produtos




});
