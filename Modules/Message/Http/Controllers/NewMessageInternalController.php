<?php

namespace Modules\Message\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewMessageInternalController extends Controller
{

    public function index()
    {
        $breadcrumbs = [
            [
                'url' => route('eoffice.surat'),
                'text' => 'Surat'
            ],
            [
                'text' => 'Surat Baru Internal'
            ]
        ];

        $pageHeading = 'Surat Baru Internal';
        return view('message::newMessage.internal', compact('pageHeading', 'breadcrumbs'));
    }
}
