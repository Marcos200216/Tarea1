<?php

use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/movies/{genre}', [MovieController::class, 'showByGenre']);
