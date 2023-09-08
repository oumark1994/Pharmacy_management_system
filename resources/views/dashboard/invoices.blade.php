
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
        <div class="row">
             
              <div class="col-lg-12 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Purchase Orders</h5>
              <div class="table-responsive p-0">
                <table class="table text-nowrap mb-0 align-middle ">
                <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
                <!-- <a class="btn btn-outline-warning float-end me-5" href="{{url('/receivemedecine')}}">Receive Medecine</a> -->
                  <thead>
                    <tr class="text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S.N</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Purchase Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medecine Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($invoices as $invoice)
                        <tr class="text-center">
                          <td>{{$invoice->id}}</td>
                          <td >{{$invoice->invoice_id}}</td>
                      
                          <td>{{$invoice->medecine_name}}</td>
                          <td>{{$invoice->price}}</td>
                          @if($invoice->status == 0)
                          <td class="text-danger">Unpaid</td>
                          @else
                          <td class="">Paid</td>
                          @endif
                          <td>
                          @if($invoice->status == 0)
                          <a class="btn btn-outline-primary"  href="{{url('/payinvoice/'.$invoice->id)}}">Pay</a>
                          @else
                          <a class="btn btn-outline-primary"  href="{{url('/payinvoice/'.$invoice->id)}}">Paid</a>
                        @endif
                          </td>
                        </tr>
                        @endforeach
        
                
             
                 
                  </tbody>
                </table>
                </div>
            </div>
          </div>
        </div>
         

</div>
</div>
@endsection