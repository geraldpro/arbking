@extends('layout.front.master3')
@section('body')
<section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
    <img class="logo" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="400px" />	
      <div class="login-box" style="min-height:530px;">
        <form class="login-form" action="index.html">
          <h3 class="login-head">Sign up for free on Arbking</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Firstname" autofocus>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Lastname" autofocus>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group ">
                                <select class="form-control" name="gender">
                                    <option value="none">Select currency type</option>
                                    <option>Usd</option>
                                    <option>Euro</option>
                                    <option>Yen</option>        
                                    <option>Pounds</option>         
                                </select>
                        </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Confirm password">
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