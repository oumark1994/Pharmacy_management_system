
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
                    <a class="btn btn-outline-primary float-end mr-2" href="{{url('/addsupplier')}}">Add Supplier</a>
                  <thead>
                    <tr class=" text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Supplier Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone Number</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($suppliers as $supplier)
                        <tr class="text-center">
                        <td>{{$supplier->id}}</td>
                        <td>{{$supplier->name}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->phone}}</td>

                          <td>
                          <button class="btn btn-outline-primary" onclick="window.location='{{url('/editsupplier/'.$supplier->id)}}'">Edit</button>
                          <a class="btn btn-outline-danger" id="delete" href="{{url('/deletesupplier/'.$supplier->id)}}">Delete</a>
    
                          </td>
                        </tr>
                        @endforeach
        
                
             
                 
                  </tbody>
                  </div>
            </div>
          </div>
        </div>
         

</div>
</div>
@endsection