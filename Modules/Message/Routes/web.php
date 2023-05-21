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
use Modules\Message\Http\Controllers\MessageController;
use Modules\Message\Http\Controllers\NewMessageExternalController;
use Modules\Message\Http\Controllers\NewMessageInternalController;

Route::get('/eoffice/surat', [MessageController::class, 'index'])->name('eoffice.surat');
Route::get('/eoffice/surat/surat-baru-internal', [NewMessageInternalController::class, 'index'])->name('eoffice.surat.surat-baru-internal');
Route::get('/eoffice/surat/surat-baru-external', [NewMessageExternalController::class, 'index'])->name('eoffice.surat.surat-baru-external');;
