<?php

use App\Http\Controllers\ProfileController;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(ProduitController::class)->group(function() {
    Route::get('/produits', 'index')->name('produits');
    Route::get('/produit/{id}', 'show')->name('produit');
    Route::get('/produits/categorie/{id}', 'show')->name('produitsCategorie');
});

Route::controller(CategorieController::class)->group(function() {
    Route::get('/categories', 'index')->name('categories');
});

require __DIR__.'/auth.php';
