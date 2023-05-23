<?php

namespace Modules\ManagementSystem\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MasterDataDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.managements.system'),
                'text' => 'Manajemen Sistem'
            ],
            [
                'url' => route('eoffice.managements.system.master-data.divisions'),
                'text' => 'Master Data'
            ],
            [
                'text' => 'Divisi'
            ]
        ];

        $tableHeading = [
            [
                'text' => 'No'
            ],
            [
                'text' => 'Kode Divisi'
            ],
            [
                'text' => 'Nama Divisi'
            ],
            [
                'text' => 'Aksi'
            ]
        ];

        $pageHeading = 'Master Data Divisi';
        return view('managementsystem::master-data.divisi.index', compact('pageHeading', 'breadcrumbs', 'tableHeading'));
    }
}
