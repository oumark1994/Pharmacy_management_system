@extends('dashboard.template')
@section('content')
@include('dashboard.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
<div class="container-fluid py-4 mt-5">
      <div class="row">
        <div class="col-6">
          <div class="card mb-4">
            <div class="card-header pb-0">
            @if (Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
</div>
             @endif
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="col-lg-6 col-md-6">
         
            <h4 class="ms-4">Medecine Detail</h4>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
              </p>
            </div>
              <div class="timeline timeline-one-side pl-4">
                <div class="timeline-block mb-3 ">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-bell-55 text-success text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Name:{{$medecine->medecine_name}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-html5 text-danger text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Medecine:{{$medecine->capacity}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-cart text-info text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Medecine Type: {{$medecine->type}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-credit-card text-warning text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Price : {{$medecine->price}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p> -->
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-key-25 text-primary text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Quantity:{{$medecine->qty}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p> -->
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <!-- <i class="ni ni-money-coins text-dark text-gradient"></i> -->
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Stock Out:{{$medecine->stock_out}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
                  </div>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Expiry Date:{{$medecine->expiry_date}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
                  </div>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Date received:{{$medecine->date_received}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
</div>
<div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Amount:{{$medecine->amount}}</h6>
                    <!-- <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p> -->
</div>
                </div>
                <a class=" ms-4 mt-4 btn btn-outline-primary" href="{{url('editmedecine/'.$medecine->id)}}">Edit Medecine</a>
              </div>
            </div>
        
          </div>
        </div>
              
            </div>
          </div>
        </div>
      </div>
</div>
</main>
@endsection