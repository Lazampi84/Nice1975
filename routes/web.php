<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProjectsController;

Route::get('/', [PublicController::class, 'welcome'])
    ->name('homepage');

//rotte Progetti
Route::get('/projects/poseidonia', [ProjectsController::class, 'poseidonia'])
    ->name('projects.poseidonia');
Route::get('/projects/sigarette', [ProjectsController::class, 'sigarette'])
    ->name('projects.sigarette');
Route::get('/projects/mostra', [ProjectsController::class, 'mostra'])
    ->name('projects.mostra');
Route::get('/projects/purificatore', [ProjectsController::class, 'purificatore'])
    ->name('projects.purificatore');

//rotta gadget
Route::get('/products/index', [ProductsController::class, 'index'])
    ->name('products.index');

//rotta contatti

Route::get('/contattaci', [PublicController::class, 'contact'])
    ->name('contattaci');
