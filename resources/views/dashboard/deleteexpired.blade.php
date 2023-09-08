
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
             
              <div class="col-lg-10 d-flex align-items-stretch mt-5">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4 text-center">Delete expired medecines and update store</h5>
<div class="card-body mt-5">
<form role="form text-left" method="post" action="{{url('/updateexpired')}}"  enctype="multipart/form-data">

              {{csrf_field()}}
 <div class="row p-3">                          


                    <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
            
                  <div class="my-3  col-2">
                <label>Medecine Name </label>
                <input type="text"    readonly class="form-control" value="{{$medecine->medecine_name}}"  name="medecine_name"  aria-label="Email" aria-describedby="email-addon">
                <input type="hidden" class="form-control" value="{{$medecine->id}}"  name="medecine_id"  aria-label="Email" aria-describedby="email-addon">
                <input type="hidden" class="form-control" value="{{$medecine->amount}}"  name="amount"  aria-label="Email" aria-describedby="email-addon">
                <input type="hidden" class="form-control" value="{{$medecine->price}}"  name="price"  aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('medecine_name'))
                            <span class="text-danger">{{ $errors->first('medecine_name') }}</span>
                        @endif
                </div>
               
                <div class="my-3  col-2">
                <label>Available Qty</label>
                  <input type="text" class="form-control" readonly value="{{$medecine->qty}}"  name="qty"  aria-label="Email" aria-describedby="email-addon">
              
                </div>
           
                <div class="my-3  col-3">
                <label>Expired Qty</label>
                  <input type="text"  class="form-control"  name="expired_qty" value="{{ old('expired_qty') }}"  aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('expired_qty'))
                            <span class="text-danger">{{ $errors->first('expired_qty') }}</span>
                        @endif
                </div>
                <div class="my-3  col-3">
                <label>Expiry date </label>
                  <input type="date" class="form-control"  value="{{ old('expired_date') }}"   name="expired_date" aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('expired_date'))
                            <span class="text-danger">{{ $errors->first('expired_date') }}</span>
                        @endif
                </div>
                <div class="my-3  col-2">
                <label>Status</label>
                  <select class="form-control" name="status">
                  <option value="expired">Expired</option>
                  <option value="damaged">Damaged</option>
                  </select>
                  @if($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                 @endif
                </div>
               
                  </tbody>
                
                </table>
                <div class="text-center">
                  <button type="submit" class="btn btn-sm max-width-500 bg-danger text-white w-100 my-4 mb-2">Delete</button>
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