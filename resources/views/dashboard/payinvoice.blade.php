
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
                <h5 class="card-title fw-semibold  text-center">Pay invoice to supplier</h5>
<div class="card-body mt-2">

<form role="form text-left" method="post" action="{{url('/pay')}}"  enctype="multipart/form-data">

              {{csrf_field()}}
 <div class="row p-3">                          


                    <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
            
                  <div class="my-3  col-3">
                <label>Medecine Name </label>
                  <input type="text"    readonly class="form-control" value="{{$invoice->medecine_name}}"  name="medecine_name"  aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('medecine_name'))
                            <span class="text-danger">{{ $errors->first('medecine_name') }}</span>
                        @endif
                </div>
               
                <div class="my-3  col-2">
                <label>Qty</label>
                  <input type="text" class="form-control" readonly value="{{$invoice->qty}}"  name="qty"  aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('qty'))
                            <span class="text-danger">{{ $errors->first('qty') }}</span>
                        @endif
                        <input type="hidden" class="form-control" readonly value="{{$invoice->expiry_date}}"  name="expiry_date"  aria-label="Email" aria-describedby="email-addon">

                </div>
              
                <div class="my-3  col-2">
                <label>Price</label>
                  <input type="text" class="form-control" readonly  name="price"  value="{{$invoice->price}}" aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                </div>
           
                <div class="my-3  col-2">
                <label>Total</label>
                  <input type="text" readonly class="form-control"  name="total"  value="{{$invoice->total}}"  aria-label="Email" aria-describedby="email-addon">
               
                </div>
                <div class="my-3  col-3">
                <label>Date </label>
                  <input type="date" class="form-control"  value="{{ old('date') }}"   name="date" aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('date'))
                            <span class="text-danger">{{ $errors->first('date') }}</span>
                        @endif
                </div>
               
                  </tbody>
                
                </table>
                <div class="text-center">
                  <button type="submit" class="btn btn-sm max-width-500 bg-primary text-white w-100 my-4 mb-2">Pay</button>
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