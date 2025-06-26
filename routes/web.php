<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/materiales', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/material/edit', [MaterialController::class, 'edit'])->name('materials.edit');
Route::put('/material', [MaterialController::class, 'update'])->name('materials.update');


Route::get('/material/create', [MaterialController::class, 'create'])->name('materials.create');
