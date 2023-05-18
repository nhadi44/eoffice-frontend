<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('dashboard.index'),
                'text' => 'Dashboard',
            ]
        ];
        return view('dashboard::index', compact('breadcrumbs'));
    }
}
