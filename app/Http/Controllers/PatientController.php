<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Str;
use App\Models\Pharmacy_store;
use App\Models\Hello;
use App\Models\Sale;
use Session;

class PatientController extends Controller
{
    //
    public function patients(){
        $patients = Patient::get();
        // echo($pharmacy_info);

        return view('dashboard.patients')->with('patients',$patients);
    }
    public function addpatient(){
        // $pharmacy_info = Pharmacy_info::count();
        return view('dashboard.ajouterpatient');   
    }
    public function savepatient(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'phone_number'=>'required',
             ]);
        // print($request->input('product_category'));
        $patient_Number = random_int(100000, 999999);
        $patient = new Patient();
        $patient->patient_no = $patient_Number;
        $patient->name = $request->input('name');
        $patient->address = $request->input('address');
        $patient->phone_number = $request->input('phone_number');
        $patient->dob = $request->input('dob');
        $patient->status = 0;
        $patient->patient_condition = "yes";
        $patient->dob = $request->input('dob');
        $patient->patient_condition = 0;
        $patient->patient_condition = 0;
        $patient->referal_status = 0;
        $patient->save();
        if($patient){
        return redirect('/patients')->with("message","patient has been added successfully!");

             }

        

    }
    public function updatepatient(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'phone_number'=>'required',
             ]);
        // print($request->input('product_category'));
      
        $patient = Patient::find($request->input('id'));
        $patient->name = $request->input('name');
        $patient->patient_no = floor(time()-999999999);
        $patient->address = $request->input('address');
        $patient->dob = $request->input('dob');
        $patient->status = 0;
        $patient->patient_condition = "yes";
        $patient->dob = $request->input('dob');
        $patient->patient_condition = 0;
        $patient->phone_number = $request->input('phone_number');
        $patient->save();
        if($patient){
        return redirect('/patients')->with("message","patient has been updated successfully!");

             }

    }
    public function issuemedecine(Request $request){
        $currentDate = date('Y-m-d');

        // $this->validate($request,[
        //     'quantity'=>'required|integer',
        //      ]);
        $patient = Patient::find($request->input('patient_id'));
  
foreach($request->medecine_id as $key=>$medecine_id)
{
    if($request->qty[$key] <= 0){
        return back()->with('error','The medecine is out of Stock');
    }
    elseif($request->qty[$key] < $request->quantity[$key]){
        return back()->with('error','The quantity requested exceeds the pharmacy stock available');
    }elseif($request->qty[$key] > 0){ 
    $saleOrder = new Hello();
    $saleOrder->medecine_id = $medecine_id;
    $saleOrder->medecine_name = $request->medecine_name[$key];
    $saleOrder->qty = $request->quantity[$key];
    $saleOrder->price = $request->price[$key];
    $saleOrder->patient_no = $patient->patient_no;
    $saleOrder->patient_name = $patient->name;
    $saleOrder->status = 0;
    $saleOrder->amount = $request->quantity[$key] * $request->price[$key];
    $saleOrder->date = $currentDate; 

    $store = Pharmacy_store::where('medecine_name',$request->medecine_name[$key])->update(['qty'=>$request->qty[$key]-$request->quantity[$key]]);     
    $saleOrder->save();

}


        }
        if($saleOrder){
    
            //update store;
        
            $total = Hello::where('patient_name',$patient->name)->where('created_at',$saleOrder->created_at)->sum('amount');     
        
            $newsaleorders = Hello::where('patient_name',$patient->name)->where('created_at',$saleOrder->created_at)->get();
        
            return view('dashboard.issuemedecine')->with("newsaleorders",$newsaleorders)->with('total',$total)->with('patient',$patient)->with('message','Order has been made successfully');
        }
    }
  
    public function editpatient($id){
        $patient = Patient::find($id);
        return view('dashboard.editpatient')->with('patient',$patient);

    }
    public function prescription($id){
        $patient = Patient::find($id);
        $patient->status = 1;
        $patient->save();
        $medecines = Pharmacy_store::get();

        if($patient){
            return view('dashboard.prescription')->with('patient',$patient)->with('medecines',$medecines);

        }

    }
    public function deletepatient($id){
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/patients')->with('message','The patient has been deleted');    }
}
