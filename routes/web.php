<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);

// GET /articles
// GET /articles/:id
// POST /articles
// PUT /articles/:id
// DELETE /articles/:id

