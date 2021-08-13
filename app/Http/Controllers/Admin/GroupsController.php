<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function index()
    {
        $groups = Group::with('students')->get();
        return view('admin.groups.index', compact('groups'));
    }


    public function create()
    {
        $students = Student::whereStatus(1)->get();
        return view('admin.groups.add', compact('students'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:groups',
        ]);
        Group::create(['name' => $request->name]);
        return redirect()->route('groups.index');
    }


    public function show(Group $group)
    {
        $students = Student::whereStatus(1)->get();
        return view('admin.groups.assign', compact('students', 'group'));
    }

    public function groupAssign(Request $request)
    {

        $group = Group::find($request->groupId)->first();
        $group->students()->detach();
        foreach ($request->id as $studentId) {
            $group->students()->attach([
                'student_id' => $studentId
            ]);
        }
        return 'success';
    }

    public function edit(Group $group)
    {
        $groupData = Group::with('students')->where('id', $group->id)->first();
        return view('admin.groups.edit', compact('groupData'));
    }


    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $group->update(['name' => $request->name]);
        return redirect()->route('groups.index');
    }


    public function destroy(Group $group)
    {
        $group->delete();
        return response()->json('Group Deleted Successfully');
    }

    public function status(Request $request)
    {
        $group = Group::find($request->id);
        $group->update([
            'status' => !$group->status
        ]);
        return response()->json('Status Updated');
    }
}
