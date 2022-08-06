<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin()
    {
        $admins = Admin::all();
        return view('menu.admin.index',compact('admins'));
    }
    public function create()
    {
        return view('menu.admin.create');
    }

    public function store(Request $request)
    {
        $admins = new Admin();
        $admins->srNo = $request->srNo;
        $admins->exeNo = $request->exeNo;
        $admins->name = $request->name;
        $admins->date = $request->date;
        $admins->comm = $request->comm;
        $admins->save();
        return redirect()->route('admin.create')
                        ->with('success',' Added successfully.');    
    }
}
