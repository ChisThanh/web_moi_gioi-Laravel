<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;




Route::get('/', fn () => redirect("/admin/dashboard"));
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::group(
    [
        'as' => 'users.',
        'prefix' => 'users'
    ],
    function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('/edit/{userId}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    }
);

Route::group(
    [
        'as' => 'posts.',
        'prefix' => 'posts'
    ],
    function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/create', [PostController::class, 'store'])->name('store');
        Route::post('/import-csv', [PostController::class, 'importCSV'])->name('importCSV');
        Route::delete('/{posts}', [PostController::class, 'destroy'])->name('destroy');
    }
);

Route::group(
    [
        'as' => 'company.',
        'prefix' => 'company'
    ],
    function () {
        // Route::get('/', [PostController::class, 'index'])->name('index');
        // Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/create', [CompanyController::class, 'store'])->name('store');
        // Route::post('/import-csv', [PostController::class, 'importCSV'])->name('importCSV');
        // Route::delete('/{posts}', [PostController::class, 'destroy'])->name('destroy');
    }
);
