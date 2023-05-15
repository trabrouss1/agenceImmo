<?php

use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name("homepage");


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('property', PropertyController::class)->except('show');
    Route::resource('option', OptionsController::class)->except('show');
});
