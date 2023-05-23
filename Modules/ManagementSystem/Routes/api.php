<?php

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
