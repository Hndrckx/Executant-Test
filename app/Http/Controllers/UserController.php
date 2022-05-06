<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit ($id) {
        $edit = User::find($id);
        $avatars = Avatar::all();
        $roles = Role::all();
        return view('layouts.editUser', compact('edit', 'avatars', 'roles'));
    }

    public function update ($id, Request $request) {
        $update = User::find($id);
        $update->firstName = $request->firstName;
        $update->name = $request->name;
        $update->email = $request->email;
        $update->age = $request->age;
        $update->avatar_id = $request->avatar_id;
        $update->role_id = $request->role_id;
        $update->save();
        return redirect('/users');
    }
}
