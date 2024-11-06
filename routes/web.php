<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingScheduleController;
use App\Http\Controllers\PartnerController;

Route::get('/kegiatan', [TrainingScheduleController::class, 'index']);
Route::get('/', [PartnerController::class, 'index']);

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/skema', function () {
    return view('skema');
});

// Route::get('/kegiatan', function () {
//     return view('kegiatan');
// });

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/kontak', function () {
    return view('kontak');
});