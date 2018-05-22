@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">
             <a class="btn btn-success" id="demoNotify" href="{{url('user/trade')}}">Start Trading</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="tile text-center">
              <h4 class="text-center">Trade Volume</h4>
            <div class="tile-body">
              <p class="text-danger">8</p>
              <a class="btn btn-success" id="demoNotify" href="{{url('user/trade')}}">Start Trading</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile text-center">
              <h4 class="title">Statistics</h4>
            <div class="tile-body">
              <p>Next Deposit Moneyshield Percentage:<span class="text-danger"> 60%</span></p>
              <a class="btn btn-success" id="demoNotify" href="{{url('user/fund-my-account')}}">Get Deposit</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile text-center">
              <h4 class="title">Trade</h4>
            <div class="tile-body">
              <p class="text-danger">Current Balance: NGN0</p>
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