<?php

use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladorController;

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

   Route::get('/', [AdminController::class, 'indexUser'])->name('home');
   Route::get('/simulador', [SimuladorController::class, 'index'])->name('simulador.index');

// Rota para refresh de CSRF (teste)
Route::get('/csrf-refresh', function () {
    return response()->json(['token' => csrf_token()]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/slides', [SlideController::class, 'index'])->name('slides.index');
    Route::post('/slides', [SlideController::class, 'store'])->name('slides.store');
    Route::delete('/slides/{slide}', [SlideController::class, 'destroy'])->name('slides.destroy');

    // Rotas para banners
    Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
    Route::post('/banners', [BannerController::class, 'store'])->name('banners.store');
    Route::put('/banners/{banner}', [BannerController::class, 'update'])->name('banners.update');
    Route::delete('/banners/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');
});

require __DIR__.'/auth.php';
