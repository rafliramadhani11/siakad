<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->controller(GuestController::class)->group(function () {
    Route::get('/',  'beranda')->name('guest.beranda');
});
