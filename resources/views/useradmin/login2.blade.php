@extends('layout.front.master3')
@section('body')

<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
    <img class="logo" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="400px" />	
      <div class="login-box">
        <form class="login-form"  method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
          <h3 class="login-head">Log in to your account</h3>
          <div class="form-group {{ ($errors->has('email')) ? 'has-error' : ''}}">
            <input class="form-control" name="email" type="text"  value="{{ old('email') }}"  placeholder="Email" autofocus>
          </div>
          @if ($errors->has('email'))
                    				<span style="color: palevioletred;">{{ $errors->first('email') }}</span>
                				@endif
          <div class="form-group {{ ($errors->has('password')) ? 'has-error' : ''}}">
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
        	@if ($errors->has('password'))
									<span style="color: palevioletred;">{{ $errors->first('password') }}</span>
                				@endif
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-info btn-block">Log in</button>
          </div>
          <div class="panel-footer">
                 New to Arbking?  &nbsp; <a href="{{url('/register')}}">Sign Up</a>
            </div>
        </form>
        <form class="forget-form" action="index.html">
          <h4 class="login-head">Please provide your account email</h4>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-info btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>Send password reset link</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    @stop