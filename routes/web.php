<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PrivacyPolicyController;



Route::group([
    'middleware' => ['cookie-consent']
], function () {
    Route::get('/home', WelcomeController::class);
    Route::get('/', WelcomeController::class)->name('home');
    Route::get('/about', AboutController::class)->name('about');
    Route::get('/terms', TermsController::class)->name('terms');
    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactUsController::class, 'index'])->name('contact.index');
        Route::post('/send', [ContactUsController::class, 'send'])->name('contact.send');
    });
    Route::resource('/tags',  TagController::class)->only('index', 'show');
    Route::resource('/blogs',  BlogController::class)->only('index', 'show', 'create', 'store');
    Route::resource('/profiles',  ProfileController::class)->only(['index', 'show', 'create', 'store']);
    Route::resource('/companies',  CompanyController::class)->only('index', 'show');
    Route::get('/privacy-policy', PrivacyPolicyController::class)->name('privacy-policy');
});
