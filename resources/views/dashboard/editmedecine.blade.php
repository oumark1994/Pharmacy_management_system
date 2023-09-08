
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
                <h5 class="card-title fw-semibold  text-center">Edit Medecine</h5>
<div class="card-body mt-2">

<form role="form text-left" method="post" action="{{url('/updatemedecine')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mb-3">
 <input type="hidden" value="{{$medecine->id}}"class="form-control" name="id">

           </div>
           <div class="mb-3">
            <label>Medecine Name</label>
 <input type="text" class="form-control" name="medecine_name"  value="{{$medecine->medecine_name}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('medecine_name'))
                <span class="text-danger">{{ $errors->first('medecine_name') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Medecine Capacity</label>

 <input type="text" class="form-control" name="capacity"   value="{{$medecine->capacity}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('capacity'))
                <span class="text-danger">{{ $errors->first('capacity') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Medecine Type</label>

 <input type="text" class="form-control" name="type"   value="{{$medecine->type}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Medecine Price</label>

 <input type="text" class="form-control" name="price"   value="{{$medecine->price}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Date Received</label>

 <input type="text" class="form-control" name="date_received"   value="{{$medecine->date_received}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('date_received'))
                <span class="text-danger">{{ $errors->first('date_received') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Quantity</label>
 <input type="text" class="form-control" name="qty"  value="{{$medecine->qty}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('qty'))
                <span class="text-danger">{{ $errors->first('qty') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Stock Out</label>

 <input type="text" class="form-control" name="stock_out"   value="{{$medecine->stock_out}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('stock_out'))
                <span class="text-danger">{{ $errors->first('stock_out') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Expiry Date</label>

 <input type="text"  class="form-control" name="expiry_date"   value="{{$medecine->expiry_date}}" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('expiry_date'))
                <span class="text-danger">{{ $errors->first('expiry_date')}}</span>
               @endif
           </div>
           <div class="mb-3"
           >
           <label>Amount</label>

 <input type="text" value="{{$medecine->amount}}"class="form-control" name="amount"    aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('amount'))
                <span class="text-danger">{{ $errors->first('amount')}}</span>
               @endif
           </div>
<div class="text-center">
 <button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Update Medecine</button>
</div>

      </form>
      </div>
</div>
 </div> 
</div>
</div>
</div>
@endsection