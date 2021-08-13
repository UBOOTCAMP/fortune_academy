<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\SubCategory;
use App\Traits\FileHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClassesController extends Controller
{
 use FileHelper;

    public function index()
    {
        $classes = Classes::with('sub_category')->get();
        return view('admin.classes.index', compact('classes'));
    }

    public function create()
    {
        $subCategories = SubCategory::all();
        return view('admin.classes.add', compact('subCategories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'class_code' => 'required',
            'sub_category_id' => 'required',
            'days' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'discount_price' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $request->merge([
            'days' => implode(',', (array) $request->get('days'))
        ]);

        $monthExplode = explode('-', $request->start_date);
        $request['month'] = $monthExplode[1];
        $timeConcatenate = $request->start_time . ' - ' . $request->end_time;
        $request['timing'] = $timeConcatenate;
        $classData = $request->except('start_time', 'end_time');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $classData['image'] = $image_name;
            Classes::create($classData);
        }
        return redirect()->route('classes.index');
    }

    public function show($id)
    {
        abort(404);
    }


    public function edit(Classes $class)
    {
        $subCategories = SubCategory::all();
        return view('admin.classes.edit', compact('class', 'subCategories'));
    }


    public function update(Request $request, Classes $class)
    {
        $request->validate([
            'class_name' => 'required',
            'class_code' => 'required',
            'sub_category_id' => 'required',
            'days' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'discount_price' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $request->merge([
            'days' => implode(',', (array) $request->get('days'))
        ]);
        $monthExplode = explode('-', $request->start_date);
        $request['month'] = $monthExplode[1];
        $timeConcatenate = $request->start_time . ' - ' . $request->end_time;
        $request['timing'] = $timeConcatenate;
        $classData = $request->except('start_time', 'end_time');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $classData['image'] = $image_name;
            $filePath = storage_path() . '/app/public/images' . $class->image;
            unlink($filePath);
            Session::flash('success', "Success!");
        } else {
            $oldImage = $class->image;
            $classData['image'] = $oldImage;
        }
        $class->update($classData);
        return redirect()->route('classes.index');
    }

    public function destroy(Classes $class)
    {
        $class->delete();
        $filePath = storage_path(). '/app/public/images/'. $class->image;
        unlink($filePath);
        return response()->json('Class Successfully Deleted');
    }

    public function status(Request $request)
    {
        $class = Classes::find($request->id);
        $class->update([
            'status' => !$class->status
        ]);
        return response()->json('Status Updated');
    }

    public function featureUpdate(Request $request)
    {
        $class = Classes::find($request->id);
        $class->update([
            'is_featured' => !$class->is_featured
        ]);
        return response()->json('Is Featured Updated');
    }
}
