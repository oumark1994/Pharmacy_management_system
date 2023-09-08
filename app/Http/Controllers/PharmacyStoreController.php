<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy_store;


class PharmacyStoreController extends Controller
{
    //
    public function medecines(){
        $medecines = Pharmacy_store::get();
        // echo($pharmacy_info);

        return view('dashboard.stocks')->with('medecines',$medecines);
    }
    public function getmedecinebyid(Request $request){
        $medecine_id = Pharmacy_store::where('id',$request->input('medecine_id'))->get();
        // return dd($subcategories);
        if (count($medecine_id) > 0) {
            return response()->json($medecine_id);
        }
    }
  
}
