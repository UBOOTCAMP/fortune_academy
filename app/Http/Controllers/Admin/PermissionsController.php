<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{

    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }


    public function create()
    {
        return view('admin.permissions.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $permissionData = $request->all();
        Permission::create($permissionData);
        return redirect()->route('permissions.index');
    }


    public function show($id)
    {
        abort(404);
    }


    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }


    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $permissionData = $request->all();
        $permission->update($permissionData);
        return redirect()->route('permissions.index');
    }


    public function destroy(Permission $permission)
    {
        $permission->delete();
        return response()->json('Permission Successfully Deleted');
    }
}
