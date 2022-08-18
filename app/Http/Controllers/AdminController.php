<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Master;
use Carbon\Carbon;

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

    public function getdate(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)->toDateTimeString();
        $end_date = Carbon::parse($request->end_date)->toDateTimeString();

        $data = Master::whereBetween('created_at',[$start_date,$end_date])->get();

        return view('admin.monthly.index',compact('data'));

    }

}
