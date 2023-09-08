<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Pharmacy_store;
use App\Models\Invoice;

class SupplierController extends Controller
{
    //
    public function suppliers(){
        $suppliers = Supplier::get();
        // echo($pharmacy_info);

        return view('dashboard.suppliers')->with('suppliers',$suppliers);
    }
    public function ajoutersupplier(){
    
            return view('dashboard.ajoutersupplier');

        }
        

    public function savesupplier(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email',
            'phone'=>'required',
           
           ]);
           
        // print($request->input('product_category'));
      
        $supplier = new Supplier();
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
      
        $supplier->save();
        return redirect('/suppliers')->with("message","Supplier has been added successfully!");

    }

   
    public function editsupplier($id){
        $supplier = Supplier::find($id);
        return view('dashboard.editsupplier')->with('supplier',$supplier);

    }
    public function updatesupplier(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email',
            'phone'=>'required',
           
           ]);
        // print($request->input('product_category'));
        $supplier =  Supplier::find($request->input('id'));
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->save();

      
        return redirect('/suppliers')->with('message','Supplier has updated successfully');

    }
    public function deletesupplier($id){
        $supplier = Supplier::find($id);
       
        $supplier->delete();
        return redirect('/suppliers')->with('message','Supplier has been deleted successfully');  
      }
    public function receivemedecine(){
        $medecines = Pharmacy_store::get();
        return view('dashboard.receivemedecine')->with('medecines',$medecines);
    }
    public function receive($id){
        $medecine = Pharmacy_store::find($id);
        $suppliers = Supplier::get();
        return view('dashboard.receive')->with('suppliers',$suppliers)->with('medecine',$medecine);
    }
    public function invoices(){
        $invoices = Invoice::get();
        return view('dashboard.invoices')->with('invoices',$invoices);
        
    }
        public function sendrequest(Request $request){
        $currentDate = date('Y-m-d');

        $this->validate($request,[
            'medecine_name' => 'required',
            'supplier_id'=>'required',
            'quantity'=>'required',
            'sell_price'=>'required',
            'expiry_date'=>'required', 
           ]);
           $invoice = new Invoice();
           $invoice->invoice_id = random_int(100000, 999999);
           $invoice->medecine_name = $request->input('medecine_name');
           $invoice->qty = $request->input('quantity');
           $invoice->price = $request->input('sell_price');
           $invoice->supplier_id = $request->input('supplier_id');
           $invoice->total =  $request->input('quantity') *  $request->input('sell_price');
           $invoice->expiry_date = $request->input('expiry_date');
           $invoice->paid_date = $currentDate;
           $invoice->status = 0;
           $invoice->save();
           if($invoice){
    return redirect('/invoices')->with('message','Request has sent to supplier');  

           }
    }
    public function payinvoice($id){
        $invoice = Invoice::find($id);
        $invoice->status = 1;
        $invoice->save();
        if($invoice){
            return view('dashboard.payinvoice')->with('invoice',$invoice);

        }
    }
    public function pay(Request $request){
        $this->validate($request,[
            'date' => 'required|date'
             ]);
    $store = Pharmacy_store::where('medecine_name',$request->input('medecine_name'))->update(['qty'=>$request->input('qty'),'price'=>$request->input('price'),'expiry_date'=>$request->input('expiry_date'),'amount'=>$request->input('total'),'date_received'=>$request->input('date')]);
    if($store){
        return redirect('/invoices')->with('message','Store has been updated successfully');  

    }
    }
}
