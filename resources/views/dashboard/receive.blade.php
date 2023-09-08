
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
                <h5 class="card-title fw-semibold  text-center">Request Medecine from supplier</h5>
<div class="card-body mt-2">
<form role="form text-left" method="post" action="{{url('/sendrequest')}}"  enctype="multipart/form-data">

          
              {{csrf_field()}}
 <div class="row ps-4">                          
<div class="my-3  col-5  text-center">
    <label>Select Supplier</label>
      <select class="form-control" name="supplier_id">

      @foreach ($suppliers as $supplier)

        <option class="text-center" value="{{$supplier->id}}">{{$supplier->name}}</option>
        @endforeach

      </select>
</div>

                    <!-- <a class="btn btn-outline-primary float-end me-5" href="{{url('/addmedecine')}}">Add  Medecine</a> -->
                
                  <div class="my-3  col-6">
                <label>Medecine Name </label>
                  <input type="text"    readonly class="form-control"  name="medecine_name"  value="{{$medecine->medecine_name}}" aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('medecine_name') }}</span>
                        @endif
                </div>
                <div class="my-3  col-5">
                <label>Expiry Date </label>
                  <input type="date" class="form-control" value="{{ old('expiry_date') }}"  name="expiry_date" aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('expiry_date'))
                            <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                        @endif
                </div>
                <div class="my-3  col-3">
                <label>Available Qty</label>
                  <input type="text" class="form-control" readonly  name="qty"  value="{{$medecine->qty}}" aria-label="Email" aria-describedby="email-addon">
                </div>
                <div class="my-3  col-3">
                <label>Qty</label>
                  <input type="text" class="form-control"  value="{{ old('quantity') }}"  name="quantity"  aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('quantity'))
                            <span class="text-danger">{{ $errors->first('quantity') }}</span>
                        @endif
                </div>
                <div class="my-3  col-5">
                <label>Buying Price</label>
                  <input type="number" id="buy" class="form-control"  name="buy_price"  aria-label="Email" aria-describedby="email-addon">
               
                </div>
                <div class="my-3  col-3">
                <label>Sell Price</label>
                  <input type="number" id="sell" class="form-control"  value="{{ old('sell_price') }}" onChange={calculateProfit()}  name="sell_price"  aria-label="Email" aria-describedby="email-addon">
                  @if($errors->has('sell_price'))
                            <span class="text-danger">{{ $errors->first('sell_price') }}</span>
                        @endif
                </div>
                <div class="my-3  col-3">
                <label>Profit</label>
                  <input type="text" id="profit" readonly class="form-control"  name="profit"  aria-label="Email" aria-describedby="email-addon">
                </div>
                  </tbody>
                
                </table>
                <div class="text-center">
                  <button type="submit" class="btn btn-sm max-width-400 bg-primary text-white w-90 my-4 mb-2">Receive</button>
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