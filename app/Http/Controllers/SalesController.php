<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales_order;
use App\Models\Pharmacy_store;
use App\Models\Patient;
use App\Models\Sale;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Str;

class SalesController extends Controller
{
   
public function checkout (Request $request){
    $total = $request->input('total');
    $currentDate = date('Y-m-d');
    $invoice_id = random_int(100000, 999999);
    $patient = Patient::find($request->input('patient_id'));
    foreach($request->medecine_id as $key=>$medecine_id)
    {
        $sale = new Sale();
        $sale->invoice = $invoice_id;
        $sale->patient_type = 'other_type';
        $sale->sales_date = $currentDate;
        $sale->payment_mode = "cash";
        $sale->mpesa_code = '0';
        $sale->mpesa_payment = 'cash';
        $sale->customer = $patient->name;
        $sale->medecine_name = $request->medecine_name[$key];
        $sale->price = $request->price[$key];
        $sale->qty = $request->qty[$key];
        $sale->payment = 0;
        $sale->balance = 0;
        $sale->total = $request->qty[$key] * $request->price[$key];
        $sale->time = $currentDate;

        $sale->save();
       
    }
    if($sale){
        
        // $invoice = Sal
        return view('dashboard.checkout')->with("invoice",$sale->invoice)->with('total',$total)->with('patient',$patient);
    }


}

public function salesummary(Request $request){
    $patient = Patient::find($request->input('patient_id'));

    $saleInvoice = Sale::where('invoice',$request->input('invoice'))->update(['payment'=> $request->input('amount'),'balance'=>$request->input('balance')]);
 if($saleInvoice){
    $sales_summary = Sale::where('invoice',$request->input('invoice'))->get();
    $total = Sale::where('invoice',$request->input('invoice'))->sum('total');  
    $invoice = $request->input('invoice');
    // $balance = Sale::where('invoice',$request->input('invoice'))->sum('total');     

    return view('dashboard.salesummary')->with('sales_summary',$sales_summary)->with('patient',$patient)->with('total',$total)->with('invoice',$invoice);

 }

 }
 public function invoice($id,$patient){
    $currentDate = date('Y-m-d');
    $data['sales'] = Sale::where('invoice',$id)->get();
    $data['patient'] =  Patient::find($patient);
    $data['invoice'] = $id;
    $data['date'] = $currentDate;
    $data['total'] =  Sale::where('invoice',$id)->sum('total');
    $data['amount'] =  Sale::where('invoice',$id)->sum('payment');
    $data['balance'] =  Sale::where('invoice',$id)->sum('balance');

    $pdf = PDF::loadView('dashboard.invoice',$data);
    $pdf->setPaper(array(0,0,750,550),'portrait');
    return $pdf->stream('invoice_'.time().'.pdf',array("Attachment"=>0));
    return view('dashboard.invoice')->with('data',$data);
   

 }

 public function transactions(){
    $sales = Sale::get();
    return view('dashboard.transactions')->with('sales',$sales);
 }

public function todaytransaction(){
    $currentDate = date('Y-m-d');
    $todaytransaction = Sale::where('time',$currentDate)->get();
    $todaytotal = Sale::where('time',$currentDate)->sum('total');
    return view('dashboard.todaytransaction')->with('todaytransaction',$todaytransaction)->with('todaytotal',$todaytotal);
}
            


            // return back()->with('errpr','The medecine is out of Stock');
        
    

        




    


}
