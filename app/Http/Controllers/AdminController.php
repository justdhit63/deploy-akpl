<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request){
        $users = User::whereNotIn('usertype', ['admin'])->paginate(10);
        if ($request->search) {
            // dd($request->search);
            $users = User::whereNotIn('usertype', ['admin'])->where('name', 'like', '%' . $request->search .'%')->paginate(10);
        }
        $bills = Bill::paginate(10);

        return view('admin.users.index', compact(['users', 'bills']));

    }

    public function edit(Bill $bill){
        return view('admin.users.edit', compact('bill'));
    }

    public function update(Request $request, Bill $bill)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        // ]);

        
        $bill->status = $request->status;

        $bill->update();

        return redirect()->route('admin.users.index')->with('success', 'Update Users Success');

    }

    public function generate(Request $request, User $user)
    {
        
        Bill::factory()->create([
            'customer_id' => $request->id,
        ]);

        
    
        return redirect()->route('admin.users.index')->with('success', 'Update Users Success');

    }

    
}
