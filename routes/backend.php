<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Dashboard\BackendController;
use App\Http\Controllers\Backend\BikeManagement\BikeBrandController;
use App\Http\Controllers\Backend\BikeManagement\BikeEngineSizeController;
use App\Http\Controllers\Backend\BikeManagement\BikeMotorTypeController;
use App\Http\Controllers\Backend\BikeManagement\BikeYearVersionController;
use App\Http\Controllers\Backend\BikeManagement\MotorBikeController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [BackendController::class,'index'])->name('admin.dashboard');

    Route::prefix('backend')->name('admin.')->group(function (){

        Route::resources([
            'bike-brands' => BikeBrandController::class,
            'bike-engine-sizes' => BikeEngineSizeController::class,
            'bike-motor-types' => BikeMotorTypeController::class,
            'bike-year-versions' => BikeYearVersionController::class,
            'motor-bikes' => MotorBikeController::class,
        ]);
    });
});
