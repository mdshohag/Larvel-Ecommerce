@extends('merchant.master')
@section('content')
<div class="container h-100">
  <div class="d-flex justify-content-center h-100">
    <div class="user_card">
      <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
        <img src="{{asset('web/images/arotder.png')}}" class="brand_logo" alt="Logo">
        </div>
      </div>
      {{-- Laravel validation code --}}
      @if ($errors ->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
     
      <div class="d-flex justify-content-center form_container">
      <form action="{{ route('mar.register') }}" method="post">
        @csrf
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
            </div>
          <input type="text" name="phone_number" class="form-control input_user" value="{{ old('phone_number')}}" placeholder="Phone Number">
          </div>
          @if ($errors->any())
                      @foreach ($errors->get('phone_number.required') as $error)
                          <span>{{ $error }}</span>
                      @endforeach
          @endif
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="first_name" class="form-control input_user" value="{{ old('first_name')}}" placeholder="First Name">
          </div>
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="last_name" class="form-control input_user" value="{{ old('last_name')}}" placeholder="Last Name">
          </div>
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
            </div>
            <input type="text" name="email" class="form-control input_user" value="{{ old('email')}}" placeholder="Email Address">
          </div>
          
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password">
          </div>
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="password" name="password_confirmation" id="confirm_password" class="form-control input_user" value="" placeholder="Confirm Password">
          </div>
            <div class="d-flex justify-content-center mt-3 login_container">
         {{-- <button type="submit" name="button" class="btn login_btn">Register</button> --}}
         <input type="submit" value="Register">
         </div>
        </form>
      </div>
  
      <div class="mt-4">
        <div class="d-flex justify-content-center links">
          Do you have an account? <a href="{{URL::to('merchant/account')}}" class="ml-2">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection