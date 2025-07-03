<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

Route::get('/', [PesertaController::class,'index']);

Route::resource('peserta', PesertaController::class)->parameters([
    'peserta' => 'peserta'
]);
