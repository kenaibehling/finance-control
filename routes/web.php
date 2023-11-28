<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CardBrandController;
Route::get('/', function () {
    return view('index');
});

Route::get('/card/brand', [CardBrandController::class, 'addCardBrand']);
