<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\GuestController;

use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware(['auth'])->prefix('/')
->controller(App\Http\Controllers\backend\HomeController::class) ->group(function(){
    Route::get('profile', 'profile')->name('profile');

});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


