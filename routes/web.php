<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DownloadFileController;
 
 
Route::get('/', [DownloadFileController::class, 'index']);
Route::get('get/{file_name}', [DownloadFileController::class, 'downloadFile']);
