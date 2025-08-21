<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VeiculoController;

Route::resource('veiculos', VeiculoController::class);

Route::get('/', function () {
    return view('welcome');
});
