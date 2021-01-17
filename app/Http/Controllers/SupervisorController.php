<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('isSupervisor');
    }
    public function index(){
        return view('back.dashboard-one');
    }
}
