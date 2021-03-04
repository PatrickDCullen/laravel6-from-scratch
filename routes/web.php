<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ConversationsController;
use App\Http\Controllers\UserNotificationsController;
use App\Http\Controllers\ConversationBestReplyController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/conversations', [ConversationsController::class, 'index']);
Route::get('/conversations/{conversation}', [ConversationsController::class, 'show']);

Route::post('/best-replies/{reply}', [ConversationBestReplyController::class, 'store']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/payments/create', [PaymentsController::class, 'create'])->middleware('auth');
// Route::post('/payments', [PaymentsController::class, 'store'])->middleware('auth');
// Route::get('/notifications', [UserNotificationsController::class, 'show'])->middleware('auth');



// Route::get('/contact', [ContactController::class, 'show']);
// Route::post('/contact', [ContactController::class, 'store']);

// Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
// Route::post('/articles', [ArticlesController::class, 'store']);
// Route::get('/articles/create', [ArticlesController::class, 'create']);
// Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
// Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
// Route::put('/articles/{article}', [ArticlesController::class, 'update']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
