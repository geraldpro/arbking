@extends('layout.front.master2')

@section('body')


<!-- Main -->
				<section id="main" class="container 50%">
				<section style="text-align:center;margin-bottom:50px;">
					<h1><a href="{{url('/')}}"><img src="#" alt="" /></a></h1>
					
				</section>
					<div class="box">			
					  <form method="post" action="{{ route('login') }}">
						{{ csrf_field() }}
							<section style="text-align:center;margin-bottom:20px;color:#6495ED;font-weight:400;">LOGIN TO ARBKING</section>							
							<div class="row uniform 50% {{ ($errors->has('email')) ? 'has-error' : ''}}">
								<div class="12u 12u(mobilep) ">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								@if ($errors->has('email'))
                    				<span style="color: palevioletred;">{{ $errors->first('email') }}</span>
                				@endif
							</div>
							<div class="row uniform 50% {{ ($errors->has('password')) ? 'has-error' : ''}}">
								<div class="12u">
									<input type="password" name="password" id="subject" value="" placeholder="Password" />
								</div>
								@if ($errors->has('password'))
									<span style="color: palevioletred;">{{ $errors->first('password') }}</span>
                				@endif
							</div>
						  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<div class="row uniform 50%">
								<div class="12u">
									<input type="submit" btn btn-info value="Login to your account" class="fit" style="background-color:#FF8C00;color:#fff;"/>
								</div>
							</div>
							<section style="text-align:center;margin-top:30px;"><strong>New to ArbKing? </strong> <a href="{{url('register')}}">Sign Up</a></section>
							<section style="text-align:center;margin-top:30px;"><a href="{{url('request-password-reset')}}">Forgot Your Password?</a></section>


						</form>
					</div>
				</section>



				
@stop
