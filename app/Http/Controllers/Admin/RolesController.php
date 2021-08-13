<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }


    public function create()
    {
        return view('admin.roles.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $roleData = $request->all();
        Role::create($roleData);
        return redirect()->route('roles.index');
    }


    public function show($id)
    {
        abort(404);
    }


    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }


    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $roleData = $request->all();

        $role->update($roleData);
        return redirect()->route('roles.index');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json('Role Successfully Deleted');
    }
}
