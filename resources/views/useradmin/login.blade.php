@extends('layout.front.master2')

@section('body')

<!-- Main -->
			<section id="main" class="container 50%" >
			 <section>
			  <img class="mb-4" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="150px" />	
				</section>
					<div class="box">			
					  <form method="post" action="{{ route('login') }}">
						{{ csrf_field() }}
							<h3 style="text-align:center;margin-bottom:30px;color:#17a2b8;">Log in to your account</h3>							
							<div class="row uniform 50% {{ ($errors->has('email')) ? 'has-error' : ''}}">
								<div class="12u 12u(mobilep) ">
									<input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email address" />
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
									<input type="submit" btn btn-info value="Log in " class="fit" style="background-color:#17a2b8;color:#fff;"/>
								</div>
							</div>
							<section style="text-align:center;margin-top:30px;"><strong>New to ArbKing? </strong> <a href="{{url('register')}}">Sign Up</a></section>
							<section style="text-align:center;margin-top:30px;"><a href="{{url('passwordReset')}}">Forgot Your Password?</a></section>


						</form>
					</div>
				</section>



				
@stop
