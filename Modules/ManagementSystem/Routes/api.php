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

Route::post('/eoffice/managements/system', function (Request $request) {
    $data = [
        [
            'id' => 1,
            'url' => 'https://eoffice.github.io',
            'method' => 'GET',
            'status' => 200,
        ],
        [
            'id' => 2,
            'url' => 'https://eoffice.github.io',
            'method' => 'POST',
            'status' => 404,
        ]
    ];
    return response()->json([
        'message' => 'Log Operasi',
        'recordsTotal' => count($data),
        'recordsFiltered' => count($data),
        'data' => $data
    ], 200);
});

Route::post('/eoffice/managements/system/master-data/divisions', function (Request $request) {
    $data = [
        [
            'id' => 1,
            'kode_divisi' => 'PMSO',
            'nama_divisi' => 'Payment Managed Service & Operations',
        ],
        [
            'id' => 2,
            'kode_divisi' => 'DPSS',
            'nama_divisi' => 'Digital platform Solution & Service'
        ]
    ];

    return response()->json([
        'message' => 'Master Data Divisions',
        'recordsTotal' => count($data),
        'recordsFiltered' => count($data),
        'data' => $data
    ], 200);
});

Route::post('/eoffice/managements/system/master-data/positions', function (Request $request) {
    $data = [
        [
            'id' => 1,
            'kode_jabatan' => 'CEO',
            'nama_jabatan' => 'Chief Executive Officer',
        ],
        [
            'id' => 2,
            'kode_jabatan' => 'CCO',
            'nama_jabatan' => 'Chief Commercial Officer',
        ]
    ];

    return response()->json([
        'message' => 'Master Data Positions',
        'recordsTotal' => count($data),
        'recordsFiltered' => count($data),
        'data' => $data
    ], 200);
});

Route::post('/eoffice/managements/system/master-data/employees', function (Request $request) {
    $data = [
        [
            'id' => 1,
            'nip' => 12345,
            'nama' => 'Hadi Nurhidayat',
            'tempat_tgl_lahir' => 'Majalengka, ' . Carbon::parse('1996-10-24')->translatedFormat('d-M-Y'),
            'alamat' => 'Bandung',
            'no_hp' => "082912121212",
            'start_date' => Carbon::now()->translatedFormat('d-M-Y'),
            'end_date' => Carbon::now()->translatedFormat('d-M-Y'),
            'divisi' => 'PMSO',
            'jabatan' => 'Frontend Developer',
        ],
        [
            'id' => 2,
            'nip' => 12345,
            'nama' => 'Jhon Doe',
            'tempat_tgl_lahir' => 'Majalengka, ' . Carbon::parse('1996-10-24')->translatedFormat('d-M-Y'),
            'alamat' => 'Bandung',
            'no_hp' => "082912121212",
            'start_date' => Carbon::now()->translatedFormat('d-M-Y'),
            'end_date' => Carbon::now()->translatedFormat('d-M-Y'),
            'divisi' => 'CEO',
            'jabatan' => 'Chief Commercial Officer',
        ]
    ];

    return response()->json([
        'message' => 'Master Data Employees',
        'recordsTotal' => count($data),
        'recordsFiltered' => count($data),
        'data' => $data
    ], 200);
});
