<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\PromoCode;
use App\Models\SubCategory;
use App\Traits\FileHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use FileHelper;

    public function index()
    {
        $subCategories = SubCategory::with('category', 'classes')->where('category_id', 1)->whereStatus(1)->get();
        return view('home', compact('subCategories'));
    }

    public function getClassesBySubCategory($subCategoryId)
    {
        $subCategory = SubCategory::with('category', 'classes.promo')->where('id', $subCategoryId)->whereStatus(1)->first();
        return view('sub-category', compact('subCategory'));
    }

    public function enrollClass($classId)
    {
        $class = Classes::with('sub_category', 'promo')->where('id', $classId)->whereStatus(1)->first();
        return view('enroll', compact('class'));
    }

}
