<?php

use App\Http\Controllers\InspectionFormController;
use App\Http\Controllers\InspectionParameterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('inspection_forms', InspectionFormController::class)->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('inspection_forms', InspectionFormController::class);
    // Route::resource('inspection_parameters', InspectionParameterController::class);
    Route::get('/inspection_forms/{inspectionFormId}/parameters', [InspectionParameterController::class, 'index'])
     ->name('inspection_parameters.index');

     Route::get('/inspection_forms/{inspectionFormId}/parameters/create', [InspectionParameterController::class, 'create'])
    ->name('inspection_parameters.create');

    Route::post('/inspection_forms/{inspectionFormId}/parameters', [InspectionParameterController::class, 'store'])
    ->name('inspection_parameters.store');

    Route::get('/inspection_forms/{inspectionFormId}/parameters/{inspectionParameterId}', [InspectionParameterController::class, 'show'])
    ->name('inspection_parameters.show');

    Route::get('/inspection_forms/{inspectionFormId}/parameters/{inspectionParameterId}/edit', [InspectionParameterController::class, 'edit'])
    ->name('inspection_parameters.edit');

    Route::put('/inspection_forms/{inspectionFormId}/parameters/{inspectionParameterId}', [InspectionParameterController::class, 'update'])
    ->name('inspection_parameters.update');







});

require __DIR__.'/auth.php';
