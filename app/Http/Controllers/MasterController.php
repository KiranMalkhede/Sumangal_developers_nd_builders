<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;
use App\Models\Executive;
use App\Models\Layout;
use App\helper\Helper;


class MasterController extends Controller
{
    public function master()
    {
        $masters = Master::all();
        return view('menu.masterEntries.index', compact('masters'));
    }
    public function create(Request $request)
    {
 
        // dd($abc);
        // return $abc;
        return view('menu.masterEntries.create');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        
        if($search == ''){
            $employees = Executive::orderby('name','asc')->select('id','name','code')->limit(5)->get();
        }else{
            $employees = Executive::orderby('name','asc')->select('id','name','code')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        }
  
        $response = array();
        foreach($employees as $employee){
           $response[] = array("label"=>$employee->name,"value"=>$employee->code);
        }
  
        return response()->json($response);
    }

    public function searchPlot(Request $request)
    {
        $search = $request->search;

        if($search == ''){
            $plots = Layout::orderby('code','asc')->select('id','code','project','mouza','plot','khasara','phNo','land')->limit(5)->get();
        }else{
            $plots = Layout::orderby('code','asc')->select('id','code','project','mouza','plot','khasara','phNo','land')->where('project','like','%')->limit(5)->get();
        }
        
        $response = array();
        foreach($plots as $plot){
            $response[] = array(
                "value"=>$plot->project,"value3"=>$plot->land,"value1"=>$plot->plot,"value2"=>$plot->khasara,"value4"=>$plot->mouza,
                "value5"=>$plot->phNo);
                
        }
        return response()->json($response);
    }

    public function store(Request $request)
    {
        $exeNo_id = Helper::IDGenerator(new Master(), 'exeNo_id', 5, 'EXE');
        $masters = new Master();
        $masters->exeNo_id = $exeNo_id;
        $masters->srNo = $request->srNo;
        // dd($masters);
        $masters->exeNo = $request->exeNo;
        $masters->name = $request->name;
        $masters->date = $request->date;
        $masters->comm = $request->comm;
        
        //Customer Details
        $masters->customer_id = $exeNo_id;
        $masters->name2 = $request->name2;
        $masters->dob = $request->dob;
        $masters->add = $request->add;
        $masters->age = $request->age;
        $masters->occupation = $request->occupation;
        $masters->phone1 = $request->phone1;
        $masters->phone2 = $request->phone2;
        $masters->phone3 = $request->phone3;
        //Nominee Detail
        $masters->nameNom = $request->nameNom;
        $masters->dobNom = $request->dobNom;
        $masters->ageNom = $request->ageNom;
        $masters->app = $request->app;
        $masters->add2 = $request->add2;
        //plot
        $masters->dise = $request->dise;
        $masters->lock = $request->lock;
        $masters->selectLayout = $request->selectLayout;
        $masters->sqrFt = $request->sqrFt;
        $masters->plotNo = $request->plotNo;
        $masters->khasaraNo = $request->khasaraNo;
        $masters->sqrFt2 = $request->sqrFt2;
        $masters->mouza = $request->mouza;
        $masters->phNo = $request->phNo;
        $masters->size = $request->size;
        $masters->otherDetail = $request->otherDetail;
        $masters->saleRate = $request->saleRate;
        $masters->totalPlotC = $request->totalPlotC;
        $masters->ComRate = $request->ComRate;
        $masters->netPlotCost = $request->netPlotCost;
        $masters->noInstall = $request->noInstall;
        $masters->downPay = $request->downPay;
        $masters->instalFrom = $request->instalFrom;
        $masters->installTo = $request->installTo;
        $masters->monInstall = $request->monInstall;
        
        // dd($masters);
        $masters->save();
        return redirect()
        ->route('master.create')
            ->with('success', ' Added successfully.');
    }
    public function edit($id)
    {
        $masters = Master::find($id);
        return view('menu.masterEntries.edit', compact('masters'));
    }
    public function update(Request $request, $id)
    {
        $masters = Master::find($id);
        $masters->srNo = $request->srNo;
        $masters->exeNo = $request->exeNo;
        $masters->name = $request->name;
        $masters->date = $request->date;
        $masters->comm = $request->comm;
        $masters->name2 = $request->name2;
        $masters->dob = $request->dob;
        $masters->add = $request->add;
        $masters->age = $request->age;
        $masters->occupation = $request->occupation;
        $masters->phone1 = $request->phone1;
        $masters->phone2 = $request->phone2;
        $masters->phone3 = $request->phone3;
        $masters->nameNom = $request->nameNom;
        $masters->dobNom = $request->dobNom;
        $masters->ageNom = $request->ageNom;
        $masters->app = $request->app;
        $masters->add2 = $request->add2;
        $masters->save();
        return redirect()
            ->route('master_Entries')
            ->with('success', ' update successfully.');
    }
    public function show($id)
    {
        $masters = Master::find($id);
        return view('menu.masterEntries.show', compact('masters'));
    }

    public function destroy($id)
    {
        $masters = Master::find($id);
        $masters->delete();
        return redirect()
            ->back()
            ->with('success_del', 'Deleted Successfully');
    }

   

}
