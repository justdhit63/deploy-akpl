<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware('admin')->name('admin.dashboard');
    Route::get('admin/users', [AdminController::class, 'index'])->name('admin.users.index');
    // Route::get('admin/{bill}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
    // Route::put('admin/{bill}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::post('admin/', [AdminController::class, 'generate'])->name('admin.users.generate');

    Route::get('admin/bill', [BillController::class, 'index'])->name('admin.bill')->middleware('admin');

    Route::get('admin/history', [BillController::class, 'history'])->name('admin.history')->middleware('admin');

    Route::get('/dashboard', [HomeController::class, 'user'])->middleware('verified')->name('dashboard');
    Route::get('/dashboard/tagihan', [HomeController::class, 'tagihan'])->name('dashboard.tagihan');
    Route::get('/dashboard/tagihan/{bill}', [HomeController::class, 'payment'])->name('dashboard.tagihan.payment');
    
    Route::get('dashboard/history', [HistoryController::class, 'index'])->name('dashboard.history');
    Route::get('dashboard/history/{bill}', [HistoryController::class, 'update'])->name('dashboard.history.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




