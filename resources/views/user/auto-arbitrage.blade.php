@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="icon fa fa-history"></i> Automated Inplay Arbitrage</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>          
        <li class="breadcrumb-item">Auto arbitrage</li>
        </ul>
      </div>
     
     
  <!-- Navs-->
    
    <div class="row justify-content-center">
      <div class="col-lg-9 mb-3">
               <div class="card">
                   <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                         <li class="nav-item"><a class="nav-link active" href="#">Automated Inplay Arbitrage</a></li>
                      </ul>
                    </div>
                  <div class="card-body">
                  <h6 class="display-4">Activate A.I.A . Earn 0.8% up to 1.4% daily.</h6>
    <div class="alert alert-light border-secondary shadow" role="alert">
      <div class="row" style="margin-top: 10px;">
        <div class="col-md-8">
            <div class="form-group">
                      <input type="text" name="amount" class="form-control" aria-describedby="emailHelp" placeholder="Enter amount">       
             </div>
        </div> 
      <div class="col-md-3"> <button class="btn btn-success" type="submit">Activate Now</button></div>
      </div>
    </div>
    <p class="lead" style="text-align: justify;">Amount will be deducted from your main balance. Ensure you have enough funds in your account. 
    Or fund your account by clicking the Fund account button. </p>
    <div class="col-md-3"> <button class="btn btn-success" type="submit">Fund account</button></div>

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