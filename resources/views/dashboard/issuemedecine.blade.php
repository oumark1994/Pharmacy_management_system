
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
             
              <div class="col-lg-12 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold  text-center">Issue Medecine</h5>
<div class="card-body mt-2">
<div class="row ">

<form  method="post" action="{{url('/checkout')}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">

           <div class="mb-3 col-5">
            <label>Patient Name</label>
            <input type="text" class="form-control" readonly name="name"  value="{{$patient->name}}" aria-label="Email" aria-describedby="email-addon">
            <input type="hidden" class="form-control" readonly name="patient_id"  value="{{$patient->id}}" aria-label="Email" aria-describedby="email-addon">
           
           </div>
           <div class="mb-3 col-3">
            <label>Patient No</label>
 <input type="text" class="form-control" readonly name="patient_no"   value="{{$patient->patient_no}}" aria-label="Email" aria-describedby="email-addon">
           
           </div>
         
           <div class="mb-3 col-3">
           <label>Patient DOB</label>

 <input type="text" class="form-control" readonly name="dob"   value="{{$patient->dob}}" aria-label="Email" aria-describedby="email-addon">
           
           </div>
                 </div>
  <hr>
  @foreach($newsaleorders as $saleorder)
<div class="row">

<div class="mb-3 col-5">
 <label>Medecine Name</label>
 <input type="hidden" class="form-control" readonly name="medecine_id[]"  value="{{$saleorder->medecine_id}}" aria-label="Email" aria-describedby="email-addon">
 <input type="text" class="form-control" readonly name="medecine_name[]"  value="{{$saleorder->medecine_name}}" aria-label="Email" aria-describedby="email-addon">

</div>
<div class="mb-3 col-2">
 <label>Price</label>
<input type="text" class="form-control" readonly name="price[]"   value="{{$saleorder->price}}" aria-label="Email" aria-describedby="email-addon">

</div>

<div class="mb-3 col-2">
<label>Quantity</label>

<input type="text" class="form-control" readonly name="qty[]"   value="{{$saleorder->qty}}" aria-label="Email" aria-describedby="email-addon">

</div>
<div class="mb-3 col-2">
<label>Amount</label>

<input type="text" class="form-control" readonly name="amount[]"   value="{{$saleorder->amount}}" aria-label="Email" aria-describedby="email-addon">

</div>





</div>
@endforeach
<div class="mb-3 col-1 text-end">
<h5 class="">Total: {{$total}}$</h5>
<input type="hidden" class="form-control" readonly name="total"   value="{{$total}}" aria-label="Email" aria-describedby="email-addon">

</div>

<div class="text-center">
<button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Next</button>
</div>
   </div>

  
      </div>
</div>

                </form>          
              
              </div>
            </div>
            </div>   
 </div> 
</div>

</div>
</div>
@endsection