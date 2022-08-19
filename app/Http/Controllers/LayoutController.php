<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layout;
use App\Models\Executive;
use App\helper\Helper;

class LayoutController extends Controller
{
    public function index()
    {
        $layouts = Layout::all();
        return view('master.layout.index', compact('layouts'));
    }
    public function create()
    {
        return view('master.layout.create');
    }
    public function store(Request $request)
    {
        $layout_id = Helper::IDGenerator1(new Layout(), 'layout_id', 5, 'LYT');
        $layouts = new Layout();
        $layouts->layout_id = $layout_id;
        $layouts->code = $request->code;
        $layouts->project = $request->project;
        $layouts->mouza = $request->mouza;
        $layouts->khasara = $request->khasara;
        $layouts->phNo = $request->phNo;
        $layouts->tah = $request->tah;
        $layouts->land = $request->land;
        $layouts->share = $request->share;
        $layouts->surplusLand = $request->surplusLand;
        $layouts->govtShare = $request->govtShare;
        $layouts->openSpace = $request->openSpace;
        $layouts->uitility = $request->uitility;
        $layouts->plot = $request->plot;
        $layouts->road = $request->road;
        $layouts->commPlot = $request->commPlot;
        $layouts->downPay = $request->downPay;
        $layouts->installPer = $request->installPer;
        $layouts->samiComm = $request->samiComm;
        $layouts->downPay2 = $request->downPay2;
        $layouts->installPer2 = $request->installPer2;
        $layouts->otherPlot = $request->otherPlot;
        $layouts->downPay3 = $request->downPay3;
        $layouts->installPer3 = $request->installPer3;
        $layouts->sqrFt = $request->sqrFt;
        $layouts->finance = $request->finance;
        $layouts->save();
        return redirect()
            ->back()
            ->with('success', 'Added Successfully!...');
    }

    public function edit($id)
    {
        $layouts = Layout::find($id);
        return view('master.layout.edit', compact('layouts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sqrFt' => 'nullable',
            'finance' => 'nullable',
        ]);

        $layouts = Layout::find($id);
        $layouts->code = $request->code;
        $layouts->project = $request->project;
        $layouts->mouza = $request->mouza;
        $layouts->khasara = $request->khasara;
        $layouts->phNo = $request->phNo;
        $layouts->tah = $request->tah;
        $layouts->land = $request->land;
        $layouts->share = $request->share;
        $layouts->surplusLand = $request->surplusLand;
        $layouts->govtShare = $request->govtShare;
        $layouts->openSpace = $request->openSpace;
        $layouts->uitility = $request->uitility;
        $layouts->plot = $request->plot;
        $layouts->road = $request->road;
        $layouts->commPlot = $request->commPlot;
        $layouts->downPay = $request->downPay;
        $layouts->installPer = $request->installPer;
        $layouts->samiComm = $request->samiComm;
        $layouts->downPay2 = $request->downPay2;
        $layouts->installPer2 = $request->installPer2;
        $layouts->otherPlot = $request->otherPlot;
        $layouts->downPay3 = $request->downPay3;
        $layouts->installPer3 = $request->installPer3;
        $layouts->sqrFt = $request->sqrFt;
        $layouts->finance = $request->finance;
        $layouts->save();

        return redirect()
            ->route('layout.index')
            ->with('success', 'Update Successfully!.....');
        // return redirect()->back()->with('success','Added Successfully!...');
    }

    public function show($id)
    {
        $layouts = Layout::find($id);
        return view('master.layout.show', compact('layouts'));
    }
    public function delete($id)
    {
        $layouts = Layout::find($id);
        $layouts->delete();
        return redirect()
            ->back()
            ->with('success_del', 'Deleted Successfully');
    }

    //Executive
    public function exeIndex()
    {
        $execatives = Executive::all();
        return view('master.execatives.index', compact('execatives'));
    }
    public function exeCreate()
    {
        return view('master.execatives.create');
    }
    public function exeStore(Request $request)
    {
        $exe_id = Helper::IDGeneratorExe(new Executive(), 'exe_id', 5, 'EXE');

        $execatives = new Executive();
        $execatives->exe_id = $exe_id;
        $execatives->code = $request->code;
        $execatives->joiningDate = $request->joiningDate;
        $execatives->sponsorCode = $request->sponsorCode;
        $execatives->name = $request->name;
        $execatives->sponsorName = $request->sponsorName;
        $execatives->email = $request->email;
        $execatives->add = $request->add;
        $execatives->phone = $request->phone;
        $execatives->phone1 = $request->phone1;
        $execatives->phone2 = $request->phone2;
        $execatives->dob = $request->dob;
        $execatives->age = $request->age;
        $execatives->qualitification = $request->qualitification;
        $execatives->sex = $request->sex;
        $execatives->commision = $request->commision;
        $execatives->pan = $request->pan;

        $execatives->save();
        return redirect()
            ->route('execative.exeCreate')
            ->with('success', 'Add Successfully!.....');
    }

    public function exeEdit($id)
    {
        $execatives = Executive::find($id);
        return view('master.execatives.edit', compact('execatives'));
    }

    public function exeUpdate(Request $request, $id)
    {
        $execatives = Executive::find($id);
        $execatives->code = $request->code;
        $execatives->joiningDate = $request->joiningDate;
        $execatives->sponsorCode = $request->sponsorCode;
        $execatives->name = $request->name;
        $execatives->sponsorName = $request->sponsorName;
        $execatives->email = $request->email;
        $execatives->add = $request->add;
        $execatives->phone = $request->phone;
        $execatives->phone1 = $request->phone1;
        $execatives->phone2 = $request->phone2;
        $execatives->dob = $request->dob;
        $execatives->age = $request->age;
        $execatives->qualitification = $request->qualitification;
        $execatives->sex = $request->sex;
        $execatives->commision = $request->commision;
        $execatives->pan = $request->pan;
        $execatives->save();
        return redirect()
            ->route('execative.exeIndex')
            ->with('success', 'Add Successfully!.....');
    }
    public function exeShow($id)
    {
        $execatives = Executive::find($id);
        return view('master.execatives.show', compact('execatives'));
    }
    public function exeDelete($id)
    {
        $execatives = Executive::find($id);
        $execatives->delete();
        return redirect()
            ->back()
            ->with('success_del', 'Deleted Successfully');
    }
}
