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
             
        <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                <a href={{url('/medecines')}}>
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Medecines</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0">{{$medecines}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                 
                    </div>
                  </div>
               </a>
                </div>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                <a href={{url('/patients')}}>
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Patients</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0">{{$patients}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                 
                    </div>
                  </div>
               </a>
                </div>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <div class="card bg-danger  overflow-hidden">
                <a href={{url('/expiredmedecine')}}>
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold text-white">Expired Medecines</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0 text-white">{{$expired}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                 
                    </div>
                  </div>
               </a>
                </div>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <div class="card   overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold ">Business Year</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0 "> {{$pharmacy_info->opening_date}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                 
                    </div>
                  </div>
             
                </div>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <div class="card   overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Opening Balance</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0"> ${{$pharmacy_info->opening_balance}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                 
                    </div>
                  </div>
             
                </div>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <a href={{url('/todaytransaction')}}>
                <div class="card   overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Today's Transaction</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0"> ${{$todaysales}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                    </div>
                  </div>
        
             
                </div>
</a>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <a href={{url('/transactions')}}>
                <div class="card   overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Total Sales</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0"> ${{$totalsales}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                    </div>
                  </div>
        
             
                </div>
</a>
              </div>
              <div class="col-lg-3">
                <!-- Yearly Breakup -->
                <a href={{url('/expenses')}}>
                <div class="card   overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Total Expenses</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3"></h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="fs-3 mb-0">${{$totalexpenses}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                         
                        </div>
                      </div>
                    </div>
                  </div>
</a>
        
             
                </div>
              </div>
              <div class="col-lg-12 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Awaiting Patients</h5>
                @if($patients2)
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Patient No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date of Birth</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($patients2 as $patient)
                      <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$patient->patient_no}}</h6>
                        </td>
                        <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{$patient->name}}</p>


                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-primary rounded-3 fw-semibold">{{$patient->dob}}</span>

                          </div>
                        </td>
                        <td class="border-bottom-0">
                        <a class="btn btn-outline-danger" id="delete" href="{{url('/prescription/'.$patient->id)}}">Attend</a> 
                       </td>
                      </tr>
                      @endforeach 
                    
                     
                   
                    </tbody>
                  </table>
                </div>
                @else 
                <h3>No Patient Awaiting</h3>
                @endif
              </div>
            </div>
          </div>
        </div>
         

</div>
</div>


    
      
  @endsection