
@extends('dashboard.template')
@section('content')
@include('dashboard.sidebar')
<div class="body-wrapper">
<header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
         
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
           
            </ul>
          </div>
        </nav>
      </header>
<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row justify-content-center">
             
              <div class="col-lg-12 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold  text-center">Patient Details</h5>
<div class="card-body mt-2">
        
            <div class="row">

           <div class="mb-3 col-5">
            <label>Patient Name</label>
            <input type="text" class="form-control" readonly name="name"  value="{{$patient->name}}" aria-label="Email" aria-describedby="email-addon">
            <input type="hidden" class="form-control" readonly name="patient_id"  value="{{$patient->id}}" aria-label="Email" aria-describedby="email-addon">
           
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
              <h5 class="text-capitalize">Prescribed Medecine Details</h5>
            </div>
<div class="card-body bg-white shadow-lg px-0 pt-0 pb-2">
<form  method="post" action="{{url('/issuemedecine')}}"  enctype="multipart/form-data">

              <div class="table-responsive p-0">
              {{csrf_field()}}
                <table class="table text-nowrap mb-0 align-middle">

                    <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
                  <thead>
                    <tr class="text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medecine Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medecine Quantity</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expiry Date</th> -->
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                        <tr class="text-center">
                        <td>
                        {{$patient->name}}
                          </td>
                          <td>{{$sale_order->medecine_name}}
                          </td>
                           <td>{{$sale_order->qty}}</td>
                          <td>{{$sale_order->price}}</td>
                          <td>
                          </td>
                        </tr>
                       

                  </tbody>
                 
                </table>
                <div class="text-right float-end mb-4">
                    <h6 class="m-4 text-right">Total:${{$sale_order->amount}}</h6>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn btn-sm max-width-500 bg-gradient-dark w-100 my-4 mb-2">Issue Medecine</button>
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