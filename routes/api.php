<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ProduitController::class)->group(function() {
    Route::get('/produit/{id}', 'show')->name('produitApi');
    Route::post('/insertion/produit', 'store')->name('insertionProduitApi');
});

Route::controller(CategorieController::class)->group(function() {
    Route::get('/categories', 'show')->name('categoriesApi');
    Route::post('/insertion/categorie', 'store')->name('insertionCategorieApi');
});
