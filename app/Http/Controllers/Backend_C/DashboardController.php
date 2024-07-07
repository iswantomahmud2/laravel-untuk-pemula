<?php

namespace App\Http\Controllers\Backend_C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $content = [
            'title' => 'Dashboard',
        ];
        return view('backend/dashboard.dashboard', $content);
    }
}
