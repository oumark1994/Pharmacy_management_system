
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
                <h5 class="card-title fw-semibold mb-4 text-center">Payment</h5>
<div class="card-body mt-5">

<form role="form text-left" method="post" action="{{url('/salesummary')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
 <div class="mb-3">
 <label>Checkout</label>

 <input type="text" id="total" value="{{$total}}"class="form-control" name="total" readonly  aria-label="Email" aria-describedby="email-addon">
 <input type="hidden"  value="{{$invoice}}"class="form-control" name="invoice" readonly  aria-label="Email" aria-describedby="email-addon">
 <input type="hidden"  value="{{$patient->id}}"class="form-control" name="patient_id" readonly  aria-label="Email" aria-describedby="email-addon">
            
           </div>
           <div class="mb-3">
           <label>Amount Paid</label>

 <input type="text" id="amount" class="form-control" name="amount" onChange={calculateBalance()}  placeholder="Amount Paid" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('amount'))
                <span class="text-danger">{{ $errors->first('amount') }}</span>
               @endif
           </div>
           <div class="mb-3">
           <label>Balance</label>

 <input type="text" value="" id="balance" class="form-control" name="balance" readonly  placeholder="Balance" aria-label="Email" aria-describedby="email-addon">
             @if($errors->has('balance'))
                <span class="text-danger">{{ $errors->first('balance') }}</span>
               @endif
           </div>
         
<div class="text-center">
 <button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Submit</button>
</div>

      </form>
      </div>
</div>
 </div> 
</div>
</div>
</div>

@endsection
    