<?php

namespace App\Http\Controllers\Admin;

use App\Models\Letter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $letter = Letter::all();
        return view('admin.index',compact('letter'));
    }
}
