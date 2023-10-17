<?php

use App\Http\Controllers\PostUploadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/Landing-Page', function () {
    return view('frontend.landing');
})->name('web.landing');


Route::get('/Pricing', function () {
    return view('frontend.pricing');
})->name('web.pricing');


Route::get('/Upload', [PostUploadController::class, 'UploadGet']);
Route::post('/facebook/upload-post', [PostUploadController::class, 'uploadPost'])->name('upload.post');
Route::get('/auth/facebook/callback', [PostUploadController::class, 'callback'])->name('facebook.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
