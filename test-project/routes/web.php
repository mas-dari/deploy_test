<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// livewireのroute
use App\Livewire\Counter;
use App\Livewire\Click;
 
Route::get('/counter', Counter::class);
Route::get('/click', Click::class);

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

Route::get('/test', [TestController::class, 'test'])->name('test');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample0303', function () {
    return view('/sample0303');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/request', function () {
    return view('request');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/candidate', function () {
    return view('candidate');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/candidate', Click::class);

Route::prefix('test')->group(function (){
    Route::get('index',[\App\Http\Controllers\TestController::class,'index']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
