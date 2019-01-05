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
							<div class="row uniform 50% {{ ($errors->has('email')) ? 'has-error' : ''}}">
								<div class="12u 12u(mobilep) ">
									<input type="email" name="email" id="email" value="" placeholder="Email address" />
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
                     <div class="row uniform 50% {{ ($errors->has('password')) ? 'has-error' : ''}}">
								<div class="12u">
									<input type="password" name="password" id="subject" value="" placeholder="Confirm Password" />
								</div>
								@if ($errors->has('password'))
									<span style="color: palevioletred;">{{ $errors->first('password') }}</span>
                				@endif
							</div>
						  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<div class="row uniform 50%">
								<div class="12u">
									<input type="submit" btn btn-info value="Password Reset " class="fit" style="background-color:#17a2b8;color:#fff;"/>
								</div>
							</div>


						</form>
					</div>
				</section>



				
@stop
