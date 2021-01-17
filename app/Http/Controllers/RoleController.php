<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isManager']);
    }
    public function index(){
        $roles = Role::all();
        return view('back.user.role.index', compact('roles'));
    }
}
