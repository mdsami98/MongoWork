<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;

class CheckOutController extends Controller
{
    public function charge(Request $request){


        Stripe::setApiKey('sk_test_NKBPysh9epW87sRo2Qq0JZvA00OcpuJj07');


        $token = $request->stripeToken;
        $charge = Charge::create([
            'amount' =>100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        $user = Auth::user();

        $updateUser = User::findOrFail($user->_id);

        $updateUser->update([
            'type' => 'u'
        ]);

        return redirect()->back();
    }
}
