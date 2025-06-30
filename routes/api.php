<?php

use App\Http\Controllers\Api\AnalysController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\LabController;
use App\Http\Controllers\Api\SampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Responses\Response;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware\VerifiedEmail;
use Illuminate\Auth\Events\verified;





// when clicking on verefication link
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    event(new verified(User::query()->find($request->route('id'))));
    return Response::Success(true, 'Email Verified Successfully');
})->middleware(['auth:sanctum', 'signed'])->name('verification.verify');

// resend verefiavation email
Route::post('/email/verification-notification', function (Request $request) {

    $user = $request->user();
    if (!$user) {
        return Response::Error([], 'gg');
    }

    $request->user()->sendEmailVerificationNotification();
    return Response::Success(true, 'Verification link sent!');
})->middleware(['auth:sanctum', 'throttle:6,1'])->name('verification.send');


Route::post('/registerPatient', [AuthController::class, 'registerPatient']);
Route::post('/registerOwnerLab', [AuthController::class, 'registerOwnerLab']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum', VerifiedEmail::class]], function () {

    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/citySearch', [CityController::class, 'citySearch']);
    Route::get('/sampleSearch', [SampleController::class, 'sampleSearch']);
    Route::get('/labSearchPatient', [LabController::class, 'labSearchPatient']);
    Route::get('/labSearchSuperAdmin', [LabController::class, 'labSearchSuperAdmin']);
    Route::get('/labById/{id}', [LabController::class, 'labById']);
    Route::post('/patientPutDeleteFavoriteLab/{id}', [LabController::class, 'patientPutDeleteFavoriteLab']);
    Route::get('/AnalysesSearchLabOwner', [AnalysController::class, 'AnalysesSearchLabOwner']);
    Route::get('/AnalysesSearchLabOwnerNotInLab', [AnalysController::class, 'AnalysesSearchLabOwnerNotInLab']);
    Route::get('/AnalysesSearchSuperAdmin', [AnalysController::class, 'AnalysesSearchSuperAdmin']);
    Route::get('/AnalysesLabOwnerById/{id}', [AnalysController::class, 'AnalysesLabOwnerById']);
    Route::get('/AnalysesSuperAdminById/{id}', [AnalysController::class, 'AnalysesSuperAdminById']);
    Route::post('/addAnalysesToLab', [AnalysController::class, 'addAnalysesToLab']);
    Route::delete('/deleteAnalysLabOwner/{id}', [AnalysController::class, 'deleteAnalysLabOwner']);
});
