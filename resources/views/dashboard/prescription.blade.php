@extends('dashboard.template')
@section('content')
@include('dashboard.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container py-4">
    <div class="row justify-content-center">
<div class="col-md-12">
<div class="card-header text-center pt-4">
              <h5>Patient Particular</h5>
            </div>
<div class="card-body bg-white shadow-lg mt-5">
        
            <div class="row p-3 justify-content-center">

           <div class="mb-3 col-5">
            <label>Patient Name</label>
            <input type="text" class="form-control" readonly name="name"  value="{{$patient->name}}" aria-label="Email" aria-describedby="email-addon">
           
           </div>
           <div class="mb-3 col-3">
            <label>Patient No</label>
 <input type="text" class="form-control" readonly name="patient_no"   value="{{$patient->patient_no}}" aria-label="Email" aria-describedby="email-addon">
           
           </div>
         
           <div class="mb-3 col-3">
           <label>Patient DOB</label>

 <input type="text" class="form-control" readonly name="dob"   value="{{$patient->dob}}" aria-label="Email" aria-describedby="email-addon">
           
           </div>
                 </div>

  
      </div>
</div>
<div class="card mt-5 p-5">
<div class="card-header text-center pt-4">
              <h5 class="text-capitalize">Add prescribed medecine</h5>
            </div>
<div class="card-body bg-white shadow-lg px-0 pt-0 pb-2">
<form role="form text-left" method="post" action="{{url('/issuemedecine')}}"  enctype="multipart/form-data">

<div class="table-responsive p-0">
     {{csrf_field()}}
   <table class="table align-items-center mb-0 ">
  
</tr>
                    <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
                    <tr class="text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medecine Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medecine Type</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Available</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expiry Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  <tbody id="tbody">
                    <tr>  <select class="form-control" name="medecine_id" id="medecine_id">
      <option selected  disabled class="text-center">Select Medecine</option>

      @foreach ($medecines as $medecine)

        <option class="form-control text-center" value="{{$medecine->id}}">{{$medecine->medecine_name}}</option>
        @endforeach

      </select>
</tr>
   
       <input type="hidden" class="form-control"  name="patient_id"  value="{{$patient->id}}" aria-label="Email" aria-describedby="email-addon">

                    
                  </tbody>
                
                </table>
                <div class="text-center">
                  <button type="submit" class="btn btn-sm max-width-500 bg-primary text-white w-100 my-4 mb-2">Next</button>
                </div>
              </form>
              
              </div>
               
            </div>
            </div>   

 </div> 
</div>

</div>
</div>
@endsection