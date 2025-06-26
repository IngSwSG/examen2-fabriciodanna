<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/material/create', [MaterialController::class, 'create'])->name('materials.create');