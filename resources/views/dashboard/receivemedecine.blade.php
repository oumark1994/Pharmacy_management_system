
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
                <h5 class="card-title fw-semibold  text-center">Medecines</h5>
<div class="card-body mt-2">
              <div class="table-responsive p-0">
                <table class="table text-nowrap mb-0 align-middle ">
                  <thead>
                    <tr class="text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Available</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expiry Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($medecines as $medecine)
                        <tr class="text-center">
                          <td>{{$medecine->medecine_name}}</td>
                          @if($medecine->qty <= 5)
                          <td class="bg-danger">{{$medecine->qty}}</td>
                          @else
                          <td>{{$medecine->qty}}</td>
                          @endif
                          <td>{{$medecine->price}}</td>
                          <td>{{$medecine->expiry_date}}</td>
                          <td>
                          <a class="btn btn-outline-primary"  href="{{url('/receive/'.$medecine->id)}}">Receive</a>
                        
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
</div>
</div>
@endsection