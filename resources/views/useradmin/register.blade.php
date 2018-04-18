@extends('layout.front.master2')

@section('body')

<!-- Main -->
				<section id="main" class="container 50%">
					<header>
	          <h2></h2>
	        </header>
					<div class="box">
					  <form method="post" action="#">
						<div class="row uniform 50%">
							<div class="text-center"><strong style="text-align:center;font-size:24px;">Register on Arbking</strong></div>

								</div>
							<div class="row uniform 50%">

								<div class="12u 12u(mobilep)">
									<input type="text" name="fname" id="fname" value="" placeholder="Firstname" />
								</div>
							</div>
							<div class="row uniform 50%">

								<div class="12u 12u(mobilep)">
									<input type="text" name="lname" id="lname" value="" placeholder="Lastname" />
								</div>
							</div>
							<div class="row uniform 50%">

								<div class="12u 12u(mobilep)">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<input type="password" name="password" id="subject" value="" placeholder="Password" />
								</div>
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
