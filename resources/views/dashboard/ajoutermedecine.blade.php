
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
                <h5 class="card-title fw-semibold mb-4 text-center">Add Medecine</h5>
<div class="card-body mt-5">

<form  method="post" action="{{url('/savemedecine')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <label>Medecine Name</label>

 <input type="text"value="{{old('medicine_name')}}"class="form-control" name="medecine_name"  placeholder="Medecine name" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('medecine_name'))
                <span class="text-danger">{{ $errors->first('medecine_name') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Capacity</label>

 <input type="text"value="{{old('capacity')}}"class="form-control" name="capacity"  placeholder="Medecine Capacity" aria-label="Email" aria-describedby="email-addon" placeholder="Product Capacity">
             @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('capacity') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Medecine Type</label>

 <input type="text"value="{{old('type')}}"class="form-control" name="type"  placeholder="Medecine Type" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Price</label>

 <input type="number"value="{{old('price')}}"class="form-control" name="price"  placeholder="Medecine Price" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Quantity</label>

 <input type="number"value="{{old('qty')}}"class="form-control" name="qty"  placeholder="Enter the quantity for the medecine" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('qty'))
                <span class="text-danger">{{ $errors->first('qty') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Stock out</label>

 <input type="number"value="{{old('stock_out')}}"class="form-control" name="stock_out"  placeholder="Enter the stock out medecine" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('dosage_sold'))
                <span class="text-danger">{{ $errors->first('stock_out') }}</span>
               @endif
           </div>
           <div class="mb-3">
            <label>Expiry Date</label>
 <input type="date"value="{{old('expiry_date')}}"class="form-control" name="expiry_date"  placeholder="Enter the expiry date" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('amount_packet'))
                <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Date Received</label>

 <input type="date"value="{{old('date_received')}}"class="form-control" name="date_received"  placeholder="Date received" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('adult_dose_price'))
                <span class="text-danger">{{ $errors->first('adult_dose_price')}}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Amount</label>

 <input type="number"value="{{old('amount')}}"class="form-control" name="amount"  placeholder="Enter amount" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('amount'))
                <span class="text-danger">{{ $errors->first('amount')}}</span>
               @endif
           </div>
<div class="text-center">
 <button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Add Medecine</button>
</div>

      </form>
      </div>
            </div>
          </div>
        </div>
         

</div>
</div>
@endsection