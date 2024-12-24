<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\CityController;

// Route::group(function () {
    // Route::post('/lead/store', [LeadController::class, 'store']);
    // Route::put('/blogs/{id}', [LeadController::class, 'update']);
    // Route::delete('/blogs/{id}', [LeadController::class, 'destroy']);
    // Route::get('/lead/show/{id}', [LeadController::class, 'show']);
    // Route::get('/blogs', [LeadController::class, 'index']);
// });

Route::prefix('api')->group(function () {
    Route::post('/leads/store', [LeadController::class, 'store']);
    Route::get('/leads/show/{id}', [LeadController::class, 'show']);


    Route::get('/cities', [CityController::class, 'index']);
});

