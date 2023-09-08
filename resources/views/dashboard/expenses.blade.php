
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
                <h5 class="card-title fw-semibold mb-4 text-center">List of expired medecines</h5>
              <div class="table-responsive p-0">
                <table class="table text-nowrap mb-0 align-middle ">
                <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
                <!-- <a class="btn btn-outline-warning float-end me-5" href="{{url('/receivemedecine')}}">Receive Medecine</a> -->
                  <thead>
                    <tr class="text-center text-primary ">
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">S.N</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Medecine Name</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Date Expired</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>

                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($expenses as $expense)
                        <tr class="text-center">
                          <td>{{$expense->id}}</td>
                          <td>{{$expense->medecine_name}}</td>
                          <td>{{$expense->expiry_date}}</td>
                          <td>{{$expense->qty}}</td>
                          <td>{{$expense->amount}}</td>
                        </tr>
                        
                        @endforeach
                        <tr>
                            <td rowspan="5"
                             class="float-end">Total : ${{$total}}</td>
                        </tr>
        
                
        
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mt-5">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <h5 class="card-title fw-semibold mb-4 text-center">List of Damaged Medecine</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table text-nowrap mb-0 align-middle ">
                <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
                <!-- <a class="btn btn-outline-warning float-end me-5" href="{{url('/receivemedecine')}}">Receive Medecine</a> -->
                  <thead>
                    <tr class="text-center ">
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">S.N</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Medecine Name</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Quantity Damaged</th>
                      <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 ps-2">Price</th>

                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($damages)
                    @foreach($damages as $damage)
                        <tr class="text-center">
                          <td>{{$damage->id}}</td>
                          <td>{{$damage->medecine_name}}</td>
                          <td>{{$damage->qty}}</td>
                          <td>{{$damage->price}}</td>
                          <td>{{$damage->amount}}</td>
                        </tr>
                     @endforeach
                        <tr>
                            <td rowspan="5"
                             class="float-end">Total : ${{$damagetotal}}</td>
                        </tr>
                    @else
                        <h1>No damage medecine found </h1>
                    
                    @endif

        
                  </tbody>
                  </div>
            </div>
          </div>
        </div>
         

</div>
</div>
@endsection