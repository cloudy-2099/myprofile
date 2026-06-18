<?php

use App\Http\Controllers\CmsAuthController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CmsEditor;

// Halaman utama
Route::get('/', function () {
    return view('index');
});

// Live Preview iframe (redirect to home as it's static now)
Route::get('/portfolio/preview', function () {
    return redirect('/');
})->name('portfolio.preview');

// CMS Auth Routes
Route::get('/cms/login', [CmsAuthController::class, 'showLogin'])->name('cms.login');
Route::post('/cms/login', [CmsAuthController::class, 'login'])->name('cms.login.post');
Route::post('/cms/logout', [CmsAuthController::class, 'logout'])->name('cms.logout');

// CMS Editor (protected)
Route::get('/cms', CmsEditor::class)->middleware('auth')->name('cms.editor');
