
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
                <h5 class="card-title fw-semibold mb-4 text-center">Medecines</h5>
              
                @if($medecines)
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                  <a class="btn btn-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a>
                <a class="btn btn-secondary float-end me-5" href="{{url('/receivemedecine')}}">Receive Medecine</a>
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Medecine Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Available Stock</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Capacity</h6>
                          </th> <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Price</h6>
                        </th>
                        </th> <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Date Received</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Action</h6>
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                   
                      @foreach($medecines as $medecine)
                      <tr class="text-center">
                          <td>{{$medecine->medecine_name}}</td>
                          @if($medecine->qty <= 5)
                          <td class="bg-danger">{{$medecine->qty}}</td>
                          @else
                          <td>{{$medecine->qty}}</td>
                          @endif
                          <td>{{$medecine->capacity}}</td>
                          <td>{{$medecine->price}}</td>
                          <td>{{$medecine->date_received}}</td>
                          <td>
                          <a class="btn btn-outline-secondary"  href="{{url('/editmediecine/'.$medecine->id)}}">Edit</a>
                          <a class="btn btn-outline-danger" id="delete" href="{{url('/deletemedecine/'.$medecine->id)}}">Delete</a>
                         
                          </td>
                        </tr>
                        @endforeach
                      
                    
                     
                   
                    </tbody>
                  </table>
                </div>
                @else 
                <h3>No Medecine Yet</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
         

</div>
</div>


    
      
  @endsection