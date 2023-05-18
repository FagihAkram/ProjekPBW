<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/protect', function () {
        return view('protect');
    })->name('protect');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/doctors', function () {
        return view('doctors');
    })->name('doctors');

    Route::get('/news', function () {
        return view('news');
    })->name('news');

    // Route::get('/ambilantrian', function () {
    //     return view('ambilantrian');
    // })->name('ambilantrian');


    Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');

    Route::get('/antrian/create', [AntrianController::class, 'create'])->name('antrian.create');
    Route::post('/antrian', [AntrianController::class, 'store'])->name('antrian.store');

    Route::get('/antrian/{id}/edit', [AntrianController::class, 'edit'])->name('antrian.edit');
    Route::put('/antrian/{id}', [AntrianController::class, 'update'])->name('antrian.update');


    /** Route untuk menampilkan deskripsi antrian berdasarkan id */
    Route::get('/antrian/{id}', [AntrianController::class, 'show'])->name('antrian.show');

    Route::delete('/antrian/{id}', [AntrianController::class, 'destroy'])->name('antrian.destroy');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
});

require __DIR__.'/auth.php';
