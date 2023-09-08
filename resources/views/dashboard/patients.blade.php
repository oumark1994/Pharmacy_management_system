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
                <h5 class="card-title fw-semibold mb-4 text-center">Patients</h5>
              
                @if($patients)
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                  <a class="btn btn-primary float-end me-5" href="{{url('/addpatient')}}">Add  Patient</a>
                    <thead class="text-dark fs-4">
                      <tr>
                      <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Patient N0</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Patient Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Date of Birth</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Address</h6>
                          </th>
                      
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold text-center mb-0">Action</h6>
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                   
                      @foreach($patients as $patient)
                      <tr class="text-center">
                          <td>{{$patient->patient_no}}</td>
                        
                          <td >{{$patient->name}}</td>
                         
                          <td>{{$patient->dob}}</td>
                          <td>{{$patient->address}}</td>
                          <td>
                          <a class="btn btn-outline-secondary"  href="{{url('/editpatient/'.$patient->id)}}">Edit</a>
                          <a class="btn btn-outline-danger" id="delete" href="{{url('/deletepatient/'.$patient->id)}}">Delete</a>
                         
                          </td>
                        </tr>
                        @endforeach
                      
                    
                     
                   
                    </tbody>
                  </table>
                </div>
                @else 
                <h3>No Patient Yet</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
         

</div>
</div>


    
      
  @endsection