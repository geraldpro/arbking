@extends('layout.front.master2')

@section('body')

<!-- Main -->
				<section id="main" class="container 50%">
					<section>
					<img class="mb-4" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="150px" />	
			</section>
				@if (Session::has('success'))
				<div class="">
					<div class="alert alert-success text-center"> {{ Session::get('success') }}</div>
				</div>
				@elseif (Session::has('fail'))
					<div class="">
						<div class="alert alert-danger text-center"> {{ Session::get('fail') }}</div>
					</div>
				@endif
					<div class="box">
					  <form method="post" action="{{ route('register') }}">
						{{ csrf_field() }}
						<h3 style="text-align:center;margin-bottom:30px;color:#17a2b8;">Sign up for free on Arbking</h3>							

						<div class="row uniform 50%">

								</div>
							<div class="row uniform 50% {{ ($errors->has('first_name')) ? 'has-error' : ''}}">

								<div class="12u 12u(mobilep)">
									<input type="text" name="first_name" id="fname" value="{{ old('first_name') }}" placeholder="Firstname" />
								</div>
								@if ($errors->has('first_name'))
									<span style="color: palevioletred;">{{ $errors->first('first_name') }}</span>
								@endif
							</div>
							<div class="row uniform 50% {{ ($errors->has('last_name')) ? 'has-error' : ''}}">

								<div class="12u 12u(mobilep)">
									<input type="text" name="last_name" id="lname" value="{{ old('last_name') }}" placeholder="Lastname" />
								</div>
								@if ($errors->has('last_name'))
                    				<span style="color: palevioletred;">{{ $errors->first('last_name') }}</span>
                				@endif
							</div>
							<div class="row uniform 50% {{ ($errors->has('email')) ? 'has-error' : ''}}">

								<div class="12u 12u(mobilep)">
									<input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" />
								</div>
								@if ($errors->has('email'))
                    				<span style="color: palevioletred;">{{ $errors->first('email') }}</span>
                				@endif
							</div>

						<div class="row uniform 50%">
						   	<div class="12u 12u(mobilep)">
								<select name="category" id="category">
										<option value="">Select your currency type</option>
										<option>USD</option>
										<option>EURO</option>     
										<option>YEN</option>     
										<option>NGN</option>        
							</select>
							</div>
						</div>
							<div class="row uniform 50% {{ ($errors->has('password')) ? 'has-error' : ''}}">
								<div class="12u">
									<input type="password" name="password" id="subject" value="" placeholder="Password" />
								</div>
								@if ($errors->has('password'))
                    				<span style="color: palevioletred;">{{ $errors->first('password') }}</span>
                				@endif
							</div>
							<div class="row uniform 50% {{ ($errors->has('confirm_password')) ? 'has-error' : ''}}">
								<div class="12u">
									<input type="password" name="confirm_password" id="subject" value="" placeholder="Confirm Password" />
								</div>
								@if ($errors->has('password'))
                    				<span style="color: palevioletred;">{{ $errors->first('confirm_password') }}</span>
                				@endif
							</div>

							<div class="row uniform 50%">
								<div class="12u">
									<input type="submit" btn btn-info value="CREATE FREE ACCOUNT" class="fit" style="background-color:#17a2b8;color:#fff;"/>
								</div>
							</div>
						</form>
						<section style="text-align:center;margin-top:30px;"><strong>Already have an account? </strong> <a href="{{url('login')}}">Log in</a></section>

					</div>
				</section>
@stop
