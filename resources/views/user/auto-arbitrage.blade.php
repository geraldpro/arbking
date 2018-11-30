@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1> Automated Inplay Arbitrage</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>          
        <li class="breadcrumb-item">Auto arbitrage</li>
        </ul>
      </div>
     
     
  <!-- Navs-->
    
    <div class="row justify-content-center">
      <div class="col-lg-10 mb-3">
        <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item"><a class="nav-link active"  data-toggle="tab"  href="#auto_arbitrage">Automated Inplay Arbitrage</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#arbitrage_balance">Arbitrage Balance</a></li>
              </ul>
            </div>
            <div class="card-body">
               <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="auto_arbitrage">
                  <div class="faq-q">Join the next pool! Activate your Auto Inplay Arbitrage and earn 0.5% up to 1.4% daily. Let "Arbie2" the BOT do the rest.</div>
                    <div class="alert alert-light border-secondary shadow" role="alert">
                      <div class="row" style="margin-top: 10px;">
                        <div class="col-md-8">
                            <div class="form-group">
                                 <input type="text" name="amount" class="form-control" aria-describedby="emailHelp" placeholder="Enter amount">
                              </div>
                        </div> 
                      <div class="col-md-4"> <button class="btn btn-info" type="submit">Activate Now</button>
                      <a href="{{url('user/fund-my-account')}}" class="btn btn-success">Fund account</a>
                      </div>
                      </div>
                    </div>
                </div>

          <div class="tab-pane fade" id="arbitrage_balance">
              <form class="row" method="post" action="#">
                <div class="form-group col-md-6">
                  <label for="main balance"><b>Main Balance</b></label>
                      <input  type="text" class="form-control" aria-describedby="emailHelp" value="$10,000" readonly>
                </div>

                 <div class="form-group col-md-6">
                     <label for="wallet address"><b>Withdrawable amount</b></label>
                       <input type="text" name="wallet_address" class="form-control"   aria-describedby="emailHelp" value="$5,000" readonly>
                 </div>
                 <div class="form-group col-md-6">
                     <label for="wallet address"><b>Last amount earned</b></label>
                       <input type="text" name="wallet_address" class="form-control" aria-describedby="emailHelp" value="$500" readonly>
                 </div>
                   <div class="form-group col-md-6" style="margin-top:28px;">
                        {{ csrf_field() }}
                     <a class="btn btn-info" id="demoSwal" href="#" role="button">Withdraw earning</a>
                   </div>
             </form>
             <form class="row" method="post" action="#">
                <div class="form-group col-md-3">
                    <div class="animated-checkbox">
                       <label>
                         <input type="checkbox"><span class="label-text">Active</span>
                     </label>
                  </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="animated-checkbox">
                       <label>
                         <input type="checkbox"><span class="label-text">Inactive</span>
                     </label>
                  </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="animated-checkbox">
                       <label>
                         <input type="checkbox"><span class="label-text">Pending</span>
                     </label>
                  </div>
                </div>
                 
                <div class="form-group col-md-3">
                <a class="btn btn-success" id="demoSwal" href="#" role="button">Activate</a>

                </div>
                   
             </form>
     </div>
                </div>
                </div>  
                  </div>
                </div>   
</main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
    
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "Withdrawal will deactivate your Auto Arb account, you will have to manually activate the account if you want to join in again after withdrawal",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "I understand, continue!",
      		cancelButtonText: "Cancel withdrawal.",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Withdrawal is successful!", "Your account has been deducted.", "success");
      		} else {
      			swal("Withdrawal is cancelled", "You are still in the game ", "error");
      		}
      	});
      });
    </script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    
  </body>

  @stop