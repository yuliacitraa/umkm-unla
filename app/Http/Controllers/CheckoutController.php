<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;

use Exception;

use Midtrans\Snap;
use Midtrans\Config;

class CheckoutController extends Controller
{
    public function process (Request $request) {
        // save users data
        $user=Auth::user();
        $user->update($request->except('total_price'));

        // proses checkout
        $code = 'STORE-' . mt_rand(00000,99999);
        $carts = Cart::with(['product', 'user'])
            ->where('users_id', Auth::user()->id)
            ->get();
        
        //transaction create
        $transaction = Transaction::create ([
            'users_id'           => Auth::user()->id,
            'shipping_price'     => 0,
            'total_price'        => $request->total_price,
            'transaction_status' => 'PENDING',
            'code'               => $code
        ]);

        foreach ($carts as $cart) {
            $trx = 'TRX-' . mt_rand(00000,99999);

            TransactionDetail::create ([
                'transactions_id' => $transaction->id,
                'products_id'     => $cart->product->id,
                'price'           => $cart->product->price,
                'code'            => $trx
        ]);
        }
        return dd($transaction);
    }

    public function callback (Request $request) {

    }
}
