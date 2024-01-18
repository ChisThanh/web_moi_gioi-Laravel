<?php

use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get', [TestController::class, 'get']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts/slug', [PostController::class, 'generateSlug'])->name('posts.generateSlug');

Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::put('/company/check/{companyName?}', [CompanyController::class, 'check'])->name('company.check');
