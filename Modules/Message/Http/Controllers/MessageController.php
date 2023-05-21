<?php

namespace Modules\Message\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MessageController extends Controller
{

    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.surat'),
                'text' => 'Surat'
            ]
        ];
        $pageHeading = 'Surat';
        return view('message::index', compact('breadcrumbs', 'pageHeading'));
    }
}
