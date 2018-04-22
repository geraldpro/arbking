@extends('layout.front.master2')

@section('body')

<!-- Main -->
				<section id="main" class="container 50%">
					<header>
	          <h2></h2>
	        </header>
					<div class="box">
					  <form method="post" action="{{ route('register') }}">
						{{ csrf_field() }}
						<div class="row uniform 50%">
							<div class="text-center"><strong style="text-align:center;font-size:24px;">Register on Arbking</strong></div>

								</div>
							<div class="row uniform 50% {{ ($errors->has('first_name')) ? 'has-error' : ''}}"">

								<div class="12u 12u(mobilep)">
									<input type="text" name="fname" id="fname" value="" placeholder="Firstname" />
								</div>
								@if ($errors->has('first_name'))
									<span style="color: palevioletred;">{{ $errors->first('first_name') }}</span>
								@endif
							</div>
							<div class="row uniform 50% {{ ($errors->has('last_name')) ? 'has-error' : ''}}">

								<div class="12u 12u(mobilep)">
									<input type="text" name="lname" id="lname" value="" placeholder="Lastname" />
								</div>
								@if ($errors->has('last_name'))
                    				<span style="color: palevioletred;">{{ $errors->first('last_name') }}</span>
                				@endif
							</div>
							<div class="row uniform 50% {{ ($errors->has('email')) ? 'has-error' : ''}}">

								<div class="12u 12u(mobilep)">
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

							<div class="row uniform 50%">
								<div class="12u">
									<input type="submit" btn btn-info value="Join Now" class="fit" style="background-color:#FF8C00;color:#fff;"/>
								</div>
							</div>
						</form>
					</div>
				</section>
@stop
