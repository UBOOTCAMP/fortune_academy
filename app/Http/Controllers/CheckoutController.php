<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function promoApply(Request $request)
    {
        $promo = PromoCode::where('code', $request->code)->whereStatus(1)->first();
        if (!$promo) {
            return response('Not exist');
        }
        $type = $promo->type;
        $amount = $promo->amount;
        if ($type == 'percentage') {
            $newprice = $request->price * ((100 - $amount) / 100);
            return response()->json([
                'status' => 'Applied',
                'newPrice' => $newprice,
            ]);
        } else {
            $newprice = $request->price - $amount;
            return response()->json([
                'status' => 'Applied',
                'newPrice' => $newprice,
            ]);
        }
    }
}
