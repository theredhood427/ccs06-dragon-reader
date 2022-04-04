<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DragonController;

Route::get('/', [DragonController::class, 'index']);
Route::get('/chapter/{chapter_number}', [DragonController::class, 'readByChapter']);
Route::get('/all-chapters', [DragonController::class, 'readAllChapters']);