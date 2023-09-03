<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\ReviewController;

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

Route::get('/', [CafeController::class, 'show']);

Route::get('/cafes', [CafeController::class, 'index'])->name('index'); 

//Route::post('/cafes/create', [ReviewController::class, 'store']);

Route::post('/cafes/{cafe}/review', [ReviewController::class, 'store'])->name('review.store');

//Route::get('/cafes/review', [CafeController::class, 'create'])->name('review');
Route::get('/cafes/{cafe}/review', [ReviewController::class, 'create'])->name('review');

Route::get('/cafes/{cafe}', [CafeController::class ,'cafe']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
