@extends('admin.layouts.master')
@section('body')
 
  <body class="app sidebar-mini rtl">
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil-square-o"></i> Edit Match</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Match</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Edit Match</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">League</label>
                  <input class="form-control" type="text" placeholder="Enter League name">
                </div>
                <div class="form-group">
                  <label class="control-label">Home Team</label>
                  <input class="form-control" type="text" placeholder="Enter Home Team">
                </div>
                <div class="form-group">
                  <label class="control-label">Away Team</label>
                  <input class="form-control" type="text" placeholder="Enter Away Team">
                </div>
                <div class="form-group">
                  <label class="control-label">Kick off</label>
                  <input class="form-control" type="email" placeholder="Enter Kick off">
                </div>
                <div class="form-group">
                  <label class="control-label">Selected Market</label>
                  <input class="form-control" type="email" placeholder="Enter Selected Market">
                </div>
                <div class="form-group">
                  <label class="control-label">Selected Odd</label>
                  <input class="form-control" type="email" placeholder="Enter Selected Odd">
                </div>
                
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-success" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
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
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Red"
      	},
      	{
      		value: 50,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Green"
      	},
      	{
      		value: 100,
      		color: "#FDB45C",
      		highlight: "#FFC870",
      		label: "Yellow"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);
      
      var ctxr = $("#radarChartDemo").get(0).getContext("2d");
      var radarChart = new Chart(ctxr).Radar(data);
      
      var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
      var polarChart = new Chart(ctxpo).PolarArea(pdata);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
      
      var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
      var doughnutChart = new Chart(ctxd).Doughnut(pdata);
    </script>
    
  </body>
</html>
@stop