<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('makanans.index');
});

Route::resource('makanans', MakananController::class);