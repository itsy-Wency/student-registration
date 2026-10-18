<?php

use App\Http\Controllers\Api\V1\EmailOtpController;
use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::apiResource(
        'students',
        StudentController::class
    );

    Route::post(
        '/email-otp/send',
        [EmailOtpController::class, 'send']
    );

    Route::post(
        '/email-otp/verify',
        [EmailOtpController::class, 'verify']
    );

});
