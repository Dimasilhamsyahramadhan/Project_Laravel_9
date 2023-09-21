<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;
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
    return view('welcome');
});

Route::get('/sekolahhs', [SekolahController::class, 'index'])->name('sekolahhs.index');
Route::get('/sekolahhs/create', [SekolahController::class, 'create'])->name('sekolahhs.create');
Route::post('/sekolahhs', [SekolahController::class, 'store'])->name('sekolahhs.store');
Route::get('/sekolahhs/{id}/edit', [SekolahController::class, 'edit'])->name('sekolahhs.edit');
Route::put('/sekolahhs/{id}', [SekolahController::class, 'update'])->name('sekolahhs.update');
Route::delete('/sekolahhs/{id}',[SekolahController::class, 'destroy'])->name('sekolahhs.destroy');


Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});




Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
