<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class dashboardcontroller extends Controller
{

    public function index ()
    {
        $duit = student::select('biaya')->sum('biaya');
        $completed = student::select('*')->count();
       
        return view ('dashboard.index');
    }
}
