<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Store;
use App\Models\Utilisateur;
use App\Models\Patient;
use App\Models\Pharmacy_info;
use App\Models\Invoice;
use App\Models\Expense;
use App\Models\Sale;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

use Session;


class AdminController extends Controller
{
    //
    public function index(){
        // $nouvelles = Nouvelle::count();
        // $blogs = Blog::count();
        // $documents = Document::count();
         $patients = Patient::count();
        $currentDate = date('Y-m-d');
        $expired = Store::whereDate('expiry_date','<=',$currentDate)->count();
        $medecines = Store::count();
        $pharmacy_info = Pharmacy_info::first();
        $patients2 = Patient::where('status','=','0')->get();
        $totalsales = Sale::sum('total');
        $todaysales = Sale::whereDate('time',$currentDate)->sum('total');
        $totalexpenses =  Expense::sum('amount');
        $data = array();
        if(Session::has('utiliseur')){
            $data = Utilisateur::where('id','=',Session::get('utiliseur'))->first();
        }
        return view('dashboard.index',compact('data'))->with('expired',$expired)->with('medecines',$medecines)->with('patients',$patients)->with('pharmacy_info',$pharmacy_info)->with('patients2',$patients2)->with('totalsales',$totalsales)->with('todaysales',$todaysales)->with('totalexpenses',$totalexpenses);       
    }
    public function expiredmedecine(){
        $currentDate = date('Y-m-d');
        $expired = Store::whereDate('expiry_date','<=',$currentDate)->get();
        return view('dashboard.expired')->with('expired',$expired);

    }
    public function login(){
        return view('dashboard.login');
    }
    public function register(){
        return view('dashboard.register');
    }
    public function createaccount(Request $request){
        // print($request);
        $this->validate($request,[
                                'email' =>'email|required|unique:utilisateurs',
                                'name'=>'required',
                                'password'=>'required|min:4']);
         $utiliseur = new Utilisateur();
         $utiliseur->name = $request->input('name');
         $utiliseur->email = $request->input('email');
         $utiliseur->password = bcrypt($request->input('password'));
         $utiliseur->status = 1;


         $utiliseur->save();
         $pharmacy_info = Pharmacy_info::count();
         if($pharmacy_info <= 0){
            return redirect('/ajouterpharmacy_info');

         }else{
            return redirect('/')->with('message','Account created successfully');

         }

    }
    public function accedercompte(Request $request){
        $this->validate($request,['email' =>'email|required','password'=>'required']);
        $utiliseur = Utilisateur::where('email',$request->input('email'))->first();
        if($utiliseur){
            if(Hash::check($request->input('password'), $utiliseur->password)){
                Session::put('utiliseur',$utiliseur->id); 
                return redirect('/dashboard');
            }else{
                return back()->with('error','You are not authenticated');

            }
        }else{
            return back()->with('error','You do not have an account');
        }


    }
    
    public function deconnecter(){
        if(Session::has('utiliseur')){
            Session::pull('utiliseur');
            return redirect('/');

        }

    }
}
