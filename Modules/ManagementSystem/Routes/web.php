<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\ManagementSystem\Http\Controllers\ManagementSystemController;
use Modules\ManagementSystem\Http\Controllers\MasterDataDivisiController;
use Modules\ManagementSystem\Http\Controllers\MasterDataJabatanController;

Route::get('/eoffice/managements/system', [ManagementSystemController::class, 'index'])->name('eoffice.managements.system');

Route::middleware(['guest'])->group(function () {
    Route::get('/eoffice/managements/system/master-data/divisions', [MasterDataDivisiController::class, 'index'])->name('eoffice.managements.system.master-data.divisions');
    Route::get('/eoffice/managements/system/master-data/positions', [MasterDataJabatanController::class, 'index'])->name('eoffice.managements.system.master-data.positions');
});
