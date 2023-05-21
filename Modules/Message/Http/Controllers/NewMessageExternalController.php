<?php

namespace Modules\Message\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewMessageExternalController extends Controller
{

    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.surat'),
                'text' => 'Surat'
            ],
            [
                'text' => 'Surat Baru External'
            ]
        ];

        $pageHeading = "Surat Baru External";
        return view('message::newMessage.external', compact('pageHeading', 'breadcrumbs'));
    }
}
