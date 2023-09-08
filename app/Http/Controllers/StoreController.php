<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Pharmacy_store;
use App\Models\Expense;

class StoreController extends Controller
{
    //
    public function medecines(){
        $medecines = Pharmacy_store::get();
        // echo($pharmacy_info);

        return view('dashboard.medecinelists')->with('medecines',$medecines);
    }
    public function addmedecine(){
        // $pharmacy_info = Pharmacy_info::count();
        return view('dashboard.ajoutermedecine');   
    }
    public function savemedecine(Request $request){
        $this->validate($request,[
            'medecine_name'=>'required',
            'capacity'=>'required',
            'type'=>'required',
            'price'=>'required|integer',
            'date_received'=>'required',
            'qty'=>'required|integer',
            'stock_out'=>'required|integer',
            'expiry_date'=>'required',
            'amount'=>'required|integer',
            
           ]);
        // print($request->input('product_category'));
      
        $medecine = new Store();
        $medecine->medecine_name = $request->input('medecine_name');
        $medecine->capacity = $request->input('capacity');
        $medecine->type = $request->input('type');
        $medecine->price = $request->input('price');
        $medecine->date_received = $request->input('date_received');
        $medecine->qty = $request->input('qty');
        $medecine->stock_out = $request->input('stock_out');
        $medecine->expiry_date = $request->input('expiry_date');
        $medecine->amount = $request->input('amount');
        $medecine->save();
        if($medecine){
            $medecine_stock = new Pharmacy_store();
            $medecine_stock->medecine_name = $request->input('medecine_name');
            $medecine_stock->capacity = $request->input('capacity');
            $medecine_stock->type = $request->input('type');
            $medecine_stock->price = $request->input('price');
            $medecine_stock->date_received = $request->input('date_received');
            $medecine_stock->qty = $request->input('qty');
            $medecine_stock->stock_out = $request->input('stock_out');
            $medecine_stock->expiry_date = $request->input('expiry_date');
            $medecine_stock->amount = $request->input('amount');
            $medecine_stock->save();
            if($medecine_stock){
        return redirect('/medecines')->with("message","Medecine has been added successfully!");

             }

        }

    }
    public function updatemedecine(Request $request){
        $this->validate($request,[
            'medecine_name' => 'required',
            'capacity'=>'required',
            'type'=>'required',
            'price'=>'required|integer',
            'date_received'=>'required|date',
            'qty'=>'required|integer',
            'stock_out'=>'required|integer',
            'expiry_date'=>'required|date',
            'amount'=>'required|integer',
            
           ]);
        // print($request->input('product_category'));
      
        $medecine = Store::find($request->input('id'));
        $medecine->medecine_name = $request->input('medecine_name');
        $medecine->capacity = $request->input('capacity');
        $medecine->type = $request->input('type');
        $medecine->price = $request->input('price');
        $medecine->date_received = $request->input('date_received');
        $medecine->qty = $request->input('qty');
        $medecine->stock_out = $request->input('stock_out');
        $medecine->expiry_date = $request->input('expiry_date');
        $medecine->amount = $request->input('amount');
        $medecine->save();
        if($medecine){
            $medecine = Store::find($request->input('id'));
            $medecine->medecine_name = $request->input('medecine_name');
            $medecine->capacity = $request->input('capacity');
            $medecine->type = $request->input('type');
            $medecine->price = $request->input('price');
            $medecine->date_received = $request->input('date_received');
            $medecine->qty = $request->input('qty');
            $medecine->stock_out = $request->input('stock_out');
            $medecine->expiry_date = $request->input('expiry_date');
            $medecine->amount = $request->input('amount');
            if($medecine){
        return redirect('/medecines')->with("message","Medecine has been updated  successfully !");

             }

        }

    }
    public function pharmacy_infos(){
        $pharmacy_infos = pharmacy_info::get();
        return view('dashboard.pharmacy_infos')->with('pharmacy_infos',$pharmacy_infos);
    }
    public function editmediecine($id){
        $medecine = Pharmacy_store::find($id);
        return view('dashboard.editmedecine')->with('medecine',$medecine);

    }
    public function viewmedecine($id){
        $medecine = Pharmacy_store::find($id);
        return view('dashboard.viewmedecine')->with('medecine',$medecine);

    }
    public function confirm($id){
        $medecine = Pharmacy_store::find($id);
        return view('dashboard.deleteexpired')->with('medecine',$medecine);
    }
    public function updateexpired(Request $request){
        $this->validate($request,[
            'status' => 'required',
            'expired_qty'=>'required',
            'expired_date'=>'required' 
           ]);
         $medecine = Pharmacy_store::find($request->input('medecine_id'));
         $medecine->qty = $request->input('qty') - $request->input('expired_qty');
         $medecine->amount = $request->input('amount') - $request->input('price') * $request->input('expired_qty');
         $medecine->save();
         if($medecine){
            $expense = new Expense();
            $expense->medecine_name = $request->input('medecine_name');
            $expense->price = $medecine->price;
            $expense->qty = $request->input('expired_qty');
            $expense->expiry_date = $request->input('expired_date');
            $expense->amount = $medecine->price * $request->input('expired_qty');
            $expense->status = $request->input('status');
            $expense->save();
            if($expense){
                return redirect('/expiredmedecine')->with("message","Expired medecine has been remove and expenses generated!");

            }

            
         }

    }
   
    public function deletemedecine($id){
        $medecine = Store::find($id);
        $medecine->delete();
        return redirect('/medecines')->with('message','Medecine has been deleted');
        }
    public function expenses(){
        $expenses = Expense::where('status','expired')->get();
        $total = Expense::where('status','=','expired')->sum('amount');
        $damages = Expense::where('status','damaged')->get();
        $damagetotal = Expense::where('status','damaged')->sum('amount');
        
        return view('dashboard.expenses')->with('expenses',$expenses)->with('total',$total)->with('damages',$damages)->with('damagetotal',$damagetotal);
    }
}
