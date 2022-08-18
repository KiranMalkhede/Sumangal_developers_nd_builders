<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;
use App\Models\Receipt;
use Carbon\Carbon;

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
    
    public function daily_sales(Request $request)
    {
        $mouza = Receipt::all();

        $start_date = Carbon::parse($request->start_date)->toDateTimeString();

        $end_date = Carbon::parse($request->end_date)->toDateTimeString();

        $mouzaass = $request->mouza;
        $modeOfPay = $request->mode_of_pay;

        $data = Receipt::whereBetween('created_at',[$start_date,$end_date])->where('mouza',$mouzaass)->where('mode_of_pay',$modeOfPay)->get();

        // dd($data);
        // return $data;
        return view('menu.reports.daily_sales',compact(['data','mouza']));
    }

    public function daily_show($id)
    {
        $receipt = Receipt::find($id);
        return view('menu.reports.daily_show',compact('receipt'));
    }

    public function customersDetails()
    {
        return view('menu.reports.customers_details');
    }

}
