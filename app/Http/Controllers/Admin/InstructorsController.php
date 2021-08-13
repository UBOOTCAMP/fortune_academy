<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Instructor;
use App\Models\User;
use App\Traits\FileHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class InstructorsController extends Controller
{
    use FileHelper;

    public function index()
    {
        $instructors = Instructor::all();
        return view('admin.instructors.index', compact('instructors'));
    }

    public function create()
    {
        $classes = Classes::where('status', 1)->get();
        return view('admin.instructors.add', compact('classes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:instructors|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png',
        ]);

        $instructorData = $request->except('classes', 'password');
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            // SAVE AVATAR
            $image = $request->file('avatar');
            $image_name = 'instructor ' . time() . $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $instructorData['avatar'] = $image_name;
        }
        $instructor = Instructor::create($instructorData);
        // INSERT RECORD IN USERS
        $user = User::create([
            'group_id' => $instructor->id,
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'user_type' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $user->roles()->attach(['role_id' => 3]);

        // SAVE CLASSES
        foreach ($request->classes as $class) {
            $instructor->classes()->attach([
                'class_id' => $class
            ]);
        }

        return redirect()->route('instructors.index');

    }

    public function show($id)
    {
        abort(404);
    }


    public function edit(Instructor $instructor)
    {
        $classes = Classes::where('status', 1)->get();

        return view('admin.instructors.edit', compact('instructor', 'classes'));
    }


    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png',
        ]);

        $instructorData = $request->except('classes');
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $image = $request->file('avatar');
            $image_name = 'instructor ' . time() . $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $instructorData['avatar'] = $image_name;
            $filePath = storage_path() . '/app/public/images' . $instructor->avatar;
            unlink($filePath);
            Session::flash('success', "Success!");
        } else {
            $oldImage = $instructor->avatar;
            $instructorData['avatar'] = $oldImage;
        }
        $instructor->update($instructorData);

        foreach ($request->classes as $class) {
            $instructor->classes()->detach([
                'class_id' => $class
            ]);
            $instructor->classes()->attach([
                'class_id' => $class
            ]);
        }

        return redirect()->route('instructors.index');
    }


    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        $filePath = storage_path() . '/app/public/images/' . $instructor->avatar;
        unlink($filePath);
        return response()->json('Instructor Successfully Deleted');
    }

    public function status(Request $request)
    {
        $instructor = Instructor::find($request->id);
        $instructor->update([
            'status' => !$instructor->status
        ]);
        return response()->json('Status Updated');
    }
}
