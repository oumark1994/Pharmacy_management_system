
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
             
              <div class="col-lg-8 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Add Patient</h5>
<div class="card-body mt-5">

<form role="form text-left" method="post" action="{{url('/savepatient')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <label>Patient Name</label>

 <input type="text"value="{{old('name')}}"class="form-control" name="name"  placeholder="Patient Name" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Patient Address</label>

 <input type="text"value="{{old('address')}}"class="form-control" name="address"  placeholder="Patient Address" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Patient Date of Birth</label>

 <input type="date"value="{{old('dob')}}"class="form-control" name="dob"  placeholder="Patient date of birth" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('dob'))
                <span class="text-danger">{{ $errors->first('dob') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Patient Phone Number</label>

 <input type="number"value="{{old('phone_number')}}"class="form-control" name="phone_number"  placeholder="Patient phone number" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
               @endif
           </div>      
<div class="text-center">
 <button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Add Patient</button>
</div>

      </form>
      </div>
            </div>
          </div>
        </div>
         

</div>
</div>
@endsection