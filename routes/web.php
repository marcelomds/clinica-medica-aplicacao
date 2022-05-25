<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    /**
     * Routes Patients
     */
    Route::group(['prefix' => 'patients'], function () {
        Route::get('', [PatientController::class, 'index'])->name('patients.index');
        Route::get('/create', [PatientController::class, 'create'])->name('patients.create');
        Route::post('/store', [PatientController::class, 'store'])->name('patients.store');
    });

    /**
     * Routes Doctors
     */
    Route::group(['prefix' => 'doctors'], function () {
        Route::get('', [DoctorController::class, 'index'])->name('doctors.index');
        Route::get('/create', [DoctorController::class, 'create'])->name('doctors.create');
        Route::post('/store', [DoctorController::class, 'store'])->name('doctors.store');
    });

});
