<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandOwnerDetails;
use App\Models\Receipt;
use App\Models\AdvisorPromotion;

class MenuController extends Controller
{

    public function landownerdetails_view(){

        $landowners = LandOwnerDetails::all();
        return view('menu.landowner.index',compact('landowners'));
    }

    public function landownerdetails_create(){
        return view('menu.landowner.create');
    }

    public function landowner_insert(Request $request)
    {
        $landowner = new LandOwnerDetails();

        $landowner->ownerName = $request->ownerName;
        $landowner->address = $request->address;
        $landowner->contactDetail = $request->contactDetail;
        $landowner->contactDetail2 = $request->contactDetail2;
        $landowner->mouza = $request->mouza;
        $landowner->khasara = $request->khasara;
        $landowner->phNo = $request->phNo;
        $landowner->acres = $request->acres;
        $landowner->perAcres = $request->perAcres;
        $landowner->totalCost = $request->totalCost;
        $landowner->payPeriod = $request->payPeriod;

        $landowner->save();
        return back()->with('success',"Land Owner's details submited successfully! " );
    }

    public function landowner_show($id)
    {
        $landowner = LandOwnerDetails::find($id);
        return view('menu.landowner.show',compact('landowner'));
    }

    public function landowner_edit($id)
    {
        $landowner = LandOwnerDetails::find($id);
        return view('menu.landowner.edit',compact('landowner'));
    }

    public function landowner_update(Request $request,$id)
    {
        $landowner = LandOwnerDetails::find($id);

        $landowner->ownerName = $request->ownerName;
        $landowner->address = $request->address;
        $landowner->contactDetail = $request->contactDetail;
        $landowner->contactDetail2 = $request->contactDetail2;
        $landowner->mouza = $request->mouza;
        $landowner->khasara = $request->khasara;
        $landowner->phNo = $request->phNo;
        $landowner->acres = $request->acres;
        $landowner->perAcres = $request->perAcres;
        $landowner->totalCost = $request->totalCost;
        $landowner->payPeriod = $request->payPeriod;

        $landowner->update();

        return back()->with('success',"Land Owner's details updated successfully! " );
    }
    
    public function landowner_delete($id)
    {
        $masters = LandOwnerDetails::find($id);
        $masters->delete();
        return back()->with('danger', "Land Owner's details deleted Successfully");
    }

    public function receipt_view()
    {
        $receipts = Receipt::all();
        return view('menu.receipt.index',compact('receipts'));
    }

    public function receipt_create()
    {
        return view('menu.receipt.create');
    }

    public function receipt_insert(Request $request)
    {
        $receipt = new Receipt();
        $receipt->receiptNo = $request->receiptNo;
        $receipt->receiptDate = $request->receiptDate;
        $receipt->giver = $request->giver;
        $receipt->layout = $request->layout;
        $receipt->mouza = $request->mouza;
        $receipt->khasara = $request->khasara;
        $receipt->plot_no = $request->plot_no;
        $receipt->size = $request->size;
        $receipt->type = $request->type;
        $receipt->ex_details = $request->ex_details;
        $receipt->amount_received = $request->amount_received;
        $receipt->on_ac_of = $request->on_ac_of;
        $receipt->tokenExpDate = $request->tokenExpDate;
        $receipt->month = $request->month;
        $receipt->mode_of_pay = $request->mode_of_pay;
        $receipt->cheque_no = $request->cheque_no;
        $receipt->cheque_date = $request->cheque_date;
        $receipt->bank_name = $request->bank_name;

        $receipt->save();
        return back()->with('success',"Receipt details saved successfully! " );
    }

    public function receipt_show($id)
    {
        $receipt = Receipt::find($id);
        return view('menu.receipt.show',compact('receipt'));
    }

    public function receipt_edit($id)
    {
        $receipt = Receipt::find($id);
        return view('menu.receipt.edit',compact('receipt'));
    }

    public function receipt_update(Request $request,$id)
    {
        $receipt = Receipt::find($id);

        $receipt->receiptNo = $request->receiptNo;
        $receipt->receiptDate = $request->receiptDate;
        $receipt->giver = $request->giver;
        $receipt->layout = $request->layout;
        $receipt->mouza = $request->mouza;
        $receipt->khasara = $request->khasara;
        $receipt->plot_no = $request->plot_no;
        $receipt->size = $request->size;
        $receipt->type = $request->type;
        $receipt->ex_details = $request->ex_details;
        $receipt->amount_received = $request->amount_received;
        $receipt->on_ac_of = $request->on_ac_of;
        $receipt->tokenExpDate = $request->tokenExpDate;
        $receipt->month = $request->month;
        $receipt->mode_of_pay = $request->mode_of_pay;
        $receipt->cheque_no = $request->cheque_no;
        $receipt->cheque_date = $request->cheque_date;
        $receipt->bank_name = $request->bank_name;

        $receipt->update();
        return back()->with('success',"Receipt details updated successfully! " );
    }

    public function receipt_delete($id)
    {
        $receipt = Receipt::find($id);
        $receipt->delete();
        return back()->with('danger', "Receipt details deleted Successfully");
    }

    public function advisor_promotion()
    {
        $advisors = AdvisorPromotion::all();
        return view('menu.advisor_promotion.index',compact('advisors'));
    }
    public function advisor_insert(Request $request)
    {
        $advisor = new AdvisorPromotion();

        $advisor->advisor = $request->advisor;
        $advisor->date = $request->date;
        $advisor->comm = $request->comm;

        $advisor->save();
        return back()->with('success'," Advisor's Promotion saved successfully! " );
    }
    public function advisor_edit($id)
    {
        $advisor = AdvisorPromotion::find($id);
        return view('menu.advisor_promotion.edit',compact('advisor'));
    }

    public function advisor_update(Request $request,$id)
    {
        $advisor = AdvisorPromotion::find($id);

        $advisor->advisor = $request->advisor;
        $advisor->date = $request->date;
        $advisor->comm = $request->comm;

        $advisor->update();
        return back()->with('success'," Advisor's Promotion updated successfully! " );
    }
    public function advisor_delete($id)
    {
        $advisor = AdvisorPromotion::find($id);
        $advisor->delete();
        return back()->with('danger', "Advisor's promotion deleted Successfully");
    }


}
