<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::all();
        return view('admin.users.add', compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);

        $userData = $request->all();
        $userData['password'] = bcrypt($request->get('password'));
        $user = User::create($userData);
        $user->roles()->attach(['role_id' => $request->role_id]);
        return redirect()->route('users.index');
    }


    public function show($id)
    {
        abort(404);
    }


    public function edit(User $user)
    {
        $user = User::with('roles')->where('id', $user->id)->first();
        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required'
        ]);

        if ($request->has('password')) {
            $request['password'] = bcrypt($request->get('password'));
        }

        $userData = $request->all();

        $user->update($userData);
        $user->roles()->sync(['role_id' => $request->role_id]);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json('Admin Successfully Deleted');
    }

    public function status(Request $request)
    {
        $user = User::find($request->id);
        $user->update([
            'status' => !$user->status
        ]);
        return response()->json('Status Updated');
    }
}
