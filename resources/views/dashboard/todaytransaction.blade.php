
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
                <h5 class="card-title fw-semibold mb-4 text-center">Today's Sales</h5>
              
             
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invoice No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Patient Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medecine Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Qty</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>

                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($todaytransaction as $sale)
                        <tr>
                          <td><img width="60px" height="35px" src="/storage/blog_images/{{$blog->blog_image}}"/></td>
                          <td>#{{$sale->invocie}}</td>
                          <td>{{$sale->customer}}</td>
                          <td>{{$sale->medecine_name}}</td>
                          <td>{{$sale->price}}</td>
                          <td>{{$sale->qty}}</td>
                          <td>{{$sale->total}}</td>

                        </tr>

                        @endforeach
        <tr class="float-end">
            <td>
           <h3 class="mt-5">Total : ${{$todaytotal}} </h3>
           </td>
        </tr>
                
             
                 
                  </tbody>
                </table>
              </div>
       
              </div>
            </div>
          </div>
        </div>
         

</div>
</div>
@endsection