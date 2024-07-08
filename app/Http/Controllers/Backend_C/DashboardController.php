<?php

namespace App\Http\Controllers\Backend_C;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $content = ['card_title' => 'List Data Permintaan Tinta'];
        $template = [
            'title' => 'Dashboard',

        ];
        View::share($template);
        return view('backend/dashboard.dashboard', $content);
    }
}
