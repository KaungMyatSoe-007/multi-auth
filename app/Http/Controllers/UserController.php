<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isSupervisor']);
    }
    public function index(){
        $users = User::all();
        return view('back.user.index', compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('back.user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $roleIds = $request->role_ids;

        $user->roles()->sync($roleIds);
        return redirect('admin/users');
    }
}
