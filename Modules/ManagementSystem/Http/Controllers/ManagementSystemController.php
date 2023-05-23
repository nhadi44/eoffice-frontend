<?php

namespace Modules\ManagementSystem\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ManagementSystemController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.managements.system'),
                'text' => 'Manajemen Sistem'
            ],
            [
                'text' => 'Dashboard'
            ]
        ];

        $tableHeading = [
            [
                'text' => 'No'
            ],
            [
                'text' => 'URL'
            ],
            [
                'text' => 'Method'
            ],
            [
                'text' => 'Status'
            ]
        ];

        $pageHeading = 'E Office Manajemen sistem';
        return view('managementsystem::index', compact('pageHeading', 'breadcrumbs', 'tableHeading'));
    }
}
