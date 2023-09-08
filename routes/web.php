<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Admin Routes
Route::get('/dashboard','App\Http\Controllers\AdminController@index')->middleware('isLoggedIn');
Route::get('/','App\Http\Controllers\AdminController@login');
Route::get('/enregistrer','App\Http\Controllers\AdminController@register');
Route::get('/deconnecter','App\Http\Controllers\AdminController@deconnecter');
Route::post('/signup','App\Http\Controllers\AdminController@createaccount')->name('signup');
Route::post('/signin','App\Http\Controllers\AdminController@accedercompte')->name('signin');
Route::get('/expiredmedecine','App\Http\Controllers\AdminController@expiredmedecine')->middleware('isLoggedIn');


//pharmacy Info Routes
Route::get('/stocks','App\Http\Controllers\PharmacyStoreController@medecines')->middleware('isLoggedIn');
Route::get('/addmedecine','App\Http\Controllers\StoreController@addmedecine')->middleware('isLoggedIn');
Route::get('/medecines','App\Http\Controllers\StoreController@medecines')->middleware('isLoggedIn');
Route::post('/savemedecine','App\Http\Controllers\StoreController@savemedecine')->middleware('isLoggedIn');;
Route::post('/updatemedecine','App\Http\Controllers\StoreController@updatemedecine')->middleware('isLoggedIn');
Route::get('/editmediecine/{id}','App\Http\Controllers\StoreController@editmediecine')->middleware('isLoggedIn');
Route::get('/viewmedecine/{id}','App\Http\Controllers\StoreController@viewmedecine')->middleware('isLoggedIn');
Route::get('/deletemedecine/{id}','App\Http\Controllers\StoreController@deletemedecine')->middleware('isLoggedIn');
Route::get('/confirm/{id}','App\Http\Controllers\StoreController@confirm')->middleware('isLoggedIn');
Route::post('/updateexpired','App\Http\Controllers\StoreController@updateexpired')->middleware('isLoggedIn');
Route::get('/expenses','App\Http\Controllers\StoreController@expenses')->middleware('isLoggedIn');
//sales
Route::get('/transactions','App\Http\Controllers\SalesController@transactions')->middleware('isLoggedIn');
Route::get('/todaytransaction','App\Http\Controllers\SalesController@todaytransaction')->middleware('isLoggedIn');

//patients
Route::get('/patients','App\Http\Controllers\PatientController@patients')->middleware('isLoggedIn');
Route::get('/prescription/{id}','App\Http\Controllers\PatientController@prescription')->middleware('isLoggedIn');
Route::get('/addpatient','App\Http\Controllers\PatientController@addpatient')->middleware('isLoggedIn');
Route::post('/savepatient','App\Http\Controllers\PatientController@savepatient')->middleware('isLoggedIn');;
Route::post('/updatepatient','App\Http\Controllers\PatientController@updatepatient')->middleware('isLoggedIn');
Route::post('/issuemedecine','App\Http\Controllers\PatientController@issuemedecine')->middleware('isLoggedIn');
Route::get('/editpatient/{id}','App\Http\Controllers\PatientController@editpatient')->middleware('isLoggedIn');
Route::get('/deletepatient/{id}','App\Http\Controllers\PatientController@deletepatient')->middleware('isLoggedIn');
//medecines
Route::get('/ajouterpharmacy_info','App\Http\Controllers\PharmacyinfoController@ajouterpharmacy_info')->middleware('isLoggedIn');
Route::get('/pharmacy_info','App\Http\Controllers\PharmacyinfoController@pharmacy_info')->middleware('isLoggedIn');
Route::post('/sauverpharmacy_info','App\Http\Controllers\PharmacyinfoController@sauverpharmacy_info')->middleware('isLoggedIn');;
Route::post('/updatepharmacy_info','App\Http\Controllers\PharmacyinfoController@updatepharmacy_info')->middleware('isLoggedIn');
Route::get('/editpharmacy_info/{id}','App\Http\Controllers\PharmacyinfoController@editpharmacy_info')->middleware('isLoggedIn');
Route::get('/deletepharmacy_info/{id}','App\Http\Controllers\PharmacyinfoController@deletepharmacy_info')->middleware('isLoggedIn');
Route::get('/getmedecinebyid','App\Http\Controllers\PharmacyStoreController@getmedecinebyid')->name('getmedecinebyid')->middleware('isLoggedIn');
//medecines
Route::get('/addsupplier','App\Http\Controllers\SupplierController@ajoutersupplier')->middleware('isLoggedIn');
Route::get('/suppliers','App\Http\Controllers\SupplierController@suppliers')->middleware('isLoggedIn');
Route::post('/savesupplier','App\Http\Controllers\SupplierController@savesupplier')->middleware('isLoggedIn');;
Route::post('/updatesupplier','App\Http\Controllers\SupplierController@updatesupplier')->middleware('isLoggedIn');
Route::get('/editsupplier/{id}','App\Http\Controllers\SupplierController@editsupplier')->middleware('isLoggedIn');
Route::get('/deletesupplier/{id}','App\Http\Controllers\SupplierController@deletesupplier')->middleware('isLoggedIn');
Route::get('/supplier','App\Http\Controllers\SupplierController@deletesupplier')->middleware('isLoggedIn');
Route::get('/receivemedecine','App\Http\Controllers\SupplierController@receivemedecine')->middleware('isLoggedIn');
Route::get('/receive/{id}','App\Http\Controllers\SupplierController@receive')->middleware('isLoggedIn');
Route::post('sendrequest','App\Http\Controllers\SupplierController@sendrequest')->middleware('isLoggedIn');
Route::get('invoices','App\Http\Controllers\SupplierController@invoices')->middleware('isLoggedIn');
Route::get('payinvoice/{id}','App\Http\Controllers\SupplierController@payinvoice')->middleware('isLoggedIn');
Route::post('pay','App\Http\Controllers\SupplierController@pay')->middleware('isLoggedIn');
//sales


Route::post('/checkout','App\Http\Controllers\SalesController@checkout')->middleware('isLoggedIn');
Route::post('/salesummary','App\Http\Controllers\SalesController@salesummary')->middleware('isLoggedIn');
Route::get('/invoice/{id}/{patient}','App\Http\Controllers\SalesController@invoice')->middleware('isLoggedIn');




