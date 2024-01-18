<?php

use App\Enums\FileTypeEnum;
use App\Enums\PostStatusEnum;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Models\Company;
use App\Models\File;
use App\Models\Language;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;


// Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
})->name('auth.redirect');

Route::get('/auth/callback/{provider}', [LoginController::class, 'callback']);

Route::get('/test', function () {
    // return DB::getSchemaBuilder()->getColumnListing('posts');
    return helper();
});



Route::get('/greeting/{locale}', function (string $locale) {
    if (!in_array($locale, config('app.locales'))) {
        $locale = config('app.fallback_locale');
    }

    // App::setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::get('/', fn () => redirect("/home"))->name('home.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
