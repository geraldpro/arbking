@extends('user.layouts.master')
@section('body')
<style>
.hide-it {
  display: none;
}
</style>
<body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
         <div class="div">
              <h1><i class=""></i> Trade</h1>
         </div>
          <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">Trade</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#trade">Trade</a>
            </li>
          </ul>
        </div>
      <div class="card-body">
<<<<<<< HEAD
               <div class="bs-component">
                    <div class="alert alert-dismissible alert-info">
                         <button class="close" type="button" data-dismiss="alert">×</button>
                                 <div class="alert-link" style="text-align:center;">You have been matched with Manchester United vs Chelsea Fc
                                  with our lay selection being home win with an odd of 2.25. The game will kick off soon. </div>
                          </div>
                  </div>
=======
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
                           <strong> {{ Session::get('fail') }}</strong>
                    </div>
            </div>
        </div>
			@endif
      @if(isset($match))
          <ol class="breadcrumb">
            <li>
                <a><b>You have been matched with {{$match->home_team}} vs {{$match->away_team}} with our lay selection being {{$match->selected_market}} with an odd of {{$match->selected_odd}} the game will be played on {{$match->kickoff->toDateString()}} by {{$match->kickoff->toTimeString()}} (Be sure to enter the bookie back bet first to prevent changes in the odds. If odds change recalculate)</b></a>
            </li>
          </ol>
>>>>>>> 71291b1ac4f09278615bc913b7cba7c92b1440bd
          <div class="alert alert-light border-secondary shadow" role="alert">
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="trade">
                     <form class="row" method="POST" action="{{ route('addStake') }}">
                         <div class="form-group col-md-12">
                             <label for="lay odd">Our Lay Odd</label>
                                 <input type="text" name="lay" id="lay" class="form-control" value="{{$match->selected_odd}}" readonly aria-describedby="emailHelp">
                         </div>
                   <div class="form-group col-md-12">
                       <label for="lastname">Back Odd</label>
                          <input type="text" name="back" onchange="hideAgain()" id="back" class="form-control">
                        </div>
                        <div class="form-group col-md-12 {{ ($errors->has('amount')) ? 'has-error' : ''}}">
                        <label class="control-label">Lay Stake</label>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input name="amount" type="text" onchange="hideAgain()" id="total" >
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                           </div>
                        </div>
                        @if ($errors->has('amount'))
                            <span style="color: palevioletred;">{{ $errors->first('amount') }}</span>
                        @endif
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="match_id" value="{{$match->id}}">
                        <div id="resolve">
                          <button class="btn btn-success" type="button" onclick="resolveStake()" id="b_resolve">Resolve Stake</button>
                        </div>
                        <div class="form-group col-md-12 s-hide hide-it">
                        <label class="control-label">Lay Liability</label>
                        <div class="form-group {{ ($errors->has('liability')) ? 'has-error' : ''}}">
                           <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input name="liability" type="text" id="liability" readonly>
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                           </div>
                        </div>
                        @if ($errors->has('liability'))
                              <span style="color: palevioletred;">{{ $errors->first('liability') }}</span>
                          @endif
                        </div>
                        <div class="form-group col-md-12 s-hide hide-it">
                        <label class="control-label">Back Stake</label>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input type="text" id="back-val" class="form-control"  readonly>
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                           </div>
                        </div>
                        </div>
                        <div class="form-group col-md-12">
                                {{ csrf_field() }}
                        </div>
                        <div class="row s-hide hide-it">
                   <div class="col-sm-12">
                       <div class="white-box">
                         <ol class="breadcrumb">
                        <h4>Profit Break down</h4>
                      </ol>
                         <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Win</th>
                              <th>Loss</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row" style="background-color:#F5B041">If bookie bet wins</th>
                              <td id="back_win"></td>
                              <td id="lay_lose"></td>
                              <td id="b_total"></td>
                            </tr>
                            <tr>
                              <th scope="row" style="background-color:#7DCEA0">If investakers bet wins</th>
                              <td id="lay_win"></td>
                              <td id="back_lose"></td>
                              <td id="i_total"></td>
                            </tr>
                            
                    </tbody>
                </table>
      </div>
  </div>
</div>
         
        <div class="form-group s-hide hide-it">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-success btn-md btn-rounded waves-effect waves-light"><b>Proceed to Stake</b></button>
            </div>
        </div>      
</form>
</div> 
</div>
</div>
    @else
           <p class="alert alert-danger">Sorry no available bets for now kindly check back in a few minutes as matches are constantly updated on the platform</p>
    @endif
  </div>
</div>  
</div>
</div> 

</main>
    <!-- Essential javascripts for application to work-->
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
    <!-- The javascript plugin to display page loading on top-->
    {{ Html::script("js/jquery.min.js") }}
    {{ Html::script("js/bootstrap.js")}}
  {{ Html::script("js/login-register.js")}}
  {{ Html::script("js/jquery.dropotron.min.js") }}
  {{ Html::script("js/jquery.scrollgress.min.js") }}
  {{ Html::script("js/skel.min.js") }}
  {{ Html::script("js/util.js") }}
  {{ Html::script("js/main.js") }}
    <!-- <script src="js/plugins/pace.min.js"></script> -->
    <script>
	var filled = false;
	var g_url;
    function resolveStake(){
        console.log('we are here');
        var lay = $('#lay').val();
        var back = $('#back').val();
        var totalStake = $('#total').val();
        console.log(lay, back, totalStake);
        var baseUrl = "{{ url('/') }}";
        g_url = baseUrl + '/user/resolve/' + lay + '/' + back + '/' + totalStake;
		var back_value = 
		calculate();
		filled = true;
   }
	function calculate(){
		         $('#b_spinner>div').addClass('.loader .dash_btn');
	$.ajax({
	url: g_url,
	type:'GET',
	dataType:'json',
//  cache:false,
     success:function(data){
         console.log(data);
		 $('#lay-val').val(data.lay);
		 $('#back-val').val(data.back);
		 $('#back_lose').text(data.back_lose);
		 $('#back_win').text(data.back_win);
		 $('#b_total').text(data.b_total);
		 $('#lay_win').text(data.lay_win);
		 $('#lay_lose').text(data.lay_lose);
		 $('#liability').val(data.lay_lose);
		 $('#i_total').text(data.i_total);
		 $('.s-hide').removeClass('hide-it');
		 $('#resolve').addClass('hide-it');
//      }
     },
     error:function(err){
       console.log(err);
		}
	  });	
	}
	function hideAgain(){
		if(filled === true){
	   	 $('.s-hide').addClass('hide-it');
		 $('#resolve').removeClass('hide-it');
		}
	}
    </script>
    
   
    
  </body>

  @stop