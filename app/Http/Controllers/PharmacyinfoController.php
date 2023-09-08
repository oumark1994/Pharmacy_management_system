<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy_info;


class PharmacyinfoController extends Controller
{
    public function pharmacy_info(){
        $pharmacy_info = Pharmacy_info::get();
        // echo($pharmacy_info);

        return view('dashboard.pharmacy_info')->with('pharmacy_info',$pharmacy_info);
    }
    public function ajouterpharmacy_info(){
        $pharmacy_info = Pharmacy_info::count();
        if($pharmacy_info > 0){
            return redirect('/pharmacy_info');
        }else{
            return view('dashboard.ajouterpharmacy_info');

        }
        

       
    }
    public function sauverpharmacy_info(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'opening_date'=>'required|date',
            'closing_date'=>'required|date',
            'opening_balance'=>'required',
            'closing_balance'=>'required',
            
           ]);
        // print($request->input('product_category'));
      
        $pharmacy_info = new Pharmacy_info();
        $pharmacy_info->name = $request->input('name');
        $pharmacy_info->email = $request->input('email');
        $pharmacy_info->address = $request->input('address');
        $pharmacy_info->phone = $request->input('phone');
        $pharmacy_info->opening_date = $request->input('opening_date');
        $pharmacy_info->closing_date = $request->input('closing_date');
        $pharmacy_info->opening_balance = $request->input('opening_balance');
        $pharmacy_info->closing_balance = $request->input('closing_balance');
        $pharmacy_info->save();
        return redirect('/dashboard')->with("message","Pharmacy info has been added successfully!");

    }
    public function pharmacy_infos(){
        $pharmacy_infos = pharmacy_info::get();
        return view('dashboard.pharmacy_infos')->with('pharmacy_infos',$pharmacy_infos);
    }
    public function editpharmacy_info($id){
        $pharmacy_info = Pharmacy_info::find($id);
        return view('dashboard.editpharmacy_info')->with('pharmacy_info',$pharmacy_info);

    }
    public function updatepharmacy_info(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'opening_date'=>'required|date',
            'closing_date'=>'required|date',
            'opening_balance'=>'required',
            'closing_balance'=>'required',
            
           ]);
        // print($request->input('product_category'));
        $pharmacy_info =  Pharmacy_info::find($request->input('id'));
        $pharmacy_info->name = $request->input('name');
        $pharmacy_info->email = $request->input('email');
        $pharmacy_info->address = $request->input('address');
        $pharmacy_info->phone = $request->input('phone');
        $pharmacy_info->opening_date = $request->input('opening_date');
        $pharmacy_info->closing_date = $request->input('closing_date');
        $pharmacy_info->opening_balance = $request->input('opening_balance');
        $pharmacy_info->closing_balance = $request->input('closing_balance');
        $pharmacy_info->save();

      
        return redirect('/pharmacy_info')->with('message','Pharmacy info has updated successfully');

    }
    public function suprimerpharmacy_info($id){
        $pharmacy_info = pharmacy_info::find($id);
        if($pharmacy_info->pharmacy_info_image != 'noimage.jpg'){
            Storage::delete('public/pharmacy_info_images/'.$pharmacy_info->pharmacy_info_image);
        }
        $pharmacy_info->delete();
        return redirect('/pharmacy_infos')->with('message','Pharmacy info has been deleted successfully');    }
}
