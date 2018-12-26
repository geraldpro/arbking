@extends('layout.front.master2')

@section('body')

<!-- Main -->
			<section id="main" class="container 50%" >
			 <section>
			  <img class="mb-4" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="150px" />	
				</section>
					<div class="box">	
          @if (session('status'))
              <div class="card-body">
          <div class="col-lg-12" style="padding: 0px;">
              <div class="bs-component">
                <div class="alert alert-dismissible alert-success">
                  <button class="close" type="button" data-dismiss="alert">×</button>
                  <strong>{{ session('status') }}</strong>
                </div>
              </div>
            </div>
				@endif
					  <form method="post" action="{{ route('password.reset') }}">
						{{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
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
                     <div class="row uniform 50% {{ ($errors->has('password_confirmation')) ? 'has-error' : ''}}">
								<div class="12u">
									<input type="password" name="password_confirmation" id="subject" value="" placeholder="Confirm Password" />
								</div>
								@if ($errors->has('password_confirmation'))
									<span style="color: palevioletred;">{{ $errors->first('password_confirmation') }}</span>
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
