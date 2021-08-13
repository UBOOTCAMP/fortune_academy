<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function promoApply(Request $request)
    {
        $priceExplode = explode('$', $request->price);
        $price = $priceExplode[1];
        $promo = PromoCode::where('code', $request->code)->whereStatus(1)->first();
        if (!$promo) {
            return response('Not exist');
        }
        $type = $promo->type;
        $amount = $promo->amount;
        if ($type == 'percentage') {
            $newprice = $price * ((100 - $amount) / 100);
            return response()->json([
                'status' => 'Applied',
                'newPrice' => $newprice,
            ]);
        } else {
            $newprice = $price - $amount;
            return response()->json([
                'status' => 'Applied',
                'newPrice' => $newprice,
            ]);
        }
    }
}
