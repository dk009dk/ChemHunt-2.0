<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group( function (){
    Route::get('/dashboard', function () { return view('user.dashboard.index');})->name('dashboard.index');
});

require __DIR__.'/auth.php';
