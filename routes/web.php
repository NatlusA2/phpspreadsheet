<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendudukController;
use App\Http\Controllers\ExportImportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/penduduk", pendudukController::class);

Route::get('/export-penduduk', [ExportImportController::class, 'exportPenduduk'])->name('export-penduduk');