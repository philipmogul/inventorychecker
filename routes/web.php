<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/storeitems', [StoreController::class, 'index'])->name('storeitems.index');
// Create a store item
Route::get('/storeitems/create', [StoreController::class, 'create'])->name('storeitems.create');
// Items clicked by id
Route::get('/storeitems/{id}', [StoreController::class, 'show'])->name('storeitems.show');