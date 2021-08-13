<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index()
    {
        $promo_codes = PromoCode::with('classes')->get();
        return view('admin.promo.index', compact('promo_codes'));
    }


    public function create()
    {
        $classes = Classes::whereStatus(1)->get();
        return view('admin.promo.add', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'code' => 'required|min:5|max:10|unique:promo_codes'
        ]);
        $promoData = $request->except('class_id');
        $promoCreate = PromoCode::create($promoData);
        if ($request->class_id) {
            foreach ($request->class_id as $class) {
                $promoCreate->classes()->attach([
                    'classes_id' => $class
                ]);
            }
        }
        return redirect()->route('promo_codes.index');
    }


    public function show($id)
    {
        return abort(404);
    }


    public function edit(PromoCode $promoCode)
    {
        $promoClass = PromoCode::with('classes')->where('id', $promoCode->id)->first();
        $classes = Classes::whereStatus(1)->get();
        return view('admin.promo.edit', compact('promoClass', 'classes'));
    }


    public function update(Request $request, PromoCode $promoCode)
    {
        $request->validate([
            'type' => 'required',
            'code' => 'required|min:5|max:10|unique:promo_codes'
        ]);

        $promo = $request->except('class_id');
        $promoCode->update($promo);
        if ($request->class_id) {
            foreach ($request->class_id as $class){
                $promoCode->classes()->detach([
                    'classes_id' => $class
                ]);
                $promoCode->classes()->attach([
                    'classes_id' => $class
                ]);
            }
        }
        return redirect()->route('promo_codes.index');
    }


    public function destroy(PromoCode $promoCode)
    {
        $promoCode->delete();
        return response()->json('Promo Code Deleted Successfully');
    }

    public function status(Request $request)
    {
        $promoCode = PromoCode::find($request->id);
        $promoCode->update([
            'status' => !$promoCode->status
        ]);
        return response()->json('Status Updated');
    }
}
