<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/quotation', function () {
    return Inertia::render('Welcome');
})->name('quotation');

require __DIR__.'/auth.php';
