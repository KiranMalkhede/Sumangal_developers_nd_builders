<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function transaction()
    {
        $transactions = Transaction::all();
        return view('menu.transaction.index',compact('transactions'));
    }
    public function create()
    {
        return view('menu.transaction.create');
    }

    public function store(Request $request)
    {
        $transactions = new Transaction();
        $transactions->srNo = $request->srNo;
        $transactions->exeNo = $request->exeNo;
        $transactions->name = $request->name;
        $transactions->date = $request->date;
        $transactions->comm = $request->comm;
        $transactions->save();
        return redirect()->route('transaction.create')
                        ->with('success',' Added successfully.');    
    }
}
