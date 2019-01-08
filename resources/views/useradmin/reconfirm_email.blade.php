@extends('layout.front.master2')

@section('body')

<!-- Main -->
			<section id="main" class="container 50%" >
			 <section>
			  <img class="mb-4" src="/img/dashboard_logo.png" alt="Logo" width="100%" height="150px" />	
				</section>
					<div class="box">			
            @if (Session::has('success'))
                  <div class="card-body">
              <div class="col-lg-12" style="padding: 0px;">
                  <div class="bs-component">
                    <div class="alert alert-dismissible alert-success">
                      <button class="close" type="button" data-dismiss="alert">×</button>
                      <strong>{{ Session::get('success') }}</strong>
                    </div>
                  </div>
                </div>
            @elseif (Session::has('fail'))
                      <div class="col-lg-12" style="padding: 0px;">
                    <div class="bs-component">
                          <div class="alert alert-dismissible alert-danger">
                              <button class="close" type="button" data-dismiss="alert">×</button>
                                <strong> <?php echo Session::get('fail') ?></strong>
                          </div>
                  </div>
              </div>
            @endif
					  <form method="post" action="{{URL::route('confirmAgain')}}">
						{{ csrf_field() }}
							<h4 style="text-align:center;margin-bottom:30px;color:#17a2b8;">Please provide your account email</h4>							
							<div class="row uniform 50% {{ ($errors->has('email')) ? 'has-error' : ''}}">
								<div class="12u 12u(mobilep) ">
                <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email address" />
								</div>
								@if ($errors->has('email'))
                    				<span style="color: palevioletred;">{{ $errors->first('email') }}</span>
                				@endif
							</div>
						  {{-- <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" /> --}}
							<div class="row uniform 50%">
								<div class="12u">
									<input type="submit" btn btn-info value="Send Password Reset Link " class="fit" style="background-color:#17a2b8;color:#fff;"/>
								</div>
							</div>


						</form>
					</div>
				</section>



				
@stop
