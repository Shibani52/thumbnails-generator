<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FileController;
Route::get('/list-files', [ImageController::class, 'showFiles'])->name('list.files');
Route::post('/process-files', [ImageController::class, 'processFiles'])->name('process.files');
Route::get('/create-thumbnails', [ImageController::class, 'processFiles'])->name('create.thumbnails');