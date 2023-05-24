<?php

namespace Modules\ManagementSystem\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MasterDataKaryawanController extends Controller
{

    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.managements.system'),
                'text' => 'Manajemen Sistem'
            ],
            [
                'url' => route('eoffice.managements.system.master-data.employees'),
                'text' => 'Master Data'
            ],
            [
                'text' => 'Karyawan',
            ]
        ];

        $tableHeading = [
            [
                'text' => 'No'
            ],
            [
                'text' => 'NIP'
            ],
            [
                'text' => 'Nama Karyawan'
            ],
            [
                'text' => 'Tempat Tanggal Lahir'
            ],
            [
                'text' => 'Alamat'
            ],
            [
                'text' => 'No HP'
            ],
            [
                'text' => 'Start Date'
            ],
            [
                'text' => 'End Date'
            ],
            [
                'text' => 'Divisi'
            ],
            [
                'text' => 'Jabatan'
            ],
            [
                'text' => 'Aksi'
            ]
        ];

        $pageHeading = 'Master Data Karyawan';
        return view('managementsystem::master-data.karyawan.index', compact('pageHeading', 'breadcrumbs', 'tableHeading'));
    }
}
