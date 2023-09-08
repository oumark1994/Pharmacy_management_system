
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
             
              <div class="col-lg-8 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Pharmacy General Info</h5>
              <div class="timeline timeline-one-side pl-4">
                @if($pharmacy_info)
                @foreach($pharmacy_info as $pharmacy_info)
                <div class="timeline-block mb-3 ">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-bell-55 text-success text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Name:{{$pharmacy_info->name}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-html5 text-danger text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Email : {{$pharmacy_info->email}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-cart text-info text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Address : {{$pharmacy_info->address}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-credit-card text-warning text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Phone : {{$pharmacy_info->phone}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-key-25 text-primary text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Open Day : {{$pharmacy_info->opening_date}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p> -->
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-money-coins text-dark text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Closing Day :  {{$pharmacy_info->closing_date}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
                  </div>
                  <div class="timeline-content">
                    <h6 class="text-dark my-4 text-center">Opening Balance :  {{$pharmacy_info->opening_balance}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
                    
                  </div>
                  <div class="timeline-content text-center">
                    <h6 class="text-dark my-4 text-center">Closing Balance :  {{$pharmacy_info->closing_balance}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
                    <a class=" ms-4 mt-4 btn btn-secondary  float-center" href="{{url('editpharmacy_info/'.$pharmacy_info->id)}}">Edit General Info</a>

</div>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <a class=" ms-4 mt-4 btn btn-outline-info" href="{{url('ajouterpharmacy_info')}}">Add General Info</a>
           @endif
          </div>
        </div>
              
            </div>
          </div>
        </div>
      </div>
</div>
</div>
</div>
@endsection