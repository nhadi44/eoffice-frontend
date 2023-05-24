<?php

namespace Modules\ManagementSystem\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MasterDataJabatanController extends Controller
{

    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.managements.system'),
                'text' => 'Manajemen Sistem'
            ],
            [
                'url' => route('eoffice.managements.system.master-data.positions'),
                'text' => 'Master Data'
            ],
            [
                'text' => 'Jabatan'
            ]
        ];

        $tableHeading = [
            [
                'text' => 'No'
            ],
            [
                'text' => 'Kode Jabatan'
            ],
            [
                'text' => 'Nama Jabatan'
            ],
            [
                'text' => 'Aksi'
            ]
        ];

        $pageHeading = "Master Data Jabatan";
        return view('managementsystem::master-data.jabatan.index', compact('pageHeading', 'breadcrumbs', 'tableHeading'));
    }
}
