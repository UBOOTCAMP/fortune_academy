<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Student;
use App\Models\User;
use App\Traits\FileHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    use FileHelper;

    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $classes = Classes::where('status', 1)->get();
        return view('admin.students.add', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png',
        ]);

        $studentData = $request->except('classes', 'password');

        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $image = $request->file('avatar');
            $image_name = time() . $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $studentData['avatar'] = $image_name;
        }
        $student = Student::create($studentData);
        // INSERT RECORD IN USERS
        $user = User::create([
            'group_id' => $student->id,
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'user_type' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user->roles()->attach(['role_id' => 2]);
        // SAVE CLASSES
        foreach ($request->classes as $class) {
            $student->classes()->attach([
                'class_id' => $class
            ]);
        }
        return redirect()->route('students.index');
    }

    public function show($id)
    {
        abort(404);
    }


    public function edit(Student $student)
    {
        $classes = Classes::where('status', 1)->get();
        return view('admin.students.edit', compact('student', 'classes'));
    }


    public function update(Request $request, Student $student)
    {
        $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $studentData = $request->except('classes');
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $image = $request->file('avatar');
            $image_name = time() . $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $studentData['avatar'] = $image_name;
            $filePath = storage_path() . '/app/public/images' . $student->avatar;
            unlink($filePath);
            Session::flash('success', "Success!");
        } else {
            $oldImage = $student->avatar;
            $studentData['avatar'] = $oldImage;
        }
        $student->update($studentData);

        foreach ($request->classes as $class) {
            $student->classes()->detach([
                'class_id' => $class
            ]);
            $student->classes()->attach([
                'class_id' => $class
            ]);
        }

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        $filePath = storage_path() . '/app/public/images/' . $student->avatar;
        unlink($filePath);
        return response()->json('Student Successfully Deleted');
    }

    public function status(Request $request)
    {
        $student = Student::find($request->id);
        $student->update([
            'status' => !$student->status
        ]);
        return response()->json('Status Updated');
    }
}
