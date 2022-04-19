<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/posts', [PostController::class, 'index']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/post/show', [PostController::class, 'show']);
Route::delete('/post/destroy', [PostController::class, 'destroy']);

Route::post('/comment/store', [CommentController::class, 'store']);
Route::get('/comment/show', [CommentController::class, 'show']);


Route::post('/like/store', [LikeController::class, 'store']);
Route::delete('/like/destroy', [LikeController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
