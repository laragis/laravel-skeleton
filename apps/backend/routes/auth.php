<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::post('/api/auth/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest')
                ->name('api.register');

Route::post('/api/auth/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('api.login');

Route::post('/api/auth/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('api.password.email');

Route::post('/api/auth/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('api.password.update');

Route::get('/api/auth/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('api.verification.verify');

Route::post('/api/auth/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('api.verification.send');

Route::post('/api/auth/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('api.logout');
