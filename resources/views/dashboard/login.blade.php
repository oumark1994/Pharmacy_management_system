@extends('dashboard.template')
@section('content')

  <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center" id="bg">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body p-4">
                </a>
                <p class="text-center">Welcome to Kolla-Pharmacy</p>
                <form method="post" action="{{url('/signin')}}">
                {{csrf_field()}}
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email"value="{{ old('email') }}"class="form-control" name="email" placeholder="Enter your email"  id="exampleInputEmail1">
             @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
               @endif
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" value="{{old('password')}}" name="password"  class="form-control" placeholder="Enter your password" aria-label="Password" aria-describedby="password-addon">
                  @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif                  
                  </div>
                
                  <button type="submit" class="btn bg-primary text-white w-100 my-4 mb-2">Sign In</button>
                </div>
                  <div class="d-flex align-items-center justify-content-center">
                  <p class="text-sm mt-3 mb-4">Don't  have an account? <a href="{{url('/enregistrer')}}" class="text-dark font-weight-bolder">Sign Up</a></p>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection