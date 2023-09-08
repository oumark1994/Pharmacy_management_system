
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
                <h5 class="card-title fw-semibold  text-center">Payment Summary</h5>
<div class="card-body mt-2">
              <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">

                  <thead>
                    <tr class="text-center">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Patient Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date of Birth</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>
                       Patient No:{{$patient->patient_no}}
                      </td>
                      <td>
                      {{$patient->name}}
                      </td>
                      
                      <td class="align-middle">
                      {{$patient->dob}}
                      </td>
                
                    </tr>
                    <tr class="text-center mt-3">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invoice</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medecine Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SubTotal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Mode</th>
                    </tr>
                    @foreach($sales_summary as $ss)
                    <tr class="text-center mt-4">
                    <td>{{$ss->invoice}}</td>
                    <td>{{$ss->medecine_name}}</td>
                    <td>{{$ss->qty}}</td>
                    <td>{{$ss->price}}</td>
                    <td>{{$ss->total}}</td>
                    <td>{{$ss->payment_mode}}</td> 

            </tr>
            @endforeach
            <tr>
                <td>
            <h4 class="ms-5 my-3">Total:{{$total}}$
</td>
            </tr>
            
           
      
                </tbody>
                </table>
               
              </div>
              <div class="text-center">
              <a target="_blank" class="btn btn-primary btn-lg" href="{{url('/invoice',['invoice'=>$invoice,'patient'=>$patient->id])}}">Print Receipt</a>

              </div>
            </div>
          </div>
        </div>
        
     
      
      </div>
     
     
    </div>
    </div>
    </div>
  @endsection