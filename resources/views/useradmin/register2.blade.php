@extends('layout.front.master3')
@section('body')
<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
    <img class="logo" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="400px" />	
      <div class="login-box" style="min-height:530px;">
        <form class="login-form" method="post" action="{{ route('register') }}">
          <h3 class="login-head">Sign up for free on Arbking</h3>
          {{ csrf_field() }}
          <div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : ''}}">
          <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}" placeholder="Firstname" autofocus>
            @if ($errors->has('first_name'))
              <span style="color: palevioletred;">{{ $errors->first('first_name') }}</span>
            @endif
          </div>
          <div class="form-group {{ ($errors->has('last_name')) ? 'has-error' : ''}}">
          <input class="form-control" name="last_name" value="{{old('last_name')}}" type="text" placeholder="Lastname" autofocus>
            @if ($errors->has('last_name'))
              <span style="color: palevioletred;">{{ $errors->first('last_name') }}</span>
            @endif
          </div>
          <div class="form-group {{ ($errors->has('email')) ? 'has-error' : ''}}">
          <input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="Email" autofocus>
            @if ($errors->has('email'))
              <span style="color: palevioletred;">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-group {{ ($errors->has('account_type')) ? 'has-error' : ''}}">
                                <select class="form-control" name="account_type">
                                    <option value="none">Select currency type</option>
                                    @foreach($account_types as $account_type)
                                        <option value="{{$account_type->id}}">{{$account_type->short_name}}</option>
                                    @endforeach     
                                </select>
                                @if ($errors->has('account_type'))
                                  <span style="color: palevioletred;">{{ $errors->first('account_type') }}</span>
                                @endif
                        </div>
          <div class="form-group {{ ($errors->has('password')) ? 'has-error' : ''}}">
            <input class="form-control" type="password" name="password" placeholder="Password">
            @if ($errors->has('password'))
              <span style="color: palevioletred;">{{ $errors->first('password') }}</span>
            @endif
          </div>
          <div class="form-group {{ ($errors->has('confirm_password')) ? 'has-error' : ''}}">
            <input class="form-control" type="password" name="confirm_password" placeholder="Confirm password">
            @if ($errors->has('confirm_password'))
                <span style="color: palevioletred;">{{ $errors->first('confirm_password') }}</span>
            @endif
          </div>
          
          <div class="form-group btn-container">
            <button class="btn btn-info btn-block">Create free account</button>
          </div>
          <div class="panel-footer">
                 Already have an account?  &nbsp; <a href="{{url('/login')}}">Log In</a>
            </div>
        </form>
      
      </div>
    </section>
    @stop