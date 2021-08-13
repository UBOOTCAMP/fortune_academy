<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $categoryData = $request->all();
        Category::create($categoryData);
        return redirect()->route('categories.index');
    }


    public function show($id)
    {
        abort(404);
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $categoryData = $request->all();

        $category->update($categoryData);
        return redirect()->route('categories.index');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json('Category Successfully Deleted');
    }

    public function status(Request $request)
    {
        $category = Category::find($request->id);
        $category->update([
            'status' => !$category->status
        ]);
        return response()->json('Status Updated');
    }
}
