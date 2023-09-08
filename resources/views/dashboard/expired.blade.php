
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
                <h5 class="card-title fw-semibold mb-4 text-center">Expired Medecines</h5>
              <div class="table-responsive p-0">
                <table class="table text-nowrap mb-0 align-middle ">
                  <thead>
                    <tr class="text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Capacity</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Received</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Expiry Date</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($expired as $expire)
                        <tr class="text-center">
                          <td>{{$expire->medecine_name}}</td>
                          <td>{{$expire->capacity}}</td>
                          <td>{{$expire->price}}</td>
                          <td>{{$expire->date_received}}</td> 
                          <td>{{$expire->expiry_date}}</td>
                          <td>
                          <a class="btn btn-outline-info" id="delete" href="{{url('/confirm/'.$expire->id)}}">Contirm</a>
                         
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