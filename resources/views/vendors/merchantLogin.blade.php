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
       {{-- Laravel session error show --}}
       @if(session()->has('message'))
       <div class="alert alert-{{ session('type') }}">
           {{ session('message')}}
         </div>
         @endif
      <div class="d-flex justify-content-center form_container">
      <form action="{{route('mar.login')}}" method="post">
        @csrf
          <div class="input-group mb-3">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
            </div>
            <input type="text" name="phone_number" class="form-control input_user" value="" placeholder="Phone Number">
          </div>
          <div class="input-group mb-2">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
          </div>
          {{-- <div class="form-group">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customControlInline">
              <label class="custom-control-label" for="customControlInline">Remember me</label>
            </div>
          </div> --}}
            <div class="d-flex justify-content-center mt-3 login_container">
         {{-- <button type="submit" name="button" class="btn login_btn">Login</button> --}}
         <input type="submit" value="Login">
         </div>
        </form>
      </div>
  
      <div class="mt-4">
        <div class="d-flex justify-content-center links">
        Don't have an account? <a href="{{URL::to('merchant/register')}}" class="ml-2">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center links">
          <a href="#">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>