<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\EnrolController;
use App\Http\Controllers\Api\SpeakerController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\UserPhotoController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\Api\ResendWelcomeEmailController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->prefix('/auth')->group(function () {
    Route::post('login',            'login')->name('login');
    Route::post('forgot-password',  'forgot')->name('password.forgot');
    Route::post('reset-password',   'reset')->name('password.reset');
});

Route::post('register', [RegisterController::class, 'store'])->name('register');
Route::get('/speakers/{speaker}',                      [SpeakerController::class, 'show'])->name('speakers.show');

// Route::get('/enrols',                                  [EnrolController::class, 'index'])->name('enrols.index');
// Route::resource('upload-scn',               UploadSCNController::class)->only(['store']);

Route::middleware('auth:sanctum')->group(function () {
    // Route::post('/enrols', [EnrolController::class, 'store'])->name('enrols.store');

    Route::prefix('/users/{user}')->name('users.')->group(function () {
        Route::put('/',                 [UserController::class, 'update'])->name('update');
        Route::put('/photo',            [UserPhotoController::class, 'update'])->name('photo.update');
        Route::post('/transactions',    [TransactionController::class, 'store'])->name('transactions.store');

        Route::post('/verification',  VerificationController::class)->name('verification');
        Route::post('/welcome-email', ResendWelcomeEmailController::class)->name('welcome-email');
    });

});
