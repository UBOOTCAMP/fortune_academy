<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassRoomsController extends Controller
{

    public function index()
    {
        $students = Student::whereStatus(1)->get();
        $instructors = Instructor::whereStatus(1)->get();
        $classRooms = ClassRoom::all();
        return view('admin.class-rooms.index', compact('students', 'instructors', 'classRooms'));
    }


    public function create()
    {
        $students = Student::whereStatus(1)->paginate(10);
        $instructors = Instructor::whereStatus(1)->get();
        return view('admin.class-rooms.add', compact('students', 'instructors'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'start_date' => 'required',
            'meeting_id' => 'required',
            'zoom_link' => 'required',
            'meeting_password' => 'required',
            'student_ids' => 'required',
            'instructor_id' => 'required',
        ]);
        dd($request->all());
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit(ClassRoom $classRoom)
    {
        return view('admin.class-rooms.edit');
    }


    public function update(Request $request, ClassRoom $classRoom)
    {
        //
    }

    public function destroy(ClassRoom $classRoom)
    {
        $classRoom->delete();
        return response()->json('Class Room Deleted Successfully');
    }

    public function status(Request $request)
    {
        $classRoom = ClassRoom::find($request->id);
        $classRoom->update([
            'status' => !$classRoom->status
        ]);
        return response()->json('Status Updated');
    }
}
