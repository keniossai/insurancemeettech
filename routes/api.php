<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DiscountController;
use App\Http\Controllers\Api\EnrolController;
use App\Http\Controllers\Api\GroupMemberController;
use App\Http\Controllers\Api\GroupPaymentController;
use App\Http\Controllers\Api\ReconciliationController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ResendWelcomeEmailController;
use App\Http\Controllers\Api\SpeakerController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UploadSCNController;
use App\Http\Controllers\Api\UploadSponsoredDelegateController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserPhotoController;
use App\Http\Controllers\Api\VerificationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/enrols',                                  [EnrolController::class, 'index'])->name('enrols.index');
Route::resource('upload-scn',               UploadSCNController::class)->only(['store']);
Route::resource('sponsored-scn',     UploadSponsoredDelegateController::class)->only(['store']);
Route::resource('discount-scn',             DiscountController::class)->only(['store']);
Route::resource('reconcile',             ReconciliationController::class)->only(['store']);
Route::get('/speakers/{speaker}',                      [SpeakerController::class, 'show'])->name('speakers.show');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/enrols', [EnrolController::class, 'store'])->name('enrols.store');

    Route::prefix('/users/{user}')->name('users.')->group(function () {
        Route::put('/',                 [UserController::class, 'update'])->name('update');
        Route::put('/photo',            [UserPhotoController::class, 'update'])->name('photo.update');
        Route::post('/transactions',    [TransactionController::class, 'store'])->name('transactions.store');

        Route::post('/verification',  VerificationController::class)->name('verification');
        Route::post('/welcome-email', ResendWelcomeEmailController::class)->name('welcome-email');
    });

    Route::post('/groups/{user}/pay',                [GroupPaymentController::class, 'store'])->name('groups.payments.store');
    Route::post('/groups/{user}/members',            [GroupMemberController::class, 'store'])->name('groups.members.store');
    Route::delete('/groups/{user}/members/{member}', [GroupMemberController::class, 'destroy'])->name('groups.members.destroy');
});
