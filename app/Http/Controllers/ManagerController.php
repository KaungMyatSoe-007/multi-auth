<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isManager']);
    }
    public function index(){
        return view('back.dashboard-one');
    }
}
