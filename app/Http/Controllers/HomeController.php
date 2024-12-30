<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $users = User::get();
        $bills = Bill::get();
        $histories = History::get();
        
        return view('admin.dashboard', compact(['users', 'bills', 'histories']));
    }
    public function user(){
        $bills = Bill::where('customer_id', Auth::user()->id)->get();
        $histories = History::where('history_id', Auth::user()->id)->get();

        return view('dashboard', compact(['bills', 'histories']));
    }

    public function tagihan(){
        $bills = Bill::where('customer_id', Auth::user()->id)->get();
        // $users = User::whereNotIn('usertype', ['admin'])->where('name', 'like', '%' . $request->search .'%')->paginate(10);
        return view('user.tagihan', compact(['bills']));
    }

    public function payment(Bill $bill)
    {
        // dd($bill);
        // $price = $bill->price;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $bill->price,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            )
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $bill->snap_token = $snapToken;
        $bill->save();

        return view('user.payment', ['bill' => $bill]);
    }
}
