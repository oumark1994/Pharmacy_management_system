
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
                <h5 class="card-title fw-semibold  text-center">Edit Pharmacy General Info</h5>
<div class="card-body mt-2">

<form role="form text-left" method="post" action="{{url('/updatepharmacy_info')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mb-3">
 <input type="hidden" class="form-control" name="id"  value="{{$pharmacy_info->id}}" aria-label="Email" aria-describedby="email-addon">
          
           </div>
           <div class="mb-3">
 <input type="text" class="form-control" name="name"  value="{{$pharmacy_info->name}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text"value="{{$pharmacy_info->email}}"class="form-control" name="email"  placeholder="Email" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text"value="{{$pharmacy_info->address}}"class="form-control" name="address"  placeholder="Address" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text" value="{{$pharmacy_info->phone}}"class="form-control" name="phone"  placeholder="phone" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text"value="{{$pharmacy_info->opening_date}}"class="form-control" name="opening_date"  placeholder="Opening Date" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('opening_date'))
                <span class="text-danger">{{ $errors->first('opening_date') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text" value="{{$pharmacy_info->closing_date}}"class="form-control" name="closing_date"  placeholder="Closing Date" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('closing_date'))
                <span class="text-danger">{{ $errors->first('closing_date') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text" value="{{$pharmacy_info->opening_balance}}"class="form-control" name="opening_balance"  placeholder="Opening Balance" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('opening_balance'))
                <span class="text-danger">{{ $errors->first('opening_balance') }}</span>
               @endif
           </div>
           <div class="mb-3">
 <input type="text"value="{{$pharmacy_info->closing_balance}}" class="form-control" name="closing_balance"  placeholder="Closing Balance" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('closing_balance'))
                <span class="text-danger">{{ $errors->first('closing_balance') }}</span>
               @endif
           </div>
        
     
 
  
                <div class="text-center">
                  <button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Update Pharmacy Info</button>
                </div>

      </form>
      </div>
</div>
 </div> 
</div>
</div>
</div>
@endsection