<?php

use App\Http\Controllers\OfertaController;
use Illuminate\Support\Facades\Route;

Route::resource('/oferta', OfertaController::class);

Route::get('/', function () {
    return view('welcome');
});
