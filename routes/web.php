<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [PublicController::class, 'welcome'])
    ->name('homepage');

//rotte Progetti
Route::get('/projects/progetti', [ProjectsController::class, 'progetti'])
    ->name('projects.progetti');

//rotta gadget
Route::get('/products/index', [ProductsController::class, 'index'])
    ->name('products.index');

//rotta pag contatti
Route::get('/contattaci', [PublicController::class, 'contact'])
    ->name('contattaci');

// rotta form contattaci
Route::post('/contattaci/submit', [PublicController::class, 'submit'])
    ->name('contact.submit');