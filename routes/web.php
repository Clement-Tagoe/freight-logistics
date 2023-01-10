<?php

use App\Http\Controllers\FreightController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/freights', [FreightController::class, 'index'])->name('freights');

Route::get('/freights/create', [FreightController::class, 'create'])->name('freights.create-data-entry');

Route::post('/freights', [FreightController::class, 'store']);

Route::get('freights/{freight:slug}/edit', [FreightController::class, 'edit'])->name('freights.edit-step-1');

Route::put('/freights/{freight}', [FreightController::class, 'update'])->name('freights.update-step-1');

Route::get('/freights/{freight:slug}', [FreightController::class, 'show'])->name('freights.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
