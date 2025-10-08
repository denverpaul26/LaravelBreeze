<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('welcome');
});

// Portfolio routes

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');

Route::get('/projects', [PortfolioController::class, 'feedback'])->name('portfolio.feedback');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('portfolio.contact.submit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
