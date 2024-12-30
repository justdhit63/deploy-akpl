<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = History::where('history_id', Auth::user()->id)->get();
        // $users = User::whereNotIn('usertype', ['admin'])->where('name', 'like', '%' . $request->search .'%')->paginate(10);
        return view('user.history', compact(['histories']));
    }
    public function update(Bill $bill)
    {
        $history = new History;

        $history->date = now();
        $history->history_id = $bill->customer_id;
        $history->price = $bill->price;
        $history->usage = $bill->usage;
        $history->status = str('paid');

        $history->save();

        $bill->delete();

        return redirect()->route('dashboard.history');
    }
}
