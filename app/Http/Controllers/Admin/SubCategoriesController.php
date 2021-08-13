<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::with('category')->get();
        return view('admin.sub-categories.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-categories.add', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);

        $subCategoryData = $request->all();
        SubCategory::create($subCategoryData);
        return redirect()->route('sub-categories.index');
    }


    public function show($id)
    {
        abort(404);
    }


    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();
        return view('admin.sub-categories.edit', compact('subCategory', 'categories'));
    }


    public function update(Request $request, SubCategory $subCategory)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
        ]);
        $subCategoryData = $request->all();

        $subCategory->update($subCategoryData);
        return redirect()->route('sub-categories.index');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return response()->json('Sub-Category Successfully Deleted');
    }

    public function status(Request $request)
    {
        $subCategory = SubCategory::find($request->id);
        $subCategory->update([
            'status' => !$subCategory->status
        ]);
        return response()->json('Status Updated');
    }
}
