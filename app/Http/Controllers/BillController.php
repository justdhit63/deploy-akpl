<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\History;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::paginate(10);

        return view('admin.bills.index', compact('bills'));
    }
    public function history()
    {
        // $histories = History::paginate(12);
        return view('admin.histories.index', ['histories' => History::paginate(10)]);
    }
}
