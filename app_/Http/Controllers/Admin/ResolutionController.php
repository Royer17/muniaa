<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResolutionController extends Controller
{
    public function dashboard_view()
    {
        return view('admin.blank_page');
    }
}
