<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reports()
    {   
        $reports = Report::all();
        return view('menu.reports.index',compact('reports'));
    }

    public function create()
    {
        return view('menu.reports.create');
    }

    public function store(Request $request)
    {
        $reports = new Report();
        $reports->srNo = $request->srNo;
        $reports->exeNo = $request->exeNo;
        $reports->name = $request->name;
        $reports->date = $request->date;
        $reports->comm = $request->comm;
        $reports->save();
        return redirect()->route('reports.create')
                        ->with('success',' Added successfully.');    
    }
    
}
