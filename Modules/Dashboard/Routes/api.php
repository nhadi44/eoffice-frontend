<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/dashboard/progress-surat', function (Request $request) {
    $search = $request->input('search');
    $data  = [
        [
            'id' => 1,
            'tanggal_pengiriman' => Carbon::now()->translatedFormat('d-M-Y H:i:s'),
            'penerima' => 'Aditya',
            'perihal' => 'Flowchart Frontend E Office Baru',
            'status' => 1,
        ],
        [
            'id' => 2,
            'tanggal_pengiriman' => Carbon::now()->translatedFormat('d-M-Y H:i:s'),
            'penerima' => 'Hadi Nurhidayat',
            'perihal' => 'Flowchart Backend E Office Baru',
            'status' => 2
        ]
    ];

    return response()->json([
        'message' => 'Progres Surat',
        'recordsTotal' => count($data),
        'recordsFiltered' => count($data),
        'data' => $data
    ], 200);
});
