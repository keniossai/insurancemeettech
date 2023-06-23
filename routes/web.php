<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationDownloadController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionPayController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\PaystackWebhookController;
use App\Http\Controllers\SpeakerController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', [DashboardController::class, 'admin'])->name('admin.index');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/privacy-policy',  'privacy_policy')->name('privacy-policy');

Route::middleware('guest')->group(function () {
    Route::view('/login',                   'auth.login')->name('login');
    Route::view('/reset-password/{token}',  'auth.reset')->name('password.reset');
});

Route::get('/register',         [AuthController::class, 'register'])->name('register');

Route::resource('speaker', SpeakerController::class)->only(['index', 'create', 'show', 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
        ->middleware('signed')->name('verification.verify');

    Route::prefix('/users/{user}')->name('users.')->group(function () {
        Route::get('/',             [UserController::class, 'show'])->name('show');

        Route::middleware(['unpaid', 'verified-to-pay'])->group(function () {
            Route::get('/payments', [PaymentController::class, 'show'])->name('payments.show');
        });
    });

    Route::get('/search',                       [SearchController::class, 'index'])->name('search.index');
    Route::get('/transactions/{transaction}',   [TransactionController::class, 'show'])->name('transactions.show');
    Route::get('/transactions/{transaction}/pay', TransactionPayController::class)->name('transactions.pay');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard',        [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/payments',         [PaymentController::class, 'index'])->name('payments.index');
        Route::get('/registration-download', RegistrationDownloadController::class)->name('registration-download');

        Route::get('/transactions/{transaction}/approve', fn (Transaction $transaction) => $transaction->markAsPaid());

        /**
         * @deprecated
         */
        Route::get('/shoot-newsletter', function () {
            $notifiables = \App\Models\User::whereDoesntHave('payments', fn ($query) => $query->paid())->get();

            \Illuminate\Support\Facades\Notification::send($notifiables, new \App\Notifications\Newsletter);
        });
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::post('/webhook/paystack',    PaystackWebhookController::class);
